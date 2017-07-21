<?php
/**
 * @version    SVN: <svn_id>
 * @package    Rest
 * @author     paulo.ernesto
 * @copyright  Vale 2017
 * @license    GNU General Public License version 2 or later.
 */
defined('_JEXEC') or die( 'Restricted access');
jimport('joomla.plugin.plugin');

/**
 * Base Class for api plugin
 *
 * @package     Rest
 * @subpackage  component
 */
class PlgAPIRest extends ApiPlugin
{
	/**
	 * Rest api plugin to load com_api classes
	 *
	 * @param   string  $subject  originalamount
	 * @param   array   $config   coupon_code
	 */
	public function __construct($subject, $config = array())
	{
		parent::__construct($subject, $config = array());

		ApiResource::addIncludePath(dirname(__FILE__) . '/rest');
		
		// Set resources & access
		$this->setResourceAccess('list', 'public', 'get');
	}
}
