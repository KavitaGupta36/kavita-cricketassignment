<?php

namespace App\Http\Controllers;

use App\Point;
use Illuminate\Http\Request;

class PointController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the points b/w match.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $points = Point::all()->sortByDesc('points');
            $points = $points ? $points : '';
            return view('point',['points'=>$points]);
        }catch(Exception $e){
            return back()->withError($e->getMessage());
        }
    }
}
