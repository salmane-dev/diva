@extends('welcome')


@section('content')
 
<h3>this is the Work page </h3>

<div class="container p-3">
    <form action="/work" method="post">
        @csrf
        <input type="text" name="name" id="" class=" " autocomplete="off">
        <input type="text" name="type" id="" class=" " autocomplete="off">
        <button class="btn btn-primary">Add work</button>
    </form>
   <span style="color:red;">@error('name') {{ $message }} @enderror</span> 
</div>

    <ul>
        @forelse($works as $work)
            <li>the {{ $work->name   }}</li>
        @empty
            <span>No work in here </span>
        @endforelse
   
    </ul>

@endsection