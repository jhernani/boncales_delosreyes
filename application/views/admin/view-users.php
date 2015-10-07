<div class="ui grid">
  <div class="two wide column"></div>
  <div class="twelve wide column">
<table class="ui celled striped green table">
  <thead>
    <tr>
	    <th colspan="4">
	      <h3>Users</h3>
	    </th>
	    <th colspan="2">
	      <div class="ui category search">
  <div class="ui icon input">
    <input class="prompt" type="text" placeholder="Search ID...">
    <i class="search icon"></i>
  </div>
  <div class="results"></div>
</div>
	    </th>
  	</tr>
    
    <tr>
	    <th class="center aligned">
	      ID No.
	    </th>
	    <th class="center aligned" colspan="2">
	      Name
	    </th>
	    <th class="center aligned">
	      User Role
	    </th>
	    <th class="center aligned">
	      Status
	    </th>
	    <th class="center aligned">
	      Action
	    </th>
  	</tr>
  </thead>
  <tbody>


<?php foreach ($users as $user) {
  $user_id = $user->user_id;
  $firstname = $user->fname;
  $lastname = $user->lname;
  $role_id = $user->role_id;
  $status_id = $user->status;

  if ($role_id == 3)
  {
    $role = "Student";
  }

  else
  {
    $role = "Instructor";
  }

  if ($status_id == 1)
  {
    $status = "Active";
  }

  else
  {
    $status = "Inactive";
  }

    echo "<tr>
      <td class='right aligned'>".$user_id."</td>
      <td class='center aligned' colspan='2'>".$lastname.", ".$firstname."</td>
      <td>".$role."</td>
      <td>".$status."</td>
      <td class='collapsing'>
		<a class='circular ui icon button' href='<?php echo base_url()?>admin/viewUserProfile'>
  			<i class='browser icon'></i>
		</a>

		<a class='circular ui icon button' href='<?php echo base_url()?>admin/viewUpdateUserform'>
  			<i class='edit icon'></i>
		</a>

		<button class='circular ui icon button'>
  			<i class='remove user icon'></i>
		</button>
      </td>
    </tr>";

  }
   
?>

  </tbody>
  <tfoot>
    <tr><th colspan="6"> 
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
    </th>
  </tr></tfoot>
</table>
</div>
  <div class="two wide column"></div>
</div>
