<div class="ui grid">
  <div class="sixteen wide column"></div>
  <div class="sixteen wide column"></div>
  <div class="sixteen wide column"></div>
  <div class="four wide column"></div>
  <div class="eight wide column">

  <h2 class="ui horizontal divider header">
  Add Instructor Accounts
</h2>

  <form action="<?php echo base_url(); ?>maintenance/uploadTeachersCSV" method="post" enctype="multipart/form-data" name="form1" id="form1"> 
		<table class="ui celled striped green table">
			<tr>
				<th colspan="3">
	      		<h3>Upload CSV</h3>
	    		</th>
	    	</tr>
	    	<tr>
				<td> Choose your file: </td>
				<td><input type="file" class="form-control" name="userfile" id="userfile"  align="center"/></td>
				<td><div class="col-lg-offset-3 col-lg-9">    <button type="submit" name="submit" class="btn btn-info"  >   Upload  </button></div></td>
			</tr>
		</table> 
	</form>
</div>
  <div class="four wide column"></div>
</div>
 