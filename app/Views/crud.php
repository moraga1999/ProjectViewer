<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CRUD Data Table</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="<?= base_url('css/crud.css') ?>">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>

</head>
<body class="fondo">

	<div class="container-xl">
		<div class="table-responsive">
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-6">
							<h2>Profesores Guía</h2>
						</div>
						<div class="col-sm-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar Profesor</span></a>						
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Correo</th>
							<th>Oficina</th>
							<th>Teléfono</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<?php if($users): ?>
						<?php foreach ($users as $user):?>
						<tr>
							<td><?php echo $user['id'];?></td>
							<td><?php echo $user['name'];?></td>
							<td><?php echo $user['email'];?></td>
							<td><?php echo $user['office'];?></td>
							<td><?php echo $user['phone'];?></td>
							<td>
								<a href="#editEmployeeModal" data-id="<?= $user['id'];?>" data-name="<?= $user['name'];?>" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Editar">&#xE254;</i></a>
								<a href="<?php echo base_url('delete/'.$user['id']);?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
							</td>
						</tr>
    					<?php endforeach;?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>        
	</div>
	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?= site_url('/submit-form')?>" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Agregar Profesor</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Nombre</label>
							<input name="name" type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input name="email" type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input name="pass" type="password" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Repita Contraseña</label>
							<input name="repass" type="password" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Oficina</label>
							<textarea name="office" class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Teléfono</label>
							<input name="phone" type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-success" value="Agregar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Edit Modal HTML -->
	<div id="editEmployeeModal" class="modal fade" action="<?= site_url('/update') ?>" method="post">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?= site_url('crud')?>" method=post>
					<div class="modal-header">					
					<h1><?php echo $user['id'];?></h1>	
						<h4 class="modal-title">Editar Profesor</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
						
								
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input type="email" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Contraseña</label>
							<input type="password" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Repita Contraseña</label>
							<input type="password" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Oficina</label>
							<textarea class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<label>Teléfono</label>
							<input type="text" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar">
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- Delete Modal HTML -->
	<div id="deleteEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Eliminar Profesor</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<p>¿Estás seguro de eliminar a este usuario?</p>
						<p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-danger" value="Eliminar">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>