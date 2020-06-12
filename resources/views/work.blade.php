@extends('welcome')


@section('content')
 
<h3>this is the Work page </h3>

    <ul>
        @forelse($works as $work)
            <li>the {{ $work->name }}</li>
        @empty
            <span>No work in here </span>
        @endforelse
    </ul>

@endsection