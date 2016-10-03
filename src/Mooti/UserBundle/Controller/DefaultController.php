<?php

namespace Mooti\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function userListAction()
    {
        return $this->render('MootiUserBundle:Default:userList.html.twig');
    }
}
