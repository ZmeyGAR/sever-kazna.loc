<?php

namespace App\Http\Controllers\Forms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\ConsultationNotify;
use Exception;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ConsultationFormController extends Controller
{
    public function render()
    {
        return view('components.forms.consultationForm');
    }

    public function validateForm(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'first_name'    => ['required', 'max:255'],
                'email'         => ['required', 'email', 'max:255'],
                'phone'         => ['required', 'phone:RU'],
                'agree'         => ['accepted'],
            ],
            [],
            [
                'first_name'    => 'Ваше имя',
                'phone'         => 'Ваш номер телефона',
                'email'         => 'Ваш емейл',
                'agree'         => 'Условия политики конфиденциальности'
            ]
        );

        if ($validator->fails()) {
            return redirect(route('renderForm'))
                ->withErrors($validator)
                ->withInput();
        }
        try {
            Mail::to(config('mail.from.address'))->send(new ConsultationNotify($validator->validated()));
            return redirect(route('responseForm', ['status' => 'success']));
        } catch (Exception $th) {
            return redirect(route('responseForm', ['status' => 'error']));
        }
    }

    function responseForm(Request $request)
    {
        if ($request->get('status') === 'success') {
            $notify = [
                'title' => 'Спасибо! <br>ваша заявка принята',
                'icon' => 'success-icon',
                'message' => '<p>наш сотрудик свяжется с вами в течение 30 минут</p>'
            ];
        } else {
            $notify = [
                'title' => 'Упс...Ошибочка вышла :(',
                'icon' => 'error-icon',
                'message' => '<p>Не удалось отправить письмо администратору</p>'
            ];
        }

        return view('components.forms.response', $notify);
    }
}
