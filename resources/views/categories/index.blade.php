@extends('../layouts.admin')

@section('content')
	<div class="regiter_account">
		<form action="{{ route('categories.create')}}" method="get">
			@csrf
			<button type="submit"  >Create Category</button>
		</form>
		<h2>Categories</h2>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach( $categories as $item)
				<tr>
					<td>{{ $item->id }}</td>
					<td>{{ $item->name }}</td>
					<td>
						<form action="{{ route('categories.destroy', $item->id) }}" method="post">
							@csrf
							@method('DELETE')
							<button type="submit" >Delete</button>
						</form> 
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection