<?php

namespace App\Http\Controllers;

// use App\Models\reactEmpInfoModel;
// use App\Models\reactSignupModel;
// use App\Models\reactResignationModel;
// use App\Models\PromotionModel;
// use App\Models\reactLeaveModel;
// use App\Models\reactReimburstment;
// use App\Models\reactPayrollModel;
// use App\Models\userModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mainController extends Controller
{

    // public function back()
    // {
    //     session()->forget('login');
    //     return redirect('/login');
    // }

    // public function signupAction()
    // {
    //     // $data['postedData'] = session()->get('postedData');
    //     // $data['error'] = session()->get('error');
    //     return view('signup');
    // }

    public function loginScreen()
    {
        // if (session()->has('login')) {
            return view ('login');
        // } else {
        //     return view('login');
        // }
    }

    public function signupScreen()
    {
        // if (session()->has('login')) {
            return view ('signup');
        // } else {
        //     return view('login');
        // }
    }

    // public function loginProcess(Request $request)
    // {
    //     $data = userModel::where('email', $request->email)->where('password', $request->password)->first();
    //     //    dd($data);
    //     if (!empty($data)) {
    //         $request->session()->put('login', $data);

    //         return redirect('/dashboard')->with(['postedData' => $data]);
    //     }
    // }

    // public function dashboard()
    // {
    //     // dd(session()->all());
    //     if (session()->has('login')) {
    //         $data['postedData'] = session()->get('login');
    //         return view('dashboard', $data);
    //     } else {
    //         return redirect('/login');
    //     }
    //     // dd($data);

    // }

}