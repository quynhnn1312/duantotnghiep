<?php

namespace App\Http\Controllers\Auth;

use App\User\Admin;
use App\User\Teacher;
use App\User\Student;
use App\User\AdminPasswordReset;
use App\User\TeacherPasswordReset;
use App\User\StudentPasswordReset;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\Auth\TokenResetPassword;

class ResetPasswordController extends Controller{

    public function resetForm(){
        return view('auth.reset-password');
    }

    public function sendResetToken(Request $request) {
        switch($request->role) {
            case 'admin':
                $user_query = Admin::query();
                AdminPasswordReset::where('email', $request->email)->delete();
                $user_token = new AdminPasswordReset();
                break;
            case 'teacher':
                $user_query = Teacher::query();
                TeacherPasswordReset::where('email', $request->email)->delete();
                $user_token = new TeacherPasswordReset();
                break;
            case 'student':
                $user_query = Student::query();
                StudentPasswordReset::where('email', $request->email)->delete();
                $user_token = new StudentPasswordReset();
                break;
        }

        $user = $user_query->where('email', $request->email)
                           ->firstOr(function() {
                               return response()->json([
                                   'status' => 'error',
                                   'message' => 'Không có địa chỉ email này trong dữ liệu',
                               ]);
                           });

        $user_token->email = $user->email;
        $user_token->token = Str::uuid();
        $user_token->created_at = now();

        $user_token->save();

        Mail::to($user_token->email)->send(new TokenResetPassword($user_token->token, $user_token->email));

        return response()->json([
            'status' => 'success',
            'message' => 'Xác thực thành công, hãy vào email của bạn để tiến hành đổi lại mật khẩu',
        ]);
    }

    public function resetPasswordWithTokenForm(){
        return view('auth.reset-form');
    }

    public function resetPasswordWithTokenPost(Request $request, $token){

        // if(!isset(AdminPasswordReset::where('token', $token)->first())){
        //     $resetQuery = Admin::query();
        //     $email = AdminPasswordReset::where('token', $token)->first()->email;
		//
        // }else if(!isset(TeacherPasswordReset::where('token', $token)->first())){
        //     $resetQuery = Teacher::query();
        //     $email = TeacherPasswordReset::where('token', $token)->first()->email;
		//
        // }else if(!isset(StudentPasswordReset::where('token', $token)->first())){
        //     $resetQuery = Student::query();
        //     $email = StudentPasswordReset::where('token', $token)->first()->email;
		//
        // }else{
        //     return response()->json([
        //         'status' => 'info',
        //         'message' => 'Token xác thực không tồn tại',
        //     ]);
        // }
        // $resetQuery->where('email', $email);
		//
        // $user = $resetQuery->first();
        // $user->password = bcrypt($request->new_password);
		//
        // $user->save();

        return redirect()->route('login')->with([
           'message' => [
               'status' => 'success',
               'message' => 'Đổi mật khẩu thành công!'
           ]
        ]);
    }
}
