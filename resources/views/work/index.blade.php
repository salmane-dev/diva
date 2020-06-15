@extends('welcome')


@section('content')
 
<h3>this is the Work page </h3>

<div class="container p-3">
    <form action="/work" method="post">
        @csrf
        <input type="text" name="name" id="" class=" " autocomplete="off" value="{{ old('name') }}"><br>
            <span style="color:red;">@error('name') {{ $message }} @enderror</span> <br> 
        <input type="text" name="type" id="" class=" " autocomplete="off" value="{{ old('type') }}"><br><br>
        <button class="btn btn-primary">Add work</button><br><br>
    </form>
</div>

@if(session()->has('message'))
    <div class="alert alert-success ">
        {{ session()->get('message') }}
    </div>
@endif

    <ul>
        @forelse($works as $work)
            <li><a href="/work/{{$work->id}}">the {{ $work->name   }}</a></li>
        @empty
            <span>No work in here </span>
        @endforelse
   
    </ul>

@endsection