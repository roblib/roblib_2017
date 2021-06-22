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
$question = $content['field_question'];
$answer = $content['field_answer'];
?>

<li class="accordion-item" data-accordion-item>
    <!-- Accordion tab title -->
    <a href="#" class="accordion-title"><?php print render($question); ?></a>

    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
    <div class="accordion-content" data-tab-content>
	<?php print render($answer); ?>
    </div>
  </li>



