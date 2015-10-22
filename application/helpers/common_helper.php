<?php

/**
 * Load Superadmin template and middle view
 *
 * @author Gaurav Dhiman.
 * @access public
 *
 */
if(!function_exists('superadmin_view')){
	/**
	 * Load Superadmin view
	 *
	 * @param unknown_type $arrDatam
	 * @param unknown_type $middle
	 * @param unknown_type $template
	 */
	function superadmin_view($middle = "superadmin",$arrData = array(), $template = "superadmin_layout"){
		if(!$middle)$middle = "superadmin";
		$CI =& get_instance();
		$arrData['middle'] = 'site/middle/'.$middle;
		$CI->load->view('site/layouts/'.$template,$arrData);
	}

}


/**
 * Load Admin template and middle view
 *
 * @author Gaurav Dhiman.
 * @access public
 *
 */
if(!function_exists('admin_view')){
	/**
	 * Load Admin view
	 *
	 * @param unknown_type $arrDatam
	 * @param unknown_type $middle
	 * @param unknown_type $template
	 */
	function admin_view($middle = "admin",$arrData = array(), $template = "admin_layout"){

		if(!$middle)$middle = "admin";


		$CI =& get_instance();
		$arrData['middle'] = 'site/middle/'.$middle;
		$CI->load->view('site/layouts/'.$template,$arrData);
	}

}

/**
 *
 * Helper function to copy the posetd data into the arrData
 */
if(!function_exists('copy_posted')){
	function copy_posted($arrData = array(),$arrLabel = array()){
		$CI =& get_instance();
		if(count($arrLabel) > 0){
			foreach ($arrLabel as $key =>$val){
				$arrData[$val] = $CI->input->post($val);
			}
			return $arrData;
		}else{

			return FALSE;
		}
	}
}


/**
 * Check and update session if exist
 *
 * @author
 * @param
 * @return
 */
if (!function_exists('check_update_session')){

	function check_update_session(){
		$ci = & get_instance();
		if($ci->session->userdata('admin_login_checked')){
			return TRUE;
		}

		$login_model = $ci->load->model('model_admin_user');
		if($ci->input->cookie("admin_id"))
		{
			$arrUserDetails = $ci->model_admin_user->get_admin($ci->input->cookie("admin_id"));

			if(count($arrUserDetails)> 0 && $ci->input->cookie('admin_remember_checked'))
			{
				$newdata = array(
					'admin_id'=> $arrUserDetails['user_id'],
					'admin_user_uid'  => $arrUserDetails['user_uid'],
					'admin_name' => $arrUserDetails['user_fname']." ".$arrUserDetails['user_lname'],
					'is_sadmin' => $arrUserDetails['is_sadmin'],
					'admin_login_checked' => TRUE,
					'admin_remember_checked' => $ci->input->cookie('admin_remember_checked')
				);

				// update session
				$ci->session->set_userdata($newdata);
				return TRUE;
			}
			else
			{
				setcookie("admin_id", "",0,'/');
				setcookie("admin_remember_checked", "",0,'/');
				$ci->session->sess_destroy();
				return FALSE;
			}
		}else{


			return FALSE;
		}
	}
}


/**
 * mm-dd-yyyy time 12 to yyyy-mm-dd time 24
 *
 */
if(!function_exists('timeFormateConv1')){
	 function timeFormateConv1($strTime){

			if(trim($strTime)){
				$arrPart = explode(" ", $strTime);

				$arrDate = explode("/", $arrPart[0]);
				$month = $arrDate[0];
				$day = $arrDate[1];
				$year = $arrDate[2];

				if(!empty($arrPart[2]) && !empty($arrPart[1])){
					$time = DATE("H:i:s", STRTOTIME($arrPart[1]." ".$arrPart[2]));
					return trim($year)."-".trim($month)."-".trim($day)." ".$time;
				}else
					return trim($year)."-".trim($month)."-".trim($day);
			}else {
				return false;
			}

	 }
}


 /**
  * Post request asynchroously
  *
  */
 if(!function_exists('post_async')){
	 function post_async($url, array $params = array())
	 {
	 	$post_string = "";
	 	if(count($params) > 0){
	 		foreach ($params as $key => &$val) {
	 			if (is_array($val)) $val = implode(',', $val);
	 			$post_params[] = $key.'='.urlencode($val);
	 		}
	 		$post_string = implode('&', $post_params);
	 	}


	 	$parts=parse_url($url);

	 	$fp = fsockopen($parts['host'],
	 			isset($parts['port'])?$parts['port']:80,
	 			$errno, $errstr, 30);

	 	$out = "POST ".$parts['path']." HTTP/1.1\r\n";
	 	$out.= "Host: ".$parts['host']."\r\n";
	 	$out.= "Content-Type: application/x-www-form-urlencoded\r\n";
	 	$out.= "Content-Length: ".strlen($post_string)."\r\n";
	 	$out.= "Connection: Close\r\n\r\n";
	 	if (isset($post_string)) $out.= $post_string;


	 	fwrite($fp, $out);
	 	fclose($fp);
	 }
}

