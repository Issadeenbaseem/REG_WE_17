<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_doctor()
    {
        return view('admin.add_doctor');
    }
    public function add_doctor(Request $request)
    {
         $doctor = new doctor;

         $image = $request->img;

         $imagename =time().'.'.$image->getClientOriginalExtension();

         $request->img->move('doctorimage',$imagename);

         $doctor->img=$imagename;

         $doctor->name=$request->name;
         $doctor->phone=$request->phone;
         $doctor->room=$request->room;
         $doctor->email=$request->email;
         $doctor->special=$request->special;

         $doctor->save();

         return redirect()->back()->with('message' , ' Doctor Added Successfully');






    }
    public function appoinment_view()
    {
       $data = Appoiment::all();

        return view('admin.appoinment_view',compact('data'));
    }

    public function approve($id)
    {
        $data = Appoiment::find($id);

        $data->state = "Approved";

        $data->save();

        return redirect()->back();
    }

    public function cancel($id)
    {
        $data = Appoiment::find($id);

        $data->state = "Reject";

        $data->save();

        return redirect()->back();
    }

    public function manage_doctor_view(){

        $data = Doctor::all();

        return view('admin.manage_doctor_view',compact('data'));
    }

    public function doctor_delete($id)
    {
        $data = Doctor::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function doctor_edit($id)
    {
        $data = Doctor::find($id);

        return view('admin.doctor_edit',compact('data'));
    }

    public function update_doctor(Request $request,$id)
    {
        $data = Doctor::find($id);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->special = $request->special;
        $data->room = $request->room;

        $image = $request->img;

        $imagename =time().'.'.$image->getClientOriginalExtension();

        $request->img->move('doctorimage',$imagename);

        $data->img=$imagename;




        $data->save();

        return redirect()->back()->with('message','Doctor details Updated Successfully');



    }

}
