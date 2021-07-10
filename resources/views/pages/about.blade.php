@extends('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($about) > 0)
        <ul>
            @foreach ($about as $abouts)
                <li>{{$abouts}}</li>
            @endforeach
        </ul> 
    @endif
@endsection