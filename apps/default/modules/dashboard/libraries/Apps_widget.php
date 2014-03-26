<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * BackEndManager
 *
 * A 'one core-multiple apps' CodeIgniter-BackendPro system with Bootstrap. (PHP 5 or newer)
 *
 * @package         BackEndManager
 * @author          Reina Sison-Gagno
 * @copyright       Copyright (c) 2014
 * @license         http://choosealicense.com/licenses/gpl-v2/
 * @link            https://github.com/reine/BackEndManager
 * @filesource
 */

// ---------------------------------------------------------------------------

/**
 * Apps_widget Class
 *
 * This class contains the code to create the apps (quick icons) widget.
 */
class Apps_widget
{
	function Apps_widget()
	{
		$this->CI =& get_instance();

		$this->CI->load->model('auth/auth','user_model');
	}

	function create()
	{
		$data = '';
		return $this->CI->load->view('dashboard/'.$this->CI->config->item('backendpro_template_admin') . 'dashboard/apps',$data,TRUE);
	}
}

/* End of file Apps_Widget.php */
/* Location: ./modules/dashboard/libraries/Apps_Widget.php */