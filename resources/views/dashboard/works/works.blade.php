@extends('layouts.dashboard')

@section('content')
 <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Работы</h1>
</div>

<a href="{{ route('works.create') }}" class="btn btn-success">
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
      	@foreach($works as $work)
        <tr>
          <td>{{ $work->id }}</td>
          <td>{{ $work->title }}</td>
          <td>{{ $work->description }}</td>
          <td>
          	<a class="btn btn-success" href="{{ route('works.edit', $work->id) }}">
          		edit
          	</a>
          </td>
          <td>
          	<form method="post" action="{{ route('works.destroy', $work->id) }}">
              
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