<?php
namespace Mooti\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/user-list", name="user-list")
     */
    public function userListAction()
    {
        $data = [
            'pageDetails' => [
                'title'       => 'Users',
                'description' => 'administer your users'
            ]
        ];
        $response = $this->render(
            'MootiUserBundle:Default:userList.html.twig',
            $data
        );
        return $response;
    }
}
