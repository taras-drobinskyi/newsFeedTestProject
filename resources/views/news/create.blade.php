@extends('layouts.master')

@section('content')

<div  class="containter">

	<h1>Create a new article</h1>
	<hr>
	<form method="POST" action="/articles">
		{{ csrf_field() }}
	  <div class="form-group">
	    <label for="inputEmail1">Title</label>
	    <input type="text" class="form-control" id="inputEmail1" placeholder="Title" name="title" required>
	  </div>
	  <div class="form-group">
	    <label for="inputDescription1">Description</label>
	    <input type="text" class="form-control" id="inputDescription1" placeholder="Description" name="description" required>
	  </div>
	  <div class="form-group">
	    <label for="inputText1">Text</label>
	    <input type="text" class="form-control" id="inputText1" placeholder="Text" name="body" required>
	  </div>
	  
	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>


</div>
@endsection