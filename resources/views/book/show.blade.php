@extends('__layouts.app')

@section('title', $book->name)

@section('content')

	<div class="row">

		<div class="col-md-4">
			<div class="card shadow mb-4">
				<div class="card-body">
					<img src="{{ asset('images/' . $book->image)}}" class="img-fluid">
				</div>
			</div>
		</div>

		<div class="col-md-8">
			<div class="card shadow mb-4">
				<div class="card-header">
					<h6 class="font-weight-bold text-primary m-0">Data Member</h6>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" width="100%">
							<tbody>
								<tr>
									<th>Name</th>
									<td>{{ $book->name }}</td>
								</tr>
								<tr>
									<th>Code</th>
									<td>{{ $book->code }}</td>
								</tr>
								<tr>
									<th>Writer</th>
									<td>{{ $book->writer }}</td>
								</tr>
								<tr>
									<th>Year</th>
									<td>{{ $book->year }}</td>
								</tr>
								<tr>
									<th>Category Id</th>
									<td>{{ $book->category_id }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="card-footer">
					<a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
				</div>
			</div>
		</div>
	
	</div>


@endsection