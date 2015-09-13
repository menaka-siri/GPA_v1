<?php

namespace GPABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
//    public function indexAction($name)
//    {
//        return $this->render('GPABundle:Default:index.html.twig', array('name' => $name));
//    }
    public function indexAction()
    {
        return $this->render('GPABundle:Default:home.html.twig', array('flag1'=>false, 'flag2'=>false));
    }
    
    public function loginFailAction()
    {
        return $this->render('GPABundle:Home:home.html.twig', array('flag'=>true));
    }
    
    public function userRegistrationFormAction()
    {
        return $this->render('GPABundle:Default:user_registration.html.twig');
    }
    
    public function userRegistrationAction(Request $request)
    {
        /*
         * flag1 = ID is already registered in the system
         * flag2 = User registration failed!
         * flag3 = User is registered with the system successfully!
         */
        $flag1=false; $flag2=false; $flag3=false;
        
        //assigning the form data to variables
        $u_id = $request->get('id'); 
        $f_name = $request->get('first_name');
        $l_name = $request->get('last_name');
        $email = $request->get('email');
        $mobile = $request->get('mobile');
        $department = $request->get('department');
        $profession = $request->get('profession');
        $password = $request->get('confirmPassword');
        $en_pass = md5($password);

        //checking whether the user is already registered with the system.
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('GPABundle:Users');
        $user = $repository->findOneBy(array('id'=>$u_id));
        if($user != null){
            return $this->render('GPABundle:Default:user_registration_status.html.twig',array('flag1'=>true ,'flag2'=>false, 'flag3'=>false ));
        }
        
        //if the user is not registered with the system
        else{
            $emMain = $this->getDoctrine()->getEntityManager();
            $connection = $emMain->getConnection();

            //INSERT INTO Customers (CustomerName, ContactName, PostalCode) VALUES ('Cardinal','Tom B. Erichsen','Skagen 21');
            $tempStatement = $connection->prepare("INSERT INTO users (id, first_name, last_name, email, mobile, department, profession, password) VALUES ( :u_id , :f_name , :l_name , :email , :mobile , :department , :profession , :password)");
            $tempStatement->bindValue('u_id', $u_id);
            $tempStatement->bindValue('f_name', $f_name);
            $tempStatement->bindValue('l_name', $l_name);
            $tempStatement->bindValue('email', $email);
            $tempStatement->bindValue('mobile', $mobile);
            $tempStatement->bindValue('department', $department);
            $tempStatement->bindValue('profession', $profession);
            $tempStatement->bindValue('password', $en_pass);
            
            if($tempStatement->execute()){
                return $this->render('GPABundle:Default:user_registration_status.html.twig',array('flag1'=>false ,'flag2'=>false, 'flag3'=>true ));
            }
            else{
                return $this->render('GPABundle:Default:user_registration_status.html.twig',array('flag1'=>false ,'flag2'=>true, 'flag3'=>false ));
            }
        }   
    }
    
    //function to print messages to console
    public function debug_to_console( $data ) {
        if ( is_array( $data ) )
            $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
        else
            $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

        echo $output;
    }
}
