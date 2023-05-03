<?php

namespace App\Http\Controllers;

use App\Models\Check;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $check = check::all();
        return view('user.home', compact('check'));
    }



    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype=='0') {
                return view('user.home');
            }
            else {
                return view('admin.home');
            }
        }
        else {
            return redirect()->back();
        }
            
    }

    public function upload_check(REQUEST $request)
    {
        $check = new Check();
        $check->pay=$request->pay;
        $check->bank=$request->bank;
        $check->montant=$request->montant;
        $check->datecheque=$request->datecheque;
        $check->order=$request->order;
        $check->payerpour=$request->payerpour;
        $check->chequebarre=$request->chequebarre;
        

        $check->save();
        return redirect()->back();
    }





}
