<?php
/**
 * @file field--fences-section.tpl.php
 * Wrap each field value in the <section> element.
 *
 * @see http://developers.whatwg.org/sections.html#the-section-element
 */
?>
<?php if ($element['#label_display'] == 'inline'): ?>
  <span class="field-label"<?php print $title_attributes; ?>>
    <?php print $label; ?>:
  </span>
<?php elseif ($element['#label_display'] == 'above'): ?>
  <h3 class="field-label"<?php print $title_attributes; ?>>
    <?php print $label; ?>
  </h3>
<?php endif; ?>

<?php foreach ($items as $delta => $item): ?>
	<section class="field field--name-field-covid-icon field--type-list-boolean field--label-hidden" style="
    display: inline-block;
    background: red;
    color: white;
    border-radius: 6px;
    font-weight: 600;
    text-transform: uppercase;
"> <?php print render($item); ?>
  </section>
<?php endforeach; ?>
