
<div class="ui inverted green menu admin-menu">
  <div class="menu">
    <a class="item" href="<?php echo base_url() ?>"><i class="home icon"></i>Home</a>
    <a class="item" href="<?php echo base_url('consultation/viewConsultationRecords'); ?>">Consultation Records</a>
</div>

<div class="right menu">
  <ul class="nav navbar-nav navbar-right">
    <li class="dropdown padding-zero margin-zero">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="alarm icon yellow"></i><span class="badge">2</span></a>
        <ul class="dropdown-menu notifications notifications-margin notification-dropdown" role="menu" aria-labelledby="dLabel">
          <div class="notification-heading">
            <div class="notification-footer"><a href="#"><h4 class="menu-title">View more<i class="chevron circle right icon"></i></h4></a></div>
            </div>
            <li class="divider"></li>
            <div class="notifications-wrapper">
              <div>
                <a>
                  <div class="notification-item">
                  <div class="ui large feed">
                  <div class="event">
                 </div>
                  </div>
                </a>
              </div>
            </div>  
            <li class="divider"></li>
        </ul>
  </ul>
  <div class="item">
    <div class="ui search">
      <div class="ui icon input">
        <input class="prompt" type="text" placeholder="Search...">
        <i class="search icon"></i>
      </div>
      <div class="results"></div>
    </div>
  </div>

  <div class="item">
    <div class="ui pointing dropdown link item">
      <img class="ui avatar image" src="<?php echo base_url() ?>assets/images/avatar/photo.jpg"><span>

      <?php 
        $ret = getUserInfo();  
        
        foreach ($ret as $row)
        {
          $firstname = $row->fname;
          $lastname = $row->lname;

          echo $firstname." ".$lastname;   
        } ?>
      </span>
      <i class="dropdown icon"></i>
      <div class="menu">
        <a class="item"><i class="settings icon"></i>Settings</a>
        <a class="item" href="<?php echo base_url('user/logout'); ?>"><i class="sign out icon"></i>Logout</a>
      </div>
    </div>
  </div>
</div>
</div>