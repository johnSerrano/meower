<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 aside">
  <div data-toggle="collapse" data-target="#aside-inner" class="well" id="notification-bar">
    <h4>Notifications <span class="badge">1</span></h4>
  </div>
  <div id="aside-inner" class="collapse in">
    <?php
    if( $_SESSION["user"] != false ) {
      $login = $_SESSION["user"]["login"];
      $rot13login = str_rot13($login);
      $login_length = strlen($login);
    ?>
    <div class="well">
      <p>You are logged in, <strong><?php echo "$login";?></strong></p>
      <p>Your rot13 login is <strong><?php echo "$rot13login";?></strong></p>
      <p>Your login length is <strong><?php echo "$login_length";?></strong></p>
    </div>
    <?php } ?>
    <div class="well">
      <p><strong>New Message</strong> from <strong>Ian</strong>:</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>
