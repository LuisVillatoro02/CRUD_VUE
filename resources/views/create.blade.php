<form method="POST" v-on:submit.prevent="createKeep">
<div class="modal fade" id="create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				<h4>Crear</h4>
			</div>
			<div class="modal-body">
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" v-model="newName">
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>
			</div>
			<div class="modal-body">
				<label for="address">Address</label>
				<input type="text" name="address" class="form-control" v-model="newAddress">
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>
			</div>
			<div class="modal-body">
				<label for="phone_number">Phone Number</label>
				<input type="number" name="phone_number" class="form-control" v-model="newPhone">
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Guardar">
			</div>
		</div>
	</div>
</div>
</form>