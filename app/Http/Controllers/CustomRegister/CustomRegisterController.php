<?php

namespace App\Http\Controllers\CustomRegister;

use App\Http\Controllers\Controller;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CustomRegisterController extends Controller
{
    public function customRegister()
    {
        return view('Frontend.Register.register');
    }

    public function VerifyPhoneNumber()
    {
        return view('Frontend.Register.VerifyPhoneNumber');
    }

    public function create_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|alpha',
            'phone_number' => 'required|max:11|digits:11|unique:users|string',
            'password' => 'required|string|min:8',

        ], [
            'name.required' => 'نام کاربری را وارد نمایید.',
            'name.alpha' => 'نام کاربری باید شامل حروف باشد.',
            'phone_number.required' => 'شماره تلفن خود را وارد نمایید.',
            'phone_number.unique' => 'این شماره تلفن قبلا ثبت شده است.',
            'phone_number.digits'=>'شماره تلفن باید شامل اعداد باشد.',
            'phone_number.max'=>'شماره تلفن باید 11 رقم باشد.',
            'password.required' => 'گذروازه را وارد نمایید.',
            'password.min' => 'گذرواژه باید بیشتر از 8 کاراکتر باشد.',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {

            $new_user = new User();
            $new_user->name = $request['name'];
            $new_user->phone_number = $request['phone_number'];
            $new_user->password = Hash::make($request['password']);
            $new_user->save();
            $id = $new_user->id;

            $role = Role::where('title', 'کاربر عادی')->first();
            $new_user->roles()->attach($role->id);

            $cookie = Cookie::make('id', $id,time() + 60 * 60 * 2);
            return redirect('/register_step2')->withCookie($cookie);
        }

    }

    public function acceptPhoneNumber(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'sms_code_verify' => 'required|digits:6',

        ],[
           'sms_code_verify.required' =>'رمز ارسال شده را وارد نمایید.',
           'sms_code_verify.digits' =>'تعداد رمز وارد شده صحیح نیست.',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {

            $user_id = $request['user_id'];
            $sms_code_verify = $request['sms_code_verify'];

            $find_user = User::findOrFail($user_id);

            if ($find_user->sms_code == $sms_code_verify) {
                $find_user->active = '1';
                $find_user->sms_code_verify = $sms_code_verify;
                $find_user->save();
                Auth::loginUsingId($user_id);
                return redirect('/');
            } else {
                Session::flash('notmatch', 'کد وارد شده صحیح نیست');
                return redirect('/register_step2');
            }
        }
    }
}
