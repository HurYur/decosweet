<?php
	if(preg_match('#' . basename(__FILE__) . '#', $_SERVER['PHP_SELF'])) { die(_e('You are not allowed to call this page directly.','final-tiles-gallery')); }
	
	$galleryResults = $this->FinalTilesdb->getGalleries();
	$default_options = get_option('FinalTiles_gallery_options');
	$gallery = null;
	
	$gid = intval($_GET['id']);
	$imageResults = $this->FinalTilesdb->getImagesByGalleryId($gid);
	$gallery = $this->FinalTilesdb->getGalleryById($gid);
	
	global $ftg_parent_page;
	$ftg_parent_page = "edit-gallery";

?>
<?php $ftg_subtitle = "Edit gallery: " . $gallery->name ?>    
<?php include "header.php" ?>

<div class='bd'>
	<?php if(! isset($_COOKIE['gtl'])) : ?>
	<div class="row">	
		<div id="adv" class="col s12">
			<a href="http://modula.greentreelabs.net/ftg-lite.html" target="_blank">
			<img src="<?php print plugins_url('/images/modula-strip.jpg',__file__) ?>" alt="Modula Grid Gallery">
			</a>
			<a href="#close" class="close">Dismiss</a>
		</div>
	</div>
	<?php endif ?>
	
	<header class="gallery-hd">
		<input type="text" readonly style="font-family: Courier, monospace;" value="[FinalTilesGallery id='<?php print $gid ?>']">
		<ul>
			<li>
				<a target="_blank" href="http://issuu.com/greentreelabs/docs/finaltilesgridgallery-documentation?e=17859916/13243836">Documentation</a> <a target="_blank" href="http://final-tiles-gallery.com/FinalTilesGridGallery-documentation.pdf">(download)</a>
			</li>
			<li>
				<a target="_blank" href="https://www.youtube.com/watch?v=RNT4JGjtyrs"><?php _e('Video tutorial: Tutorial: better grids with Final Tiles Grid Gallery for WordPress','final-tiles-gallery')?></a>
			</li>						
		</ul>
	</header>
	
		
	
        <div id="settings">
            <form name="gallery_form" id="edit-gallery" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>" method="post">
            <?php wp_nonce_field('FinalTiles_gallery', 'FinalTiles_gallery'); ?>
            <input type="hidden" name="ftg_gallery_edit" id="gallery-id" value="<?php _e($gid); ?>" />
            <?php include("include/edit-gallery.php") ?>
            </form>
        </div>

        <script>
      
            (function ($) {
            	window.onload = function () {
	                
                    $("[name=ftg_source]").val("<?php _e($gallery->source) ?>").change();
                    $("[name=ftg_defaultPostImageSize]").val("<?php _e($gallery->defaultPostImageSize) ?>").change();                    
                
	                FTG.init_gallery();
	                
	                $("select.multiple").change(function () {
		                var val = $(this).val();
		                if(val.length > 1)
		                	$(this).val(val[0]);
	                });
	                
	                $("tr:even").addClass("alternate");
		            $(".sections a:first").addClass("selected");
		            $(".sections a").click(function(e) {
		                e.preventDefault();
		                
		                var idx = $(".sections a").index(this);
		                
		                $(".sections a").removeClass("selected");
		                $(this).addClass("selected");
		                
		                $(".ftg-section").hide().eq(idx).show();
		                
		                if(idx == 6)
		                	$(".form-buttons").hide();
		                else
		                	$(".form-buttons").show();
		            });
		            $(".ftg-section").hide().eq(0).show();
	            }
            })(jQuery);
        </script>

</div>