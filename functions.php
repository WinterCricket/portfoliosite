<?php  

function folio_files(){ 

	wp_enqueue_style("folio_main_styles", get_stylesheet_uri());
}

add_action("wp_enqueue_scripts", "folio_files");