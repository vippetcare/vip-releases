<?php

  namespace VIP {
    class Release {
      public function __construct($version, $releaseDate, $updateNotes) {
        $this->version = $version;
        $this->releaseDate = $releaseDate;
        $this->updateNotes = $updateNotes;
      }

      public function trainingReleaseUrl() {
        return $this->releaseUrl('training');
      }

      public function productionReleaseUrl() {
        return $this->releaseUrl('production');
      }

      private function releasePath($environment) {
        return "/releases/$this->version/$environment/VIPMobileClinic.plist";
      }

      private function releaseUrl($environment) {
        return "itms-services://?action=download-manifest&url=https://$_SERVER[HTTP_HOST]" . $this->releasePath($environment);
      }
    }
  }

?>