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
	<h3>Data Category</h3>

	<table class="table table-hover ">
		<thead class="thead-dark">
		<tr class="table-primary" >
			<th scope="col">ID</th>
			<th scope="col">NAMA</th>
			<th scope="col">KETERANGAN</th>
			<th scope="col">EDIT</th>
		</tr>

		@foreach($rows as $row)
		<tr class="table-primary">
			<td>{{ $row->cat_id }}</td>
			<td>{{ $row->cat_name }}</td>
			<td>{{ $row->cat_text }}</td>
			<td>
				<a href="{{ url('category/' . $row->cat_id . '/edit')}}" class="btn btn-outline-primary">EDIT</a>
				
				<form action="{{ url('category/' . $row->cat_id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="btn btn-outline-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('category/create') }}" class="btn btn-outline-primary">Tambah Data</a>
</div>

@endsection