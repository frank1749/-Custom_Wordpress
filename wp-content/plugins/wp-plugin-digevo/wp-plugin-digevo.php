<?php
/*
Plugin Name:  Digevo Plugin Test
Plugin URI:   https://digevo.com 
Description:  A short little description of the plugin. It will be displayed on the Plugins page in WordPress admin area. 
Version:      1.0
Author:       Frank17 
Author URI:   https://github.com/frank1749
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wpb-job-test
Domain Path:  /languages
*/

function wpb_follow_us($content) {

	if($_POST) {

		$name = $_POST['visitor_name'];
		$email = $_POST['visitor_email'];
		$phone = $_POST['visitor_phone'];
		$country = $_POST['visitor_country'];
		$enterprise = $_POST['visitor_enterprise'];
		$industry = $_POST['visitor_industry'];

		$now = new DateTime();
		$datesent=$now->format('Y-m-d H:i:s');

		global $wpdb;     
	  	$table_name = $wpdb->prefix . 'digevo_form';     
	  	$insertData = $wpdb->insert($table_name, array(
	  		'id' => '', 
	  		'name' => $name, 
	  		'email' => $email,
	  		'phone' => $phone,
	  		'country' => $country,
	  		'enterprise' => $enterprise,
	  		'industry' => $industry,
	  		'creationDate' => $datesent
	  	));

	  	if($insertData){
			?>
			    <script>
			      alert('Contact form sent');
			      window.location="/digevo-frank"
			    </script>
		  	<?php
	  	}else{
			?>
			    <script>
			      alert('Sending Error');
			    </script>
		  	<?php
	  	}	  	

	} 

	$content .= '<form action="wp-plugin-digevo.php" method="post">

		  <div class="elem-group">

		    <label for="visitor_name">Your Name</label>

		    <input type="text" id="visitor_name" name="visitor_name" placeholder="Fullname" required>

		  </div>

		  <div class="elem-group">

		    <label for="visitor_email">Your E-mail</label>

		    <input type="email" id="visitor_email" name="visitor_email" placeholder="Email" required>

		  </div>

		  <div class="elem-group">

		    <label for="visitor_email">Your Phone</label>

		    <input type="text" id="visitor_phone" name="visitor_phone" placeholder="Phone" required>

		  </div>

		  <div class="elem-group">

		    <label for="visitor_country">Country</label>

		    <input type="text" name="visitor_country" placeholder="Country" required>

		  </div>

		  <div class="elem-group">

		    <label for="visitor_enterprise">Enterprise</label>

		    <input type="text" name="visitor_enterprise" placeholder="Enterprise">

		  </div>

		  <div class="elem-group">

		    <label for="visitor_industry">Industry</label>

		    <input type="text" name="visitor_industry" placeholder="Industry">

		  </div>

		  <button type="submit">Send Message</button>

		</form>
		';

		return $content;
	 
	}
add_shortcode('testfk', 'wpb_follow_us');