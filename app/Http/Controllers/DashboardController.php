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

    public function borrow_book(Request $request){
        $id =auth()->user()->id;
        if(empty($id)){
            return redirect()->route('welcome');
        }
        $book = Book::where('isbn', $request->isbn)->first();
        $account = Account::where('book_id', $request->isbn)->where('student_id', Auth::user()->student_id)->where('date_returned', null)->first();
        if($account){
            return redirect()->route('myaccount')->with('error', 'Check your account, you already borrowed this one.');
        }
        if($book){
            if($book->copies > 0){
                $book->copies = $book->copies - 1;
                $book->save();
                $account = new Account();
                $account->student_id = Auth::user()->student_id;
                $account->book_id = $book->isbn;
                $account->date_borrowed = date('Y-m-d');
                $account->due_date = date('Y-m-d', strtotime('+7 days'));
                $account->save();
                return redirect()->route('myaccount')->with('success', 'You have borrowed '.$book->title.' until '.$account->due_date);
            }else{
                return redirect()->back()->with('error', 'Book not available');
            }
        }else{
            return redirect()->back()->with('error', 'Invalid ISBN number please try again');
        }
    }
}
