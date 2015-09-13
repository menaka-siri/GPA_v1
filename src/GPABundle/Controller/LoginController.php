<?php

namespace GPABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    public function indexAction(Request $request)
    {   
        //if a session is already setup
        /*
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $fullName = explode(".", $complete_ID);
            $f_name = $fullName[0];
            $l_name = $fullName[1];
            return $this->render('GPABundle:StudentDashboard:index.html.twig',array('name'=>$f_name." ".$l_name, 'complete_ID'=>$complete_ID ));
        }
        */
        
        if($request->getMethod()=='POST'){
            $u_name=$request->get('id');
            $p_word=$request->get('password');
            $en_p_word = md5($p_word);
            
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$u_name, 'password'=>$en_p_word));

            
            if($user)
            {
                $session = new Session();
                $session->set('id', $user->getId());

                if($user->getProfession()== 2 && $user->getStatus()== 1){
                    return $this->redirect($this->generateUrl('student_dashboard'));       
                }
                
                if($user->getProfession()== 1 && $user->getStatus()== 1){
                    return $this->redirect($this->generateUrl('lecturer_dashboard'));       
                }
                
                if( ($user->getProfession()== 0 && $user->getStatus()== 1 ) || $user->getProfession()== 3 ){
                    return $this->redirect($this->generateUrl('admin_dashboard'));       
                }
                
                if($user->getStatus()==0)
                {
                    //return $this->redirect($this->generateUrl('gpa_home'), array('flag1'=>true,'flage2'=>false));
                    return $this->render('GPABundle:Default:home.html.twig', array('flag1'=>false,'flag2'=>true));
                    //return $this->render('GPABundle:StudentDashboard:index.html.twig',array
                }
            }
            else
            {
                
                //return $this->redirect($this->generateUrl('gpa_home'), array('flag1'=>false,'flage2'=>true));
                return $this->render('GPABundle:Default:home.html.twig', array('flag1'=>true,'flag2'=>false));
            }   
        }
        
        else
        {
            //return $this->redirect($this->generateUrl('gpa_home'), array('flag1'=>false,'flage2'=>true));
            return $this->render('GPABundle:Default:home.html.twig', array('flag1'=>false,'flag2'=>false));
        }
    }
}


