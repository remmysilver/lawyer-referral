<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Lawyer;
use App\Models\Book;

class HomeController extends Controller
{
  public function index()
  {
    $lawyer = Lawyer::paginate(3);
    return view('home.userpage',compact('lawyer'));
  }
    public function redirect()
  {
    $usertype = Auth::user()->usertype;
    

    if ($usertype == '1') {
        return view('admin.home');
    } else {
      $lawyer = Lawyer::paginate(3);
      return view('home.userpage',compact('lawyer'));
    }
  }
  public function lawyer_details($id)
  {
    $lawyer = Lawyer::find($id);
    return view('home.lawyer_details',compact('lawyer'));
  }
  public function book_now(Request $request, $id)
  {
    if(Auth::check())
    {
      $lawyer = Lawyer::find($id);
      $user = User::find(Auth::id());
      $book = new Book();
      $book->name = $user->name;
      $book->email = $user->email;
      $book->phone = $user->phone;
      $book->lawyer_name = $lawyer->name;
      $book->fee = $lawyer->fees;
      $book->image = $lawyer->image;
      $book->lawyer_id = $lawyer->id;
      $book->user_id = Auth::id();
      $book->start_time = $request->start_time;
      $book->end_time = $request->end_time;
      $book->start_date = $request->start_date; // New column for start date
      $book->end_date = $request->end_date;     // New column for end date
      $book->save();
      return redirect()->back()->with('success','Booked successfully');




    } else {
      return redirect('login');
  }
  }
      


}
