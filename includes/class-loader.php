<?php
/**
    * Class BTUC_Loader.
    */
    class CPT_Loader {
		/**
		 *  Constructor.
		 */
		
		function __construct() {
			$this->includes();
			add_action( 'wp_enqueue_scripts', array( $this, 'btuc_enqueue_scripts' ) );
            add_action('wp_ajax_cpf_searching_data_cpt_movies' , array( $this, 'cpf_searching_data_cpt_movies'));
			add_action('wp_ajax_nopriv_cpf_searching_data_cpt_movies' , array( $this, 'cpf_searching_data_cpt_movies'));			
			add_action('wp_ajax_cpf_filter_data_cpt_movies' , array( $this, 'cpf_filter_data_cpt_movies'));
			add_action('wp_ajax_nopriv_cpf_filter_data_cpt_movies' , array( $this,'cpf_filter_data_cpt_movies'));
        }
		/**
		* Function for Including Files and Classes
        */
		function includes() {
			include_once 'class-metabox.php';
            include_once 'class-cpt.php';
			include_once 'class-shortcode.php';
		}
        /**
		* Enqueue Script Files and Style Files .
        */
        function btuc_enqueue_scripts() {
			wp_enqueue_script( 'custom_js',  plugin_dir_url( __DIR__ ). '/assets/js/main.js',   array('jquery') , wp_rand() );
			wp_localize_script( 
				'custom_js', 
				'ajax_object', 
				array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) )
			);
			wp_enqueue_style( 'child-style', plugin_dir_url( __DIR__ ). '/assets/css/style.css');
			// wp_enqueue_style( 'parent_style', get_template_directory_uri() . '/style.css');
		}
			}
new CPT_Loader();
?>
