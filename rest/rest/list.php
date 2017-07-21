<?php
/**
 * @version    SVN: <svn_id>
 * @package    Rest
 * @author     paulo.ernesto
 * @copyright  Vale 2017
 * @license    GNU General Public License version 2 or later.
 */

defined('_JEXEC') or die;
jimport('joomla.plugin.plugin');

/**
 * Class
 *
 * @package     Rest
 * @subpackage  component
 */
class restApiResourceList extends ApiResource
{
	/**
	 * GET
	 *
	 * @return  void
	 */
	public function get()
	{
		//$this->plugin->err_code = 405;
		//$this->plugin->err_message = 'GET not implemented';
		//$this->plugin->setApiResponse(true, null);
		$obj = new stdclass;
		$obj->success = true;
		$obj->data = $this->plugin->get('request_method');
		$obj->message = 'ok';
		$this->plugin->setResponse($obj);
		//return($obj);
	}

	/**
	 * POST
	 *
	 * @return  void
	 */
	public function post()
	{
		$obj = new stdclass;
		$obj->success = true;
		$obj->data = $this->plugin->get('request_method');
		$obj->message = 'ok';
		$this->plugin->setResponse($obj);
	}
}
