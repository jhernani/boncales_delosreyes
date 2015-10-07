<div class="ui grid">
<div class="four wide column"></div>
<div class="eight wide column">
<h2 class="ui horizontal divider header">
  Update Course Information
</h2>
</div>
<div class="four wide column"></div>


<div class="four wide column"></div>
<div class="eight wide column">
	<div class="ui form">
	<?php echo form_open('course/updateCourse'); ?>

		<div class="six wide field">
		<label>Course ID</label>
		<input placeholder="Course ID" name="course_id" type="text" value="<?php echo strtoupper($course_id); ?>" required>
		</div>

		<div class="sixteen wide field">
		<label>Course Name</label>
		<input class="eight wide field" placeholder="Course Name" name="course_name" type="text" value="<?php echo strtoupper($course_name); ?>" autofocus required>
		</div>

		<button class="ui green button" type="submit" name="course_submit">UPDATE</button>
	<?php echo form_close(); ?>
	</div>
</div>
<div class="four wide column"></div>

</div>