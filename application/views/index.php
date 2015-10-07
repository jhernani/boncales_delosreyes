  <style type="text/css">
    body {
      background-color: #DADADA;

      background: url("assets/images/background.png");
  -moz-background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>

<body>
<div class="ui middle aligned center aligned grid homepage">
  <div class="column">
    <h2 class="ui yellow image header">
      <img src="assets/images/usclogo.png" class="image">
      <div class="content">
        Log-in to your account
      </div>
    </h2>
    <div class="ui large form">
  <?php echo form_open('user/validateLogin'); ?>
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="user_id" placeholder="ID Number">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>

        <button type="submit" class="ui fluid large green submit button">Login</button>
      </div>

      <div class="ui error message"></div>

  <?php echo form_close(); ?>
  </div>
  </div>
</div>

</body>