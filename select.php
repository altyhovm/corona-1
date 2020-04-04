<?php
require_once("config.php");
?>
<div class="select">
  <span>Select Location</span></br></br>
  <select id="dynamic_select" class="select">
    <?php
    foreach ($values->data as $key => $value) {
      ?>
        <option value="<?=$url?>location/<?php echo replace($value->location); ?>">
          <?php echo $value->location; ?>
        </option>
      <?php } ?>
  </select>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
      // bind change event to select
      $('#dynamic_select').on('change', function () {
          var url = $(this).val(); // get selected value
          if (url) { // require a URL
              window.location = url; // redirect
          }
          return false;
      });
    });

</script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script type="text/javascript">
$('#dynamic_select').select2();

</script>
