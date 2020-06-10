<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $teams = Team::all();
            $teams = $teams ? $teams : '';
            return view('team',['teams'=>$teams]);
        }catch(Exception $e){
            return back()->withError($e->getMessage());
        }
    }
}
