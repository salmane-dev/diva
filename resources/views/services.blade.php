@extends('welcome')


@section('content')

    <h3>this is the Services page </h3>

        <ul>
        @forelse($services as $service)
            <li>the {{ $service->name }}</li>
        @empty
            <span>Nothing in here </span>
        @endforelse

        </ul>

@endsection