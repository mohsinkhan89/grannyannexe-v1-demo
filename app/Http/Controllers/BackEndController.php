<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Level;
use App\PlanType;
use App\Report;
use App\Bank;
use App\BankBranchName;
use App\BankDistrict;
use App\BankRequest;
use App\Company;
use App\CreditRequest;
use App\MobileBankingRequest;
use App\MobileRecharge;
use App\Operator;
use App\Service;
use App\Form;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use PDO;


class BackEndController extends Controller
{
    public function index(){
        $view = 'login';
        return view($view);
    }

    public function login_check(){
        if(Auth::check()){
            $user = Auth()->user();
        }
        return $user;
    }

    public function roles(){
        return \TCG\Voyager\Models\Role::where('id','!=',1)->get();
    }

    public function login_submit(Request $request){
        if(isset($request->email)){
            $findemail = User::where('email',$request->email)->first();
            if(isset($findemail->id)){
                if($findemail->status == 1){
                    if (Hash::check($request->password , $findemail->password)) {
                        Auth::loginUsingId($findemail->id);
                        return response()->json([
                            "status" => "success",
                            "message" => "Please wait we are redirecting you",
                            "redirect" => "/dashboard/home"
                        ]);
                    }
                    else{
                        return response()->json([
                            "status" => "danger",
                            "message" => "Incorrect password",
                        ]);
                    }
                }
                else{
                    return response()->json([
                        "status" => "warning",
                        "message" => "Sorry! Your account is blocked. Please contact support",
                    ]);
                }
            }
            $findusername = User::where('username',$request->email)->first();
            if(isset($findusername->id)){
                if($findusername->status == 1){
                    if (Hash::check($request->password , $findusername->password)) {
                        Auth::loginUsingId($findusername->id);
                        return response()->json([
                            "status" => "success",
                            "message" => "Please wait we are redirecting you",
                            "redirect" => "/dashboard/home"
                        ]);
                    }
                    else{
                        return response()->json([
                            "status" => "danger",
                            "message" => "Incorrect password",
                        ]);
                    }
                }
                else{
                    return response()->json([
                        "status" => "warning",
                        "message" => "Sorry! Your account is blocked. Please contact support",
                    ]);
                }
            }
            $findcontact = User::where('contact_no',$request->email)->first();
            if(isset($findcontact->id)){
                if($findcontact->status == 1){
                    if (Hash::check($request->password , $findcontact->password)) {
                        Auth::loginUsingId($findcontact->id);
                        return response()->json([
                            "status" => "success",
                            "message" => "Please wait we are redirecting you",
                            "redirect" => "/dashboard/home"
                        ]);
                    }
                    else{
                        return response()->json([
                            "status" => "danger",
                            "message" => "Incorrect password",
                        ]);
                    }
                }
                else{
                    return response()->json([
                        "status" => "warning",
                        "message" => "Sorry! Your account is blocked. Please contact support",
                    ]);
                }
            }
            else{
                return response()->json([
                    "status" => "danger",
                    "message" => "Sorry! we cannot find any account with your details",
                ]);
            }
        }
    }

    public function dashboard(){
        $view = 'dashboard';
        $user = $this->login_check();
        if($user->role_id == 2 || $user->role_id == 1){
            $latestusers = User::take(10)->orderBy('id','DESC')->get(); 
        }
        else{
            $latestusers = User::take(10)->where('created_by',$user->id)->orderBy('id','DESC')->get(); 
        }
        return view($view,compact('user','latestusers'));
    }

    public function users(Request $request,$refkey){
        $view = 'users';

        $user = $this->login_check();
        $roles = $this->roles();
        $finduser = User::where('ref_key',$refkey)->first();
        if(!isset($request->role)){
            if(isset($finduser)){
                if($finduser->role_id == 2 || $finduser->role_id == 1){
                    $alluser = User::orderBy('id','DESC')->paginate(10);
                }
                else{
                    $alluser = User::where('created_by', $finduser->id)->orderBy('id','DESC')->paginate(10);
                }
            }
            else{
                return redirect('/dashboard/home');
            }
        }
        else{
            if(isset($finduser)){
                if($finduser->role_id == 2 || $finduser->role_id == 1){
                    $alluser = User::orderBy('id','DESC')->where('role_id',$request->role)->paginate(10);
                }
                else{
                    $alluser = User::where('created_by', $finduser->id)->where('role_id',$request->role)->orderBy('id','DESC')->paginate(10);
                }
            }
            else{
                return redirect('/dashboard/home');
            }
        }
        return view($view,compact('user','alluser','roles'));
    }

    public function check_username(Request $request){
        if(isset($request->username)){
            $findusername = User::where('username',$request->username)->count();
            if($findusername > 0){
                return response()->json([
                    "status" => "warning",
                    "message" => "Username already exists"
                ]);
            }
            else{
                return response()->json([
                    "status" => "success",
                    "message" => "Username available"
                ]);
            }
        }

        else if(isset($request->email)){
            $findemail = User::where('email',$request->email)->count();
            if($findemail > 0){
                return response()->json([
                    "status" => "warning",
                    "message" => "Email already exists"
                ]);
            }
            else{
                return response()->json([
                    "status" => "success",
                    "message" => "Email available"
                ]);
            }
        }

        else if(isset($request->number)){
            $findcontact = User::where('contact_no',$request->number)->count();
            if($findcontact > 0){
                return response()->json([
                    "status" => "warning",
                    "message" => "Contact Number already exists"
                ]);
            }
            else{
                return response()->json([
                    "status" => "success",
                    "message" => "Contact Number available"
                ]);
            }
        }
    }

    public function user_submit(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->contact_no = $request->phone;
        $user->password = bcrypt($request->password);
        $user->role_id = $request->role;
        $user->created_by = Auth()->user()->id;
        $user->status = 1;
        if($request->role == 4){
            $user->level = $request->level;
        }
        $user->save();
        return response()->json([
            "status" => "success",
            "message" => "User registered successfully"
        ]);
    }

    public function profile(Request $request){
        $view = 'profile';
        $roles = $this->roles();
        $user = $this->login_check();
        return view($view,compact('user','roles'));
    }

    public function profile_update_submit(Request $request){
        $user = $this->login_check();
        if(isset($request->name)){
            $user->name = $request->name;
        }
        if(isset($request->email)){
            $user->email = $request->email;
        }
        if(isset($request->password) && isset($request->currpassword)){
            if (Hash::check($request->currpassword, $user->password)) {
                $user->password = bcrypt($request->password);
            } else {
                return response()->json([
                    "status" => 'warning',
                    "message" => "Sorry! The current password is incorrect."
                ]);
            }
        }
        if(isset($request->number)){
            $user->contact_no = $request->number;
        }
        return response()->json([
            "status" => "success",
            "message" => "Profile has been updated"
        ]);
    }

    public function deactive_account($userid){
        $finduser = User::find($userid);
        if(isset($finduser->id)){
            $finduser->status = 0;
            $finduser->save();
        }
        return response()->json([
            "status" => "success"  
        ]);
    }

    public function active_account($userid){
        $finduser = User::find($userid);
        if(isset($finduser->id)){
            $finduser->status = 1;
            $finduser->save();
        }
        return response()->json([
            "status" => "success"  
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
