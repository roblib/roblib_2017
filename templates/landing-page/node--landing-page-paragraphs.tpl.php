<!--=====================Tabs=========================-->
<?php
hide($content['comments']);
hide($content['links']);
//hide($content['field_search_tabs']);
hide($content['field_subject_librarians']);
hide($content['field_navigation_button_group']);
hide($content['field__help_me_text_block']);
hide($content['field__help_me_section_title']);
print render($content);
?>
<!--===================== Help me =========================-->

<section class="help-me">

<div class="left">
	<?php print render($content['field__help_me_section_title']);?>
	<?php print render($content['field_subject_librarians']);?>
</div>
<div class="right">

	<div class="lp-askus-block">

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

	<section class="helpme-text-block">
		<?php print render($content['field__help_me_text_block']);?>
	</section>

</div>
</section>


<!--===================== news =========================-->
<div class="lp-button-group">
	<?php print render($content['field_navigation_button_group']);?>
</div>
