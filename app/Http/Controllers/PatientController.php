<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model\Patient;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        try {
            if (isset($request->sort))
            {
                if($request->sort == 'adults')
                {
                    $pat  =  DB::table('patients')
                    ->where('age', '>=', 18)
                    ->get();
                }
                else if($request->sort == 'child')
                {
                    $pat  =  DB::table('patients')
                    ->where('age', '<', 18)
                    ->get();
                }
                else if($request->sort == 'all')
                {
                    $pat  = Patient::all();
                }
            }
            else
            {
                $pat  =  DB::table('patients')
                ->get();
            }
        return view('ViewPatientReport', ['patient'=>$pat]);

        } catch (execption $e) {
           return 'something went wrong';
        }
    }
    public function search($id)
    {
        try {
        $pat  = Patient::where('name',$id)->get();
        return view('ViewPatientReport', ['patient'=>$pat]);
        } catch (execption $e) {
            return 'something went wrong';
         }
    }
    public function delete($id)
    {
        try {
        $pat2  = Patient::find($id);
        $pat2->delete();
        $pat  = Patient::all();
        return view('ViewPatientReport', ['patient'=>$pat]);
        }  catch (execption $e) {
            return 'something went wrong';
         }
    }
    public function insert(Request $request)
    {
        try {
        $pat  = new Patient;
        $pat->name = $request->name;
        $pat->email = $request->email;
        $pat->appoitment = $request->appointment;
        $pat->age = $request->age;
        $pat->contact = $request->contact;
        $pat->save();
        return view('patientinsert');   
        } 
        catch (execption $e) {
            return 'something went wrong';
         }
    }
    public function update(Request $request)
    {
        try {
            $pat  = Patient::find($request->id);
            $pat->name = $request->name;
            $pat->email = $request->email;
            $pat->appoitment = $request->appointment;
            $pat->age = $request->age;
            $pat->contact = $request->contact;
            $pat->save();
            $pat  = Patient::all();
        return view('ViewPatientReport', ['patient'=>$pat]);
        } catch (execption $e) {
            return 'something went wrong';
         }  
    }
    public function handleEdit($id)
    {
        $pat  = Patient::where('id',$id)->get();
        return view('patientedit', ['patient'=>$pat]);
    }
    public function sort(Request $request)
    {
        try {
            if (isset($request->sort))
            {
                if($request->sort == 'adults')
                {
                    $pat  =  DB::table('patients')
                    ->where('age', '>', 18)
                    ->get();
                }
                else if($request->sort == 'child')
                {
                    $pat  =  DB::table('patients')
                    ->where('age', '<', 18)
                    ->get();
                  
                }
                else if($request->sort == 'all')
                {
                    $pat  = Patient::all();
                   
                }
                else
                {
                    $pat  = Patient::all();
                }
            }
            else
            {
                $pat  =  DB::table('patients')
                ->get();
            }
           
        return view('ViewPatientReport', ['patient'=>$pat]);

        } catch (execption $e) {
           return 'something went wrong';
        }
    }

    public function searchtxt(Request $request)
    {
        
        $pat = Patient::where('name',$request->searchtxtbox)->get();
       

        return view('ViewPatientReport', ['patient'=>$pat]);
        
    }

    



}

