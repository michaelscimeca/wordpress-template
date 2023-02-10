<?php
/**
* Button Template
*
* @package normcore
* @since NormCore 4.0
*/
?>
<?php $cookie_notification = $args[ "cookie-notification" ]; ?>
<div id="js-cookie-notification">
  <div class="row">
    <div class="start:w-full column">
      <div id="container">
        <?php echo $cookie_notification[ "notification_text" ]; ?>
        <div class="btn-container">
          <button class="js-btn accept">Accept</button>
          <button class="js-btn reject">Reject</button>
        </div>
      </div>
    </div>
  </div>
</div>
