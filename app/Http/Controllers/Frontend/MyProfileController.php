<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MyProfileController extends Controller
{
    public function index()
    {
        $user_data = User::findOrFail(Auth::user()->id);
        return view('Frontend.MyProfile.index', compact('user_data'));
    }

    public function update_name_myProfile(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'newName' => 'required|alpha|string'
            ], [
                'newName.required' => 'نام و نام خانوادگی خود را صحیح وارد نمایید.',
                'newName.alpha' => 'نام و نام خانوادگی باید شامل حروف باشد.',
            ]);
            if ($validator->fails()) {
                return response($validator->errors(), 401);
            } else {
                $newName = $request['newName'];
                $user_id = $request['user_id'];

                $find_user = User::findOrFail($user_id);
                if ($find_user) {
                    $find_user->name = $newName;
                    $find_user->update();
                    $response_newName = $find_user->name;
                    return response()->json($response_newName, 200);
                }
            }

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function update_phone_number(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'newPhone' => 'required|max:11|digits:11|unique:users|string'
            ], [
                'newPhone.required' => 'شماره تلفن همراه خود را وارد نمایید.',
                'newPhone.digits' => 'شماره تلفن فقط شامل اعداد صحیح می باشد.',
                'newPhone.unique'=>'این شماره تلفن قبلا ثبت شده است.'
            ]);
            if ($validator->fails()) {
                return response($validator->errors(), 401);
            } else {

            $newPhone = $request['newPhone'];
            $user_id = $request['user_id'];

            $find_user = User::findOrFail($user_id);
            if ($find_user) {
                $find_user->phone_number = $newPhone;
                $find_user->update();
                $response_newPhoneNumber = $find_user->phone_number;
                return response()->json($response_newPhoneNumber, 200);
            }
            }

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function update_natinal_code(Request $request)
    {
        try {
            $new_natinal_code = $request['new_natinal_code'];
            $user_id = $request['user_id'];

            $find_user = User::findOrFail($user_id);
            if ($find_user) {
                $find_user->natinal_code = $new_natinal_code;
                $find_user->update();
                $response_new_natinal_code = $find_user->natinal_code;
                return response()->json($response_new_natinal_code, 200);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }


    public function update_email(Request $request)
    {
        try {
            $new_email = $request['new_email'];
            $user_id = $request['user_id'];

            $find_user = User::findOrFail($user_id);
            if ($find_user) {
                $find_user->email = $new_email;
                $find_user->update();
                $response_new_email = $find_user->email;
                return response()->json($response_new_email, 200);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }


    public function update_birthday(Request $request)
    {
        try {
            $new_year_birthday = $request['new_year_birthday'];
            $new_month_birthday = $request['new_month_birthday'];
            $new_day_birthday = $request['new_day_birthday'];
            $all_date = $new_year_birthday . '/' . $new_month_birthday . '/' . $new_day_birthday;
            $user_id = $request['user_id'];

            $find_user = User::findOrFail($user_id);
            if ($find_user) {
                $find_user->birthday = $all_date;
                $find_user->update();
                $response_new_date = $find_user->birthday;
                return response()->json($response_new_date, 200);
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }


    public function update_password(Request $request)
    {
        try {
            $now_password = $request['now_password'];
            $new_password = $request['new_password'];
            $confirm_new_password = $request['confirm_new_password'];
            $user_id = $request['user_id'];

            $find_user = User::findOrFail($user_id);
            if ($find_user) {
                $old_password = $find_user->password;
                if (Hash::check($now_password, $old_password)) {
                    $find_user->password = Hash::make($request['new_password']);
                    $find_user->update();
                    return response()->json('success', 200);
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }


}
