<?php
/**
 * @copyright   2016 Mautic, Inc. All rights reserved
 * @author      Mautic, Inc
 *
 * @link        https://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\WebHookPostBundle\Controller;

use Mautic\CoreBundle\Controller\FormController;
use Mautic\CoreBundle\Helper\Chart\LineChart;
use Mautic\LeadBundle\Controller\EntityContactsTrait;
use MauticPlugin\MauticSocialBundle\Entity\Monitoring;

use Mautic\FormBundle\Controller\PublicController;

/**
 * Class MonitoringController.
 */
class WebHookController extends FormController
{
    use EntityContactsTrait;

    /*
     * @param int $page
     */
    public function indexAction($token)
    {

	$postdata = file_get_contents("php://input");
	$postdata = json_decode($postdata, true);

	if(isset($postdata['lead']))
	{
        	$email = $postdata['lead']['email'];
        	$ip = $postdata['lead']['ipAddress'];
        	$name = $postdata['lead']['firstName'];
        	$campaign = $postdata['campaign']['title'];


		$this->request->request->set('mauticform', 
					['name' => $name, 
					 'email' => $email, 
					 'formid' => $token, 
					 'return' => '', 
					 'formName' => 'formslead', 
					 'messenger' => 1,
					 'ajax' => true] 
					);
		$this->request->request->set('ajax', true);
    		$response = $this->forward('MauticFormBundle:Public:submit',[], $this->request->request->all());

		return $response;
	}

	return new Response("", 500);

    }

}
