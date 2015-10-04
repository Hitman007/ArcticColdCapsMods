<?php

//This class creates the CPTs for the InfoForm type:

class InfoFormCPTs{
	
	public $pluginDirectory; 
	public function __construct() {
		$this->pluginDirectory = plugin_dir_url(dirname( __FILE__ ));
		add_action( 'init', array( $this, 'create_taxonomies' ) );
		add_action('init', array( $this, 'createInfoFormCustomPostType' ) );
	} 
	public function activate() {
		$this->create_taxonomies();

	}
	function create_taxonomies() {
		$InfoForm_type_args = array( 
			'hierarchical' => true,  
			'labels' => array(
				'name'=> _x('InfoForm Types', 'taxonomy general name' ),
				'singular_name' => _x('InfoForm Type', 'taxonomy singular name'),
				'search_items' => __('Search InfoForm Types'),
				'popular_items' => __('Popular InfoForm Types'),
				'all_items' => __('All InfoForm Types'),
				'edit_item' => __('Edit InfoForm Type'),
				'edit_item' => __('Edit InfoForm Type'),
				'update_item' => __('Update InfoForm Type'),
				'add_new_item' => __('Add New InfoForm Type'),
				'new_item_name' => __('New InfoForm Type Name'),
				'separate_items_with_commas' => __('Seperate InfoForm Types with Commas'),
				'add_or_remove_items' => __('Add or Remove InfoForm Types'),
				'choose_from_most_used' => __('Choose from Most Used InfoForm Types')
			),
			'query_var' => true,  
            		'rewrite' => array('slug' =>'InfoForm-type')        
           	);
		register_taxonomy('InfoForm-type', 'InfoForm',$InfoForm_type_args);
	}
	function createInfoFormCustomPostType(){
		//$menu_icon = $this->pluginDirectory . "/assets/images/InfoForm.gif";
		$labels = array(
			'name'                => _x( 'InfoForms', 'Post Type General Name', 'crg_text_domain' ),
			'singular_name'       => _x( 'InfoForm', 'Post Type Singular Name', 'crg_text_domain' ),
			'menu_name'           => __( 'InfoForms', 'crg_text_domain' ),
			'parent_item_colon'   => __( 'Parent InfoForm:', 'crg_text_domain' ),
			'all_items'           => __( 'All InfoForms', 'crg_text_domain' ),
			'view_item'           => __( 'View InfoForm', 'crg_text_domain' ),
			'add_new_item'        => __( 'Add New InfoForm', 'crg_text_domain' ),
			'add_new'             => __( 'Add New', 'crg_text_domain' ),
			'edit_item'           => __( 'Edit InfoForm', 'crg_text_domain' ),
			'update_item'         => __( 'Update InfoForm', 'crg_text_domain' ),
			'search_items'        => __( 'Search InfoForm', 'crg_text_domain' ),
			'not_found'           => __( 'Not found', 'crg_text_domain' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'crg_text_domain' ),
		);
		$args = array(
			'label'               => __( 'InfoForm', 'crg_text_domain' ),
			'description'         => __( 'InfoForms', 'crg_text_domain' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields'),
			'taxonomies'          => array( 'InfoForm-type' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			//'menu_icon'           => $menu_icon,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
		);
		register_post_type('InfoForm', $args);

		wp_insert_term( __('Wordpress'),'InfoForm-type', array( 'description' => __('A link to a Wordpress ad'),'slug' => 'feature'));
	}
}
?>

?>
