<?php

namespace GPABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\DBAL\Driver\PDOStatement;
use PDO;

class AdminController extends Controller{
    
    // rendering the admin's dashboard
    public function indexAction(Request $request){         
        $session = $request->getSession();
        $userid=$session->get('id');

        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();
            

            return $this->render('GPABundle:AdminDashboard:index.html.twig',array('name'=>$f_name));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    // renders the admin's profile page
    public function profileAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();

            return $this->render('GPABundle:AdminDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>false, 'flag2'=>false, 'flag3'=>false , 'flag4'=>false, 'flag5'=>false));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function changeDetailsAction(Request $request){
        $session = $request->getSession();
        $userid=$session->get('id');

        $f_name = $request->get('firstName');
        $l_name = $request->get('lastName');
        $email = $request->get('email');
        $mobile = $request->get('mobile');

        $emMain = $this->getDoctrine()->getEntityManager();
        $connection = $emMain->getConnection();
        $tempFlag=false;
        
        if(isset($userid))
        {
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
               
            if(!is_null($f_name)){
                  $tempFlag=false;
                  $tempStatement = $connection->prepare("UPDATE users SET first_name = :f_name WHERE id = :u_id");
                  $tempStatement->bindValue('f_name', $f_name);
                  $tempStatement->bindValue('u_id', $userid);
                  if(!$tempStatement->execute()){
                    $tempFlag=true;
                    return $this->render('GPABundle:AdminDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                }
            }
            
            if(!is_null($l_name)){
                $tempFlag=false;
                  $tempStatement = $connection->prepare("UPDATE users SET last_name = :l_name WHERE id = :u_id");
                  $tempStatement->bindValue('l_name', $l_name);
                  $tempStatement->bindValue('u_id', $userid);
                  if(!$tempStatement->execute()){
                      $tempFlag=true;
                      return $this->render('GPABundle:AdminDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                  }
            }

            if(!is_null($email)){
                $tempFlag=false;
                  $tempStatement = $connection->prepare("UPDATE users SET email = :email WHERE id = :u_id");
                  $tempStatement->bindValue('email', $email);
                  $tempStatement->bindValue('u_id', $userid);
                  if(!$tempStatement->execute()){
                      $tempFlag=true;
                      return $this->render('GPABundle:AdminDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                      
                    }
                  
            }
            
            if(!is_null($mobile)){
                $tempFlag=false;
                $tempStatement = $connection->prepare("UPDATE users SET mobile = :mobile WHERE id = :u_id");
                  $tempStatement->bindValue('mobile', $mobile);
                  $tempStatement->bindValue('u_id', $userid);
                  if(!$tempStatement->execute()){
                      $tempFlag=true;
                      return $this->render('GPABundle:AdminDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                     
                    }
            }
            
            if(!$tempFlag){
                $this->debug_to_console( $user->getFirstName() ); //print console - for debugging purposes
                //closing all the previous Entity Managers
                $em->close();
                $emMain->close();
                
                //retrieving the updated user record from the database
                $em2 = $this->getDoctrine()->getEntityManager();
                $repository2 = $em2->getRepository('GPABundle:Users');
                $user2 = $repository2->findOneBy(array('id'=>$userid));
                
                $this->debug_to_console( $user2->getFirstName() ); //print console - for debugging purposes
                
                return $this->render('GPABundle:AdminDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user2 ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>false, 'flag5'=>true));
 
            }
            else{
                $this->debug_to_console( $user->getFirstName() ); //print console - for debugging purposes
                //closing all the previous Entity Managers
                $em->close();
                $emMain->close();
                
                //retrieving the updated user record from the database
                $em2 = $this->getDoctrine()->getEntityManager();
                $repository2 = $em2->getRepository('GPABundle:Users');
                $user2 = $repository2->findOneBy(array('id'=>$userid));
                
                $this->debug_to_console( $user2->getFirstName() ); //print console - for debugging purposes
                
                return $this->render('GPABundle:AdminDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user2 ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
            }
            
        }
        
        else{
                return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function changePasswordAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
        
        if(isset($userid)){
            $oldPass = $request->get('oldPassword');
            $newPass = $request->get('newPassword');
            $confirmPass = $request->get('confirmPassword');
            
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();

            $up = $user->getPassword(); //user's encrypted old password
            $en_pass = md5($oldPass);   //password entered as the old password to the form
            $en_new_pass = md5($newPass);  //new encrypted password
            
            $connection = $em->getConnection();
            
            if($newPass == $confirmPass){
                if($up == $en_pass){
                    $tempStatement = $connection->prepare("UPDATE users SET password = :pp WHERE id = :id");
                    $tempStatement->bindValue('pp', $en_new_pass);
                    $tempStatement->bindValue('id', $u_id);
                    $tempStatement->execute();

                    return $this->render('GPABundle:AdminDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag3'=>true, 'flag1'=>false, 'flag2'=>false, 'flag4'=>false, 'flag5'=>false));
                }
                else{
                    return $this->render('GPABundle:AdminDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>true,'flag2'=>false, 'flag3'=>false, 'flag4'=>false, 'flag5'=>false));
                }
            }
            else{
                return $this->render('GPABundle:AdminDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag2'=>true ,'flag1'=>false, 'flag3'=>false, 'flag4'=>false,'flag5'=>false ));
            } 
        }
        else{
              return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
   
    // renders the 'add user' page
    public function addUserAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();

            return $this->render('GPABundle:AdminDashboard:addUser.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>false,'flag2'=>false));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function userRegistrationAdminAction(Request $request){
        /*
         * flag1 = query execution fail
         * flag2 = query execution success
         */
        $session = $request->getSession();
        $userid=$session->get('id');
        
        //assigning the form data to variables
        $u_id = $request->get('newUserID'); 
        $newf_name = $request->get('first_name');
        $l_name = $request->get('last_name');
        $email = $request->get('email');
        $mobile = $request->get('mobile');
        $department = $request->get('department');
        $profession = $request->get('profession');
        $password = $request->get('confirmPassword');
        $en_pass = md5($password);

        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid)); //staff user
            
            $f_name = $user->getFirstName();
            
            $emMain = $this->getDoctrine()->getEntityManager();
            $connection = $emMain->getConnection();

            //INSERT INTO Customers (CustomerName, ContactName, PostalCode) VALUES ('Cardinal','Tom B. Erichsen','Skagen 21');
            $tempStatement = $connection->prepare("INSERT INTO users (id, first_name, last_name, email, mobile, department, profession, password) VALUES ( :u_id , :f_name , :l_name , :email , :mobile , :department , :profession , :password)");
            $tempStatement->bindValue('u_id', $u_id);
            $tempStatement->bindValue('f_name', $newf_name);
            $tempStatement->bindValue('l_name', $l_name);
            $tempStatement->bindValue('email', $email);
            $tempStatement->bindValue('mobile', $mobile);
            $tempStatement->bindValue('department', $department);
            $tempStatement->bindValue('profession', $profession);
            $tempStatement->bindValue('password', $en_pass);

            if($tempStatement->execute()){
                return $this->render('GPABundle:AdminDashboard:addUser.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>false,'flag2'=>true));
            }
            else{
                return $this->render('GPABundle:AdminDashboard:addUser.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>true,'flag2'=>false));
            }   
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function checkUserAvailabilityAction(Request $request){
        $indexNum = $request->get('indexNum');
        
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT * FROM users WHERE id= :indexNum");
        $statement->bindValue('indexNum', $indexNum);
        $statement->execute();
        $rs = $statement->fetch();
        
        if($rs == [] || $rs== FALSE){ //Both seemed to be true when there is no result found, contact Mirage
            if($rs== []){  
                //$this->debug_to_console("searchAjaxAction: query execution returned null");
                //echo "searchAjaxAction: query execution returned null\n";
                $response= array("status" => 1, "msg" => "query execution returned null");
                return new Response(json_encode($response));
            }
            if($rs == FALSE){
                //$this->debug_to_console("searchAjaxAction: DB query execution error, query returned FALSE");
                //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
                $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE");
                return new Response(json_encode($response));
            }
        }
        else{
            //return new Response(json_encode(array('orderBy'=>$orderBy, 'lec_id'=>$lec_id)));
            $response = array("status" => 3, "msg" => "User {$indexNum} is already in the system");
            return new Response(json_encode($response));
        }
    }
    
    // renders the 'view users' page
    public function viewUsersAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();

            return $this->render('GPABundle:AdminDashboard:viewUsers.html.twig',array('name'=>$f_name, 'userDetails'=>$user));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function searchUserAjaxAction(Request $request){
        //$request = $this->container->get('request');        
        //$data1 = $request->query->get('data1');
        //$data2 = $request->query->get('data2');
        $profession = $request->get('profession');
        $department = $request->get('department');
        $indexNum = $request->get('indexNum');
        $email = $request->get('email');
        $name = $request->get('name');
        
        $orderBy = $request->get('orderBy');
        $order = $request->get('order');
        
        $em = $this->getDoctrine()->getEntityManager();
        //$repository = $em->getRepository('GPABundle:Users');
        //$user = $repository->findOneBy(array('id'=>$userid));
        $connection = $em->getConnection();
//        $statement = $connection->prepare("SELECT id as indexNum,first_name,last_name,email,mobile FROM users WHERE profession= :profession AND department= :department AND "
//                                            . "id LIKE \"%" .":indexNum". "%\" AND "
//                                            . "email LIKE \"%" .":email"." %\" AND "
//                                            . "first_name LIKE \"%" .":name". "%\" AND "
//                                            . "last_name LIKE \"%" .":name" ."%\"");
//        $statement = $connection->prepare("SELECT id as indexNum,first_name,last_name,email,mobile FROM users WHERE profession= :profession AND department= :department AND "
//                                            . "id LIKE :indexNum AND "
//                                            . "email LIKE :email AND "
//                                            . "first_name LIKE :name AND "
//                                            . "last_name LIKE :name");
        if($orderBy != null && $order !=null ){
            $statement = $connection->prepare("SELECT id as indexNum,first_name,last_name,email,mobile FROM users WHERE status=1 AND "
                                            . "profession=\"".$profession."\" AND "
                                            . "department=\"".$department."\" AND "
                                            . "id LIKE \"%".$indexNum."%\" AND "
                                            . "email LIKE \"%".$email."%\" AND "
                                            . "(first_name LIKE \"%".$name."%\" OR "
                                            . "last_name LIKE \"%".$name."%\") "
                                            . "ORDER BY ".$orderBy." ".$order."");
        }
        else{
            $statement = $connection->prepare("SELECT id as indexNum,first_name,last_name,email,mobile FROM users WHERE status=1 AND "
                                                . "profession=\"".$profession."\" AND "
                                                . "department=\"".$department."\" AND "
                                                . "id LIKE \"%".$indexNum."%\" AND "
                                                . "email LIKE \"%".$email."%\" AND "
                                                . "(first_name LIKE \"%".$name."%\" OR "
                                                . "last_name LIKE \"%".$name."%\") ");
                                                //. "ORDER BY ".$orderBy." ".$order."");
        }
                                            
//        $statement->bindValue('profession', $profession);
//        $statement->bindValue('department', $department);
//        $keyword1= "%".$indexNum."%";
//        $keyword1 = "'".$keyword1."'";
//        $statement->bindValue('indexNum', $keyword1);
//        $keyword2= "%".$email."%";
//        $keyword2 = "'".$keyword2."'";
//        $statement->bindValue('email', $keyword2);
//        $keyword3= "%".$name."%";
//        $keyword2 = "'".$keyword2."'";
//        $statement->bindValue('name', $keyword3);
        $statement->execute();

        $rs = $statement->fetchAll();
        
        if($rs == [] || $rs== FALSE){ //Both seemed to be true when there is no result found, contact Mirage
            if($rs== []){  
                //$this->debug_to_console("searchAjaxAction: query execution returned null");
                //echo "searchAjaxAction: query execution returned null\n";
                $response= array("status" => null, "msg" => "query execution returned null", "value" => 1);
                return new Response(json_encode($response));
            }
            if($rs == FALSE){
                //$this->debug_to_console("searchAjaxAction: DB query execution error, query returned FALSE");
                //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
                $response = array("status" => null, "msg" => "DB query execution error, query returned FALSE", "value" => 2);
                return new Response(json_encode($response));
            }
        }
        else{
            //$this->debug_to_console(" searchAjaxAction: Query execution was successful");
            //echo print_r($classBest);
            //echo "max grade: ".$classBest['maxGrade']."\n";
            //echo " searchAjaxAction: Query execution was successful\n";
            $response = $rs;
            return new Response(json_encode($response));
            //echo json_encode($rs);
        }
    }
    
    // renders the 'register users'  page
    public function registerUsersAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();
            
            $userList = $this->getUnregisteredUsers();
            
            return $this->render('GPABundle:AdminDashboard:registerUsers.html.twig',array('name'=>$f_name, 'userDetails'=>$user, 'userList'=>$userList));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function getArrangedUserListAction(Request $request){
        $filterBy = $request->get('filterBy');
        $orderBy = $request->get('orderBy');
        $order = $request->get('order');
        
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        if($filterBy != null){
            $statement= $connection->prepare("SELECT * FROM users WHERE profession= :filterBy AND status=0 AND profession != 3 ORDER BY ".$orderBy." ".$order."");
            $statement->bindValue('filterBy', $filterBy);
        }else{
            $statement= $connection->prepare("SELECT * FROM users WHERE status=0 AND profession != 3 ORDER BY ".$orderBy." ".$order."");
        }  
        $statement->execute();
        $rs = $statement->fetchAll();
        
        if($rs == [] || $rs== FALSE){ //Both seemed to be true when there is no result found, contact Mirage
            if($rs== []){  
                //$this->debug_to_console("searchAjaxAction: query execution returned null");
                //echo "searchAjaxAction: query execution returned null\n";
                $response= array("status" => 1, "msg" => "query execution returned null");
                return new Response(json_encode($response));
            }
            if($rs == FALSE){
                //$this->debug_to_console("searchAjaxAction: DB query execution error, query returned FALSE");
                //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
                $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE");
                return new Response(json_encode($response));
            }
        }
        else{
            //return new Response(json_encode(array('orderBy'=>$orderBy, 'lec_id'=>$lec_id)));
            return new Response(json_encode($rs));
        }
    }
    
    public function confirmRegistrationAction(Request $request){
        
        $indexNum = $request->get('indexNum');

        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("UPDATE users SET status = '1' WHERE users.id = :indexNum ");
        $statement->bindValue('indexNum', $indexNum);
        
        if($statement->execute()){ 
            //echo " searchAjaxAction: Query execution was successful\n";
            $response = array("status" => 1, "msg" => "DB query execution success", "value" => 1);
            return new Response(json_encode($response));
        }
        else{
            //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
            $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE", "value" => 2);
            return new Response(json_encode($response));
        }
    }
    
    // renders the respective user's profile page
    public function userProfileViewAction(Request $request, $indexNum){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();
            
            $user2 = $repository->findOneBy(array('id'=>$indexNum));

            return $this->render('GPABundle:AdminDashboard:viewUserProfile.html.twig',array('name'=>$f_name, 'userDetails'=>$user2 ,'indexNum'=>$indexNum,'flag1'=>false, 'flag2'=>false, 'flag3'=>false , 'flag4'=>false, 'flag5'=>false));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }

    public function changeUserDetailsAction(Request $request, $indexNum){
        $session = $request->getSession();
        $userid=$session->get('id');

        $f_name = $request->get('firstName');
        $l_name = $request->get('lastName');
        $email = $request->get('email');
        $mobile = $request->get('mobile');

        $emMain = $this->getDoctrine()->getEntityManager();
        $connection = $emMain->getConnection();
        $tempFlag=false;
        
        if(isset($userid))
        {
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid)); //Staff User
            $name = $user->getFirstName();
            $userTemp = $repository->findOneBy(array('id'=>$indexNum));
               
            if(!is_null($f_name)){
                  $tempFlag=false;
                  $tempStatement = $connection->prepare("UPDATE users SET first_name = :f_name WHERE id = :u_id");
                  $tempStatement->bindValue('f_name', $f_name);
                  $tempStatement->bindValue('u_id', $indexNum);
                  if(!$tempStatement->execute()){
                    $tempFlag=true;
                    return $this->render('GPABundle:AdminDashboard:viewUserProfile.html.twig',array('name'=>$name, 'userDetails'=>$userTemp, 'indexNum'=>$indexNum,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                }
            }
            
            if(!is_null($l_name)){
                $tempFlag=false;
                  $tempStatement = $connection->prepare("UPDATE users SET last_name = :l_name WHERE id = :u_id");
                  $tempStatement->bindValue('l_name', $l_name);
                  $tempStatement->bindValue('u_id', $indexNum);
                  if(!$tempStatement->execute()){
                      $tempFlag=true;
                      return $this->render('GPABundle:AdminDashboard:viewUserProfile.html.twig',array('name'=>$name, 'userDetails'=>$userTemp ,'indexNum'=>$indexNum,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                  }
            }

            if(!is_null($email)){
                $tempFlag=false;
                  $tempStatement = $connection->prepare("UPDATE users SET email = :email WHERE id = :u_id");
                  $tempStatement->bindValue('email', $email);
                  $tempStatement->bindValue('u_id', $indexNum);
                  if(!$tempStatement->execute()){
                      $tempFlag=true;
                      return $this->render('GPABundle:AdminDashboard:viewUserProfile.html.twig',array('name'=>$name, 'userDetails'=>$userTemp ,'indexNum'=>$indexNum,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                      
                    }
                  
            }
            
            if(!is_null($mobile)){
                $tempFlag=false;
                $tempStatement = $connection->prepare("UPDATE users SET mobile = :mobile WHERE id = :u_id");
                  $tempStatement->bindValue('mobile', $mobile);
                  $tempStatement->bindValue('u_id', $indexNum);
                  if(!$tempStatement->execute()){
                      $tempFlag=true;
                      return $this->render('GPABundle:AdminDashboard:viewUserProfile.html.twig',array('name'=>$name, 'userDetails'=>$userTemp ,'indexNum'=>$indexNum,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                     
                    }
            }
            
            if(!$tempFlag){
                $this->debug_to_console( $user->getFirstName() ); //print console - for debugging purposes
                //closing all the previous Entity Managers
                $em->close();
                $emMain->close();
                
                //retrieving the updated user record from the database
                $em2 = $this->getDoctrine()->getEntityManager();
                $repository2 = $em2->getRepository('GPABundle:Users');
                $user2 = $repository2->findOneBy(array('id'=>$indexNum));
                
                $this->debug_to_console( $user2->getFirstName() ); //print console - for debugging purposes
                
                return $this->render('GPABundle:AdminDashboard:viewUserProfile.html.twig',array('name'=>$name, 'userDetails'=>$user2 ,'indexNum'=>$indexNum,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>false, 'flag5'=>true));
 
            }
            else{
                $this->debug_to_console( $user->getFirstName() ); //print console - for debugging purposes
                //closing all the previous Entity Managers
                $em->close();
                $emMain->close();
                
                //retrieving the updated user record from the database
                $em2 = $this->getDoctrine()->getEntityManager();
                $repository2 = $em2->getRepository('GPABundle:Users');
                $user2 = $repository2->findOneBy(array('id'=>$indexNum));
                
                $this->debug_to_console( $user2->getFirstName() ); //print console - for debugging purposes
                
                return $this->render('GPABundle:AdminDashboard:viewUserProfile.html.twig',array('name'=>$name, 'userDetails'=>$user2 ,'indexNum'=>$indexNum,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
            }
            
        }
        
        else{
                return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function changeUserPasswordAction(Request $request, $indexNum){
        
        $session = $request->getSession();
        $userid=$session->get('id');
        
        if(isset($userid)){
            $oldPass = $request->get('oldPassword');
            $newPass = $request->get('newPassword');
            $confirmPass = $request->get('confirmPassword');
            
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid)); //Staff User
            
            $f_name = $user->getFirstName();

            $user2 = $repository->findOneBy(array('id'=>$indexNum)); 
            
            $up = $user2->getPassword(); //user's encrypted old password
            $en_pass = md5($oldPass);   //password entered as the old password to the form
            $en_new_pass = md5($newPass);  //new encrypted password
            
            $connection = $em->getConnection();
            
            if($newPass == $confirmPass){
                if($up == $en_pass){
                    $tempStatement = $connection->prepare("UPDATE users SET password = :pp WHERE id = :id");
                    $tempStatement->bindValue('pp', $en_new_pass);
                    $tempStatement->bindValue('id', $indexNum);
                    $tempStatement->execute();

                    return $this->render('GPABundle:AdminDashboard:viewUserProfile.html.twig',array('name'=>$f_name, 'userDetails'=>$user2 ,'indexNum'=>$indexNum,'flag3'=>true, 'flag1'=>false, 'flag2'=>false, 'flag4'=>false, 'flag5'=>false));
                }
                else{
                    return $this->render('GPABundle:AdminDashboard:viewUserProfile.html.twig',array('name'=>$f_name, 'userDetails'=>$user2 ,'indexNum'=>$indexNum,'flag1'=>true,'flag2'=>false, 'flag3'=>false, 'flag4'=>false, 'flag5'=>false));
                }
            }
            else{
                return $this->render('GPABundle:AdminDashboard:viewUserProfile.html.twig',array('name'=>$f_name, 'userDetails'=>$user2 ,'indexNum'=>$indexNum,'flag2'=>true ,'flag1'=>false, 'flag3'=>false, 'flag4'=>false,'flag5'=>false ));
            } 
        }
        else{
              return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
   
    public function dropUserAction(Request $request){
        
        $indexNum = $request->get('indexNum');

        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("DELETE FROM users WHERE id= :indexNum");
        $statement->bindValue('indexNum', $indexNum);
        
        if($statement->execute()){ 
            //echo " searchAjaxAction: Query execution was successful\n";
            $response = array("status" => 1, "msg" => "DB query execution success", "value" => 1);
            return new Response(json_encode($response));
        }
        else{
            //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
            $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE", "value" => 2);
            return new Response(json_encode($response));
        }
    }
    
    public function viewUserStatsAction(Request $request, $indexNum){
        $session = $request->getSession();
        $userid=$session->get('id');

        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('GPABundle:Users');
        $user = $repository->findOneBy(array('id'=>$userid));

        $f_name = $user->getFirstName();

        $user2 = $repository->findOneBy(array('id'=>$indexNum));

        if($user2->getProfession()== 2){
            return $this->redirect($this->generateUrl('admin_view_student_stats', array('indexNum'=>$indexNum)));       
        }

        if($user2->getProfession()== 1 ){
            return $this->redirect($this->generateUrl('admin_view_lec_stats', array('indexNum'=>$indexNum)));       
        }
    }
    
    // renders the student's stat page page - currently, only the enrolled courses are shown
    public function viewStudentStatsAction(Request $request, $indexNum){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();
            
            $user2 = $repository->findOneBy(array('id'=>$indexNum));
            
            $semResults = array_fill(0, 8, NULL);
            
            for( $i=0 ; $i<8 ; $i++ ){
                $semResults[$i]=$this->getSemResults($indexNum, $i+1);
            }
            
            return $this->render('GPABundle:AdminDashboard:viewStudentStats.html.twig',array('name'=>$f_name, 'userDetails'=>$user2,'semResults'=>$semResults ,'indexNum'=>$indexNum));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    // renders the student's stat page page - currently, only the enrolled courses are shown
    public function viewLecStatsAction(Request $request, $indexNum){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();
            
            $user2 = $repository->findOneBy(array('id'=>$indexNum));
            
            $courseList = $this->getCourseList($indexNum);

            
            return $this->render('GPABundle:AdminDashboard:viewLecStats.html.twig',array('name'=>$f_name, 'userDetails'=>$user2,'courseList'=>$courseList ,'indexNum'=>$indexNum));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function getArrangedCourseListAction(Request $request){
        $lec_id = $request->get('lec_id');
        $orderBy = $request->get('orderBy');
        $order = $request->get('order');
        
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement= $connection->prepare("SELECT * FROM course WHERE lec_id= :lec_id ORDER BY ".$orderBy." ".$order."");
        $statement->bindValue('lec_id', $lec_id);
        $statement->execute();

        $rs = $statement->fetchAll();
        
        if($rs == [] || $rs== FALSE){ //Both seemed to be true when there is no result found, contact Mirage
            if($rs== []){  
                //$this->debug_to_console("searchAjaxAction: query execution returned null");
                //echo "searchAjaxAction: query execution returned null\n";
                $response= array("status" => 1, "msg" => "query execution returned null");
                return new Response(json_encode($response));
            }
            if($rs == FALSE){
                //$this->debug_to_console("searchAjaxAction: DB query execution error, query returned FALSE");
                //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
                $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE");
                return new Response(json_encode($response));
            }
        }
        else{
            
            //return new Response(json_encode(array('orderBy'=>$orderBy, 'lec_id'=>$lec_id)));
            return new Response(json_encode($rs));
        }
    }
    
    // renders the 'view users' page
    public function addCourseAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();

            return $this->render('GPABundle:AdminDashboard:addCourse.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>false,'flag2'=>false));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function checkCourseAvailabilityAction(Request $request){
        $course_id = $request->get('course_id');
        
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT * FROM course WHERE id= :course_id");
        $statement->bindValue('course_id', $course_id);
        $statement->execute();
        $rs = $statement->fetch();
        
        if($rs == [] || $rs== FALSE){ //Both seemed to be true when there is no result found, contact Mirage
            if($rs== []){  
                //$this->debug_to_console("searchAjaxAction: query execution returned null");
                //echo "searchAjaxAction: query execution returned null\n";
                $response= array("status" => 1, "msg" => "query execution returned null");
                return new Response(json_encode($response));
            }
            if($rs == FALSE){
                //$this->debug_to_console("searchAjaxAction: DB query execution error, query returned FALSE");
                //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
                $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE");
                return new Response(json_encode($response));
            }
        }
        else{
            //return new Response(json_encode(array('orderBy'=>$orderBy, 'lec_id'=>$lec_id)));
            $response = array("status" => 3, "msg" => "Course {$course_id} is already in the system");
            return new Response(json_encode($response));
        }
    }
    
    public function deptLecListAction(Request $request){
        $department = $request->get('department');
        
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT id,first_name,last_name FROM users WHERE department= :department AND profession=1 AND status=1");
        $statement->bindValue('department', $department);
        $statement->execute();
        $rs = $statement->fetchAll();
        
        if($rs == [] || $rs== FALSE){ //Both seemed to be true when there is no result found, contact Mirage
            if($rs== []){  
                //$this->debug_to_console("searchAjaxAction: query execution returned null");
                //echo "searchAjaxAction: query execution returned null\n";
                $response= array("status" => 1, "msg" => "query execution returned null");
                return new Response(json_encode($response));
            }
            if($rs == FALSE){
                //$this->debug_to_console("searchAjaxAction: DB query execution error, query returned FALSE");
                //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
                $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE");
                return new Response(json_encode($response));
            }
        }
        else{
            //return new Response(json_encode(array('orderBy'=>$orderBy, 'lec_id'=>$lec_id)));
            //$response = array("status" => 3, "msg" => "User {$indexNum} is already in the system");
            return new Response(json_encode($rs));
        }
    }
    
    public function createCourseAction(Request $request){
        /*
         * flag1 = query execution fail
         * flag2 = query execution success
         */
        $session = $request->getSession();
        $userid=$session->get('id');
        
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid)); //staff user
            
            $f_name = $user->getFirstName();
        
            //assigning the form data to variables
            $courseID = $request->get('courseID'); 
            $title = $request->get('title');
            $credits = $request->get('credits');
            $semester = $request->get('semester');
            $year = $request->get('year');
            $lec_name = $request->get('lec_name');
            $remarks = $request->get('remarks');


            $em = $this->getDoctrine()->getEntityManager();
            $connection = $em->getConnection();

            //INSERT INTO Customers (CustomerName, ContactName, PostalCode) VALUES ('Cardinal','Tom B. Erichsen','Skagen 21');
            $tempStatement = $connection->prepare("INSERT INTO course (id, title, credits, semester, year, lec_id, remarks ) VALUES ( :course_id , :title , :credits , :semester , :year , :lec_id , :remarks)");
            $tempStatement->bindValue('course_id', $courseID);
            $tempStatement->bindValue('title', $title);
            $tempStatement->bindValue('credits', $credits);
            $tempStatement->bindValue('semester', $semester);
            $tempStatement->bindValue('year', $year);
            $tempStatement->bindValue('lec_id', $lec_name);
            $tempStatement->bindValue('remarks', $remarks);

            if($tempStatement->execute()){
                return $this->render('GPABundle:AdminDashboard:addCourse.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>false,'flag2'=>true));
            }
            else{
                return $this->render('GPABundle:AdminDashboard:addCorse.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>true,'flag2'=>false));
            }
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    // renders the 'view users' page
    public function addEnrolmentAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();

            return $this->render('GPABundle:AdminDashboard:addEnrolment.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>false,'flag2'=>false));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function checkStudentAvailabilityAction(Request $request){
        $indexNum = $request->get('indexNum');
        
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT id,first_name,last_name,email,department FROM users WHERE id= :indexNum AND profession=2 AND status=1");
        $statement->bindValue('indexNum', $indexNum);
        $statement->execute();
        $rs = $statement->fetch();
        
        if($rs == [] || $rs== FALSE){ //Both seemed to be true when there is no result found, contact Mirage
            if($rs== []){  
                //$this->debug_to_console("searchAjaxAction: query execution returned null");
                //echo "searchAjaxAction: query execution returned null\n";
                $response= array("status" => 1, "msg" => "query execution returned null");
                return new Response(json_encode($response));
            }
            if($rs == FALSE){
                //$this->debug_to_console("searchAjaxAction: DB query execution error, query returned FALSE");
                //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
                $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE");
                return new Response(json_encode($response));
            }
        }
        else{
            //return new Response(json_encode(array('orderBy'=>$orderBy, 'lec_id'=>$lec_id)));
            //$response = array("status" => 3, "msg" => "Student {$indexNum} is a registered user in the system");
            return new Response(json_encode($rs));
        }
    }
    
    public function availableCourseListAction(Request $request){
        $indexNum = $request->get('indexNum');
        $course_id = $request->get('course_id');
        
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT course.id as course_id, course.title,  users.department, users.id as lec_id, users.first_name, users.last_name FROM course,users WHERE course.lec_id=users.id AND course.id NOT IN (SELECT course_id FROM enrolments where enrolments.student_id = :indexNum )");
        $statement->bindValue('indexNum', $indexNum);
        $statement->execute();
        $rs = $statement->fetchAll();
        
        if($rs == [] || $rs== FALSE){ //Both seemed to be true when there is no result found, contact Mirage
            if($rs== []){  
                //$this->debug_to_console("searchAjaxAction: query execution returned null");
                //echo "searchAjaxAction: query execution returned null\n";
                $response= array("status" => 1, "msg" => "query execution returned null");
                return new Response(json_encode($response));
            }
            if($rs == FALSE){
                //$this->debug_to_console("searchAjaxAction: DB query execution error, query returned FALSE");
                //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
                $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE");
                return new Response(json_encode($response));
            }
        }
        else{
            //return new Response(json_encode(array('orderBy'=>$orderBy, 'lec_id'=>$lec_id)));
            //$response = array("status" => 3, "msg" => "Student {$indexNum} is a registered user in the system");
            return new Response(json_encode($rs));
        }
    }
    
    public function confirmCourseEnrolmentAction(Request $request){
        /*
         * flag1 = query execution fail
         * flag2 = query execution success
         */
        $session = $request->getSession();
        $userid=$session->get('id');
        
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid)); //staff user
            
            $f_name = $user->getFirstName();
        
            //assigning the form data to variables
            $courseID = $request->get('courseID'); 
            $indexNum = $request->get('indexNum');


            $em = $this->getDoctrine()->getEntityManager();
            $connection = $em->getConnection();

            //INSERT INTO Customers (CustomerName, ContactName, PostalCode) VALUES ('Cardinal','Tom B. Erichsen','Skagen 21');
            $tempStatement = $connection->prepare("INSERT INTO enrolments (student_id, course_id ) VALUES ( :indexNum , :course_id)");
            $tempStatement->bindValue('course_id', $courseID);
            $tempStatement->bindValue('indexNum', $indexNum );
            
            if($tempStatement->execute()){
                return $this->render('GPABundle:AdminDashboard:addEnrolment.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>false,'flag2'=>true));
            }
            else{
                return $this->render('GPABundle:AdminDashboard:addEnrolment.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>true,'flag2'=>false));
            }
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function addResultsAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();

            return $this->render('GPABundle:AdminDashboard:addResult.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>false,'flag2'=>false));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function getEnrolledCourseListWithNoResultsAction(Request $request){
        $indexNum = $request->get('indexNum');
        $course_id = $request->get('course_id');
        
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT course.id as course_id, course.title, users.department, users.id as lec_id, users.first_name, users.last_name FROM course,users WHERE course.lec_id=users.id AND course.id NOT IN (SELECT enrolments.course_id FROM enrolments LEFT JOIN results ON enrolments.course_id = results.course_id where results.student_id = :indexNum )");
        $statement->bindValue('indexNum', $indexNum);
        $statement->execute();
        $rs = $statement->fetchAll();
        
        if($rs == [] || $rs== FALSE){ //Both seemed to be true when there is no result found, contact Mirage
            if($rs== []){  
                //$this->debug_to_console("searchAjaxAction: query execution returned null");
                //echo "searchAjaxAction: query execution returned null\n";
                $response= array("status" => 1, "msg" => "query execution returned null");
                return new Response(json_encode($response));
            }
            if($rs == FALSE){
                //$this->debug_to_console("searchAjaxAction: DB query execution error, query returned FALSE");
                //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
                $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE");
                return new Response(json_encode($response));
            }
        }
        else{
            //return new Response(json_encode(array('orderBy'=>$orderBy, 'lec_id'=>$lec_id)));
            //$response = array("status" => 3, "msg" => "Student {$indexNum} is a registered user in the system");
            return new Response(json_encode($rs));
        }
    }
    
    public function submitCourseResultAction(Request $request){
        /*
         * flag1 = query execution fail
         * flag2 = query execution success
         */
        $session = $request->getSession();
        $userid=$session->get('id');
        
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid)); //staff user
            
            $f_name = $user->getFirstName();
        
            //assigning the form data to variables
            $courseID = $request->get('courseID'); 
            $indexNum = $request->get('indexNum');
            $semester = $request->get('semester');
            $credits = $request->get('gradeCredits');
            $grade = $request->get('grade');


            $em = $this->getDoctrine()->getEntityManager();
            $connection = $em->getConnection();

            //INSERT INTO Customers (CustomerName, ContactName, PostalCode) VALUES ('Cardinal','Tom B. Erichsen','Skagen 21');
            //INSERT INTO results (student_id, course_id, grade, credits, semester) VALUES (:indexNum , :courseID, :grade , :credits , :semester);
            $tempStatement = $connection->prepare("INSERT INTO results (student_id, course_id, grade, credits, semester) VALUES (:indexNum , :course_id, :grade , :credits , :semester)");
            $tempStatement->bindValue('course_id', $courseID);
            $tempStatement->bindValue('indexNum', $indexNum );
            $tempStatement->bindValue('semester', $semester );
            $tempStatement->bindValue('credits', $credits );
            $tempStatement->bindValue('grade', $grade );
            
            if($tempStatement->execute()){
                return $this->render('GPABundle:AdminDashboard:addResult.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>false,'flag2'=>true));
            }
            else{
                return $this->render('GPABundle:AdminDashboard:addResult.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'flag1'=>true,'flag2'=>false));
            }
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function viewCourseAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();

            return $this->render('GPABundle:AdminDashboard:viewCourse.html.twig',array('name'=>$f_name, 'userDetails'=>$user));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function searchCourseAjaxAction(Request $request){
        
        $lec_id = $request->get('lec_id');
        $department = $request->get('department');
        $course_id = $request->get('course_id');
        $title = $request->get('title');
        
        $orderBy = $request->get('orderBy');
        $order = $request->get('order');
        
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();

        if($orderBy != null && $order !=null ){
            $statement = $connection->prepare("SELECT id as course_id, title, credits ,semester, year, remarks FROM course WHERE "
                                            . "lec_id=\"".$lec_id."\" AND "
                                            . "id LIKE \"%".$course_id."%\" AND "
                                            . "title LIKE \"%".$title."%\" AND "
                                            . "ORDER BY ".$orderBy." ".$order);
        }
        else{
            $statement = $connection->prepare("SELECT id as course_id, title, credits ,semester, year, remarks FROM course WHERE "
                                            . "lec_id=\"".$lec_id."\" AND "
                                            . "id LIKE \"%".$course_id."%\" AND "
                                            . "title LIKE \"%".$title."%\"");

        }

        $statement->execute();

        $rs = $statement->fetchAll();
        
        if($rs == [] || $rs== FALSE){ //Both seemed to be true when there is no result found, contact Mirage
            if($rs== []){  
                //$this->debug_to_console("searchAjaxAction: query execution returned null");
                $response= array("status" => null, "msg" => "query execution returned null", "value" => 1);
                return new Response(json_encode($response));
            }
            if($rs == FALSE){
                //$this->debug_to_console("searchAjaxAction: DB query execution error, query returned FALSE");
                $response = array("status" => null, "msg" => "DB query execution error, query returned FALSE", "value" => 2);
                return new Response(json_encode($response));
            }
        }
        else{
            //$this->debug_to_console(" searchAjaxAction: Query execution was successful");
            $response = $rs;
            return new Response(json_encode($response));
            //echo json_encode($rs);
        }
    }
    
    public function editCourseAction(Request $request, $courseID){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            $f_name = $user->getFirstName();
            
            $repository2 = $em->getRepository('GPABundle:Course');
            $course = $repository2->findOneBy(array('id'=>$courseID));

            return $this->render('GPABundle:AdminDashboard:editCourse.html.twig',array('name'=>$f_name, 'courseDetails'=>$course ,'currentCourseID'=>$courseID,'flag1'=>false, 'flag2'=>false));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function changeCourseDetailsAction(Request $request, $currentCourseID){
        $session = $request->getSession();
        $userid=$session->get('id');

        $courseID = $request->get('courseID');
        $title = $request->get('title');
        $lec_name = $request->get('lec_name');
        $semester = $request->get('semester');
        $credits = $request->get('credits');
        $year = $request->get('year');
        $remarks = $request->get('remarks');

        $emMain = $this->getDoctrine()->getEntityManager();
        $connection = $emMain->getConnection();

        if(isset($userid))
        {
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid)); //Staff User
            $name = $user->getFirstName();
            
            if( $remarks != null){
                $tempStatement = $connection->prepare("UPDATE course SET id = :courseID, lec_id = :lec_name, title = :title , credits = :credits , semester = :semester , year = :year, remarks= :remarks WHERE id =:currentCourseID");
                $tempStatement->bindValue('courseID', $courseID);
                $tempStatement->bindValue('lec_name', $lec_name);
                $tempStatement->bindValue('title', $title);
                $tempStatement->bindValue('credits', $credits);
                $tempStatement->bindValue('semester', $semester);
                $tempStatement->bindValue('year', $year);
                $tempStatement->bindValue('remarks', $remarks);
                $tempStatement->bindValue('currentCourseID', $currentCourseID);
            }
            else{
                $tempStatement = $connection->prepare("UPDATE course SET id = :courseID, lec_id = :lec_name, title = :title , credits = :credits , semester = :semester , year = :year WHERE id =:currentCourseID");
                $tempStatement->bindValue('courseID', $courseID);
                $tempStatement->bindValue('lec_name', $lec_name);
                $tempStatement->bindValue('title', $title);
                $tempStatement->bindValue('credits', $credits);
                $tempStatement->bindValue('semester', $semester);
                $tempStatement->bindValue('year', $year);
                $tempStatement->bindValue('currentCourseID', $currentCourseID);
            }
  
            if($tempStatement->execute()){

                $this->debug_to_console( $user->getFirstName() ); //print console - for debugging purposes
                //closing all the previous Entity Managers
                $em->close();
                $emMain->close();
                
                //retrieving the updated user record from the database
                $em2 = $this->getDoctrine()->getEntityManager();
                $repository2 = $em2->getRepository('GPABundle:Course');
                $course = $repository2->findOneBy(array('id'=>$courseID));
                
                $this->debug_to_console( $course->getId() ); //print console - for debugging purposes
                return $this->render('GPABundle:AdminDashboard:editCourse.html.twig',array('name'=>$name, 'courseDetails'=>$course,'currentCourseID'=> $courseID ,'flag1'=>false,'flag2'=>true));
            }
            else{
                $this->debug_to_console( $user->getFirstName() ); //print console - for debugging purposes
                //closing all the previous Entity Managers
                $em->close();
                $emMain->close();
                
                //retrieving the updated user record from the database
                $em2 = $this->getDoctrine()->getEntityManager();
                $repository2 = $em2->getRepository('GPABundle:Course');
                $course = $repository2->findOneBy(array('id'=>$courseID));
                
                $this->debug_to_console( $course->getId() ); //print console - for debugging purposes
                return $this->render('GPABundle:AdminDashboard:editCourse.html.twig',array('name'=>$name, 'courseDetails'=>$course,'currentCourseID'=> $currentCourseID ,'flag1'=>true,'flag2'=>false));
            }
  
        }
        else{
                return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function deleteCourseAction(Request $request){
        
        $courseID = $request->get('courseID');

        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("DELETE FROM course WHERE id= :courseID");
        $statement->bindValue('courseID', $courseID);
        
        if($statement->execute()){ 
            //echo " searchAjaxAction: Query execution was successful\n";
            $response = array("status" => 1, "msg" => "DB query execution success", "value" => 1);
            return new Response(json_encode($response));
        }
        else{
            //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
            $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE", "value" => 2);
            return new Response(json_encode($response));
        }
    }
    
    public function viewStudentResultsAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();

            return $this->render('GPABundle:AdminDashboard:viewStudentResults.html.twig',array('name'=>$f_name, 'userDetails'=>$user));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function getStudentResultsAction(Request $request){
        $student_id = $request->get('student_id');
        
        $orderBy = $request->get('orderBy');
        $order = $request->get('order');
        
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        if($orderBy != null && $order !=null ){
            $statement= $connection->prepare("SELECT course.id, course.title,results.semester,results.grade FROM course, results WHERE "
                                                . "course.id=results.course_id AND results.student_id= :student_id "
                                                . "ORDER BY ".$orderBy." ".$order);
        }
        else{
            $statement= $connection->prepare("SELECT course.id, course.title,results.semester,results.grade FROM course, results WHERE "
                                                . "course.id=results.course_id AND results.student_id= :student_id "
                                                . "ORDER BY semester ASC");
        }
        $statement->bindValue('student_id', $student_id);
        $statement->execute();
        $rs = $statement->fetchAll();
        
        if($rs == [] || $rs== FALSE){ //Both seemed to be true when there is no result found, contact Mirage
            if($rs== []){  
                //$this->debug_to_console("searchAjaxAction: query execution returned null");
                //echo "searchAjaxAction: query execution returned null\n";
                $response= array("status" => 1, "msg" => "query execution returned null");
                return new Response(json_encode($response));
            }
            if($rs == FALSE){
                //$this->debug_to_console("searchAjaxAction: DB query execution error, query returned FALSE");
                //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
                $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE");
                return new Response(json_encode($response));
            }
        }
        else{
            //return new Response(json_encode(array('orderBy'=>$orderBy, 'lec_id'=>$lec_id)));
            //$response = array("status" => 3, "msg" => "Student {$indexNum} is a registered user in the system");
            return new Response(json_encode($rs));
        }
    }
    
    public function editStudentResultsAction(Request $request, $studentID, $courseID){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            $f_name = $user->getFirstName();
            
            $repository2 = $em->getRepository('GPABundle:Results');
            $courseResult = $repository2->findOneBy(array('courseId'=>$courseID,'studentId'=>$studentID));

            return $this->render('GPABundle:AdminDashboard:editResults.html.twig',array('name'=>$f_name, 'courseResult'=>$courseResult,'flag1'=>false, 'flag2'=>false));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    public function deleteStudentResultsAction(Request $request){
        
        $student_id = $request->get('student_id');
        $course_id = $request->get('course_id');

        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("DELETE FROM results WHERE course_id= :course_id AND student_id= :student_id");
        $statement->bindValue('course_id', $course_id);
        $statement->bindValue('student_id', $student_id);
        
        if($statement->execute()){ 
            //echo " searchAjaxAction: Query execution was successful\n";
            $response = array("status" => 1, "msg" => "DB query execution success", "value" => 1);
            return new Response(json_encode($response));
        }
        else{
            //echo "searchAjaxAction: DB query execution error, query returned FALSE\n";
            $response = array("status" => 2, "msg" => "DB query execution error, query returned FALSE", "value" => 2);
            return new Response(json_encode($response));
        }
    }
    
    public function changeStudentResultAction(Request $request){
        $session = $request->getSession();
        $userid=$session->get('id');

        $courseID = $request->get('courseID');
        $studentID = $request->get('studentID');
        $gradeCredits = $request->get('gradeCredits');
        $grade = $request->get('grade');
        $semester = $request->get('semester');


        if(isset($userid))
        {
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid)); //Staff User
            $name = $user->getFirstName();
            
            $connection= $em->getConnection();
            $tempStatement = $connection->prepare("UPDATE results SET grade = :grade, credits = :gradeCredits, semester = :semester WHERE student_id = :student_id AND course_id = :course_id");
            $tempStatement->bindValue('grade', $grade);
            $tempStatement->bindValue('gradeCredits', $gradeCredits);
            $tempStatement->bindValue('semester', $semester);
            $tempStatement->bindValue('student_id', $studentID);
            $tempStatement->bindValue('course_id', $courseID);

            if($tempStatement->execute()){
                $em->close();
                $em = $this->getDoctrine()->getManager();
                $repository2 = $em->getRepository('GPABundle:Results');
                $courseResult = $repository2->findOneBy(array('courseId'=>$courseID,'studentId'=>$studentID));
                
                //return $this->render('GPABundle:Default:dump.html.twig',array('x'=>$courseID, 'y'=>$grade ));
                return $this->render('GPABundle:AdminDashboard:editResults.html.twig',array('name'=>$name, 'courseResult'=>$courseResult ,'flag1'=>false,'flag2'=>true));
            }
            else{
                $em->close();
                $em = $this->getDoctrine()->getManager();
                $repository2 = $em->getRepository('GPABundle:Results');
                $courseResult = $repository2->findOneBy(array('courseId'=>$courseID,'studentId'=>$studentID));
                //return $this->render('GPABundle:Default:dump.html.twig',array('x'=>$courseID, 'y'=>"siri" ));
                return $this->render('GPABundle:AdminDashboard:editResults.html.twig',array('name'=>$name, 'courseResult'=>$courseResult ,'flag1'=>true,'flag2'=>false));
            }
  
        }
        else{
                return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    /*------------------- Functions needed to calculate Students' and Lecturers' statics --------------------------*/
    
    /*------------------- Users --------------------------*/
    public function getUnregisteredUsers(){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement= $connection->prepare("SELECT * FROM users WHERE status=0 AND profession != 3 ORDER BY id");
        $statement->execute();
        $rs = $statement->fetchAll();

        if($rs == [] || $rs == FALSE){
            if($rs == FALSE){
                $this->debug_to_console("DB query execution error, query returned FALSE");
            }
            if($rs == []){
                $this->debug_to_console("query execution returned null");
                return null;
            }
        }
        else{
            $this->debug_to_console("Unregiistered users list <br>");
            //echo print_r($classBest);
            //echo "max grade: ".$classBest['maxGrade']."\n";
            return $rs;
        }
    }
    
    /*------------------- Student --------------------------*/
    
    //returns course.id,course.title,course.credits,results.grade, class best for a particular course
    public function getSemResults($student_id, $sem){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement = $connection->prepare("SELECT course.id AS id,course.title,course.credits,results.grade FROM results,course WHERE results.student_id= :student_id AND results.semester= :sem AND course.id=results.course_id");
        $statement->bindValue('sem', $sem);
        $statement->bindValue('student_id', $student_id);
        $statement->execute();
        $semResults = $statement->fetchAll();
        
        //$this->debug_to_console("in getSemResults: SEM ".$sem." results\n");
        $this->debug_to_console("in getSemResults: SEM  results<br>");

        //echo print_r($semResults, $return = true);
        $this->debug_to_console("<br>");
        
        if($semResults== FALSE || $semResults== []){
            if($semResults== FALSE){
                $this->debug_to_console("in getSemResults: DB query execution error, query returned FALSE");
            }
            $this->debug_to_console("in getSemResults: returned an empty array");
            return null;
        }
        
        
        /* //this code block doesn't work, ask from Mirage
        foreach($semResults as $key=>$result ){
            $result['class_best'] = $this->getClassBest($semResults[$key]['id']);
            //$semResults[]["classbest"] = $this->getClassBest($result['id']);
            //$result= array_merge($result ,array('class_best'=> "Ammo"));
            //$array = array_merge($array, array('Password' => 'pass')); 
        }
        */
        
        
        $numRows = $statement->rowCount();
        
        for($i=0;$i<$numRows ; $i++){
            $semResults[$i]["class_best"] = $this->getClassBest($semResults[$i]["id"]);
        }
        
        //echo "<br>here is the array after adding the class_best<br>";
        //echo print_r($semResults);
        $this->debug_to_console("<br>");
        
        return $semResults; 
    }
    
    //returns the highest grade a student has taken for a particular course
    public function getClassBest($course_id){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT grade as maxGrade,student_id FROM results WHERE results.course_id= :course_id GROUP BY credits DESC LIMIT 1");
        $statement->bindValue('course_id', $course_id);
        $statement->execute();
        $classBest = $statement->fetch();

        if($classBest == [] || $classBest== FALSE){
            if($classBest== FALSE){
                $this->debug_to_console("DB query execution error, query returned FALSE");
            }
            if($classBest== []){
                $this->debug_to_console("query execution returned null");
                return null;
            }
        }
        else{
            $this->debug_to_console("Class best for ".$course_id."<br>");
            //echo print_r($classBest);
            //echo "max grade: ".$classBest['maxGrade']."\n";
            return $classBest['maxGrade'];
        }
    }
    
    
    
    /*------------------- Lecturer --------------------------*/
    
    //returns the course list taught by a lecturer
    // course_id as id, title, credits, semester, year, class avg, remarks(text)
    public function getCourseList($lec_id ){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $orderBy = "semester";
        $statement= $connection->prepare("SELECT * FROM course WHERE lec_id= :lec_id ORDER BY ".$orderBy." ASC");
        $statement->bindValue('lec_id', $lec_id );
        $statement->execute();
        $rs = $statement->fetchAll();

        if($rs == [] || $rs == FALSE){
            if($rs == FALSE){
                $this->debug_to_console("DB query execution error, query returned FALSE");
            }
            if($rs == []){
                $this->debug_to_console("query execution returned null");
                return null;
            }
        }
        else{
            $this->debug_to_console("Course list for ".$lec_id."<br>");
            //echo print_r($classBest);
            //echo "max grade: ".$classBest['maxGrade']."\n";
            return $rs;
        }
    }
    
    
    
    
    //function to print messages to console - for debugging purposes
    public function debug_to_console( $data ) {
        if ( is_array( $data ) )
            $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
        else
            $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

        echo $output;
    }
}


