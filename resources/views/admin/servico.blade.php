@extends('layouts.indexDashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
	<h1 class="h2">Serviços</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
				<span data-feather="calendar"></span>
				Cadastrar Seviço
			</button>
		</div>
	</div>
</div>

@if(session()->get('success'))
<div class="alert alert-success">
	{{ session()->get('success') }}  
</div><br />
@endif
<div class="col-sm-12 col-md-12">
	<table class="table">
		<thead class="thead-dark"> 
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($servicos as $servico)
			<tr>
				<td>{{ $servico->id }}</td>
				<td>{{ $servico->nome }}</td>
				<td class="options">
					<ul>
						<li><a href="" data-toggle="modal" data-target="#update{{ $servico->id }}">Editar</a></li>
						<li>
							<form action="{{ route('servico.destroy', $servico->id)}}" method="post">
								@csrf
								@method('DELETE')
								<button type="submit">Apagar</button>
							</form>
						</li>
					</ul>
				</td>
			</tr>
			<div class="modal fade" id="update{{ $servico->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Cadastrar Serviço</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div><br />
						@endif

						<form action="{{ route('servico.update', $servico->id) }}" method="post" accept-charset="utf-8">
							<div class="modal-body">
								<div class="container">
									<div class="row">
										@method('PATCH')
										@csrf
										<div class="col-sm-12 col-md-12">
											<label for="Nome">Nome<em>*</em></label>
											<input type="text" class="form-control" name="title" value="{{ $servico->nome }}" required>							
										</div>
										<div class="col-sm-12 col-md-12">
											<label for="publico">Descrição<em>*</em></label>
											<textarea class="form-control" rows="2" name="body" required> {{ $servico->sobre }} </textarea>					
										</div>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
								<button type="submit" class="btn btn-outline-secondary">Atualizar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			@endforeach
		</tbody>
	</table>
</div>

<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Cadastrar Serviço</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div><br />
			@endif
			<form action="" method="post" accept-charset="utf-8">
				<div class="modal-body">
					<div class="container">
						<div class="row">
							@csrf
							<div class="col-sm-12 col-md-12">
								<label for="Nome">Nome<em>*</em></label>
								<input type="text" class="form-control" name="title" required>							
							</div>
							<div class="col-sm-12 col-md-12">
								<label for="publico">Descrição<em>*</em></label>
								<textarea class="form-control" rows="2" name="body" required></textarea>					
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-outline-secondary">Cadastrar</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection