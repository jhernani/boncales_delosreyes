<?php 
date_default_timezone_set("Asia/Manila");
$date_today = "%l, %F %j, %Y"; ?>

<div class="ui grid">
	<div class="three wide column"></div>
	<div class="six wide column"><h4 class="header">First Semester A.Y. 2015-2016</h4></div>
	<div class="one wide column"></div>
	<div class="three wide column"><h5 class="header"><?php echo mdate($date_today); ?></h5></div>
	<div class="three wide column"></div>
</div>


