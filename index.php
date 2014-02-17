<?php include( 'includes/header.php' ); ?>
<ul class="nav nav-tabs release-tabs">
  <li class="active">
    <a href="#production" data-toggle="tab">
      <span class="glyphicon glyphicon-off text-success vip-icon"></span>
      Production
    </a>
  </li>
  <li>
    <a href="#training" data-toggle="tab">
      <span class="glyphicon glyphicon-exclamation-sign text-danger vip-icon"></span>
      Training
    </a>
  </li>
  <li>
    <a href="#historical" data-toggle="tab">
      <span class="glyphicon glyphicon-book text-warning vip-icon"></span>
      Historical
    </a>
  </li>
</ul>
<?php include( ROOT_PATH . '/includes/page_details.php' ); ?>
<a class="pull-right" href="/lib/password_protect.php?logout=1">Logout</a>
<?php include( ROOT_PATH . '/includes/footer.php' ); ?>