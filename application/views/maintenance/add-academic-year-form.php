<div class="ui grid">
	<div class="four wide column"></div>
	<div class="eight wide column">
		<div class="ui form">
		<?php echo form_open('academic_year/addAcademicYear'); ?>
		  <div class="six wide field">
		    <label>Academic Year</label>
		    <input type="text" name="academic_year" placeholder="ex. 2015-2016">
		  </div>
		  <button class="ui green button" type="submit">Save</button>
		<?php echo form_close(); ?>
		</div>
	</div>
	<div class="four wide column"></div>
</div>