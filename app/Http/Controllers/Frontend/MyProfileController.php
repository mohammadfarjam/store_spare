<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
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
                'name' => 'required|alpha|string'
            ], [
                'name.required' => 'نام و نام خانوادگی خود را صحیح وارد نمایید.',
                'name.alpha' => 'نام و نام خانوادگی باید شامل حروف باشد.',
            ]);
            if ($validator->fails()) {
                return response($validator->errors(), 401);
            } else {
                $newName = $request['name'];
                $user_id = $request['user_id'];

                $find_user = User::findOrFail($user_id);
                if ($find_user) {
                    $find_user->name = $newName;
                    $find_user->update();
                    $response_newName = $find_user->name;
                    Session::flash('updated_name','نام و نام خانوادگی با موفقیت ویرایش شد.');
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
                'newPhone.unique' => 'این شماره تلفن قبلا ثبت شده است.'
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
            $validator = Validator::make($request->all(), [
                'natinal_code' => 'required|string|numeric'
            ], [
                'natinal_code.required' => 'کد ملی خود را وارد نمایید.',
                'natinal_code.numeric' => 'کد ملی خود را صحیح وارد نمایید.',
            ]);
            if ($validator->fails()) {
                return response($validator->errors(), 401);
            } else {

                $new_natinal_code = $request['natinal_code'];
                $user_id = $request['user_id'];

                $find_user = User::findOrFail($user_id);
                if ($find_user) {
                    $find_user->natinal_code = $new_natinal_code;
                    $find_user->update();
                    $response_new_natinal_code = $find_user->natinal_code;
                    return response()->json($response_new_natinal_code, 200);
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }


    public function update_email(Request $request)
    {
        try {
            $validator = Validator::make($request->all(),
                [
                    'email' => 'required|unique:users|string|email',
                ], [
                    'email.required' => 'ایمیل خود را وارد نمایید.',
                    'email.unique' => 'آدرس ایمیل قبلا ثبت شده است.',
                ]);

            if ($validator->fails()) {
                return response($validator->errors(), 401);
            } else {
                $newEmail = $request['email'];
                $user_id = $request['user_id'];

                $find_user = User::findOrFail($user_id);
                if ($find_user) {
                    $find_user->email = $newEmail;
                    $find_user->update();
                    $response_new_email = $find_user->email;
                    return response()->json($response_new_email, 200);
                }
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
            $validator = Validator::make($request->all(),
                [
                    'now_password' => 'required|string|min:8',
                    'new_password' => 'required|string|min:8',
                ], [
                    'now_password.required' => 'لطفا رمز عبور فعلی خود را وارد نمایید.',
                    'now_password.min' => 'رمز عبور فعلی خود را صحیح وارد نمایید.',
                    'new_password.required' => 'لطفا رمز عبور جدید را وارد نمایید.',
                    'new_password.min' => 'رمز عبور جدید باید حداقل 8 کاراکتر باشد و شامل اعداد و حروف باشد.',
                ]);

            if ($validator->fails()) {
                return response($validator->errors(), 401);
            } else {
                $now_password = $request['now_password'];
                $user_id = $request['user_id'];

                $find_user = User::findOrFail($user_id);
                if ($find_user) {
                    $old_password = $find_user->password;
                    if (Hash::check($now_password, $old_password)) {
                        $find_user->password = Hash::make($request['new_password']);
                        $find_user->update();
                        return response()->json('success', 200);
                    } else {
                        return response()->json('current_password_not_exist', 401);

                    }
                }
            }

        } catch (\Exception $e) {
            return $e->getMessage();
        }

    }


    public function upload_photo(Request $request)
    {
        try {
            $uploadedPhoto = $request->file('file');
            if (!empty($uploadedPhoto)) {
                $filename = time() . $uploadedPhoto->getClientOriginalName();
                $original_name=$uploadedPhoto->getClientOriginalName();
                Storage::disk('local')->putFileAs('public/photos_profile', $uploadedPhoto, $filename);

                return response()->json([
                    'photo_name' => $filename,
                ]);

            }

        } catch (\Exception $e) {
            alert($e);
        }
    }


    public function save_upload_photo(Request $request)
    {
        try {
            $photo_name = $request['photo_name'];
            $user_id = $request['user_id'];

            $find_user = User::findOrFail($user_id);
            if ($find_user) {

                $find_user->photo_profile=$photo_name;
                $find_user->update();
            }
        }catch (\Exception $e) {
            alert($e);
        }


    }




    }
