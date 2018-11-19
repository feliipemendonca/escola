@extends('admin.curso')

@section('alert')

@if(session()->get('success'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
	{{ session()->get('success') }}  
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div><br />
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div><br />
@endif

@endsection