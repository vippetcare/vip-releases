<?php include( '../../includes/header.php' ); ?>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <form role="form" method="post" enctype="multipart/form-data" id="create-release" action="/releases">
      <h2 class="text-primary">Create a New Release</h2>
      <?php include( ROOT_PATH . 'views/releases/_release_fields.php' ); ?>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <?php include( ROOT_PATH . 'views/releases/_production_upload_fields.php' ); ?>
          <?php include( ROOT_PATH . 'views/releases/_training_upload_fields.php' ); ?>
        </div>
      </div>
      <?php include( ROOT_PATH . 'views/releases/_release_notes.php' ); ?>
      <div class="row" id="create-button">
        <div class="col-xs-12 col-md-6 col-md-offset-3"><input type="submit" class="btn btn-warning btn-block btn-lg" value="Create Release"></input></div>
      </div>
    </form>
  </div>
</div>
<?php include( ROOT_PATH . '/includes/footer.php' ); ?>