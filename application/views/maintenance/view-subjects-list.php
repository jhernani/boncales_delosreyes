<div class="ui grid">
<div class="four wide column"></div>
<div class="eight wide column">
<h2 class="ui horizontal divider header">
  List of Subjects
</h2>
</div>
<div class="four wide column"></div>
	<div class="six wide column"></div>
	<div class="four wide column">
	<table class="ui striped green table">
		<?php foreach($subjects as $sub)
		    {
		    	echo "<tr><td class='center aligned'><a href='#'>".$sub->subject_code."</a></td>
		    		<td class='center aligned'><a href='#'>".$sub->subject_title."</a></td>
		    	</tr>";
		  	}
		?>
	</table>
	</div>
	<div class="six wide column"></div>
</div>