<div class="ui grid">
	<div class="two wide column"></div>
	<div class="three wide column"><h1 class="header">ICT141</h1>
									<h3 class="header">6:00-7:30</h3></div>
	<div class="eleven wide column">
		<?php echo form_open('student/changePage'); ?>
		<div class="ui form">
			<div class="inline fields">
				<div class="four wide field">
				    <select name="page">
				      <option value="0" selected>Class Calendar</option>
				      <option value="1">Class Attendance</option>
				    </select>
				</div>
				<div class="field">
				<button type="submit" class="ui fluid yellow submit button">Go</button>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
	
	<div class="two wide column"></div>
	<div class="eight wide column">
	<img class="disabled fluid bordered ui image" src="../assets/images/calendar.gif">
	</div>
	<div class="four wide field"></div>
	<div class="two wide field"></div>

</div>