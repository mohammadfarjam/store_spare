<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('Frontend.ContactUs.index');
    }


    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }



    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'message' => 'required|string',
                'name' => 'required|max:255|string',
                'email' => 'required|email|string',
                'phone' => 'required|digits:11|max:11',
                'subject' => 'required|string',
                'captcha'=> 'required|captcha',
            ], [
                'message.required' => 'متن پیام شما خالی است.',
                'name.required' => 'نام خود را وارد نمایید.',
                'email.email' => 'آدرس ایمیل خود را صحیح وارد نمایید.',
                'email.required' => 'آدرس ایمیل خود را وارد نمایید.',
                'phone.required' => 'شماره تلفن خود را وارد نمایید.',
                'phone.digits' => 'شماره تلفن باید شامل اعداد صحیح باشد.',
                'phone.max' => 'تعداد ارقام شماره تلفن صحیح نمی باشد.',
                'subject.required' => 'موضوع پیام خود را وارد نمایید.',
            ]);

            if ($validator->fails()) {
                return response($validator->errors(), 401);
            } else {
                $message = $request['message'];
                $name = $request['name'];
                $email = $request['email'];
                $phone = $request['phone'];
                $subject = $request['subject'];

                $new_comment = new ContactUs();
                $new_comment->name = $name;
                $new_comment->email = $email;
                $new_comment->phone = $phone;
                $new_comment->subject = $subject;
                $new_comment->message = $message;
                $new_comment->save();
            }
        } catch (\Exception $e) {
            alert($e);
        }


    }
}
