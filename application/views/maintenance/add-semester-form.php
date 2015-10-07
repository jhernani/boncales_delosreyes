<div class="ui grid">
	<div class="four wide column"></div>
	<div class="eight wide column">
		<div class="ui form">
		<?php echo form_open('semester/addSemester'); ?>
		  <div class="four wide field">
		    <label>Academic Year</label>
		    <select class="ui dropdown" name="academic_year_id" required>
	<option value="" disabled>Academic Year</option>
		    <?php foreach($academic_years as $ay)
		    {
		      echo "<option value=".$ay->academic_year_id.">".$ay->academic_year."</option>";
		  	}
		     ?>
		    </select>
		  </div>

		  <div class="four wide field">
		    <label>Semester</label>
		    <select class="ui dropdown" name="semester" required>
		      <option value="First Semester">First Semester</option>
		      <option value="Second Semester">Second Semester</option>
		      <option value="Summer">Summer</option>
		    </select>
		  </div>

	<div class="six wide field">
		<label>From</label>
		<input type="date" name="start_date" placeholder="YYYY-MM-DD" required>
	</div>

	<div class="six wide field">
		<label>To</label>
		<input type="date" name="end_date" placeholder="YYYY-MM-DD" required>
	</div>

<button class="ui green button" type="submit">Save</button>

<?php echo form_close(); ?>
		</div>
	</div>
	<div class="four wide column"></div>
</div>