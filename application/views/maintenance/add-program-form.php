<div class="ui grid">
	<div class="four wide column"></div>
	<div class="eight wide column">
		<div class="ui form">
		<?php echo form_open('course/addCourse'); ?>
		  <div class="four wide field">
		    <label>Program Code</label>
		    <input type="text" name="course_id" placeholder="ex. BSCS">
		  </div>
		  <div class="ten wide field">
		    <label>Program Title</label>
		    <input type="text" name="course_name" placeholder="ex. Bachelor of Science in Computer Science">
		  </div>
		  <button class="ui green button" type="submit">Save</button>
		<?php echo form_close(); ?>
		</div>
	</div>
	<div class="four wide column"></div>
</div>