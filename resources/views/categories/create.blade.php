@extends('layouts.admin')

@section('content')
	<form action="{{ route('categories.store')}}" method="post">
		@csrf
		<label>Name of Category</label>
		<input type="text" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" >
		<button type="submit" class="grey">Create Category</button>
	</form>
@endsection