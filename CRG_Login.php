<?php
/*
Plugin Name: CRG Login
Plugin URI: http://customrayguns.com
Description: The BEST way to login register your users.
Version: 1.2
Author: Custom Ray Guns
Author URI: http://customrayguns.com
*/

//Detects if on the login page, then replaces Username with Email
if(($_SERVER["PHP_SELF"]=='/wp-login.php') or (($_SERVER["PHP_SELF"]=='/crg/'))){
    ob_start('kill_wp_attempt_focus');
    add_filter( 'gettext', 'user_email_login_text', 20, 3 );
}

function user_email_login_text( $translated_text, $text, $domain ) {
    if ($translated_text === 'Username') {
        $translated_text = 'Email';
    }
    return $translated_text;
}

function kill_wp_attempt_focus($in){
    return preg_replace('/function wp_attempt_focus/','function wp_attempt_focus(){} function wp_attempt_focus_killed',$in);
}

session_start();

if ((isset($_SESSION['crg_login_redirect_url'])) and (isset($_SESSION['crg_login_email'])) ) {
	if($pagenow==='wp-login.php'){	
	add_action ('shutdown','crg_login_fill');}
}

function crg_login_fill(){
echo ("
<script>
	jQuery(document).ready(function() {
		//jQuery(\"label[for='user_login']\").html(\"E-Mailo<br /><input type = 'text' id = 'user_login' name = 'user_login' />\");
		jQuery('#user_login').val('" . $_SESSION['crg_login_email'] . "');
		jQuery('#user_pass').val('');
		jQuery('#user_pass').focus();
	});
</script>
");
}

add_action('init', 'crg_redirect');
function crg_redirect(){
	if(is_user_logged_in()){
		if (isset($_SESSION['crg_login_redirect_url'])){
			$url = $_SESSION['crg_login_redirect_url'];
			unset($_SESSION['crg_login_redirect_url']);	
			wp_redirect($url);
}	}	}

//jQuery is required for this plugin:
if (wp_script_is('jquery','enqueued')){return;}else{wp_enqueue_script('jquery');}

//launches crg_login logic:
add_action('setup_theme', 'launch_crg_login');
function launch_crg_login(){$crg_login_controller = new crg_login_controller;}

//launches the sidebar widget:
add_action( 'widgets_init', function(){register_widget( 'crg_login_widget' );});

//The login controller controls the main functionality of the plugin.
class crg_login_controller{
	function __construct(){
		global $wpdb;
		if (isset($_POST['crg_login_email'])){$crg_login_email = $_POST['crg_login_email'];}
		
		//the user has entered an email address, but no password is entered:
		if( ((isset($_POST['crg_login_email'])) && (!( isset($_POST['crg_login_password']) ) ) )){			
			if (email_exists($crg_login_email)){
			//The user has entered an existing email
				$login_link = wp_login_url(get_permalink());
				$url = getUrl($_SERVER);
				$_SESSION['crg_login_email'] = $_POST['crg_login_email'];
				if (!(isset($_SESSION['crg_login_redirect_url']))){$_SESSION['crg_login_redirect_url'] = $_SERVER['HTTP_REFERER'];}
				wp_redirect($login_link);	
				
	
			//the user has entered an email address, that is NOT in the database:			
			 }else{
				$password = wp_generate_password();
				$user_id = wp_create_user( $crg_login_email, $password, $crg_login_email );
				$user = new WP_User( $user_id );
				wp_set_auth_cookie( $user->ID, TRUE );
				//either 'administrator', 'subscriber', 'editor', 'author', 'contributor':
				$user->set_role( 'subscriber' ); 
				$creds = array();
				$creds['user_login'] = $crg_login_email;
				$creds['user_password'] = $password;
				$creds['remember'] = true;
				$user = wp_signon( $creds, true );
				$user = get_user_by( 'email', $crg_login_email );
				$x = $user->ID;
				$xyz = crg_trim_email($crg_login_email);
				update_user_meta( $x, 'nickname', $xyz);
				$wpdb->query("UPDATE $wpdb->users SET display_name = '$xyz' WHERE ID = $x");
				if (isset($_SESSION['crg_login_redirect_url'])){
					$crg_login_redirect_url = $_SESSION['crg_login_redirect_url'];
					wp_redirect($crg_login_redirect_url);
				}
				//gets the current url:
				$url =  getUrl($_SERVER);
				wp_redirect($url);

			}
		}

		//error condition:
		if( ((isset($_POST['crg_login_email'])) && ( isset($_POST['crg_login_password']) )  )){
			die("ERROR:both here");
}	}	}

//This function returns the current URL:

function url_origin($s, $use_forwarded_host=false){
    $ssl = (!empty($s['HTTPS']) && $s['HTTPS'] == 'on') ? true:false;
    $sp = strtolower($s['SERVER_PROTOCOL']);
    $protocol = substr($sp, 0, strpos($sp, '/')) . (($ssl) ? 's' : '');
    $port = $s['SERVER_PORT'];
    $port = ((!$ssl && $port=='80') || ($ssl && $port=='443')) ? '' : ':'.$port;
    $host = ($use_forwarded_host && isset($s['HTTP_X_FORWARDED_HOST'])) ? $s['HTTP_X_FORWARDED_HOST'] : (isset($s['HTTP_HOST']) ? $s['HTTP_HOST'] : null);
    $host = isset($host) ? $host : $s['SERVER_NAME'] . $port;
    return $protocol . '://' . $host;
}
function getUrl($s, $use_forwarded_host=false){
    return url_origin($s, $use_forwarded_host) . $s['REQUEST_URI'];
}



//This function returns the first part of an email. i.e. "jiminac@gmail.com" is trimmed to "jiminac" :
function crg_trim_email($email){
	$arr1 = str_split($email);
	foreach ($arr1 as $l){
		if ($l == "@"){break;}
		$trimmed = $trimmed . $l;
	}
	return $trimmed;
}


//crg_login_widget is the sidebar widget for this plugin:
class crg_login_widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'crg_login_widget', // Base ID
			__('CRG Login', 'crg_text_domain'), // Name
			array( 'description' => __( 'The best way to login users.', 'crg_text_domain' ), ) // Args
		);
	}
	/**
	 * Front-end display of widget.
	 * @see WP_Widget::widget()
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $args['before_widget'];
		echo $args['before_title'];
		
		if ( is_user_logged_in() ) {

		//The user is NOT logged in:
			$user_ID = get_current_user_id();
			$key = 'nickname';
			$single = true;
			$user_nickname = get_user_meta( $user_ID, $key, $single ); 
    			_e( 'Welcome, ', 'crg_text_domain' );
			echo ("<a href = '/wp-admin/profile.php' >" . $user_nickname . "</a>!");
			echo $args['after_title'];

		//The user IS logged in:	
		 }else{
			_e( 'Sign up or login:', 'crg_text_domain' );	
			echo $args['after_title'];
			echo "<div id = 'crg_js_disabled'>";
			_e('JavaScript disabled on this browser.');
			echo "<br /><a href = '";
			echo site_url();
			echo "/wp-login.php'>";
			_e('Click here to login.','crg_text_domain');
			echo "</a></div><div id = 'crg_login_widget_form' style = 'display:none;'><form method = 'post' id = 'crg_email_form' ><input type = 'text' name = 'crg_login_email' id = 'crg_email' placeholder = '";
			_e('Enter your email here.', 'crg_text_domain');
			echo "' /><br /><input type = 'submit' value = '";
			_e("Submit", 'crg_text_domain');
			echo "' name = 'crg_login_submit_button' id = 'crg_login_submit_button'/></form></div>";
		}

		echo $args['after_widget'];
		
		$jquery_output = 
<<<JQUERY_OUTPUT_START_STOP
<script>
jQuery('document').ready(function() {
	jQuery('#crg_js_disabled').hide();
	jQuery('#crg_login_widget_form').show();

});
</script>
JQUERY_OUTPUT_START_STOP;
		
		echo $jquery_output;
	}
	/**
	 * Back-end widget form.
	 * @see WP_Widget::form()
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		 }else {
			$title = __( 'New title', 'crg_text_domain' );
		}
		?>
		<p>
		<label for="crg_login_social_login">Use Social Logins?</label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 * @see WP_Widget::update()
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
