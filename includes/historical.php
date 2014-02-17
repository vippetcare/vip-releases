<div id="accordion">
<?php
  $count = 0;
  foreach($allReleases as $release) {
    if ($release->version == $currentVersion) continue;
  ?>
  <div class="panel panel-default release-box">
    <div class="panel-heading">
      <h3>
        <span class="text-success">Production</span> Version <?php echo $release->version; ?> <small>released on <?php echo $release->releaseDate; ?></small>
        <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#production-<?php echo $count; ?>">
          <span class="glyphicon glyphicon-plus-sign"></span>
        </a>
      </h3>
    </div>
    <div id="production-<?php echo $count; ?>" class="panel-collapse collapse">
      <div class="panel-body">
        <ul class="list-group">
          <?php foreach($release->updateNotes as $note) { ?>
            <li class="list-group-item"><?php echo $note; ?></li>
          <?php } ?>
        </ul>
      </div>
      <?php if ($count < 1) { ?>
        <div class="panel-footer">
          <a href="<?php echo $release->productionReleaseUrl(); ?>" class="btn btn-success btn-lg btn-download">
            <span class="glyphicon glyphicon-download-alt"></span>
            <?php echo $release->version; ?> Production Download
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
  <?php if ($count < 1) { ?>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>
          <span class="text-danger">Training</span> Version <?php echo $release->version; ?> <small>released on <?php echo $release->releaseDate; ?></small>
          <a class="pull-right" data-toggle="collapse" data-parent="#accordion" href="#training-<?php echo $count; ?>">
            <span class="glyphicon glyphicon-plus-sign"></span>
          </a>
        </h3>
      </div>
      <div id="training-<?php echo $count; ?>" class="panel-collapse collapse">
        <div class="panel-body">
          <ul class="list-group">
            <?php foreach($release->updateNotes as $note) { ?>
              <li class="list-group-item"><?php echo $note; ?></li>
            <?php } ?>
          </ul>
        </div>
        <div class="panel-footer">
          <a href="<?php echo $release->trainingReleaseUrl(); ?>" class="btn btn-danger btn-lg btn-download">
            <span class="glyphicon glyphicon-download-alt"></span>
            <?php echo $release->version; ?> Training Download
          </a>
        </div>
      </div>
    </div>
  <? } ?>
<?php $count++; } ?>
</div>