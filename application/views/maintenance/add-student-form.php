<div class="ui grid">
	<div class="four wide column"></div>
	<div class="eight wide column">
		<div class="ui form">
		<?php echo form_open('maintenance/addStudent'); ?>
		  <div class="four wide field">
		    <label>User ID</label>
		    <input type="text" name="user_id" placeholder="ex. 1143332" required>
		  </div>
		  <div class="ten wide field">
		    <label>Password</label>
		    <input type="password" name="password" placeholder="Password" required>
		  </div>
		  <button class="ui green button" type="submit">Save</button>
		  <?php echo form_close(); ?>
		</div>
	</div>
	<div class="four wide column"></div>
</div>