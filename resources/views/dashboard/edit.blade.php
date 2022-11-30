@extends('layout')

@section('content')
<div class="container content">  
  <form method="POST" action="{{route('todo.update', $todo['id'])}}" id="create-form">
    @csrf
    @method('PATCH')
    <h3>Edit Todo</h3>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    
    <fieldset>
        <label for="">Title</label>
        <input placeholder="title of todo" type="text" name="title" value="{{$todo['title']}}">
    </fieldset>
    <fieldset>
        <label for="">Target Date</label>
        <input placeholder="Target Date" type="date" name="date" value="{{$todo['date']}}">
    </fieldset>
    <fieldset>
        <label for="">Description</label>
        <textarea name="description" placeholder="Type your descriptions here..." tabindex="5">{{$todo['description']}}</textarea>
    </fieldset>
    <fieldset>
        <button type="submit" id="contactus-submit">Submit</button>
    </fieldset>
    <fieldset>
        <a href="/todo/" class="btn-cancel btn-lg btn">Cancel</a>
    </fieldset>
  
  </form>
</div>
@endsection
