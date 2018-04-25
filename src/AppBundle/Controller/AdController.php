<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdController extends Controller
{
    /**
   * @Route("/admin", name="admin")
   * @Security("is_granted('ROLE_ADMIN')")
    */
    public function showAction(Request $request)
    {
        $characters = [
          'Daenerys Targaryen' => 'Emilia Clarke',
    
        ];

        return $this->render('default/index.html.twig', array('character' => $characters));
    }
   
}