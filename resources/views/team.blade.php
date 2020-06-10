@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header-top"><h2>Teams</h2></div>
                <table class="table table-hover">
                    <thead>
                    <tr class="card-header">
                        <th >S. No.</th>
                        <th >Name</th>
                        <th >Flag</th>
                        <th >Club</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if($teams->toArray())
                          @foreach($teams as $key=>$val)
                                <tr>
                                    <td scope="row">{{$key+1}}</td>
                                     <td id="getPlayer">
                                        <a href="{{ route('players',[base64_encode($val->id)])}}">{{$val->name ??''}}</a>
                                    </td>
                                     <td><img src="{{asset('images/'.$val->logouri ??'')}}" height="20px" class="img-class" style="border-radius: 50%;"></td>
                                    <td>{{$val->club_state ??''}}</td>
                                </tr>
                          @endforeach
                        @else
                            <tr><td align="center" colspan="4">Team Not Found</td></tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
