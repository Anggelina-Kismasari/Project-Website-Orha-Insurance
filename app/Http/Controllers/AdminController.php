<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Kc;

use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_kc');
    }

    public function upload(Request $request)
    {
        $kc=new kc;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientoriginalExtension();

        $request->file->move('kcimage',$imagename);

        $kc->image=$imagename;

        $kc->name=$request->name;

        $kc->phone=$request->number;

        $kc->region=$request->region;

        $kc->address=$request->address;

        $kc->save();

        return redirect()->back()->with('message','Data KC terupload!');
    }

    public function showappointment()
    {
        $data=appointment::all();

        return view('admin.showappointment',compact('data'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);

        $data->status='approved';

        $data->save();

        return redirect()->back();
    }

    public function showkc()
    {
        $data=kc::all();

        return view('admin.showkc',compact('data'));
    }

    public function deletekc($id)
    {
        $data=kc::find($id);

        $data->delete();

        return redirect()->back();
    }
}
