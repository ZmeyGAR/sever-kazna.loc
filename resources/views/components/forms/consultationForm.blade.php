@if ($errors->any())
    <!- ERROR -->
@endif

<section class="popup">
    <div class="consultation__wrapper">
        <div class="consultation__header">
            <h2 class="consultation__title"><span>ЗАКАЗАть консультацию</span></h2>
        </div>
        <div class="consultation__container">
            <div class="consultation__body">

                <form class="form consultation__form" id="consultation-form" action="{{ route('validateForm') }}"
                      method="POST">
                    @csrf
                    <fieldset class="consultation__row">
                        <div class="input">
                            <input id="first_name" name="first_name" type="text" value="{{ old('first_name') }}"
                                   placeholder="Имя" @error('first_name') class="input__invalid" @enderror>
                            @error('first_name')
                                <div class="input__error error">
                                    <img src="../../icons/error.png" alt="Иконка ошибки" class="error__icon">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </fieldset>
                    <fieldset class="consultation__row consultation__row--column-2">
                        <div class="input">
                            <input id="phone" name="phone" type="tel" value="{{ old('phone') }}"
                                   placeholder="Телефон" @error('phone') class="input__invalid" @enderror>
                            @error('phone')
                                <div class="input__error error">
                                    <img src="../../icons/error.png" alt="Иконка ошибки" class="error__icon">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input">
                            <input id="email" name="email" type="email" value="{{ old('email') }}"
                                   placeholder="Емейл" @error('email') class="input__invalid" @enderror>
                            @error('email')
                                <div class="input__error error">
                                    <img src="../../icons/error.png" alt="Иконка ошибки" class="error__icon">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </fieldset>
                    <fieldset class="consultation__row">
                        <div class="checkbox @error('agree') checkbox__invalid @enderror">
                            <input id="agree" name="agree" type="checkbox" value="1"
                                   @checked(old('agree'))>
                            <label for="agree">
                                <span>
                                    Я согласен/а на обработку моих персональных данных.
                                    <br>
                                    <a href="#">Политика конфиденциальности</a>.
                                </span>
                                @error('agree')
                                    <div class="checkbox__error error">
                                        <img src="../../icons/error.png" alt="Иконка ошибки" class="error__icon">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </label>

                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
        <div class="consultation__footer consultation__btns">

        </div>
    </div>
</section>
