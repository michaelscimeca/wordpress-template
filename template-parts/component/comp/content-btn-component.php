<?php
/**
* Button Template
*
* @package normcore
* @since NormCore 4.0
*/
?>

<?php $buttons = $args['buttons']; ?>
<?php if(is_array($buttons)): ?>
	<div class="btn-across">
		<?php	foreach ($buttons as $button): ?>
			<?php	if(!empty($button['button']['link']['title']) || !empty($button['button']['button_text'])):	?>
				<div class="btn-animation">
					<?php if($button['button']['button_type'] === "Link"): ?>
						<a
						class="btn element <?php echo $button['button']['button_color'] . ' ' .$button['button']['button_style'] .' ' . $button['button']['button_size']; ?>"
						href="<?php echo $button['button']['link']['url']; ?>"
						target="<?php echo $button['button']['link']['target']; ?>">
						<span><?php echo $button['button']['link']['title']; ?></span>
					</a>
				<?php else: ?>
					<button class="btn element <?php echo $button['button']['button_color'] . ' ' .$button['button']['button_style'] .' ' . $button['button']['button_size'] . ' ' .  $button['button']['module_choice'] ?>">
						<span><?php echo $button['button']['button_text']; ?></span>
					</button>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	<?php endforeach; ?>
</div>
<?php endif; ?>
