@extends('layouts.dashboard')

@section('content')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Добавить работу</h1>

</div>

<div class="row">
	<div class="col-md-4">
		<form method="post" action="{{ route('works.store') }}" enctype="multipart/form-data">
			<div class="form-group">
			    <label>Title</label>
			    <input type="text" name="title" class="form-control" 
			    placeholder="Title">
				
				@if ($errors->has('title'))
                    <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @endif

			</div>
			<div class="form-group">
			    <label>Link</label>
			    <input type="text" name="link" class="form-control" placeholder="Link">
			</div>
			<div class="form-group">
			    <label>Preview</label>
			    <input type="file" name="preview" class="form-control" placeholder="Preview">

			    @if ($errors->has('preview'))
                    <span class="text-danger" role="alert">
                        <strong>{{ $errors->first('preview') }}</strong>
                    </span>
                @endif

			</div>
			<div class="form-group">
			    <label>Description</label>
			    <textarea name="description" class="form-control" placeholder="Description">
			    	
			    </textarea>
			</div>
			<button class="btn btn-success">Save</button>
			{{ csrf_field() }}
		</form>
	</div>
	<div class="col-md-8"></div>
</div>
@endsection