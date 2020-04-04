<?php
require_once("config.php");
?>
<center>
  <a href="<?=$url?>" style="margin-bottom:30px;text-decoration:none;color:black;">
    Home
  </a>
</center>
<?php
foreach ($values->data as $key => $value) {
  if( isset($_GET["location"]) && replace($value->location) == $_GET["location"]){ ?>
    <div class="table">
      <div class="location" style="width:92%;background: #00716f;padding:20px;text-align:center;">
        <?php
          echo $value->location;
        ?>
      </div>

      <div class="confirmed">
        confirmed:

        <?php
          echo $value->confirmed;
        ?>
      </div>
      <div class="dead">
          dead:
        <?php
          echo $value->dead;
        ?>
      </div>
      <div class="recovered">
        recovered:
        <?php
          echo $value->recovered;
        ?>
      </div>
      <div class="updated">
        updated:
        <?php
          $date = new DateTime($value->updated);
          $result = $date->format('d/m/Y H:i:s');
          echo $result;
        ?>
      </div>
      <div class="latitude">
        latitude:
        <?php
          echo $value->latitude;
        ?>
      </div>
      <div class="longitude">
        longitude
        <?php
          echo $value->longitude;
        ?>
      </div>

    </div>
  <?php } ?>
<?php } ?>
