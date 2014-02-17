<div class="panel panel-default release-box">
  <div class="panel-heading">
    <h3>
      <span class="text-danger">Training</span> Version <?php echo $currentVersion; ?> <small>released on <?php echo $releaseDate; ?></small>
    </h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
      <?php foreach($currentRelease->updateNotes as $note) { ?>
        <li class="list-group-item"><?php echo $note; ?></li>
      <?php } ?>
    </ul>
  </div>
  <div class="panel-footer">
    <a href="<?php echo $currentRelease->trainingReleaseUrl(); ?>" class="btn btn-danger btn-lg btn-download">
      <span class="glyphicon glyphicon-download-alt"></span>
      <?php echo $currentVersion; ?> Training Download
    </a>
  </div>
</div>