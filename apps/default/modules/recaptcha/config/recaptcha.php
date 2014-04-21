<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * ReCAPTCHA Config Array
 *
 * Contains the ReCAPTCHA config array
 *
 * @package			BackendPro
 * @subpackage		Configurations
 * @author			Adam Price
 * @copyright		Copyright (c) 2008
 * @license			http://www.gnu.org/licenses/lgpl.html
 */

// ---------------------------------------------------------------------------

$config['recaptcha'] = array(
	'public'=>'6LcWJfISAAAAAGrx0xYGyhFFcX51dSwLF8s5RNBX',
    'private'=>'6LcWJfISAAAAAMWKsGs9qLUIzxxFUajVXHPSH44Z',
    'RECAPTCHA_API_SERVER' =>'http://www.google.com/recaptcha/api',
    'RECAPTCHA_API_SECURE_SERVER'=>'https://www.google.com/recaptcha/api',
    'RECAPTCHA_VERIFY_SERVER' =>'www.google.com',
    'theme' => 'white'
); 



/* End of file recaptcha.php */
/* Location: ./modules/recaptcha/config/recaptcha.php */