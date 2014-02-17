<div class="panel panel-default">
  <div class="panel-heading">
    <h3><span class="text-success">Production</span></h3>
  </div>
  <div class="panel-body">
    <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-btn">
            <span class="btn btn-success btn-file btn-lg">
              ipa
              <input type="file" name="production_ipa" id="production_ipa" data-release-environment="production" class="form-control input-lg">
            </span>
          </span>
          <input type="text" name="release[production_ipa]" class="form-control input-lg" readonly>
        </div>
        <span class="help-block" id="production-ipa"></span>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6">
      <div class="form-group">
        <div class="input-group">
          <span class="input-group-btn">
            <span class="btn btn-success btn-file btn-lg">
              plist
              <input type="file" name="production_plist" id="production_plist" data-release-environment="production" class="form-control input-lg">
            </span>
          </span>
          <input type="text" name="release[production_plist]" class="form-control input-lg" readonly>
        </div>
        <span class="help-block" id="production-plist"></span>
      </div>
    </div>
  </div>
</div>