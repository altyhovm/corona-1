<?php
require_once("config.php");
include("select.php");
foreach ($values->data as $key => $value) {
  ?>


    <div class="ule">
      <a href="<?=$url?>location/<?php echo replace($value->location); ?>">
        <?php echo $value->location; ?>
      </a>

    </div>
<?php }  ?>
