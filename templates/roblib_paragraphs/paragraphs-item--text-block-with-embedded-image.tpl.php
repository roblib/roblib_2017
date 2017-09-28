<?php
$image   = $content['field_pg_inline_text_image__img'];
$caption = $content['field_pg_inline_text_image__cap']['#items'][0]['value'];
$text = $content['field__pg_inline_text_image__txt']['#items'][0]['value'];
//$link    = $content['field_image_link']['#items'][0]['url'];
$align   = $content['field_pg_inline_text_image__pos']['#items'][0]['value'];
$size    = $content['field_pg_inline_text_image__size']['#items'][0]['value'];
?>
<section class="pg-inline-text-image">

			<figure class="<?php print $align; ?> <?php print $size; ?> pg-inline-text-image__img thumbnail">
				<?php print render($image); ?>
				<?php if ($caption) : ?>

				<figcaption>
				<?php print render($caption); ?>
				</figcaption>
				<?php endif; ?>
			</figure>
		<?php print $text; ?>
</section>

