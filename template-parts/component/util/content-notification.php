<?php
/**
* Button Template
*
* @package normcore
* @since NormCore 4.0
*/
?>

<?php $notification = $args['notification']; ?>
<div id="js-notification">
  <div class="row">
    <div class="start:w-full column">
      <div id="container">
        <?php echo $notification['notification_text']; ?>
        <button id="js-close-btn">x</button>
      </div>
    </div>
  </div>
</div>
