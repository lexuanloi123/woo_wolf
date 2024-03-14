<?php // File này cho trang liên hệ ?>
<?php get_header(); ?>
<!--  -->
<div class="youst_breadcrumb_ll full-row">
	<div class="youst_breacrumb_ct inner-container">
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
			?>
	</div>			
</div>
<!--  -->
<div class="full-row full-content">
	<div id="primary" class="inner-content inner-container">
		<main id="main" class="ht-conten" role="main">
            <div class="title-map"><h2><?php echo _opt('title-ht-map') ?></h2></div>
            <div class="content-map">
                <div class="content-map-left ">
                    <div class="content-map-left-ct">
                        <?php for($i=1;$i<=_opt('sl-ht');$i++){ ?>
                            <div class="map-item">
                                <div class="map-item-ct">
                                    <h3><?php echo _opt('title-ht-map1_'.$i) ?></h3>
                                    <p>Mail: <?php echo _opt('email-ht-map_'.$i) ?></p>
                                    <p>Hotline: <?php echo _opt('sdt-ht-map_'.$i) ?></p>
                                    <p><?php echo _opt('dc-ht-map_'.$i) ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="content-map-right">
                    <?php echo _opt('map-ht-map') ?>
                </div>
            </div>
            <script>
                
            </script>
		</main>
	</div>
</div>	
<?php get_footer(); ?>