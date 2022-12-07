<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Reserve;
use App\Models\Review;

class ReservationController extends Controller
{
    public function top(User $user, Review $review)
    {
    return view('reserve/top')->with(['users' => $user->get(), 'top' => $review->get()]);
    }
    
    public function mypage(Course $course)
    {
    return view('reserve/mypage')->with(['courses' => $course->get()]);
    }
    
    public function reservation(Reserve $reserve)
    {
    return view('reserve/reservation')->with(['reserves' => $reserve->get()]);
    }

   public function review(Review $review)
    {
    return view('reserve/review')->with(['reviews' => $review->get()]);
    }
    
    public function store(Request $request, Review $review)
    {
        $input = $request['review'];
        $review->fill($input)->save();
        return redirect('/review/' . $review->id);
    }
    
    public function show(Review $review)
    {
        return view('reserve/show')->with(['show' => $review]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
    
    public function user()
    {
        $auths = Auth::user();
        return view('reserve/review', ['auths' => $auths]);
    }
}

