<?php


//-----------------------------Site Identity Color----------------

	$quest_blog_site_identity_color = get_theme_mod('quest_blog_site_identity_color');
	$quest_blog_site_identity_tagline_color = get_theme_mod('quest_blog_site_identity_tagline_color');

//----------------------Primary Color---------------------

	$quest_blog_primary_color = get_theme_mod('quest_blog_primary_color');


//=====================Whole CSS===================================


	$custom_css ='.display_only h1 a,.display_only p{';
	
	$custom_css .='}';


//==============Main Setting Section===========================================


// ----------------Site Identity Color--------------------

	if($quest_blog_site_identity_color != false){
		$custom_css .='.display_only h1 a{';
			if($quest_blog_site_identity_color != false)
		    	$custom_css .='color: '.esc_html($quest_blog_site_identity_color).'!important;';
		$custom_css .='}';
	}

	if($quest_blog_site_identity_tagline_color != false){
		$custom_css .='.display_only p{';
			if($quest_blog_site_identity_tagline_color != false)
		    	$custom_css .='color: '.esc_html($quest_blog_site_identity_tagline_color).'!important;';
		$custom_css .='}';
	}


// ----------------Primary Color--------------------

	if($quest_blog_primary_color != false){
		$custom_css .='#sidebar .widget-title,div#sidebar h2,h2.post-title a:hover, .display_only a:hover,#sidebar a:hover ,.sec2-meta span,.nav-previous a:hover, .nav-next a:hover,.about-text-box h3,footer a:hover{';
			if($quest_blog_primary_color != false)
		    	$custom_css .='color: '.esc_html($quest_blog_primary_color).'!important;';
		$custom_css .='}';
	}

	if($quest_blog_primary_color != false){
		$custom_css .='.wp-block-calendar table th,.button:hover,.read-more-link:hover,.singlepost-category a,.card-body a,.card-body a,.sec2-cat a,.about-box-1{';
			if($quest_blog_primary_color != false)
		    	$custom_css .='background-color: '.esc_html($quest_blog_primary_color).'!important;';
		$custom_css .='}';
	}
?>