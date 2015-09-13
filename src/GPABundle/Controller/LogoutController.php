<?php

namespace GPABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;

class LogoutController extends Controller
{
    public function logoutAction(Request $request)
    {
        $session= $request->getSession();
        $session->clear();
        $session->invalidate();
        return $this->redirect($this->generateUrl('gpa_login'));
    }
    
}
