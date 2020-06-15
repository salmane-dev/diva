@extends('welcome')


@section('content')
 
<h3>Edit this Work</h3>


<div class="container p-3">
    <form action="/work/{{ $work->id }}" method="post">
    
    @method('PATCH')

        @csrf
        <input type="text" name="name" id="" class=" " autocomplete="off" value="{{ $work->name }}"><br>
            <span style="color:red;">@error('name') {{ $message }} @enderror</span> <br> 
        <input type="text" name="type" id="" class=" " autocomplete="off" value="{{ $work->type }}"><br><br>
        <button class="btn btn-primary">Save work</button><br><br>
    </form>
</div>

     

@endsection