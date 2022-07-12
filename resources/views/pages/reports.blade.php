@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($reports) > 0)
        <ul class="list-group">
            @foreach($reports as $report)
                <li class="list-group-item">{{$report}}</li>
            @endforeach
        </ul>
    @endif
@endsection 
        

