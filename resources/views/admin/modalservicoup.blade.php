<div class="modal fade" id="update{{ $servico->idtb_servico }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
					<button type="submit" class="btn btn-outline-secondary">Cadastrar</button>
				</div>
			</form>
		</div>
	</div>
</div>