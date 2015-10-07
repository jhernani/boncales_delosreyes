<div class="ui grid">
  <div class="two wide column"></div>
  <div class="twelve wide column">
  <h2 class="ui horizontal divider header">
  Consultants
</h2>
<table class="ui celled striped green table">
  <tbody>
<?php
  foreach ($users as $user) {
    $firstname = $user->fname;
    $lastname = $user->lname;
    $user_id = $user->user_id;
  


        if(($lastname != NULL) && ($firstname != NULL))
        {
  echo "<tr>
      <td class='center aligned' colspan='4'><a href='viewConsultationRecordsByTeacher'>".$lastname.", ".$firstname."</a></td>
  </tr>"; }

  else{
      echo "<tr>
      <td class='center aligned' colspan='4'><a href='viewConsultationRecordsByTeacher'>".$user_id."</a></td>
  </tr>";
  }

  }

?>
  </tbody>
  <tfoot>
    <tr><th colspan="4"> 
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
