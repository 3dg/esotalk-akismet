<?php
if (!defined("IN_ESOTALK")) exit;
$form = $data["form"];
?>

<?php echo $form->open(); ?>
<div class='section'>
<ul class='form'>
  <li>
    <label>API KEY</label>
    <?php echo $form->input("apiKey", "text"); ?>
    <small>Apply key on <a href="https://akismet.com/" target="_blank">Akismet</a></small>
  </li>
  <li>
    <label>User post limitation</label>
    <?php echo $form->input("userPostLimit", "number"); ?>
    <small>Only check user's post who's post count less than this, empty this to always check.</small>
  </li>
</ul>
</div>
  <div class='buttons'>
  <?php echo $form->saveButton("submit"); ?>
</div>
<?php echo $form->close(); ?>
