<?php

namespace GPABundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class StudentController extends Controller{
    
    // rendering the student's dashboard
    public function indexAction(Request $request){         
        $session = $request->getSession();
        $userid=$session->get('id');

        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();
            
            $this->initializeSGPATable($userid);
            
            $semStats = array(); // stores the SGPA and semester credits of eight semesters
            for( $i=0 ; $i<8 ; $i++ ){
                if($this->getSEMStats($userid, $i+1) != null)
                    $semStats[$i]=$this->getSEMStats($userid, $i+1);
                else
                    $semStats[$i]= array("NA","NA");
            }
            //echo "<br>sem stats<br>";
            //echo print_r($semStats);
            
            $gpa = $this->getGPA($userid); //gets the overall GPA
            
            //calculating the current SGPA
            $currentSem=0;
            while($currentSem <= 8){
                $arr = [];
                $arr = $this->getSEMStats($userid, $currentSem+1);
                if( $arr[0] == 0) break;
                $currentSem++;
            }
            
            $currentSGPA = $this->getSEMStats($userid, $currentSem);
            //echo "<br>Current SGPA and sem. credits<br>";
            //echo print_r($currentSGPA);
            
            $totalCredits=0;
            for( $i=0 ; $i<8 ; $i++ ){
                if($this->getSEMStats($userid, $i+1) != null){
                    $temp = $this->getSEMStats($userid, $i+1);
                    $totalCredits= $totalCredits + $temp[1];
                }
                //else
                    //$semStats[$i]= array("NA","NA");
            }
            
            $cumulativeStats = array(); // stores the cumulative GPA and semester credits of eight semesters
            for( $i=0 ; $i < 8 ; $i++ ){
                if($this->getSEMStats($userid, $i+1) != null)
                    $cumulativeStats[$i]=$this->getCumulativeGPA($userid, $i+1);
                else
                    $cumulativeStats[$i]= array("NA","NA");
            }
            //echo print_r($cumulativeStats);
            
            return $this->render('GPABundle:StudentDashboard:index.html.twig',array('name'=>$f_name, 'semStats'=>$semStats, 'gpa'=>$gpa , 'currentSGPA'=>$currentSGPA , 'currentSem'=>$currentSem ,'totalCredits'=>$totalCredits , 'cumulativeStats'=>$cumulativeStats));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    // renders the student's profile page
    public function profileAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();

            return $this->render('GPABundle:StudentDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>false, 'flag2'=>false, 'flag3'=>false , 'flag4'=>false, 'flag5'=>false));
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
                    return $this->render('GPABundle:StudentDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                }
            }
            
            if(!is_null($l_name)){
                $tempFlag=false;
                  $tempStatement = $connection->prepare("UPDATE users SET last_name = :l_name WHERE id = :u_id");
                  $tempStatement->bindValue('l_name', $l_name);
                  $tempStatement->bindValue('u_id', $userid);
                  if(!$tempStatement->execute()){
                      $tempFlag=true;
                      return $this->render('GPABundle:StudentDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                  }
            }

            if(!is_null($email)){
                $tempFlag=false;
                  $tempStatement = $connection->prepare("UPDATE users SET email = :email WHERE id = :u_id");
                  $tempStatement->bindValue('email', $email);
                  $tempStatement->bindValue('u_id', $userid);
                  if(!$tempStatement->execute()){
                      $tempFlag=true;
                      return $this->render('GPABundle:StudentDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                      
                    }
                  
            }
            
            if(!is_null($mobile)){
                $tempFlag=false;
                $tempStatement = $connection->prepare("UPDATE users SET mobile = :mobile WHERE id = :u_id");
                  $tempStatement->bindValue('mobile', $mobile);
                  $tempStatement->bindValue('u_id', $userid);
                  if(!$tempStatement->execute()){
                      $tempFlag=true;
                      return $this->render('GPABundle:StudentDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
                     
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
                
                return $this->render('GPABundle:StudentDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user2 ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>false, 'flag5'=>true));
 
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
                
                return $this->render('GPABundle:StudentDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user2 ,'flag1'=>false,'flag2'=>false, 'flag3'=>false, 'flag4'=>true, 'flag5'=>false));
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

                    return $this->render('GPABundle:StudentDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag3'=>true, 'flag1'=>false, 'flag2'=>false, 'flag4'=>false, 'flag5'=>false));
                }
                else{
                    return $this->render('GPABundle:StudentDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag1'=>true,'flag2'=>false, 'flag3'=>false, 'flag4'=>false, 'flag5'=>false));
                }
            }
            else{
                return $this->render('GPABundle:StudentDashboard:profile.html.twig',array('name'=>$f_name, 'userDetails'=>$user ,'flag2'=>true ,'flag1'=>false, 'flag3'=>false, 'flag4'=>false,'flag5'=>false ));
            } 
        }
        else{
              return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
   
    // renders the 'view grades' page
    public function viewGradesAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();
            
            $semResults = array_fill(0, 8, NULL);
            
            for( $i=0 ; $i<8 ; $i++ ){
                $semResults[$i]=$this->getSemResults($userid, $i+1);
            }
            
            $semStats = array(); // stores the SGPA and semester credits of eight semesters
            for( $i=0 ; $i<8 ; $i++ ){
                if($this->getSEMStats($userid, $i+1) != null)
                    $semStats[$i]=$this->getSEMStats($userid, $i+1);
                else
                    $semStats[$i]= array("NA","NA");
            }
            
            //finding the current semeseter
            $currentSem=0;
            while($currentSem <= 8){
                $arr = [];
                $arr = $this->getSEMStats($userid, $currentSem+1);
                if( $arr[0] == 0) break;
                $currentSem++;
            }
            
            $cumulativeStats = array(); // stores the cumulative SGPA and semester credits of eight semesters
            for( $i=0 ; $i < $currentSem ; $i++ ){
                if($this->getSEMStats($userid, $i+1) != null)
                    $cumulativeStats[$i]=$this->getCumulativeGPA($userid, $i+1);
                else
                    $cumulativeStats[$i]= array("NA","NA");
            }
            
            return $this->render('GPABundle:StudentDashboard:viewGrades.html.twig',array('name'=>$f_name, 'userDetails'=>$user,'semResults'=>$semResults ,'semStats'=>$semStats,'cumulativeStats'=>$cumulativeStats));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
     
    // renders the GPA Prediction page
    public function predictGPAAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();

            return $this->render('GPABundle:StudentDashboard:predictGPA.html.twig',array('name'=>$f_name, 'userDetails'=>$user));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    // renders the GPA Prediction page
    public function gpaAnalysisAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();
            
            $this->initializeSGPATable($userid);
            $this->initializeGPATable($userid);
            
            /*---------------  Calculating SGPAs and Cumulative GPA along with semester credits - STARTS ----------------------- */
            
            $semStats = array(); // stores the SGPA and semester credits of eight semesters
            for( $i=0 ; $i<8 ; $i++ ){
                if($this->getSEMStats($userid, $i+1) != null)
                    $semStats[$i]=$this->getSEMStats($userid, $i+1);
                else
                    $semStats[$i]= array("NA","NA");
            }
            
            //finding the current semeseter
            $currentSem=0;
            while($currentSem <= 8){
                //$arr = [];
                $arr = $this->getSEMStats($userid, $currentSem+1);
                if( $arr[0] == 0) break;
                $currentSem++;
            }
            
            $cumulativeStats = array(); // stores the cumulative SGPA and semester credits of eight semesters
            for( $i=0 ; $i < $currentSem ; $i++ ){
                if($this->getCumulativeGPA($userid, $i+1) != null)
                    $cumulativeStats[$i]=$this->getCumulativeGPA($userid, $i+1);
                else
                    $cumulativeStats[$i]= array("NA","NA");
            }
            
            /*---------------  Calculating SGPAs and Cumulative GPA along with semester credits - ENDS ----------------------- */
            
            
            //creating the associative array for SGPA chart [Chart.js]
            $labels= array("Sem 1", "Sem 2", "Sem 3","Sem 4", "Sem 5", "Sem 6","Sem 7", "Sem 8");
            //data: [65, 59, 80, 81, 56, 55, 40]
            $mySGPAset = [];
            for($i=0; $i < $currentSem ; $i++){
                $mySGPAset[$i]= $semStats[$i][0];
            }

            $dataset_sgpa_1 = array(
                "label"=> "My First dataset",
                "fillColor"=> "rgba(151,187,205,0.2)",
                "strokeColor"=> "rgba(151,187,205,1)",
                "pointColor" => "rgba(151,187,205,1)",
                "pointStrokeColor" => "#fff",
                "pointHighlightFill" =>"#fff",
                "pointHighlightStroke" => "rgba(151,187,205,1)",
                "data" => $mySGPAset
            );
            
            $sgpaData = array(
                "labels"=>$labels,
                "datasets"=>array($dataset_sgpa_1)
            );
            
            //creating the associative array for GPA chart [Chart.js]
            $myGPAset = [];
            for($i=0; $i < $currentSem ; $i++){
                $myGPAset[$i]= $cumulativeStats[$i][0];
            }
           
            $dataset_gpa_1 = array(
                "label"=> "My First dataset",
                "fillColor"=> "rgba(214, 247, 231,0.4)",
                "strokeColor"=> "rgb(51, 214, 133)",
                "pointColor" => "rgb(51, 214, 133)",
                "pointStrokeColor" => "#fff",
                "pointHighlightFill" =>"#fff",
                "pointHighlightStroke" => "rgb(51, 214, 133)",
                "data" => $myGPAset
            );
            
            $gpaData = array(
                "labels"=>$labels,
                "datasets"=>array($dataset_gpa_1)
            );
            
            //creating the associative array for credit load chart [Chart.js]
            $mySEMCreditsSet = [];
            for($i=0; $i < $currentSem ; $i++){
                $mySEMCreditsSet[$i]= $semStats[$i][1];
            }
            /*
            label: "My Second dataset",
            fillColor: "rgba(151,187,205,0.5)",
            strokeColor: "rgba(151,187,205,0.8)",
            highlightFill: "rgba(151,187,205,0.75)",
            highlightStroke: "rgba(151,187,205,1)",
            */
            $dataset_sem_credit_1 = array(
                "label"=> "My First dataset",
                "fillColor"=> "rgba(151,187,205,0.5)",
                "strokeColor"=> "rgba(151,187,205,0.8)",
                "highlightFill" =>"rgba(151,187,205,0.75)",
                "highlightStroke" => "rgba(151,187,205,1)",
                "data" => $mySEMCreditsSet
            );
            
            $semCreditData = array(
                "labels"=>$labels,
                "datasets"=>array($dataset_sem_credit_1)
            );
            
            
            //creating the associative array for Cumulative credits chart [Chart.js]
            $myCumSEMCreitsSet = [];
            for($i=0; $i < $currentSem ; $i++){
                $myCumSEMCreitsSet[$i]= $cumulativeStats[$i][1];
            }
           
            $dataset_cum_sem_credits_1 = array(
                "label"=> "My First dataset",
                "fillColor"=> "rgba(214, 247, 231,0.4)",
                "strokeColor"=> "rgb(51, 214, 133)",
                "pointColor" => "rgb(51, 214, 133)",
                "pointStrokeColor" => "#fff",
                "pointHighlightFill" =>"#fff",
                "pointHighlightStroke" => "rgb(51, 214, 133)",
                "data" => $myCumSEMCreitsSet
            );
            
            $cumSemCreditsData = array(
                "labels"=>$labels,
                "datasets"=>array($dataset_cum_sem_credits_1)
            );
            
            /*
                    var data = [
                        {
                            value: 300,
                            color:"#F7464A",
                            highlight: "#FF5A5E",
                            label: "Red"
                        },
                        {
                            value: 50,
                            color: "#46BFBD",
                            highlight: "#5AD3D1",
                            label: "Green"
                        },
                        {
                            value: 100,
                            color: "#FDB45C",
                            highlight: "#FFC870",
                            label: "Yellow"
                        }
                    ]
              */
            

            //creating the associative array for Grade Percentages chart [Chart.js]
            $gradePercentages = $this->getStudentGradeCount($userid);
            
            $colorSet = array("#F7464A","#46BFBD","#FDB45C","#99FF99", "#FF6699", 
                              "#9966FF", "#33CCFF", "#CCFFCC", "#CC9900", "#FFFF66");
            //this colour set is common for grade and course percentages charts
            
            //echo "gradePercentages: \n";
            //echo print_r($gradePercentages);
            
            $segData = [];
            if($gradePercentages != null){
                $segCount = count($gradePercentages);
                
                for($i=0; $i< $segCount ; $i++){
                    $segData[$i]= array(
                        "value" => $gradePercentages[$i]['gradeCount'],
                        "color" => $colorSet[$i],
                        "hightlight" => $colorSet[$i],
                        "label" => $gradePercentages[$i]['grade']
                        );
                }
            }
            
            $gradePercentagesData = $segData;
            
            
            //creating the associative array for Course Credits Percentages chart [Chart.js]
            $courseCreditPercentages = $this->getCourseCreditCount($userid);

            //echo "courseCreditPercentages: \n";
            //echo print_r($courseCreditPercentages);
            
            $segData2 = [];
            if($courseCreditPercentages != null){
                $segCount = count($courseCreditPercentages);
                
                for($i=0; $i< $segCount ; $i++){
                    $segData2[$i]= array(
                        "value" => $courseCreditPercentages[$i]['creditCount'],
                        "color" => $colorSet[$i],
                        "hightlight" => $colorSet[$i],
                        "label" => $courseCreditPercentages[$i]['credits']
                        );
                }
            }
            
            $coursCreditsPercentagesData = $segData2;
            
            return $this->render('GPABundle:StudentDashboard:gpaAnalysis.html.twig',array(
                'name'=>$f_name, 'userDetails'=>$user, 
                "sgpaData" => $sgpaData , "gpaData" => $gpaData,
                "semCreditData"=>$semCreditData, "cumSemCreditsData"=> $cumSemCreditsData,
                "gradePercentagesData"=>$gradePercentagesData , "coursCreditsPercentagesData" => $coursCreditsPercentagesData));
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    // renders the GPA Prediction page
    public function gpaCompareAction(Request $request){
        
        $session = $request->getSession();
        $userid=$session->get('id');
        
        $student_id = $request->get('student_id');
                
        if(isset($userid)){
            $em = $this->getDoctrine()->getEntityManager();
            $repository = $em->getRepository('GPABundle:Users');
            $user = $repository->findOneBy(array('id'=>$userid));
            
            $f_name = $user->getFirstName();
            
            if(isset($student_id)){
                
                /*--------    Calculating My Results -  Starts    ----------- */
                
                $this->initializeSGPATable($userid);
                $this->initializeGPATable($userid);

                /*---------------  Calculating SGPAs and Cumulative GPA along with semester credits - STARTS ----------------------- */

                $mySemStats = array(); // stores the SGPA and semester credits of eight semesters
                for( $i=0 ; $i<8 ; $i++ ){
                    if($this->getSEMStats($userid, $i+1) != null)
                        $mySemStats[$i]=$this->getSEMStats($userid, $i+1);
                    else
                        $mySemStats[$i]= array("NA","NA");
                }

                //finding the current semeseter ------------> this will be common for the other student's results
                $currentSem=0;
                while($currentSem <= 8){
                    //$arr = [];
                    $arr = $this->getSEMStats($userid, $currentSem+1);
                    if( $arr[0] == 0) break;
                    $currentSem++;
                }

                $myCumulativeStats = array(); // stores the cumulative SGPA and semester credits of eight semesters
                for( $i=0 ; $i < $currentSem ; $i++ ){
                    if($this->getCumulativeGPA($userid, $i+1) != null)
                        $myCumulativeStats[$i]=$this->getCumulativeGPA($userid, $i+1);
                    else
                        $myCumulativeStats[$i]= array("NA","NA");
                }

                /*---------------  Calculating SGPAs and Cumulative GPA along with semester credits - ENDS ----------------------- */


                //creating the associative array for SGPA chart [Chart.js]
                $labels= array("Sem 1", "Sem 2", "Sem 3","Sem 4", "Sem 5", "Sem 6","Sem 7", "Sem 8");  //common labels all the graphs
                //data: [65, 59, 80, 81, 56, 55, 40]
                
                $mySGPAset = [];
                for($i=0; $i < $currentSem ; $i++){
                    $mySGPAset[$i]= $mySemStats[$i][0];
                }

                $dataset_sgpa_1 = array(
                    "label"=> "My First dataset",
                    "fillColor"=> "rgba(151,187,205,0.2)",
                    "strokeColor"=> "rgba(151,187,205,1)",
                    "pointColor" => "rgba(151,187,205,1)",
                    "pointStrokeColor" => "#fff",
                    "pointHighlightFill" =>"#fff",
                    "pointHighlightStroke" => "rgba(151,187,205,1)",
                    "data" => $mySGPAset
                );

                

                //creating the associative array for GPA chart [Chart.js]
                $myGPAset = [];
                for($i=0; $i < $currentSem ; $i++){
                    $myGPAset[$i]= $myCumulativeStats[$i][0];
                }

                $dataset_gpa_1 = array(
                    "label"=> "My First dataset",
                    "fillColor"=> "rgba(151,187,205,0.2)",
                    "strokeColor"=> "rgba(151,187,205,1)",
                    "pointColor" => "rgba(151,187,205,1)",
                    "pointStrokeColor" => "#fff",
                    "pointHighlightFill" =>"#fff",
                    "pointHighlightStroke" => "rgba(151,187,205,1)",
                    "data" => $myGPAset
                );
                //creating data sets for graphs ends
                
                //retrieving my course details
                $mySemResults = array_fill(0, 8, NULL);
            
                for( $i=0 ; $i<8 ; $i++ ){
                    $mySemResults[$i]=$this->getSemResults($userid, $i+1);
                }
                
                
                /*--------    Calculating My Results -  Ends    ----------- */
                
                
                
                
                /*--------    Calculating Friends Results -  Starts    ----------- */
                
                $this->initializeSGPATable($student_id);
                $this->initializeGPATable($student_id);

                /*---------------  Calculating SGPAs and Cumulative GPA along with semester credits - STARTS ----------------------- */

                $friendSemStats = array(); // stores the SGPA and semester credits of eight semesters
                for( $i=0 ; $i<8 ; $i++ ){
                    if($this->getSEMStats($student_id, $i+1) != null)
                        $friendSemStats[$i]=$this->getSEMStats($student_id, $i+1);
                    else
                        $friendSemStats[$i]= array("NA","NA");
                }

                //finding the current semeseter ------------> this will be common for the other student's results
//                $currentSem=0;
//                while($currentSem <= 8){
//                    //$arr = [];
//                    $arr = $this->getSEMStats($student_id, $currentSem+1);
//                    if( $arr[0] == 0) break;
//                    $currentSem++;
//                }
                
                $currentSem2=0;
                while($currentSem2 <= 8){
                    //$arr = [];
                    $arr = $this->getSEMStats($student_id, $currentSem2+1);
                    if( $arr[0] == 0) break;
                    $currentSem2++;
                }
                
                $friendCumulativeStats = array(); // stores the cumulative SGPA and semester credits of eight semesters
                for( $i=0 ; $i < $currentSem2 ; $i++ ){
                    if($this->getCumulativeGPA($student_id, $i+1) != null)
                        $friendCumulativeStats[$i]=$this->getCumulativeGPA($student_id, $i+1);
                    else
                        $friendCumulativeStats[$i]= array("NA","NA");
                }

                /*---------------  Calculating SGPAs and Cumulative GPA along with semester credits - ENDS ----------------------- */


                //creating the associative array for SGPA chart [Chart.js]
                $labels= array("Sem 1", "Sem 2", "Sem 3","Sem 4", "Sem 5", "Sem 6","Sem 7", "Sem 8");  //common labels all the graphs
                //data: [65, 59, 80, 81, 56, 55, 40]
                
                $friendSGPAset = [];
                for($i=0; $i < $currentSem2 ; $i++){
                    $friendSGPAset[$i]= $friendSemStats[$i][0];
                }

                $dataset_sgpa_2 = array(
                    "label"=> "My First dataset",
                    "fillColor"=> "rgba(204, 102, 0,0.2)",
                    "strokeColor"=> "rgb(204, 102, 0)",
                    "pointColor" => "rgb(204, 102, 0)",
                    "pointStrokeColor" => "#fff",
                    "pointHighlightFill" =>"#fff",
                    "pointHighlightStroke" => "rgb(204, 102, 0)",
                    "data" => $friendSGPAset
                );

                

                //creating the associative array for GPA chart [Chart.js]
                $friendGPAset = [];
                for($i=0; $i < $currentSem2 ; $i++){
                    $friendGPAset[$i]= $friendCumulativeStats[$i][0];
                }

                $dataset_gpa_2 = array(
                    "label"=> "My First dataset",
                    "fillColor"=> "rgba(204, 102, 0, 0.2)",
                    "strokeColor"=> "rgb(204, 102, 0)",
                    "pointColor" => "rgb(204, 102, 0)",
                    "pointStrokeColor" => "#fff",
                    "pointHighlightFill" =>"#fff",
                    "pointHighlightStroke" => "rgb(204, 102, 0)",
                    "data" => $friendGPAset
                );
                //creating data sets for graphs ends
                
                //retrieving my course details
                $friendSemResults = array_fill(0, 8, NULL);
            
                for( $i=0 ; $i<8 ; $i++ ){
                    $friendSemResults[$i]=$this->getSemResults($student_id, $i+1);
                }
                
                
                /*--------    Calculating My Results -  Ends    ----------- */
                
                
                
                $sgpaData = array(
                    "labels"=>$labels,
                    "datasets"=>array($dataset_sgpa_2, $dataset_sgpa_1)
                );
                
                $gpaData = array(
                    "labels"=>$labels,
                    "datasets"=>array($dataset_gpa_2, $dataset_gpa_1 )
                );
                
                //return $this->render('GPABundle:StudentDashboard:compareGPA.html.twig',array('name'=>$f_name, 'userDetails'=>$user));
                return $this->render('GPABundle:StudentDashboard:compareGPA.html.twig',array('name'=>$f_name, 'userDetails'=>$user, 'sgpaData'=>$sgpaData, 'gpaData'=>$gpaData, 'mySemResults'=>$mySemResults, 'friendSemResults'=>$friendSemResults ,'student_id'=>$student_id));
            }
            else{
                //$mySGPAset=$myGPAset= null;
                //$friendSGPAset=$friendGPAset=null;
                $mySemResults = array_fill(0, 8, NULL);
                $friendSemResults = array_fill(0, 8, NULL);
                $sgpaData=$gpaData=null;
                //'mySGPAset'=>$mySGPAset, 'myGPAset'=>$myGPAset, 'mySemResults'=>$mySemResults, 'friendSGPAset'=>$friendSGPAset, 'friendGPAset'=>$friendGPAset, 'friendSemResults'=>$friendSemResults
                  
                return $this->render('GPABundle:StudentDashboard:compareGPA.html.twig',array('name'=>$f_name, 'userDetails'=>$user, 'sgpaData'=>$sgpaData, 'gpaData'=>$gpaData, 'mySemResults'=>$mySemResults, 'friendSemResults'=>$friendSemResults, 'student_id'=>$student_id ));
            }
        }
        else{
          return $this->redirect($this->generateUrl('gpa_login'));
        }
    }
    
    
    /*------------------- Functions needed to calculate GPA, SGPA and other statics --------------------------*/
    
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
    
    //returns SGPA and SEM credits
    public function getSEMStats($student_id,$sem){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT course.credits AS courseCredits,results.credits AS gradeCredits FROM enrolments,course,results WHERE 
                                            enrolments.student_id= :student_id AND 
                                            enrolments.student_id=results.student_id AND 
                                            enrolments.course_id=course.id AND 
                                            enrolments.course_id=results.course_id AND results.semester= :sem;");
        $statement->bindValue('student_id', $student_id);
        $statement->bindValue('sem', $sem);
        $statement->execute();
        $rs = $statement->fetchAll();
//        echo "<br>in getSEMStats<br>";
//        echo print_r($rs);
//        echo "<br>";
        
        if($rs == []){
            if($rs== FALSE){
                $this->debug_to_console("in getSEMStats: DB query execution error, query returned FALSE");
            }
            $this->debug_to_console("in getSEMStats: query execution returned null");
            return null;
        }
        else{
            $this->debug_to_console("in getSEMStats: Data to calculate SGPA of ".$student_id." for ".$sem."<br>");
        }
        
        $semWeightedCredits=0;
        $semCredits=0;
        $numRows = $statement->rowCount();
        
        for($i=0; $i<$numRows; $i++) {
            $semWeightedCredits = $semWeightedCredits + (((float)$rs[$i]['courseCredits']) * ((float)$rs[$i]['gradeCredits'])); 
            $semCredits = $semCredits + ((float)$rs[$i]['courseCredits']);
        }
        
        $semStats = array();
        $semStats[0] = $semWeightedCredits/$semCredits;
        $semStats[0]= round($semStats[0], 3, PHP_ROUND_HALF_UP);
        $semStats[1]= $semCredits;
        
        //inserting SGPA and semCredits values into sgpa table
       
        /* 
        * 
        INSERT INTO table_sgpa (student_id, semester, sgpa, sem_credits) VALUES (:student_id, :sem, :sgpa, :semCredits)
        * 
        UPDATE table_sgpa SET sgpa=:sgpa , sem_credits=:semCredits WHERE student_id=:student_id AND semester=:sem
        */
        
        $repository = $em->getRepository('GPABundle:TableSgpa');
        $tempSem = $repository->findOneBy(array('studentId'=>$student_id, 'semester'=>$sem));
        if( $tempSem->getSgpa()!= $semStats[0]  ||  $tempSem->getSemCredits()!=$semStats[1] ){
            $statement2= $connection->prepare("UPDATE table_sgpa SET sgpa=:sgpa, sem_credits=:semCredits WHERE student_id=:student_id AND semester=:sem");
            $statement2->bindValue('student_id', $student_id);
            $statement2->bindValue('sem', $sem);
            $statement2->bindValue('sgpa', $semStats[0]);
            $statement2->bindValue('semCredits', $semStats[1]);
            $statement2->execute();

            if($statement2== FALSE){
                $this->debug_to_console("in getSEMStats: updating TableSgpa: DB query execution error, query returned FALSE");
                $this->debug_to_console("in getSEMStats: SGPA table was not updated!!!");
            }
        }
        
        return $semStats;
    }
    
    //returns overall GPA and total credits
    public function getGPA($student_id){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT sgpa,sem_credits FROM table_sgpa WHERE student_id=:student_id");
        $statement->bindValue('student_id', $student_id);
        $statement->execute();
        $rs = $statement->fetchAll();
            
        if($rs == []){
            if($rs== FALSE){
                $this->debug_to_console("in getGPA: DB query execution error, query returned FALSE");
            }
            $this->debug_to_console("in getGPA: query execution returned null");
            return null;
        }
        else{
            $this->debug_to_console("in getGPA: Data to calculate GPA of ".$student_id."<br>");
            //$this->debug_to_console(print_r($rs));
        }
        
        $semWeightedCredits=0;
        $semCredits=0;
        $numRows = $statement->rowCount();
        
        for($i=0; $i<$numRows; $i++) {
            $semWeightedCredits = $semWeightedCredits + (((float)$rs[$i]['sgpa']) * ((float)$rs[$i]['sem_credits'])); 
            $semCredits = $semCredits + ((float)$rs[$i]['sem_credits']);
        }

        $overallStats = array_fill(0,1,0);
//        if($semCredits != 0){
//            $overallStats[0] = $semWeightedCredits/$semCredits;  //overall GPA
//        }
        
        $overallStats[0] = $this->validateGPA($semWeightedCredits, $semCredits);
        
        $overallStats[0]= round($overallStats[0], 3, PHP_ROUND_HALF_UP); //final GPA
        $overallStats[1]= $semCredits; //total credits
        

        $statement2= $connection->prepare("UPDATE table_Gpa SET gpa=:gpa, tot_credit=:totalCredits WHERE student_id=:student_id");
        $statement2->bindValue('student_id', $student_id);
        $statement2->bindValue('gpa', $overallStats[0]);
        $statement2->bindValue('totalCredits', $overallStats[1]);
        $statement2->execute();

        if($statement2== FALSE){
            $this->debug_to_console("in getGPA: updating TableGgpa: DB query execution error, query returned FALSE");
            $this->debug_to_console("in getGPA: GPA table was not updated!!!");
        }

        
        
        return $overallStats;
    }
    
    // returns the cumulative GPA and cumulative credits upto the specific semester
    public function getCumulativeGPA($student_id,$sem){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT sgpa,sem_credits FROM table_sgpa WHERE student_id=:student_id");
        $statement->bindValue('student_id', $student_id);
        $statement->execute();
        $rs = $statement->fetchAll();
            
        if($rs == []){
            if($rs== FALSE){
                $this->debug_to_console("in getGPA: DB query execution error, query returned FALSE");
            }
            $this->debug_to_console("in getGPA: query execution returned null");
            return null;
        }
        else{
            $this->debug_to_console("in getGPA: Data to calculate GPA of ".$student_id."<br>");
            //$this->debug_to_console(print_r($rs));
        }
        
        $semWeightedCredits=0;
        $semCredits=0;
        //$numRows = $statement->rowCount();
        $numRows = $sem; //replaces the numRow in getGPA method to get cumulative GPA
        
        for($i=0; $i<$numRows; $i++) {
            $semWeightedCredits = $semWeightedCredits + (((float)$rs[$i]['sgpa']) * ((float)$rs[$i]['sem_credits'])); 
            $semCredits = $semCredits + ((float)$rs[$i]['sem_credits']);
        }

        $overallStats = array_fill(0,1,0);
        if($semCredits != 0){
            $overallStats[0] = $semWeightedCredits/$semCredits;  //overall GPA
        }
        $overallStats[0]= round($overallStats[0], 3, PHP_ROUND_HALF_UP);
        $overallStats[1]= $semCredits; //total credits
        
        return $overallStats;
    }
    
    public function initializeSGPATable($student_id){ //DELETE FROM table_sgpa WHERE student_id = '120343X'
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement= $connection->prepare("DELETE FROM table_sgpa WHERE student_id = :student_id");
        $statement->bindValue('student_id', $student_id);
        $statement->execute();
        if($statement== FALSE){
                $this->debug_to_console("in initializeSGPATable: deleting rows in TableSgpa: DB query execution error, query returned FALSE");
                $this->debug_to_console("in initializeSGPATable: SGPA table was not updated!!!");
            }
        
        for($i=1; $i<=8; $i++ ){ 
        //INSERT INTO table_sgpa (student_id, semester, sgpa, sem_credits) VALUES ( :student_id , :semester , '0', '0');
            $statement2= $connection->prepare("INSERT INTO table_sgpa (student_id, semester, sgpa, sem_credits) VALUES ( :student_id , :sem , '0', '0')");
            $statement2->bindValue('student_id', $student_id);
            $statement2->bindValue('sem', $i);
            $statement2->execute();
            
            if($statement2== FALSE){
                $this->debug_to_console("in initializeSGPATable: inserting empty rows to TableSgpa: DB query execution error, query returned FALSE");
                $this->debug_to_console("in initializeSGPATable: SGPA table was not updated!!!");
            }
        }
    }
    
    public function initializeGPATable($student_id){ //DELETE FROM table_sgpa WHERE student_id = '120343X'
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        $statement= $connection->prepare("DELETE FROM table_gpa WHERE student_id = :student_id");
        $statement->bindValue('student_id', $student_id);
        $statement->execute();
        if($statement == FALSE){
                $this->debug_to_console("in initializeSGPATable: deleting rows in TableSgpa: DB query execution error, query returned FALSE");
                $this->debug_to_console("in initializeSGPATable: GPA table was not updated!!!");
            }
        
        //INSERT INTO table_sgpa (student_id, semester, sgpa, sem_credits) VALUES ( :student_id , :semester , '0', '0');
        $statement2= $connection->prepare("INSERT INTO table_gpa (student_id, gpa, tot_credit) VALUES ( :student_id , '0', '0')");
        $statement2->bindValue('student_id', $student_id);
        $statement2->execute();

        if($statement2== FALSE){
            $this->debug_to_console("in initializeSGPATable: inserting empty rows to TableGgpa: DB query execution error, query returned FALSE");
            $this->debug_to_console("in initializeSGPATable: GPA table was not updated!!!");
        }

    }
    
    // returns students Grades count [ "Grade" , "gradeCount" = (int)Count]
    public function getStudentGradeCount($student_id){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT grade, COUNT(grade) as gradeCount FROM results WHERE student_id= :student_id GROUP BY grade");
        $statement->bindValue('student_id', $student_id);
        $statement->execute();
        $rs = $statement->fetchAll();

        if($rs == [] || $rs== FALSE){
            if($rs== FALSE){
                $this->debug_to_console("DB query execution error, query returned FALSE");
            }
            if($rs== []){
                $this->debug_to_console("query execution returned null");
                return null;
            }
        }
        else{
            $this->debug_to_console("get Student Grade Count ".$student_id." successful<br>");
            //echo print_r($classBest);
            //echo "max grade: ".$classBest['maxGrade']."\n";
            return $rs;
        }
    }
    
    // returns students Course credit count [ "Credits" , "creditCount" =(int)Count]
    public function getCourseCreditCount($student_id){
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();
        
        $statement= $connection->prepare("SELECT course.credits, count(course.credits)as creditCount FROM course, results WHERE course.id=results.course_id AND results.student_id= :student_id GROUP BY course.credits");
        $statement->bindValue('student_id', $student_id);
        $statement->execute();
        $rs = $statement->fetchAll();

        if($rs == [] || $rs== FALSE){
            if($rs== FALSE){
                $this->debug_to_console("DB query execution error, query returned FALSE");
            }
            if($rs== []){
                $this->debug_to_console("query execution returned null");
                return null;
            }
        }
        else{
            $this->debug_to_console("get Student Grade Count ".$student_id." successful<br>");
            return $rs;
        }
    }
    
    public function sum($a, $b){
        return $a+$b;
    }
    
    public function validateGPA($weightedCredits, $totalCredits){
        if($totalCredits != 0 && $weightedCredits >=0 && $totalCredits<=150 && $weightedCredits <= 630)
        {
            $gpa = $weightedCredits /$totalCredits;
            if($gpa <= 4.2 && $gpa>=0)
            {
                return $gpa;
            }
            else
            {
                return null;
            }
        }
        else
        {
            return  null;
        }
    }
    
    /*------------------- Functions to print messages to console - for debugging purposes --------------------------*/
    
    public function debug_to_console( $data ) {
        if ( is_array( $data ) )
            $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
        else
            $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";

        echo $output;
    }
}


