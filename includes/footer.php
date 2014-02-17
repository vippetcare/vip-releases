    </div>

    <?php
      if( $is_development == true ) {
        echo '<div class="container"><pre>';
        echo '<h4>$_POST =></h4><p>';
        print_r($_POST);
        echo '</p><hr class="vip-colorgraph">';
        echo '<h4>$_GET =></h4><p>';
        print_r($_GET);
        echo '</p><hr class="vip-colorgraph">';
        if( isset($visible) ) {
          echo '<h4>$visible =></h4><p>';
          print_r($visible);
          echo '</p>';
        }
        echo '</pre></div>';
      }
    ?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="/javascripts/bootstrap-datepicker.js"></script>
    <script src="/javascripts/application.js"></script>
  </body>
</html>