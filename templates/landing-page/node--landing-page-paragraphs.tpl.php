<?php

/**
* @file
* Default theme implementation to display a node.
*
* Available variables:
* - $title: the (sanitized) title of the node.
* - $content: An array of node items. Use render($content) to print them all,
*   or print a subset such as render($content['field_example']). Use
*   hide($content['field_example']) to temporarily suppress the printing of a
*   given element.
* - $user_picture: The node author's picture from user-picture.tpl.php.
* - $date: Formatted creation date. Preprocess functions can reformat it by
*   calling format_date() with the desired parameters on the $created variable.
* - $name: Themed username of node author output from theme_username().
* - $node_url: Direct url of the current node.
* - $display_submitted: Whether submission information should be displayed.
* - $submitted: Submission information created from $name and $date during
*   template_preprocess_node().
* - $classes: String of classes that can be used to style contextually through
*   CSS. It can be manipulated through the variable $classes_array from
*   preprocess functions. The default values can be one or more of the
*   following:
*   - node: The current template type, i.e., "theming hook".
*   - node-[type]: The current node type. For example, if the node is a
*     "Article" it would result in "node-article". Note that the machine
*     name will often be in a short form of the human readable label.
*   - node-teaser: Nodes in teaser form.
*   - node-preview: Nodes in preview mode.
*   The following are controlled through the node publishing options.
*   - node-promoted: Nodes promoted to the front page.
*   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
*     listings.
*   - node-unpublished: Unpublished nodes visible only to administrators.
* - $title_prefix (array): An array containing additional output populated by
*   modules, intended to be displayed in front of the main title tag that
*   appears in the template.
* - $title_suffix (array): An array containing additional output populated by
*   modules, intended to be displayed after the main title tag that appears in
*   the template.
*
* Other variables:
* - $node: Full node object. Contains data that may not be safe.
* - $type: Node type, i.e. page, article, etc.
* - $comment_count: Number of comments attached to the node.
* - $uid: User ID of the node author.
* - $created: Time the node was published formatted in Unix timestamp.
* - $classes_array: Array of html class attribute values. It is flattened
*   into a string within the variable $classes.
* - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
*   teaser listings.
* - $id: Position of the node. Increments each time it's output.
*
* Node status variables:
* - $view_mode: View mode, e.g. 'full', 'teaser'...
* - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
* - $page: Flag for the full page state.
* - $promote: Flag for front page promotion state.
* - $sticky: Flags for sticky post setting.
* - $status: Flag for published status.
* - $comment: State of comment settings for the node.
* - $readmore: Flags true if the teaser content of the node cannot hold the
*   main body content.
* - $is_front: Flags true when presented in the front page.
* - $logged_in: Flags true when the current user is a logged-in member.
* - $is_admin: Flags true when the current user is an administrator.
*
* Field variables: for each field instance attached to the node a corresponding
* variable is defined, e.g. $node->body becomes $body. When needing to access
* a field's raw values, developers/themers are strongly encouraged to use these
* variables. Otherwise they will have to explicitly specify the desired field
* language, e.g. $node->body['en'], thus overriding any language negotiation
* rule that was previously applied.
*
* @see template_preprocess()
* @see template_preprocess_node()
* @see template_process()
*/
?>
<!--=====================Tabs=========================-->
<?php
hide($content['comments']);
hide($content['links']);
print render($content);
?>
<!--===================== Help me =========================-->

<div class="row callout">

	<div class="column lp-help-block medium-9">

<section class="four-up-feature">
  <!--<div class="row four-up-feature-header align-center">-->
  <div class="row four-up-feature-header ">
    <div class="medium-8 columns">
      <h2>Help me get started...</h2>
	  <ul>
		  <li>
		  <h4>
			  important list item important list item
		  </h4>
		  </li>
		  <li>
		  <h4>
			  important list item important list item
		  </h4>
		  </li>
	  </ul>
    </div>
  </div>
  <div class="row align-spaced">
    <div class="small-10 medium-3 columns">
      <img class="four-up-feature-image" src="http://placehold.it/75" alt="icon">
      <h4>Librarian Name</h4>
      <p class="four-up-feature-text">Subject area and description</p>
    </div>
    <div class="small-10 medium-3 columns">
      <img class="four-up-feature-image" src="http://placehold.it/75" alt="icon">
      <h4>Librarian Name</h4>
      <p class="four-up-feature-text">Subject area and description</p>
    </div>
    <div class="small-10 medium-3 columns">
      <img class="four-up-feature-image" src="http://placehold.it/75" alt="icon">
      <h4>Librarian Name</h4>
      <p class="four-up-feature-text">Subject area and description</p>
    </div>
    <div class="small-10 medium-3 columns">
      <img class="four-up-feature-image" src="http://placehold.it/75" alt="icon">
      <h4>Librarian Name</h4>
      <p class="four-up-feature-text">Subject area and description</p>
    </div>
  </div>
</section>



	</div>
	<div class="column lp-askus-block medium-3">

		<!-- Place this div in your web page where you want your chat widget to appear. -->
		<div class="needs-js">
			<div class="dummy-widget">
				<h3>Library Ask Us</h3>

				<div class="textout window">JavaScript disabled or chat unavailable.</div>

				<div class="textin window">Chat Is Unavailable</div>
			</div>
		</div>
		<!-- Place this script as near to the end of your BODY as possible. --><script type="text/javascript">
(function() {
 var x = document.createElement("script"); x.type = "text/javascript"; x.async = true;
 x.src = (document.location.protocol === "https:" ? "https://" : "http://") + "ca.libraryh3lp.com/js/libraryh3lp.js?5343";
 var y = document.getElementsByTagName("script")[0]; y.parentNode.insertBefore(x, y);
 })();
		</script>



	</div>
</div>

<!--===================== news =========================-->
<div class="row">
	<div class="column lp-button-block medium-6">
		<div class="expanded button-group">
			<a class="button success">Interlibrary Loan</a>
			<a class="button success">Reserves</a>
		</div>
		<div class="expanded button-group">
			<a class="button success">RefWorks</a>
			<a class="button success">Grammarly</a>
		</div>
	</div>
	<div class="column medium-6 lp-news-block">

		<div class="callout news media-object">
			<div class="media-object-section">
				<div class="thumbnail">
					<img src="http://via.placeholder.com/100x100">
				</div>
			</div>
			<div class="media-object-section">
				<h4>Library News</h4>
				<ul>
					<li>
					library news item library news item
					</li>
					<li>
					library news item library news item
					</li>
					<li>
					library news item library news item
					</li>
					<li>
					library news item library news item
					</li>
				</ul>
			</div>
		</div>

		<div class="callout events media-object">
			<div class="media-object-section">
				<div class="thumbnail">
					<img src="http://via.placeholder.com/100x100">
				</div>
			</div>
			<div class="media-object-section">
				<h4>Library Events</h4>

				<ul>
					<li>
					library news item library news item
					</li>
					<li>
					library news item library news item
					</li>
					<li>
					library news item library news item
					</li>
					<li>
					library news item library news item
					</li>
				</ul>
			</div>
		</div>

	</div>
