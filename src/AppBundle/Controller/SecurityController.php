<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
       $helper = $this->get('security.authentication_utils');

       return $this->render(
           'auth/login.html.twig',
           array(
               'last_username' => $helper->getLastUsername(),
               'error'         => $helper->getLastAuthenticationError(),
           )
       );
    }

    /**
     * @Route("/login_check", name="security_login_check")
     */
    public function loginCheckAction()
    {

    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction()
    {
        
    }
     /**
   * @Route("/check", name="check")
    */
    public function checkAction(Request $request)
    {
       if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            $url = $this->generateUrl('admin');
  
        } else
        if ($this->get('security.authorization_checker')->isGranted('ROLE_USER')) 
        {
         $url = $this->generateUrl('welcome');
        }

         return new RedirectResponse($url);
    }
}