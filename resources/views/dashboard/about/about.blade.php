@extends('layouts.dashboard')

@section('content')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">О нас</h1>
</div>

<div class="row">
	<div class="col-md-12">
		<form method="post" >
			<div class="form-group">
			    <label>Title</label>
			    <input type="text" name="title" class="form-control" value="{{ $about->title }}" placeholder="Title">
			</div>
			<div class="form-group">
			    <label>Content</label>
			    <textarea id="textEd" name="content" class="form-control" placeholder="Content">{{ $about->content }}</textarea>
			</div>
			<button class="btn btn-success">Save</button>
			{{ csrf_field() }}
		</form>
	</div>
</div>
@endsection