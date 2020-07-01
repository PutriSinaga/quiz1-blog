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

		table {
			background-color: #FFFFE0;
		}

	</style>
</head>
<body>

</body>
</html>

<div class="container">
	<h3>Data Album</h3>

	<table class="table table-hover ">
		<thead class="thead-dark">
		<tr class="table-primary">
			<th scope="col">ID</th>
			<th scope="col">PHOTO ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr class="table-primary">
			<td>{{ $row->id }}</td>
			<td>{{ $row->photo->pho_tittle }}</td>
			<td>{{ $row->album_name }}</td>
			<td>{{ $row->album_text }}</td>
			<td>
				<a href="{{ url('album/' . $row->id . '/edit')}}" class="btn btn-outline-primary">EDIT</a>
				
				<form action="{{ url('album/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-outline-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('album/create') }}" class="btn btn-outline-primary">Tambah Data</a>
</div>

@endsection