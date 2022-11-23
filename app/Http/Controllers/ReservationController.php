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
    return view('reserve/top')->with(['users' => $user->get(), 'top' => $review->getByLimit()]);
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
    return view('reserve/review')->with(['reviews' => $review->getByLimit()]);
    }
}

