<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\RequestException;

class DashboardController extends Controller
{
    public function index()
    {
        $id =auth()->user()->id;
        if(empty($id)){
            return redirect()->route('welcome');
        }
        $books = Book::all();
        return view('dashboard', ['books' => $books]);
    }

    public function borrow()
    {
        $id =auth()->user()->id;
        if(empty($id)){
            return redirect()->route('welcome');
        }
        return view('borrow');
    }

    public function return(){
        $id =auth()->user()->id;
        if(empty($id)){
            return redirect()->route('welcome');
        }
        return view('return');
    }
}
