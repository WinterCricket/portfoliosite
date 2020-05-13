<?php  

function folio_files(){ 

	

	wp_enqueue_style("font-awesome", "//use.fontawesome.com/releases/v5.3.1/css/all.css");

	wp_enqueue_style("folio_main_styles", get_stylesheet_uri());

}

add_action("wp_enqueue_script", "folio_files");