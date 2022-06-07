<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Kc;

use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect() 
    {
        if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $kc = kc::all();
                return view('user.home',compact('kc'));
            }
            else
            {
                return view('admin.home');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function index()
    {
        if(Auth::id())
        {
            return redirect('home');
        }
        else
        {
            $kc = kc::all();
            return view('user.home',compact('kc'));
        }
    }

    public function appointment(Request $request)
    {
        $data = new appointment;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->date=$request->date;

        $data->phone=$request->number;

        $data->message=$request->message;

        $data->kc=$request->kc;

        $data->status='In Progress';

        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with('message','Form telah berhasil dikirim. Silahkan menunggu info lebih lanjut melalui email yang anda masukkan!');
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $appoint=appointment::where('user_id',$userid)->get();

            return view('user.my_appointment', compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }
}
