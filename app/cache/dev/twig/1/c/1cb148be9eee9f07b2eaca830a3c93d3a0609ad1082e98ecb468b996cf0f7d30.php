<?php

/* GPABundle:AdminDashboard:addCourse.html.twig */
class __TwigTemplate_1cb148be9eee9f07b2eaca830a3c93d3a0609ad1082e98ecb468b996cf0f7d30 extends Twig_Template
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
        $__internal_90741fd495b2058cc41c4587a540685731d3741b067aad46d8a9ff1b32506d39 = $this->env->getExtension("native_profiler");
        $__internal_90741fd495b2058cc41c4587a540685731d3741b067aad46d8a9ff1b32506d39->enter($__internal_90741fd495b2058cc41c4587a540685731d3741b067aad46d8a9ff1b32506d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:addCourse.html.twig"));

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

    <title>Admin| Manage Users </title>

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
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/chat-avatar2.jpg"), "html", null, true);
        echo "\">
                            </span>
                            <span class=\"username\"><strong>";
        // line 89
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
        // line 98
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
        // line 119
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
     
                  <li>
                      <a class=\"\" href=\"";
        // line 126
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
        // line 139
        echo $this->env->getExtension('routing')->getPath("admin_add_user");
        echo "\">Add Users</a></li> 
                          <li><a class=\"\" href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("admin_view_users");
        echo "\">View Users</a></li>                          
                          <li><a class=\"\" href=\"";
        // line 141
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
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Manage Courses</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"\">Home</a></li>
                                    <li><i class=\"fa fa-users\"></i>Manage Courses</li>
                                    <li><i class=\"fa fa-user\"></i>Add Courses</li>
                            </ol>
                    </div>
            </div>
  

            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"panel\">
                        <div class=\"panel-body bio-graph-info\" style=\"\">
                            <h1> Course Details</h1>
                            ";
        // line 211
        if ((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1"))) {
            echo "<div id=\"msgFailed\" class=\"alert alert-danger col-lg-8 text-center msgs\" role=\"alert\">Course creation failed!!! Contact Admin.</div> ";
        }
        // line 212
        echo "                            ";
        if ((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) {
            echo "<div id=\"msgSuccess\" class=\"alert alert-success col-lg-8 text-center msgs\" role=\"alert\" style=\"color: #087B1B;\">Course created successfully!</div> ";
        }
        // line 213
        echo "                            
                            <form class=\"form-horizontal col-lg-12\" id=\"courseDetails\" role=\"form\" method=\"POST\" action=\"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("admin_create_course");
        echo "\"> 
                            
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Course ID</label>
                              <div class=\"col-lg-8\">
                                  <input type=\"text\" class=\"form-control col-lg-3\" id=\"courseID\"  style=\"width:30%;\" name=\"courseID\"  required>
                                  <span id=\"msgNoCourse\" class=\"alert alert-warning col-lg-8 text-center pull-right\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\">This ID is already in the system!!</span>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Title</label>
                              <div class=\"col-lg-7\">
                                  <input type=\"text\" class=\"form-control\" id=\"firstName\"  name=\"title\"  required>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Credits</label>
                              <div class=\"col-lg-2\">
                                  <input type=\"text\" class=\"form-control\" id=\"credits\"  name=\"credits\" required>
                              </div>
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
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Year</label>
                              <div class=\"col-lg-2\">
                                  <input type=\"text\" class=\"form-control\" id=\"year\"  name=\"year\"  required>
                              </div>
                            </div>
                            <div class=\"form-group\" >
                              <label class=\"col-lg-2 control-label\">Lecturer</label>
                              <div class=\"col-lg-2\" style=\"padding-left: 0px; padding-right: 0px;margin-left: 15px;\">
                                    <select class=\"form-control\" name=\"department\" id=\"department\" required style=\"padding-left: 0px;\">
                                        <option value='' disabled selected style='display:none;'>Department</option>
                                        <option value='CHEMICAL'>CHEMICAL</option>
                                        <option value='CIVIL'>CIVIL</option>
                                        <option value='CSE'>CSE</option>
                                        <option value='ENTC'>ENTC</option>
                                        <option value='ELECTRICAL'>ELECTRICAL</option>
                                        <option value='MATERIALS'>MATERIALS</option>
                                        <option value='MECHANICAL'>MECHANICAL</option>
                                        <option value='TEXTILE'>TEXTILE</option>
                                        <option value='TLM'>TLM</option>
                                        <option value='EARTH_RESOURCE'>EARTH_RESOURCE</option>
                                    </select>
                              </div>
                              <div class=\"col-lg-4\" style=\"padding-left: 0px; padding-right: 0px;margin-left: 35px;\">
                                    <select class=\"form-control\" name=\"lec_name\" id=\"lec_name\" required style=\"padding-left: 0px;\">
                                        <option value='0' disabled selected style='display:none;'>Lecturer</option>
                                    </select>
                              </div>
                            </div>
                                
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Remarks</label>
                              <div class=\"col-lg-7\">
                                  <textarea name=\"remarks\" id=\"remarks\" form=\"courseDetails\" class=\"form-control\" placeholder=\"Enter text here...\"></textarea>
                              </div>
                            </div>


                            <div class=\"form-group\">
                              <div class=\"col-lg-offset-7 col-lg-10\">
                                  <button type=\"submit\" id=\"createButton\" class=\"btn btn-primary\" style=\"margin-left: 40px;\" disabled>Create</button>
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

    <script>
        
        function changeProfession(){
          if(document.getElementsByName(\"profession\")[0].value === '0' ) {
                document.getElementsByName(\"department\")[0].value = 'ADMIN';
          }
          else if (document.getElementsByName(\"department\")[0].value === 'ADMIN' && (document.getElementsByName(\"profession\")[0].value === '1' || document.getElementsByName(\"profession\")[0].value === '2')){
              document.getElementsByName(\"department\")[0].value = '';
              alert(\"Select a department!\");
          }
        }
        
        function validateID(){
            var course_id = document.getElementsByID(\"courseID\");
            //improve the User ID validation process
            if(course_id.length !== 6){
                course_id.setCustomValidity(\"Enter a valid course_ID\");
            }
        }
                          
    </script>

  
    <!-- javascripts -->
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
    
     <!-- check course availability  -->
    <script>
        \$(document).ready(function(){
            \$(\"#courseID\").on('keydown',function(){
                \$(\".msgs\").css('display','none');
                \$(\"#createButton\").prop('disabled',true);
            });
            \$(\"#courseID\").on('blur keyup',function(){
                var course_id= \$('#courseID').val();
                \$.ajax({
                    type: 'GET',
                    url: '";
        // line 348
        echo $this->env->getExtension('routing')->getPath("admin_check_course_availability");
        echo "',
                    data: {'course_id': course_id},
                    dataType: 'json',
                    success: function (data){
                       console.log(\"Returned Data: \"+data+\"\\n\");
                        if( data.status === 3){
                            //\$(\"td:contains('null')\").text(\"NA\");
                            document.getElementById('msgNoCourse').style.display = '';
                            \$(\"#createButton\").attr(\"disabled\",\"disabled\");
                        }
                        else{
                            document.getElementById('msgNoCourse').style.display = 'none';
                            \$(\"#createButton\").prop('disabled',false);
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert(\"Status: \" + textStatus); 
                        alert(\"Error: \" + errorThrown); 
                    }
                });
                

            });
        });
    </script>
    
    <!-- Department's Lecturer lists -->
    <script>
       \$(document).ready(function(){
        \$(\"#department\").change(function(){
             var department= \$(\"#department\").val();
            //console.log(student_id);
            //\$(\"#div1\").load(\"demo_test.txt\");
            \$.ajax({ 
                type: 'GET', 
                url: '";
        // line 383
        echo $this->env->getExtension('routing')->getPath("admin_check_dept_lec_list");
        echo "', 
                data: { 'department' : department }, 
                dataType: 'json',
                success: function (data) { 
                    console.log(\"Returned Data: \"+data+\"\\n\");
                    if( data.status === undefined){
                        var \$el = \$(\"#lec_name\");
                        var namesWithID = [];
                        
                        \$.each(data, function(i,item) {
                            namesWithID[i] = item.id+\"  \"+item.first_name+\" \"+item.last_name;
                        });;

                        //\$el.empty(); // remove old options
                        \$('#lec_name option:gt(0)').remove();
                        // Function( String propertyName, Object valueOfProperty )
                        \$.each(data, function(i,item) {
                          \$el.append( \$(\"<option></option>\").attr(\"value\", item.id).text(namesWithID[i]) );
                        });;
                    }
                    else{
                        \$('#lec_name option:gt(0)').remove();
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert(\"Status: \" + textStatus); 
                        alert(\"Error: \" + errorThrown); 
                    }
            });
    });
}); 
        
        
    </script>
    
    
    <!-- Progressbar  -->
    <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/progressbar.js"), "html", null, true);
        echo "\"></script>
    
    <!-- bootstrap -->
    <script src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- nice scroll -->
    <script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    
        
    <!--script for this page only-->
        
    <!-- custom select -->
    <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>

   
    <!--custome script for all page-->
    <script src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- custom script for this page-->
    <script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
  
    

  </body>
</html>

";
        
        $__internal_90741fd495b2058cc41c4587a540685731d3741b067aad46d8a9ff1b32506d39->leave($__internal_90741fd495b2058cc41c4587a540685731d3741b067aad46d8a9ff1b32506d39_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:addCourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  560 => 441,  554 => 438,  547 => 434,  537 => 427,  533 => 426,  527 => 423,  521 => 420,  481 => 383,  443 => 348,  427 => 335,  423 => 334,  419 => 333,  415 => 332,  294 => 214,  291 => 213,  286 => 212,  282 => 211,  209 => 141,  205 => 140,  201 => 139,  185 => 126,  175 => 119,  151 => 98,  139 => 89,  134 => 87,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
