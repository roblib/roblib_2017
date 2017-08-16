<?php

/**
 * @file
 * Default theme implementation for a single paragraph item.
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity
 *   - entity-paragraphs-item
 *   - paragraphs-item-{bundle}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened into
 *   a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
	<div class="subject_librarian__container">
	<a class="subject_librarian__link" href="<?php print $content['field_librarian_link']['#items'][0]['url'] ?>">
			<div class="subject_librarian">
			  <div class="subject_librarian__image">
			<?php print render( $content['field_librarian_image'] ); ?>
			  </div>
			  <h4 class="subject_librarian__name"><?php print render($content['field_librarian_name']); ?></h4>
			  <?php print render($content['field_librarian_subject']); ?>
			</div>
		</a>
	</div>
