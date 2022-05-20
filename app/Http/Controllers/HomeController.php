<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;

class HomeController extends Controller
{
    public function redirect()
    {
        if(Auth::id())
        {
             if(Auth::user()->usertype == '0')
             {
                $doctor = Doctor::all();
                return view('user.home',compact('doctor'));

             }
             else{

                return view('admin.home');

             }

        }
        else{
            return redirect();
        }
    }

    public function index(){

        if(Auth::id()){
            return redirect('home');
        }

        $doctor = Doctor::all();
        return view('user.home',compact('doctor'));

    }

     public function appoiment(Request $request)
     {
         $data = new Appoiment();

         $data->name = $request->name;
         $data->phone = $request->phone;
         $data->email = $request->email;
         $data->date = $request->date;
         $data->doctor = $request->doctor;
         $data->message = $request->message;
         $data->state = 'On Progress';
        if(Auth::id()){
            $data->user_id = Auth::user()->id;

            $data->save();

            return redirect()->back()->with('message' , 'Appointment recoded successfuly . we will contact soon for a confirmation via phone call Thank you 🙏');

        }

     }


        public function myappoiment()
        {
             if(Auth::id()){

                $userid = Auth::user()->id;
                $appoint = Appoiment::where('user_id', $userid)->get();
                return view('user.myappoiments',compact('appoint'));


             }
             else{
                 return redirect()->back();
             }


        }

        public function appoiment_delete($id)
        {
            $data = Appoiment::find($id);
            $data->delete();

            return redirect()->back();
        }
}
