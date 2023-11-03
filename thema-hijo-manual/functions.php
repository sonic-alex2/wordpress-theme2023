<?php
	add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

	function my_theme_enqueue_styles() {
		// Definimos el nombre de identificación del estilo del tema padre.
		$parenthandle = 'parent-style';

		// Obtenemos información del tema activo.
		$theme = wp_get_theme();

		// Primero, agregamos el estilo del tema padre como una dependencia.
		wp_enqueue_style( $parenthandle,
			get_template_directory_uri() . '/style.css', // URL del estilo del tema padre.
			array(),  // Aquí puedes especificar estilos adicionales en caso de que el estilo del tema padre dependa de otros.
			$theme->parent()->get( 'Version' ) // Obtenemos la versión del tema padre para la gestión de caché.
		);

		// A continuación, agregamos el estilo del tema hijo.
		wp_enqueue_style( 'child-style',
			get_stylesheet_uri(), // URL del estilo del tema hijo.
			array( $parenthandle ), // Establecemos el estilo del tema padre como una dependencia.
			$theme->get( 'Version' ) // Obtenemos la versión del tema hijo para la gestión de caché.
		);
	}

	function my_favicon_link() {
		echo '' . "\n";
	}

	add_action( 'wp_head', 'my_favicon_link' );
?>