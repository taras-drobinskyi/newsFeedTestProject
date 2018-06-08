@extends('layouts.master')

@section('content')

<div  class="containter">

	<h1>Edit an article</h1>
	<hr>
	<form method="POST" action="/articles/{{$article->id}}">
		<input name="_method" type="hidden" value="PATCH">
		{{ csrf_field() }}
	  <div class="form-group">
	    <label for="inputEmail1">Title</label>
	    <input type="text" class="form-control" id="inputEmail1"  value="{{$article->title}}" name="title" required>
	  </div>
	  <div class="form-group">
	    <label for="inputDescription1">Description</label>
	    <input type="text" class="form-control" id="inputDescription1"  value="{{$article->description}}" name="description" required>
	  </div>
	  <div class="form-group">
	    <label for="inputText1">Text</label>
	    <input type="text" class="form-control" id="inputText1"  value="{{$article->body}}" name="body" required>
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>


</div>
@endsection