@extends('welcome')


@section('content')
 
@if(session()->has('message'))
    <div class="alert alert-success ">
        {{ session()->get('message') }}
    </div>
@endif

        <div class="container">
            <h4> the {{ $work->name }} </h4> {{ $work->type }} 
        </div>
<br>
<br>
        <div class="container">
        <h5> <a href="/work/{{$work->id}}/edit" class=" btn btn-info ">Edit </a> <a href="/work" class=" btn btn-success ">Go Back </a> </h5>
        </div>
       
        <div class="container">
            <form action="/work/{{ $work->id }}" method="post">
            @method('DELETE')
            @csrf
                <button class="btn btn-danger ">Delet work</button>
            </div>
       </form>


@endsection