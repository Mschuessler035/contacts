<form class="form-horizontal" action="actions/add_contact.php" method="post">
	
	<div class="control-group">
		<label class="control-label" for="name">Name</label>
		<div class="controls">
			<input type="text" name="name" placeholder="Full Legal Name" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="email">Email</label>
		<div class="controls"">
			<input type="text" name="email" placeholder="Email" />
		</div>
	</div>
	
	<div class="control-group">
		<label class="control-label" for="email">Phone Number</label>
		<div class="controls"">
			<input type="text" name="phone" placeholder="No Dashes" />
		</div>
	</div>
	
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Add</button>
		<button type="button" class="btn" onclick="window.history.go(-1)">Cancel</button>
	</div>
</form>