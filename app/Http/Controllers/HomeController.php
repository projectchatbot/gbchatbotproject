<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware(['auth', 'verified']);
        //$this->middleware(['auth']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function checkForm(Request $request){

      $question1 = $request->get('question1');
      $question2 = $request->get('question2');
      $question3 = $request->get('question3');
      $question4 = $request->get('question4');

      $q1 = $q2 = $q3 = $q4 = 0;

      if($question1 == 2){
        $q1 = 1;
      }

      if($question2 == 2){
        $q2 = 1;
      }

      if($question3 == 3){
        $q3 = 1;
      }
     
      if($question4 == 3){
	$q4 = 1;
      }


      return view('checkAnswer', compact('q1','q2','q3','q4'));
    }


}
