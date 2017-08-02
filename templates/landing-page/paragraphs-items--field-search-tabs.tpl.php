<?php

/**
 * @file
 * Default theme implementation for a group of paragraph items.
 *
 * Available variables:
 * - $content: Rendered HTML of content items.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - paragraphs-items
 *   - paragraphs-items-{field_name}
 *   - paragraphs-items-{field_name}-{view_mode}
 *   - paragraphs-items-{view_mode}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_paragraphs_items()
 * @see template_process()
 * field_title 
 * field_search_code 
 * field_footer_text
 *
 *
 */
$tab1 = $variables['element'][0]['entity']['paragraphs_item'][1];
$tab2 = $variables['element'][1]['entity']['paragraphs_item'][2];
$tab3 = $variables['element'][2]['entity']['paragraphs_item'][3];
$tab4 = $variables['element'][3]['entity']['paragraphs_item'][4];
/*
 * $nolabel = [0]['#markup'];
 */
?>

<div class="searchtabs__container">
    <div class="searchtabs">
		<ul class="tabs" data-active-collapse="true" data-tabs id="collapsing-tabs">
			<li class="tabs-title is-active"><a href="#tab1" aria-selected="true">
<?php print render($tab1['field_title'][0]['#markup']); ?>
</a></li>
			<li class="tabs-title"><a href="#tab2">
<?php print render($tab2['field_title'][0]['#markup']); ?>
</a></li>
			<li class="tabs-title"><a href="#tab3">
<?php print render($tab3['field_title'][0]['#markup']); ?>
</a></li>
			<li class="tabs-title"><a href="#tab4">
<?php print render($tab4['field_title'][0]['#markup']); ?>
</a></li>
		</ul>

        <div class="tabs-content" data-tabs-content="collapsing-tabs">
            <div class="tabs-panel is-active" id="tab1">
<?php print render($tab1['field_search_code'][0]['#markup']); ?>
<?php print render($tab1['field_footer_text'][0]['#markup']); ?>
            </div>
            <div class="tabs-panel" id="tab2">
<?php print render($tab2['field_search_code'][0]['#markup']); ?>
<?php print render($tab2['field_footer_text'][0]['#markup']); ?>
           </div>
            <div class="tabs-panel" id="tab3">
<?php print render($tab3['field_search_code'][0]['#markup']); ?>
<?php print render($tab3['field_footer_text'][0]['#markup']); ?>
           </div>
            <div class="tabs-panel" id="tab4">
<?php print render($tab4['field_search_code'][0]['#markup']); ?>
<?php print render($tab4['field_footer_text'][0]['#markup']); ?>
           </div>
        </div>
    </div>
</div>