/**
 * Absolute Path
 *
 * Returns an absolute path based on your basepath.
 * Segments can be passed via the
 * first parameter either as a string.
 * ie absolute_path('uploads/images/cow/)
 * would
 *
 * @access    public
 * @param    string
 * @return    string
 */
if ( ! function_exists('absolute_path'))
{
	function absolute_path($path = '')
	{
		$abs_path = str_replace('system/',$path, BASEPATH);
		//Add a trailing slash if it doesn't exist.
		$abs_path = preg_replace("#([^/])/*$#", "\\1/", $abs_path);
		return $abs_path;
	}
}


/**
 *
 * Global function to highlight the message into the page
 */
if(!function_exists('ui_message_highlight')){

	function ui_message_highlight($msg, $message_type = "ERROR"){

		if(!trim($msg)){
			return 0;

		}

		switch ($message_type) {
			case "ERROR":
			?>
				<div class ='ui-state-error ui-admin-message-highlight'>
					<?php echo $msg; ?>
				</div>

			<?php
			break;


			case "HIGHLIGHT":
				?>
				<div class ='ui-state-highlight ui-admin-message-highlight'>
					<?php echo $msg; ?>
				</div>

				<?php
			break;
			case "ACTIVE":
				?>
				<div class ='ui-state-active ui-admin-message-highlight'>
					<?php echo $msg; ?>
				</div>

				<?php
			break;

			default:
				;
			break;
		}


	}

}


/**
 * Paggination
 *
 * Returns Html of paggination
 *
 */
if ( ! function_exists('zebra_paggination'))
{
	function zebra_paggination($total_records,$record_perpage)
	{
		$CI =& get_instance();

		$CI->load->library('zebra_pagination');

		$CI->zebra_pagination->records($total_records);
		$CI->zebra_pagination->records_per_page($record_perpage);
		return $CI->zebra_pagination->render(TRUE);
	}
}



/**
 * Time conversion
 *
 */
if ( ! function_exists('time_now'))
{
	function time_now()
	{
		return time();
	}
}

/**
 * Resizing Image
 *
 */
if(!function_exists('image_resize')){

	function image_resize($config_res){
		$CI =& get_instance();

		$CI->load->library('image_lib');
		$config_res['image_library'] = 'gd2';

		$CI->image_lib->initialize($config_res);
		if (!$CI->image_lib->resize()) {
			return $CI->image_lib->resize();
		}else{
			return true;
		}
		$CI->image_lib->clear();
	}


}

/**
 * Image upload
 */
if ( ! function_exists('image_upload_config'))
{
	function image_upload_config($cntrlObj,$upload_path = 'assets/media/images/other',$options = array()){
		$config['encrypt_name'] = TRUE;
		$config['upload_path'] = $upload_path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';



		// Create upload dir if not exist
		if($upload_path){
			if(!is_dir($upload_path)){
				mkdir($upload_path,0777);
			}
		}

		//
		if($options['allowed_types']){
			$config['allowed_types'] = $options['allowed_types'];
		}

		if(count($options) > 0){
		if($options['max_width'])
			$config['max_width'] = $options['max_width'];

			if($options['max_height'])
			$config['max_height'] = $options['max_height'];
		}


		$cntrlObj->load->library('upload', $config);
		$cntrlObj->upload->initialize($config);
	}
}



/**
 * Flower configuration
 */


