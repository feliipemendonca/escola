@extends('layouts.indexDashboard')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 title">
	<h1 class="h2">Cursos</h1>
	<div class="btn-toolbar mb-2 mb-md-0">
		<div class="btn-group mr-2">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
				<span data-feather="calendar"></span>
				Cadastrar Curso
			</button>
		</div>
	</div>
</div>
<div class="col-sm-12 col-md-12">


</div>
<div class="col-sm-12 col-md-12">
	
	<table class="table">
		<thead class="table"> 
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Valor</th>
				<th>Carga Horária</th>
				<th>Cadastro</th>
				<th>Atualizado</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($cursos as $curso)
			<tr>
				<td>{{ $curso->id }}</td>
				<td>{{ $curso->nome }}</td>
				<td>{{ $curso->valor }}</td>
				<td>{{ $curso->carga }}</td>
				<td>{{ $curso->created_at }}</td>
				<td>{{ $curso->updated_at }}</td>
				<td class="options">
					<ul>
						<li><a href="" data-toggle="modal" data-target="#update{{ $curso->id }}">Editar</a></li>
						<li>
							<form action="{{ route('curso.destroy', $curso->id)}}" method="post">
								@csrf
								@method('DELETE')
								<button type="submit">Apagar</button>
							</form>
						</li>
					</ul>
				</td>
			</tr>
			<div class="modal fade" id="update{{ $curso->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Atualizar Curso</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="{{ route('curso.update', $curso->id) }}" method="post" accept-charset="utf-8">
							<div class="modal-body">
								<div class="container">
									<div class="row">
										@method('PATCH')
										@csrf
										<div class="col-sm-12 col-md-12">
											<label for="Nome">Nome<em>*</em></label>
											<input type="text" class="form-control" name="curso" value="{{ $curso->nome }}" required>						
										</div>
										<div class="col-sm-12 col-md-6">
											<label for="carga">Carga Horária<em>*</em></label>
											<input type="text" class="form-control" name="carga" value="{{ $curso->carga }}" required>						
										</div>
										<div class="col-sm-12 col-md-6">
											<label for="Nome">Valor<em>*</em></label>
											<input type="text" class="form-control" name="valor" value="{{ $curso->valor }}" required>						
										</div>
										<div class="col-sm-12 col-md-12">
											<label for="publico">Público Alvo<em>*</em></label>
											<textarea class="form-control" rows="2" name="alvo" required>{{ $curso->alvo }}</textarea>		
										</div>
										<div class="col-sm-12 col-md-12">
											<label for="mercado">Mercado<em>*</em></label>
											<textarea class="form-control" rows="3" name="mercado" required>{{ $curso->mercado  }}</textarea>		
										</div>
										<div class="col-sm-12 col-md-12">
											<label for="publico">Sobre o Curso<em>*</em></label>
											<textarea class="form-control" rows="3" name="sobre" required>{{ $curso->sobre }}</textarea>
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
							<div class="col-sm-12 col-md-6">
								<label for="Nome">Nome<em>*</em></label>
								<input type="text" class="form-control" name="curso" required>							
							</div>
							<div class="col-sm-12 col-md-6">
								<label for="img">Imagem<em>*</em></label>
								<input type="file" name="img" required>
							</div>
							<div class="col-sm-12 col-md-6">
								<label for="carga">Carga Horária<em>*</em></label>
								<input type="text" class="form-control" name="carga" required>							
							</div>
							<div class="col-sm-12 col-md-6">
								<label for="Nome">Valor<em>*</em></label>
								<input type="text" class="form-control" name="valor" required>							
							</div>
							<div class="col-sm-12 col-md-12">
								<label for="publico">Público Alvo<em>*</em></label>
								<textarea class="form-control" rows="2" name="alvo" required></textarea>							
							</div>
							<div class="col-sm-12 col-md-12">
								<label for="mercado">Mercado<em>*</em></label>
								<textarea class="form-control" rows="3" name="mercado" required></textarea>							
							</div>
							<div class="col-sm-12 col-md-12">
								<label for="publico">Sobre o Curso<em>*</em></label>
								<textarea class="form-control" rows="3" name="sobre" required></textarea>							
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