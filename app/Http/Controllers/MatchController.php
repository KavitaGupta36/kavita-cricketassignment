<?php

namespace App\Http\Controllers;

use App\Match;
use Illuminate\Http\Request;

class MatchController extends Controller
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
            $matches = Match::all();
            $matches = $matches ? $matches : '';
            return view('match',['matches'=>$matches]);
        }catch(Exception $e){
            return back()->withError($e->getMessage());
        }
    }
}
