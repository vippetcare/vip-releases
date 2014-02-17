<?php

  namespace VIP {
    class ReleasesCollection {
      public function __construct() {
        $this->releases = func_get_args();
        $this->sortReleases();
        $this->currentRelease = $this->releases[0];
      }

      private function sortReleases() {
        usort($this->releases, function($a, $b) {
          return strcmp($b->version, $a->version);
        });
      }
    }
  }

?>