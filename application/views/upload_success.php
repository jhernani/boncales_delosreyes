<h3>Successfully added</h3>

<?php

foreach($query->result() as $row){

	echo $row->school_id." ".$row->user_role_id."<br>";
}

?>