<div class="ui grid">
  <div class="two wide column"></div>
  <div class="three wide column">
	<div class="ui form">
	  <div class="field">

	    <select>
	      <option value="">Current Academic Year</option>
	      <option value="1">2014-2015</option>
	      <option value="0">2013-2014</option>
	    </select>
	  </div>

	  <div class="field">
	    <select>
	      <option value="">Current Semester</option>
	      <option value="1">1st Semester</option>
	      <option value="0">2nd Semester</option>
	    </select>
	  </div>

	  <div class="field">
		<button type="submit" class="ui small yellow button">Go</button>
	  </div>
	</div>
  </div> <!-- close DIV for form -->
<div class="one wide column">
	<div class="ui icon button" data-content="Add a new academic year">
  	<i class="add icon"></i>
	</div>
		<br>
		<br>
	<div class="ui icon button" data-content="Add a new semester">
  		<i class="add icon"></i>
	</div>
</div>
<div class="ten wide column"></div>

<h2 class="ui horizontal divider header">
  Instructors
</h2>

<!-- Teachers Table / new row-->

  <div class="three wide column"></div>
	<div class="ten wide column">
	<div class="ui grid">
		<?php foreach ($users as $user) {
			  $user_id = $user->user_id;
			  $firstname = $user->fname;
			  $lastname = $user->lname;
			  $id = $user->user_id;


			  if(($lastname != NULL) && ($firstname != NULL))
			  {

echo "<div class='two wide column teacher-names'>
		<a href='admin/viewTeacherDashboard'><img class='ui tiny centered bordered rounded image teacher-pics' src='assets/images/avatar/photo.jpg'>".$lastname.", ".$firstname."</a>
		</div>"; }

		else {
			echo "<div class='two wide column teacher-names'>
		<a href='admin/viewTeacherDashboard'><img class='ui tiny centered bordered rounded image teacher-pics' src='assets/images/avatar/photo.jpg'>".$user_id."</a>
		</div>";
		}

} ?>
</div>

	</div>
	<div class="three wide column"></div>

<div class="eight wide column"></div>
<div class="four wide column">
	<div class="ui right floated pagination menu">
        <a class="icon item">
          <i class="left chevron icon"></i>
        </a>
        <a class="item">1</a>
        <a class="item">2</a>
        <a class="item">3</a>
        <a class="item">4</a>
        <a class="icon item">
          <i class="right chevron icon"></i>
        </a>
      </div>
</div>
<div class="four wide column"></div>


</div>
