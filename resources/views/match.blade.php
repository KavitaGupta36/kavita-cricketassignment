@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header-top"><h2>Matches</h2></div>
                    <table class="table table-hover">
                        <thead>
                        <tr class="card-header">
                            <th >S. No.</th>
                            <th >Match Date</th>
                            <th>First Vs Second Team</th>
                            <th >Winner Team</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($matches)
                            @foreach($matches as $key=>$match)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{date('d M Y',strtotime($match->match_date)) ??""}}</td>
                                    <td>{{$match->getFirstTeam->name ??''}} Vs {{$match->getSecondTeam->name ??""}}</td>
                                    <td>{{$match->getWinnerTeam->name ??""}}</td>
                                </tr>
                          @endforeach
                        @else
                            <tr><td align="center" colspan="6">Match Not Found</td></tr>
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

