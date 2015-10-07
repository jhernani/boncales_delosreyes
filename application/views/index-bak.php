<div id="index-wrapper">
<div class="fheader-cont">
    <div class="fheader">
        <div class="ui grid">
          <div class="sixteen wide column"></div>
        </div>
    </div>
</div>
<div class="ui grid">
  <div class="six wide column"></div>
  <div class="six wide column">
  <table class="ui inverted yellow table">
  <tr>
    <th><h3>Login</h3></th>
  </tr>
  <?php echo form_open('user/validateLogin'); ?>
<tr><td>
  <div class="ui form segment">
    <div class="field">
      <label>ID No.</label>
      <input placeholder="ID Number" name="user_id" type="text">
    </div>
    <div class="field">
      <label>Password</label>
      <input placeholder="Password" name="password" type="password">
    </div>
    <div class="ui">
      <button type="submit" class="ui green button" id="loginbutton">Login</button>
    </div>
  </div>

  <?php echo form_close(); ?>
</td>
</tr>
</table>
</div>
<div class="six wide column"></div>
</div>
</div>