<?php
if ( ! empty( $r['target'] ) ) {
	$target = 'target= "' . $r['target'] . '"';
} else {
	$target = null;
}
?>

<?php if ( ! empty( $r['icon'] ) ) : ?>

	<a href="<?php echo $r['href']; ?>" class="<?php echo $r['class']; ?>" <?php echo $target ?>>

		<span><span class="<?php echo $r['icon']; ?> ml-1 d-inline-block align-middle"></span> <?php echo $r['text']; ?></span>
	</a>


<?php elseif ( $r['button'] ) : ?>

	<button type="<?php echo $r['type'] ?>" class="<?php echo $r['class']; ?>" value="<?php echo $r['value']?>"
		<?php
		foreach ($r['data'] as $key => $data){
			echo 'data-' . $key . '="' . $data . '"';
		}
		?>
	>
		<!--        disabled="--><?php //echo $r['disabled']; ?><!--"-->
		<span><?php echo $r['text']; ?></span>
	</button>

<?php else: ?>


	<a href="<?php echo $r['href']; ?>"
	   class="<?php echo $r['class']; ?>" <?php echo $target ?> data-modal="<?php echo $r['modal']?>">
		<span><?php echo $r['text']; ?></span>
	</a>


<?php endif; ?>