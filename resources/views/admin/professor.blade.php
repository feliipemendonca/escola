@extends('layouts.indexDashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 title">
	<h1 class="h2">Professores</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
				<span data-feather="calendar"></span>
				Cadastrar Professor
			</button>
		</div>
	</div>
</div>
<div class="col-sm-12 col-md-12">
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div><br />
	@endif
	<table class="table">
		<thead class="table"> 
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>RG</th>
				<th>CPF</th>
				<th>Cadastro</th>
				<th>Atualizado</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($professors as $prof)
			<tr>
				<td>{{ $prof->id }}</td>
				<td>{{ $prof->nome }}</td>
				<td>{{ $prof->rg }}</td>
				<td>{{ $prof->cpf }}</td>
				<td>{{ $prof->created_at }}</td>
				<td>{{ $prof->updated_at }}</td>
				<td class="options">
					<ul>
						<li><a href="" data-toggle="modal" data-target="#update{{ $prof->id }}">Editar</a></li>
						<li>
							<form action="{{ route('prof.destroy', $curso->id)}}" method="post">
								@csrf
								@method('DELETE')
								<button type="submit">Apagar</button>
							</form>
						</li>
					</ul>
				</td>
			</tr>
			<div class="modal fade" id="update{{ $prof->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Atualizar Curso</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="{{ route('professor.update', $prof->id) }}" method="post" accept-charset="utf-8">
							<div class="modal-body">
								<div class="container">
									<div class="row">
										@method('PATCH')
										@csrf
										<div class="col-sm-12 col-md-12">
											<label for="Nome">Nome<em>*</em></label>
											<input type="text" class="form-control" name="nome" value="{{ $prof->nome }}" required>
										</div>
										<div class="col-sm-12 col-md-6">
											<label for="carga">RG<em>*</em></label>
											<input type="text" class="form-control" name="rg" value="{{ $prof->rg }}" required>
										</div>
										<div class="col-sm-12 col-md-6">
											<label for="Nome">CPF<em>*</em></label>
											<input type="text" class="form-control" name="cep" value="{{ $prof->cpf }}" required>	
										</div>
										<div class="col-sm-12 col-md-6">
											<label for="Nome">E-mail<em>*</em></label>
											<input type="email" class="form-control" name="email" required>	
										</div>
										<div class="col-sm-12 col-md-6">
											<label for="Nome">Senha<em>*</em></label>
											<input type="text" class="form-control" name="senha" required>	
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
				<h5 class="modal-title" id="exampleModalLabel">Cadastrar Curso</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>

			<form action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="container">
						<div class="row">
							@csrf	
							<div class="col-sm-12 col-md-12">
								<label for="Nome">Nome<em>*</em></label>
								<input type="text" class="form-control" name="nome" required>							
							</div>
							<div class="col-sm-12 col-md-6">
								<label for="Nome">CPF<em>*</em></label>
								<input type="text" class="form-control" name="cpf" required>							
							</div>
							<div class="col-sm-12 col-md-6">
								<label for="Nome">RG<em>*</em></label>
								<input type="text" class="form-control" name="rg" required>							
							</div>
							<div class="col-sm-12 col-md-6">
								<label for="Nome">E-mail<em>*</em></label>
								<input type="text" class="form-control" name="email" required>							
							</div>
							<div class="col-sm-12 col-md-6">
								<label for="Nome">Senha<em>*</em></label>
								<input type="text" class="form-control" name="senha" required>							
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