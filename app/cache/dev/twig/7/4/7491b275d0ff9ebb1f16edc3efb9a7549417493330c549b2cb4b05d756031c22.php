<?php

/* GPABundle:AdminDashboard:addResult.html.twig */
class __TwigTemplate_7491b275d0ff9ebb1f16edc3efb9a7549417493330c549b2cb4b05d756031c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3cb916a70b3d799234c17a6edee7e5f6f9a96473b687138741b456e29f020e19 = $this->env->getExtension("native_profiler");
        $__internal_3cb916a70b3d799234c17a6edee7e5f6f9a96473b687138741b456e29f020e19->enter($__internal_3cb916a70b3d799234c17a6edee7e5f6f9a96473b687138741b456e29f020e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:addResult.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!-- Admin Dashboard --> 
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Admin Dashboard in GPA v1.0\">
    <meta name=\"author\" content=\"MnS | Web Solutions\">
    <link rel=\"shortcut icon\" href=\"img/favicon.png\">

    <title>Admin | Manage Results </title>

    <!-- Bootstrap CSS -->    
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- bootstrap theme -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!--external css-->
    <!-- font icon -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />    

    <!-- Custom styles -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/xcharts.min.css"), "html", null, true);
        echo "\" rel=\" stylesheet\">\t
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui-1.10.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
        

    
    
    
    <style>
        .info-box{
            margin-bottom: 10px;
        }
    </style>
    
  </head>

  <body>
  <!-- container section start -->
  <section id=\"container\" class=\"\">
     
      
      <header class=\"header dark-bg\">
            <div class=\"toggle-nav\">
                <div class=\"icon-reorder tooltips\" data-original-title=\"Toggle Navigation\" data-placement=\"bottom\"></div>
            </div>

            <!--logo start-->
            <a href=\"index.html\" class=\"logo\"><h4><strong>GPA v1.0<span class=\"lite\"> &nbsp;&nbsp;&nbsp;&nbsp;  Grade Performance Analyzer</span></strong></h4></a>
            <!--logo end-->


            <div class=\"top-nav notification-row\">                
                <!-- notificatoin dropdown start-->
                <ul class=\"nav pull-right top-menu\">
                    
                    <!-- task notificatoin start -->
                    <li id=\"task_notificatoin_bar\" class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"icon-task-l\"></i>
                        </a>

                    </li>
                    <!-- task notificatoin end -->
                    
                    <!-- inbox notificatoin start-->
                    <li id=\"mail_notificatoin_bar\" class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"icon-envelope-l\"></i>
                        </a>
                    </li>
                    <!-- inbox notificatoin end -->
                    
                    <!-- alert notification start-->
                    <li id=\"alert_notificatoin_bar\" class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <i class=\"icon-bell-l\"></i>
                        </a>
                    </li>
                    <!-- alert notification end-->
                    
                    
                    <!-- user login dropdown start-->
                    <li class=\"dropdown\">
                        <a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
                            <span class=\"profile-ava\">
                                <img alt=\"\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/chat-avatar2.jpg"), "html", null, true);
        echo "\">
                            </span>
                            <span class=\"username\"><strong>";
        // line 94
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</strong></span>
                            <b class=\"caret\"></b>
                        </a>
                        <ul class=\"dropdown-menu extended logout\">
                            <div class=\"log-arrow-up\"></div>
                            <li class=\"eborder-top\">
                                <a href=\"#\"><i class=\"icon_mail_alt\"></i> Notifications</a>
                            </li>
                            <li>
                                <a href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("gpa_logout");
        echo "\"><i class=\"icon_key_alt\"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                    
                </ul>
                <!-- notificatoin dropdown end-->
                
            </div>          
      </header>      
      <!--header end-->

      
      
      <!--sidebar start-->
      <aside>
          <div id=\"sidebar\"  class=\"nav-collapse \" style=\"width: 195px;\">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li class=\"active\">
                      <a class=\"\" href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
     
                  <li>
                      <a class=\"\" href=\"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("admin_profile");
        echo "\">
                          <i class=\"icon_profile\"></i>
                          <span>Profile</span>
                      </a>
                  </li>
                  
                  <li class=\"sub-menu\">                     
                      <a class=\"\" href=\"javascript:;\">
                          <i class=\"icon_piechart\"></i>
                          <span>Manage Users</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("admin_add_user");
        echo "\">Add Users</a></li> 
                          <li><a class=\"\" href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("admin_view_users");
        echo "\">View Users</a></li>                          
                          <li><a class=\"\" href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("admin_register_users");
        echo "\">Register Users</a></li>
                      </ul>
                                         
                  </li>
                             
                  <li class=\"sub-menu\">
                      <a class=\"\" href=\"javascript:;\">
                          <i class=\"icon_table\"></i>
                          <span>Manage Courses</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"\">Add Course</a></li>                          
                          <li><a class=\"\" href=\"\">View Courses</a></li>
                      </ul>
                  </li>
                  
                  <li class=\"sub-menu\">
                      <a class=\"\" href=\"javascript:;\">
                          <i class=\"icon_datareport\"></i>
                          <span>Course Enrolments</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"\">Add New Enrolment</a></li>  
                          <li><a class=\"\" href=\"l\">View Enrolments</a></li>                          
                      </ul> 
                  </li>
                  
                  <li class=\"sub-menu\">
                      <a class=\"\" href=\"javascript:;\">
                          <i class=\"icon_datareport\"></i>
                          <span>Manage Results</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"\">Add New Result</a></li>  
                          <li><a class=\"\" href=\"\">View Results</a></li>                          
                      </ul> 
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper\" style=\"margin-left: 10px;\">            
            
            <!--overview start-->
            <div class=\"row\">
                    <div class=\"col-lg-9\">
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Manage Results</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"\">Home</a></li>
                                    <li><i class=\"fa fa-users\"></i>Manage Results</li>
                                    <li><i class=\"fa fa-user\"></i>Add Results</li>
                            </ol>
                    </div>
            </div>
  

            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"panel\">
                        <div class=\"panel-body bio-graph-info\" style=\"\">
                            <h1> Add Results</h1>
                            ";
        // line 216
        if ((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1"))) {
            echo "<div id=\"msgFailed\" class=\"alert alert-danger col-lg-8 text-center msgs\" role=\"alert\">Course result wasn't added to the Database!!! Contact Admin.</div> ";
        }
        // line 217
        echo "                            ";
        if ((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) {
            echo "<div id=\"msgSuccess\" class=\"alert alert-success col-lg-8 text-center msgs\" role=\"alert\" style=\"color: #087B1B;\">Course result added the database successfully!</div> ";
        }
        // line 218
        echo "                            
                            <form class=\"form-horizontal col-lg-12\" id=\"courseDetails\" role=\"form\" method=\"POST\" action=\"";
        // line 219
        echo $this->env->getExtension('routing')->getPath("admin_submit_course_results");
        echo "\"> 
                            
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Student ID</label>
                              <div class=\"col-lg-8\">
                                  <input type=\"text\" class=\"form-control col-lg-3\" id=\"indexNum\"  style=\"width:21%;\" name=\"indexNum\"  required>
                                  <span id=\"msgNoUser\" class=\"alert alert-warning col-lg-8 text-center pull-right\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\">This Student ID is not in the system!!</span>
                                  <span id=\"msgInvalidID\" class=\"alert alert-warning col-lg-8 text-center pull-right\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\">Not a valid Student ID!</span>
                              </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-lg-2 control-label\">Name:</label><div  id=\"labelName\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                                <label class=\"col-lg-2 control-label\">Department:</label><div id=\"labelDepartment\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                                <label class=\"col-lg-2 control-label\">Email:</label><div id=\"labelEmail\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Course ID</label>
                              <div class=\"col-lg-8\">
                                  <input type=\"text\" class=\"form-control col-lg-3\" id=\"courseID\"  name=\"courseID\" style=\"width:21%;\" required disabled>
                                  <span id=\"msgNoCourse\" class=\"alert alert-warning col-lg-8 text-center pull-right\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\">This ID is already in the system!!</span>
                                  <span id=\"msgInvalidCourseID\" class=\"alert alert-warning col-lg-8 text-center pull-right\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\"> Invalid Course ID !!</span>
                                  <span id=\"msgAlreadyEnrolled\" class=\"alert alert-warning col-lg-8 text-center pull-right\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\"> Cannot enter results to this Course !</span>
                              </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-lg-2 control-label\">Title:</label><div  id=\"labelTitle\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                                <label class=\"col-lg-2 control-label\">Lecture ID:</label><div id=\"labelLecID\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                                <label class=\"col-lg-2 control-label\">Lec. Name:</label><div id=\"labelLecName\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                                <label class=\"col-lg-2 control-label\">Department:</label><div id=\"labelLecDept\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                            </div>
                            
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Semester</label>
                              <div class=\"col-lg-2\">
                                  <select class=\"form-control\" name=\"semester\" id=\"semester\" required style=\"\">
                                        <option value='' disabled selected style='display:none;'>Select</option>
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                        <option value='6'>6</option>
                                        <option value='7'>7</option>
                                        <option value='8'>8</option>
                                    </select>
                              </div>
                              <label class=\"col-lg-2 control-label\">Grade</label>
                              <div class=\"col-lg-2\">
                                  <select class=\"form-control\" name=\"gradeCredits\" id=\"gradeCredits\" required style=\"\">
                                        <option value='' disabled selected style='display:none;'>Select</option>
                                        <option value='4.2'>A+</option>
                                        <option value='4.0'>A</option>
                                        <option value='3.7'>A-</option>
                                        <option value='3.3'>B+</option>
                                        <option value='3.0'>B</option>
                                        <option value='2.7'>B-</option>
                                        <option value='2.3'>C+</option>
                                        <option value='2.0'>C</option>
                                        <option value='1.5'>C-</option>
                                        <option value='1.0'>D</option>
                                    </select>
                              </div>
                            </div> 
                                
                            <input type='hidden' name='grade' value='' >
   
                            <div class=\"form-group\">
                              <div class=\"col-lg-offset-5 col-lg-10\" style=\"margin-left: 385px;\">
                                  <button type=\"submit\" id=\"enrolButton\" class=\"btn btn-primary\" style=\"margin-left: 40px;\" disabled>Add Results</button>
                              </div>
                            </div>
                        </form>
                            
                            
                        </div>
                    </div>
                </div>
            </div><!--/.row-->
            

            
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section ends -->
    
    
    <!-- javascripts -->
    <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 312
        echo "  

    <!-- Assigning grade to respective credit value before submitting the form  -->
    
        <script>
             \$(document).ready(function(){
                \$('form').on('submit', function(e){
                    //e.preventDefault();
                    var text = \$('#gradeCredits').find(\":selected\").text();
                    \$('input[name=\"grade\"]').val(text);
                    \$('form').submit();
                });
            });
        </script>
    
    <!-- check student availability  -->
    <script>
        \$(document).ready(function(){
            \$(\"#indexNum\").on('keydown',function(){
                \$(\".msgs\").css('display','none');
                \$(\"#enrolButton\").prop('disabled',true);
            });
            \$(\"#indexNum\").on('keyup',function(){
                var indexNum= \$('#indexNum').val();
                if (indexNum.length ==7){
                    document.getElementById('msgInvalidID').style.display = 'none';
                    \$.ajax({
                        type: 'GET',
                        url: '";
        // line 340
        echo $this->env->getExtension('routing')->getPath("admin_check_student_availability");
        echo "',
                        data: {'indexNum': indexNum},
                        dataType: 'json',
                        success: function (data){
                           console.log(\"Returned Data: \"+data+\"\\n\");
                            if( data.status === undefined){
                                //\$(\"td:contains('null')\").text(\"NA\");
                                document.getElementById('msgNoUser').style.display = 'none';
                                \$('#labelName').text(data.first_name+\" \"+data.last_name);
                                \$('#labelDepartment').text(data.department);
                                \$('#labelEmail').text(data.email);
                                \$(\"#courseID\").prop('disabled',false);
                                \$(\"#enrolButton\").prop('disabled',true);
                            }
                            else if( data.status === 1){ //DB query returned a null set
                                document.getElementById('msgNoUser').style.display = '';
                                \$('#labelName').text('NA');
                                \$('#labelDepartment').text('NA');
                                \$('#labelEmail').text('NA');
                                \$(\"#courseID\").prop('disabled',true);
                                \$(\"#enrolButton\").prop('disabled',true); 
                            }
                            else{ //when data.status ==2  // DB query failure
                                alert(\"User Availability Ajax call -> DB query execution fail\");
                            }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert(\"Status: \" + textStatus); 
                            alert(\"Error: \" + errorThrown); 
                        }
                    });
                }
                else{
                    document.getElementById('msgInvalidID').style.display = '';
                    document.getElementById('msgNoUser').style.display = 'none';
                }

            });
        });
    </script>
    
     <!-- get the available course list  -->
    <script>
        \$(document).ready(function(){
            \$(\"#courseID\").on('keydown',function(){
                \$(\".msgs\").css('display','none');
            });
            \$(\"#courseID\").on('keyup',function(){
                var course_id= \$('#courseID').val();
                var indexNum= \$('#indexNum').val();
                if( course_id.length === 6 ){
                    document.getElementById('msgInvalidCourseID').style.display = 'none';
                    \$.ajax({
                        type: 'GET',
                        url: '";
        // line 394
        echo $this->env->getExtension('routing')->getPath("admin_get_enrolled_course_list_with_no_results");
        echo "',
                        data: {'course_id': course_id, 'indexNum': indexNum},
                        dataType: 'json',
                        success: function (data){
                           console.log(\"Returned Data: \"+data+\"\\n\");
                            if( data.status === undefined ){
                                \$.each(data, function(i, item) {
                                    //\$(\"td:contains('null')\").text(\"NA\");
                                    if( item.course_id === course_id){
                                        document.getElementById('msgNoCourse').style.display = 'none';
                                        document.getElementById('msgAlreadyEnrolled').style.display = 'none';
                                        \$('#labelTitle').text(item.title);
                                        \$('#labelLecID').text(item.lec_id);
                                        \$('#labelLecName').text(item.first_name+\" \"+item.last_name);
                                        \$('#labelLecDept').text(item.department);
                                        \$(\"#enrolButton\").prop('disabled',false);
                                        return false;
                                    }
                                    else{
                                        document.getElementById('msgAlreadyEnrolled').style.display = '';
                                    }
                                });
                            }
                            else if( data.status === 1 ){ //DB query returned null set
                                document.getElementById('msgNoCourse').style.display = 'none';
                                \$('#labelTitle').text('NA');
                                \$('#labelLecID').text('NA');
                                \$('#labelLecName').text('NA');
                                \$('#labelLecDept').text('NA');
                                \$(\"#enrolButton\").prop('disabled',true);
                            }
                            else{ //DB query execution failure
                                alert(\"Available Course list Ajax call -> DB query execution fail\");
                            }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert(\"Status: \" + textStatus); 
                            alert(\"Error: \" + errorThrown); 
                        }
                    });
                }
                else{
                    document.getElementById('msgInvalidCourseID').style.display = '';
                    document.getElementById('msgNoCourse').style.display = 'none';
                    document.getElementById('msgAlreadyEnrolled').style.display = 'none';
                    //\$('#labelTitle').text('NA');
                    //\$('#labelLecID').text('NA');
                    //\$('#labelLecName').text('NA');
                    //\$('#Department').text('NA');
                    \$(\"#enrolButton\").prop('disabled',true);
                }

            });
        });
    </script>
    
    <!-- Department's Lecturer lists -->
    ";
        // line 493
        echo "    
    
    <!-- Progressbar  -->
    <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/progressbar.js"), "html", null, true);
        echo "\"></script>
    
    <!-- bootstrap -->
    <script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- nice scroll -->
    <script src=\"";
        // line 502
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    
        
    <!--script for this page only-->
        
    <!-- custom select -->
    <script src=\"";
        // line 510
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>

   
    <!--custome script for all page-->
    <script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- custom script for this page-->
    <script src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
  
    

  </body>
</html>

";
        
        $__internal_3cb916a70b3d799234c17a6edee7e5f6f9a96473b687138741b456e29f020e19->leave($__internal_3cb916a70b3d799234c17a6edee7e5f6f9a96473b687138741b456e29f020e19_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:addResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  594 => 517,  588 => 514,  581 => 510,  571 => 503,  567 => 502,  561 => 499,  555 => 496,  550 => 493,  490 => 394,  433 => 340,  403 => 312,  399 => 310,  395 => 309,  391 => 308,  299 => 219,  296 => 218,  291 => 217,  287 => 216,  214 => 146,  210 => 145,  206 => 144,  190 => 131,  180 => 124,  156 => 103,  144 => 94,  139 => 92,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
