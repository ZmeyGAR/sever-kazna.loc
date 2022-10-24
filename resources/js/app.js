import {
    template
} from 'lodash';
import './bootstrap';


const Swal = Sweetalert2;
const btnsConsultationForm = [...document.querySelectorAll('.js-getConsultationForm')];


const updateRootVars = () => {
    const headerHeight = window.getComputedStyle(document.querySelector('header.header')).height;
    const styleHeaderHeight = document.querySelector('style#header-height');
    if (styleHeaderHeight) styleHeaderHeight.remove();
    document.head.insertAdjacentHTML('beforeend', `<style id="header-height"> :root{ --header-height: ${headerHeight};}</style>`)
}

async function getConsultationForm(event, template = null) {
    if (event && event instanceof Event) {
        event.preventDefault();
        event.stopPropagation();
    }
    try {
        if (!template) {
            const response = await fetch('/ajax/consultationForm');
            if (!response.ok) throw new Error(response.statusText);
            template = await response.text()
        }

        Swal.fire({
            html: template,
            showCloseButton: true,
            showConfirmButton: true,
            confirmButtonText: 'Получить консультацию',
            buttonsStyling: false,
            customClass: {
                container: 'consultation',
                confirmButton: 'button ld-ext-right',
                popup: 'consultation__popup'
            },
            didOpen: () => {
                document.querySelector('.swal2-container.consultation .consultation__btns')
                    .insertAdjacentElement('afterbegin', document.querySelector('.swal2-container .swal2-confirm'));
                document.querySelector('.swal2-container .swal2-confirm').insertAdjacentHTML('afterbegin', '<div class="ld ld-ring ld-cycle"></div>');
            },
            showLoaderOnConfirm: true,
            preConfirm: async () => {
                const btnConfirm = document.querySelector('.swal2-container .swal2-confirm');
                btnConfirm.classList.add('running')
                btnConfirm.disabled = true

                const form = document.querySelector('form#consultation-form');
                const postData = {};
                const formData = new FormData(form)
                for (let [key, value] of formData.entries()) {
                    postData[key] = value
                }
                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        body: JSON.stringify(postData),
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': postData._token
                        }
                    })
                    if (!response.ok) throw new Error(response.statusText);
                    const result = await response.text();
                    if (result.match('<!- ERROR -->')) getConsultationForm(null, result.replace('<!- ERROR -->', ''));
                    showFormResponse({
                        success: true,
                        template: result
                    })
                } catch (error) {
                    showFormResponse({
                        error: true,
                        message: error
                    })
                }
            }
        })
    } catch (error) {
        showFormResponse({
            error: true,
            message: error
        })
    }
}

async function showFormResponse(responseData = {}) {
    if ('success' in responseData) {
        Swal.fire({
            html: responseData.template,
            showCloseButton: true,
            showConfirmButton: false,
            customClass: {
                container: 'response',
                popup: 'response__popup'
            },
            timer: 5000
        })
    }
    if ('error' in responseData) {
        iziToast.error({
            id: 'error',
            title: 'Упс...ошибочка вышла :(',
            message: responseData.message,
            position: 'topRight',
            transitionIn: 'fadeInDown'
        });
    }



}
const DOMContentLoadedHandler = () => {
    getConsultationForm()
    btnsConsultationForm.forEach(btn => btn.addEventListener('click', getConsultationForm))
}

const resizeHandler = (event) => {
    updateRootVars()
}


updateRootVars()

window.addEventListener('resize', resizeHandler);
document.addEventListener('DOMContentLoaded', DOMContentLoadedHandler)
