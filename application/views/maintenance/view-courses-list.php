<div class="ui grid">
<div class="four wide column"></div>
<div class="eight wide column">
<h2 class="ui horizontal divider header">
  List of Courses
</h2>
</div>
<div class="four wide column"></div>
	<div class="six wide column"></div>
	<div class="four wide column">
	<table class="ui striped green table">
		<?php foreach($courses as $course)
		    {
		    	echo "<tr><td class='center aligned' colspan ='3'><a href='#'>".strtoupper($course->course_id)." - ".$course->course_name."</a></td>
		    	<td>"; ?>


<?php
if($this->session->userdata('role_id')==0){
echo form_open('course/deleteCourse');?>
<input class="form-control" type="hidden" name="course_id" value="<?php echo $course->course_id;?>" >
<input class="form-control" type="submit" name="course_submit" value="DELETE" onclick="return confirm('Are you sure you want to delete this item?')" />
</form>

<?php
//update product
echo form_open('course/viewUpdateCourseForm');?>
<input class="form-control" type="hidden" name="course_id" value="<?php echo $course->course_id;?>" >
<input class="form-control" type="submit" name="course_submit" value="UPDATE">
</form>




		    	<?php echo "</td>
		    	</tr>";
		  	}
		  }
		?>
	</table>
	</div>
	<div class="six wide column"></div>
</div>