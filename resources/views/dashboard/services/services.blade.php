@extends('layouts.dashboard')

@section('content')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Услуги</h1>
</div>

<div class="row">
	<div class="col-md-12">
		<form method="post" action="{{ route('serviceheader.update') }}">
			<div class="form-group">
			    <label>Title</label>
			    <input type="text" name="title" class="form-control" value="{{ $serviceHeader->title }}" placeholder="Title">
			</div>
			<div class="form-group">
			    <label>Content</label>
			    <textarea id="textEd" name="description" class="form-control" placeholder="Description">{{ $serviceHeader->description }}</textarea>
			</div>
			<button class="btn btn-success">Save</button>
			
			@method('PUT')

			{{ csrf_field() }}
		</form>
	</div>
</div>

<br>

<a href="{{ route('services.create') }}" class="btn btn-success">
	Добавить
</a>

<br>
<br>

<div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Description</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($services as $service)
        <tr>
          <td>{{ $service->id }}</td>
          <td>{{ $service->title }}</td>
          <td>{{ $service->description }}</td>
          <td>
          	<a class="btn btn-success" href="{{ route('services.edit', $service->id) }}">
          		edit
          	</a>
          </td>
          <td>
          	<form method="post" action="{{ route('services.destroy', $service->id) }}">
              
              <button onclick="return confirm('Вы действительно хотите удалить?')" class="btn btn-danger">Delete</button>
              @method('DELETE')

              {{ csrf_field() }}
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection