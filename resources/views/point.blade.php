@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header-top"><h2>Points Table</h2></div>
                    <table class="table table-hover">
                        <thead>
                        <tr class="card-header">
                            <th >S. No.</th>
                            <th >Name</th>
                            <th >Total Matches</th>
                            <th >Win</th>
                            <th >Loss</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($points)
                                @foreach($points as $key=>$value)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td><img src="{{ asset('images/'.$value->getTeamDetails->logouri ??'') }}" height="20px" class="img-class" style="border-radius: 50%;"> {{$value->getTeamDetails->name??''}}</td>
                                        <td>{{$value->matches_played??''}}</td>
                                        <td>{{$value->win??''}}</td>
                                        <td>{{$value->loss??''}}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr><td align="center" colspan="6">Point Table Not Found</td></tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
