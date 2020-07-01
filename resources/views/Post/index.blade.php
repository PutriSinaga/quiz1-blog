@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h2	{
			margin-bottom: 30px;
		}

	</style>
</head>
<body>

<div class="container">
	<h3>Data Post</h3>

	<table class="table table-hover ">
		<thead class="thead-dark">
		<tr class="table-primary">
			<th scope="col">ID</th>
			<th scope="col">CATEGORY ID</th>
			<th scope="col">TANGGAL</th>
			<th scope="col">SLUG</th>
			<th scope="col">JUDUL</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr class="table-primary">
			<td>{{ $row->id }}</td>
			<td>{{ $row->category->cat_name }}</td>
			<td>{{ $row->post_date }}</td>
			<td>{{ $row->post_slug }}</td>
			<td>{{ $row->post_tittle }}</td>
			<td>{{ $row->post_text }}</td>
			<td>
				<a href="{{ url('post/' . $row->id . '/edit')}}" class="btn btn-outline-primary">EDIT</a>
				
				<form action="{{ url('post/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-outline-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('post/create') }}" class="btn btn-outline-primary">Tambah Data</a>
</div>

</body>
</html>

@endsection