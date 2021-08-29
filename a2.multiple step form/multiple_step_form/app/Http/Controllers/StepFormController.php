<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StepForm;
use Carbon\carbon;
class StepFormController extends Controller
{
    function application(){
        return view('application');
    }

    function app_post(Request $request){
        StepForm::insert([
            'email' => $request->email,
            'country' => $request->country,
            'bd_adress' => $request->bd_adress,
            'foreign_adress' => $request->foreign_adress,
            'thana' => $request->thana,
            'age' => $request->age,
            'name' => $request->name,
            'status' => $request->status,
            'created_at' => Carbon::now()
        ]);
        
        return back();
    }
    function userlist(){
        $alldata = StepForm::all();
        return view('userlist', compact('alldata'));
    }

    function userdelete($user_id){  
        if(StepForm::where('id',$user_id)->exists()){ //for double click problem
            StepForm::find($user_id)->delete();
            }
        return back();
    }
}
