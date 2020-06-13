@extends('welcome')


@section('content')

    <h3>this is the Services page </h3>

<div class="container p-3">
    <form action="/service" method="post">
        @csrf
        <input type="text" name="name" id="" class=" " autocomplete="off">
        <button class="btn btn-primary">Add Service</button>
    </form>
   <span style="color:red;">@error('name') {{ $message }} @enderror</span> 
</div>

        <ul>
        @forelse($services as $service)
            <li>the {{ $service->name }}</li>
        @empty
            <span>Nothing in here </span>
        @endforelse

        </ul>

@endsection