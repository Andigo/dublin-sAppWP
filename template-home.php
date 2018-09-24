<?php
/*
*Template name: Template home
*/
get_header();?>

<button class="header-prev header-btn"></button>  
	<div class="header-banner">
	<?php foreach(getBanner() as $banner):?>		
	    <div class="header-banner-txt">
	        <h1><?php echo $banner->post_title;?></h1>
	        <span><?php echo esc_attr(get_post_meta($banner->ID,'meta1_field_1', true));?> 
		        <strong><?php echo esc_attr(get_post_meta($banner->ID,'meta1_field_2', true));?>   	
		        </strong>
	    	</span>
	    	<p><?php echo esc_attr(get_post_meta($banner->ID,'meta1_field_4', true));?></br><?php echo esc_attr(get_post_meta($banner->ID,'meta1_field_5', true));?></p>
	        <button><?php echo esc_attr(get_post_meta($banner->ID,'meta1_field_3', true));?></button>
	    </div>
	    <div class="header-banner-pic">
	        <img src="<?php echo get_the_post_thumbnail_url( $banner->ID, 'medium'); ?>" class="header-banner-pic-ipads">
	    </div>
	  <?php endforeach;?>
	</div>
 
<div class="header-boxes">
	<?php foreach(getApps() as $app):?>
    <div class="header-boxes-box">
        <img src="<?php echo get_the_post_thumbnail_url( $app->ID, 'medium'); ?>" width="120" height="100"alt="">
        <span><?php echo $app->post_title; ?></span>
    </div>
    <?php endforeach;
    wp_reset_query(); ?>


</div>
	
<button class="header-next header-btn"></button>	
	<section class="infpanel wrapper">
	<div class="infpanel-content">
		<?php foreach(getAbils() as $abil):?>
		<div class="infpanel-content-panel panel">
			<div class="panel-info">
				<img src="<?php echo get_the_post_thumbnail_url( $abil->ID, 'medium'); ?>" width="33" height="33"alt="discover">
				<div class="panel-info-txt">
					<h2><?php echo $abil->post_title; ?></h2>
					<span><?php echo $abil->post_excerpt;?></span>
				</div>
			</div>
			<div class="panel-txt"><?php echo $abil->post_content; ?></div>
		</div>
		<?php endforeach;
		wp_reset_query();
		?>
	</div>
</section>
	<section class="banner wrapper">
	<div class="banner-line"></div>
	<div class="banner-wr">
		<div class="banner-wr-left"></div>
		<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </br>Ex ipsum <strong>aperiam est autem repellendus</strong> nemo, alias odit officia.</span>
		<div class="banner-wr-right"></div>
	</div>
	<div class="banner-line"></div>
</section>
	<section class="variat wrapper">
	<div class="variat-header">
		<div class="variat-header-wr">
			<h2>There are many variations of passages</h2>
			<span>Lorem Ipsum is simply dummy</span>
		</div>		
	</div>
	<div class="variat-content">
		<div class="variat-content-pic"></div>
		<div class="variat-content-txt">
			<div class="variat-content-descr">
				<div class="variat-content-item">
					<img src="<?php echo get_template_directory_uri().'/img'?>/bullet.png" alt="">
					<p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
				</div>
				<div class="variat-content-item">
					<img src="<?php echo get_template_directory_uri().'/img'?>/bullet.png" alt="">
					<p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
				</div>
				<div class="variat-content-item">
					<img src="<?php echo get_template_directory_uri().'/img'?>/bullet.png" alt="">
					<p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
				</div>
				<div class="variat-content-item">
					<img src="<?php echo get_template_directory_uri().'/img'?>/bullet.png" alt="">
					<p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
				</div>
				<div class="variat-content-item">
					<img src="<?php echo get_template_directory_uri().'/img'?>/bullet.png" alt="">
					<p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
				</div>
				
			</div>
			<div class="variat-content-btns">
				<button>Read more</button>
				<button>Download</button>
			</div>
		</div>		
	</div>
</section>
	<section class="txtblock wrapper">
	<div class="txtblock-wr">
		<div class="txtblock-wr-container">
			<img src="<?php echo get_template_directory_uri().'/img'?>/+.png" alt="">
			<p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
		</div>
		<div class="txtblock-wr-container">
			<img src="<?php echo get_template_directory_uri().'/img'?>/+.png" alt="">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.  </p>
		</div>
		<div class="txtblock-wr-container">
			<img src="<?php echo get_template_directory_uri().'/img'?>/+.png" alt="">
			<p>Architecto quo nulla, enim error soluta tenetur inventore et nemo labore debitis!</p>
		</div>
		<div class="txtblock-wr-container">
			<img src="<?php echo get_template_directory_uri().'/img'?>/+.png" alt="">
			<p>Libero iure, nobis quam autem.</p>
		</div>
		<div class="txtblock-wr-container">
			<img src="<?php echo get_template_directory_uri().'/img'?>/+.png" alt="">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		</div>
	</div>
</section>

<?php
get_footer();
