<div class="ui grid">
<div class="four wide column"></div>
<div class="eight wide column">
<h2 class="ui horizontal divider header">
  List of Academic Years
</h2>
</div>
<div class="four wide column"></div>


	<div class="six wide column"></div>
	<div class="four wide column">
	<table class="ui striped green table">
		<?php foreach($academic_years as $ay)
		    {
		    	echo "<tr><td class='center aligned'><a href='#'>".$ay->academic_year."</a></td></tr>";
		  	}
		?>
	</table>
	</div>
	<div class="six wide column"></div>
</div>