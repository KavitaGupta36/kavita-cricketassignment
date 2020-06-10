<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;

class PlayerController extends Controller
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
    public function index($id)
    {
        try {
            $id = (int) base64_decode($id);
            if (empty($id)) {
                abort(400);
            }
            $players = Team::where('id',$id)->first();
            $players = $players ? $players : '';
            return view('player',['player'=>$players]);
        }catch(Exception $e){
            return back()->withError($e->getMessage());
        }
    }
}