if ( !function_exists('html_flower_player_output')){

	function html_flower_player_output($arrData = array()) {

		$randnum = rand(500, 5000);

		if(empty($arrData['width']))
			$arrData['width'] = 100;

		if(empty($arrData['height']))
			$arrData['height'] = 100;

		$vid= 'vid_'.$randnum."_".time();
		$base_url= base_url();

		$playBtn = base_url('assets/plugins/flowerplayer/img/play_large.png');

		$adXML = base_url('/webservices/adxml/tag');

		$player_html = <<<EOP

		<link rel="stylesheet" href="//releases.flowplayer.org/6.0.2/skin/functional.css">
		<script src="//releases.flowplayer.org/6.0.2/flowplayer.min.js"></script>

		<div id="player" style="width:{$arrData['width']}px;height:{$arrData['height']}px" data-embed="false">


		</div>

			<script>

				$(function(){
					var container = document.getElementById("player");

					// install flowplayer into selected container
					flowplayer(container, {
						key : '#\$c1b2b5af28ec779e779',
						splash : true,
						splash : '{$arrData['image']}',
   						analytics : 'UA-38279325-1',
   						embed : false,

					    clip: {
					        sources: [
					              { type: "video/mp4",
					                src:  "{$arrData['file']}" }
					        ]
					    }
					});
				});

			</script>
EOP;

			return $player_html;


		}
}


/**
 * Flower configuration for live streaming
 */


if ( !function_exists('html_streaming_output')){

	function html_streaming_output($arrData = array()) {
//pre_print($arrData);
		$randnum = rand(500, 5000);

		if(empty($arrData['width']))
			$arrData['width'] = 100;

		if(empty($arrData['height']))
			$arrData['height'] = 100;

		$vid= 'vid_'.$randnum."_".time();
		$base_url= base_url();

		$playBtn = base_url('assets/plugins/flowerplayer/img/play_large.png');

		$adXML = base_url('/webservices/adxml/tag');

		$player_html = <<<EOP

		<link rel="stylesheet" href="//releases.flowplayer.org/6.0.2/skin/functional.css">
		<script src="//releases.flowplayer.org/6.0.2/flowplayer.min.js"></script>
		<style>
			.flowplayer .fp-embed-code label,.fp-embed {
			    display: none !important;
			}
		</style>
		<div id="player" style="width:{$arrData['width']}px;height:{$arrData['height']}px" data-embed="false">


		</div>

			<script>

				$(function(){
					var container = document.getElementById("player");

					// install flowplayer into selected container
					flowplayer(container, {
						key : '#\$c1b2b5af28ec779e779',
						autoplay : true,
   						analytics : 'UA-38279325-1',
   						live : true,
   						title : "Live Stream",
					    clip: {
					        sources: [
					              { type: "application/x-mpegurl",
					                src:  "{$arrData['file']}" }
					        ]
					    }
					});
				});

			</script>
EOP;

			return $player_html;


		}
}


/**
 * Id validation
 */

if(! function_exists('is_valid_id')){

	function is_valid_id($id){
		if (is_numeric ($id))
		{
			return true;
		} else {

			throw new Exception("Invalid arguments");

		}
	}
}


/**
 * Date validation
 */
if(! function_exists('is_valid_date')){
	function is_valid_date($mydate){
		list($yy,$mm,$dd)=explode("-",trim($mydate));
		if (is_numeric($yy) && is_numeric($mm) && is_numeric($dd))
		{
			if(checkdate($mm,$dd,$yy)){
				return true;
			}
		}
		throw new Exception("Invalid arguments");
		return false;
	}
}


/**
 * Url Decoding
 */
if(! function_exists('rnd_urldecode')){

	function rnd_urldecode($url){

		$url = str_replace("-", "+", $url);

		return urldecode($url);
	}

}

/**
 * Url Encoding
 */
if(! function_exists('rnd_urlencode')){

	function rnd_urlencode($url){
		$url = preg_replace('~[^A-Za-z\d\s-]+~u',' ',$url);
		$url = urlencode($url);
		return str_replace("+", "-", $url);
	}

}


/**
 * Escaping string for mysql
 */
function mysql_regexp_escape_string($string)
{
	$special_chars = array('*', '.', '?', '+', '[', ']', '(', ')', '{', '}', '^', '$', '|', '\\','-');
	$replacements = array();

	foreach ($special_chars as $special_char)
	{
		$replacements[] = '\\\\' . $special_char;
	}

	return str_replace($special_chars, $replacements, $string);
}


/**
 * Pre Print Data
 */
function pre_print($data){
	echo"<pre>";print_r($data);exit;
}

?>