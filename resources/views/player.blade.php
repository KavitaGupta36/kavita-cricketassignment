@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header-top"><h2>{{($player->name)?$player->name."'s  Players list":''}}</h2></div>
                    <table class="table table-hover">
                        <thead>
                        <tr class="card-header">
                            <th >#</th>
                            <th >Name</th>
                            <th >Image</th>
                            <th >Jersey No</th>
                            <th >Country</th>
                            <th >Matches</th>
                            <th >Runs</th>
                            <th >Highest Score</th>
                            <th >50s</th>
                            <th >100s</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(($player->getPlayers->toArray()))
                            @foreach($player->getPlayers as $key=>$val)
                                <tr>
                                    <td >{{$key+1}}</td>
                                    <td> {{$val->first_name??''}} {{$val->last_name??''}}</td>
                                    <td><img src="{{ asset('images/'.$val->image_uri??'') }}" height="40px" class="img-class" style="border-radius: 50%;"></td>
                                    <td> {{$val->player_jersey_no ??''}}</td>
                                    <td> {{$val->country ??''}}</td>
                                    <td> {{$val->matches ??''}}</td>
                                    <td> {{$val->runs ??''}}</td>
                                    <td> {{$val->highest_score ??''}}</td>
                                    <td> {{$val->fifties ??''}}</td>
                                    <td> {{$val->hundreds ??''}}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr><td align="center" colspan="10">Players Not Found</td></tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
