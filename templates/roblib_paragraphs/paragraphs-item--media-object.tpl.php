<?php
$image   = $content['field_image_upload'];
$caption = $content['field_image_caption'];
$link    = $content['field_image_link']['#items'][0]['url'];
$align   = $content['field_image_alignment']['#items'][0]['value'];
$size    = "w" . $content['field_image_size']['#items'][0]['value'];
$text    = $content['field_text_block'];
//dpm($content['field_image_alignment']);
?>

<div class="pg-media-object <?php print $align; ?>">
	<div class="pg-media-object__image pg-media-object__section <?php print $size; ?>">
		<div class="thumbnail">
			<?php if ($link): ?>
			<a href="<?php print $link; ?>">		
				<figure>
					<?php print render($image); ?>
					
					<?php if ($caption) : ?>
					<figcaption>
					<?php print render($caption); ?>
					</figcaption>
					<?php endif; ?>
				</figure>
			</a>
			<?php else : ?>
			<figure>
				<?php print render($image); ?>
				<?php if ($caption) : ?>

				<figcaption>
				<?php print render($caption); ?>
				</figcaption>
				<?php endif; ?>
			</figure>
			<?php endif; ?>
		</div>
	</div>
	<div class="pg-media-object__text pg-media-object__section">
		<?php print render($text); ?>
	</div>
</div>
