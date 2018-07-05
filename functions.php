<?php

	// Estilos CSS
	function dl_enqueue_style() {
		/* Register Scripts */
		wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', null, null, 'screen');
		wp_register_style('mainStyle', get_parent_theme_file_uri('/assets/css/estilo.css'), array('bootstrap'), null, 'screen');
		
		/* Enqueue Scripts */
		wp_enqueue_style('mainStyle');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_style' );



	//Registrar JS
	function dl_enqueue_scripts(){

		/*Registrar scripts */
		wp_register_script('jquery3', get_parent_theme_file_uri('assets/js/jquery-3.3.1.js'), null, null, true);
		wp_register_script('scripts', get_parent_theme_file_uri('assets/js/scripts.js'), array('jquery3'), null, true);


		/* Llamar scripts */
		wp_enqueue_script('scripts');
	}

	add_action( 'wp_enqueue_scripts', 'dl_enqueue_scripts' );


	remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

