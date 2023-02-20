<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Student;
use Illuminate\Http\Request;
use DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Log;
use App\Models\Students;


class StudentController extends Controller
{

  public function ViewIndexController()
  {


    $country = DB::table('country')->get();
    $state = DB::table('state')->get();


    //$selectedcountry = User::first()->country;

    return view("welcome")->with(['country' => $country, "state" => $state]);
  }
  public function ViewSavedController(Request $request)
  {


    $country = DB::table('country')->get();
    $state = DB::table('state')->get();


    DB::statement('ALTER TABLE student MODIFY image MEDIUMBLOB;');

    foreach ($request->arr as $p) {

      try {
        $validatedData = $request->validate([
          'arr' => 'required|array',
          'arr.*.name' => 'required',
          'arr.*.cname' => 'required',
          'arr.*.sname' => 'required',
          'arr.*.iname' => 'required',

        ]);
      } catch (ValidationException $exception) {


        return view("welcome")->with(['country' => $country, "state" => $state ]);
    

      }
    }

    foreach ($request->arr as $p) {

    $myModel = new Students;
    $myModel->name = $p['name'];
    $myModel->countryid =  $p['cname'];
    $myModel->stateid =  $p['sname'];

    $binaryData = file_get_contents($p['iname']->getRealPath());
 
    $myModel->image=   $binaryData;
    $myModel->save();
    }

    
    $country = DB::table('country')->get(); 
    $state = DB::table('state')->get(); 
    $student= DB::table('student')->get(); 


    return view("saved")->with(['student'=>$student,'country' => $country, "state" => $state]);


  }
}
