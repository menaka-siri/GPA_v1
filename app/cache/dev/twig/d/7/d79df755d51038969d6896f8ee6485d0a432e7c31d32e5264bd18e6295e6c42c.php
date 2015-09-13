<?php

/* GPABundle:AdminDashboard:addUser.html.twig */
class __TwigTemplate_d79df755d51038969d6896f8ee6485d0a432e7c31d32e5264bd18e6295e6c42c extends Twig_Template
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
        $__internal_0022f9dd7e309ab5ac2d93915ff9122579b32cefa24c53a1b6e5d102ec5efd91 = $this->env->getExtension("native_profiler");
        $__internal_0022f9dd7e309ab5ac2d93915ff9122579b32cefa24c53a1b6e5d102ec5efd91->enter($__internal_0022f9dd7e309ab5ac2d93915ff9122579b32cefa24c53a1b6e5d102ec5efd91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:addUser.html.twig"));

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
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Manage Users</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"\">Home</a></li>
                                    <li><i class=\"fa fa-users\"></i>Manage Users</li>
                                    <li><i class=\"fa fa-user\"></i>Add Users</li>
                            </ol>
                    </div>
            </div>
  

            <div class=\"row\">
                <div class=\"col-lg-9\">
                    <div class=\"panel\">
                        <div class=\"panel-body bio-graph-info\" style=\"\">
                            <h1> User Information</h1>
                            ";
        // line 211
        if ((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1"))) {
            echo "<div id=\"msgFailed\" class=\"alert alert-danger col-lg-8 text-center msgs\" role=\"alert\">-User registration failed!!! Contact Admin.</div> ";
        }
        // line 212
        echo "                            ";
        if ((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) {
            echo "<div id=\"msgSuccess\" class=\"alert alert-success col-lg-8 text-center msgs\" role=\"alert\" style=\"color: #087B1B;\">User is registered with the system successfully!</div> ";
        }
        // line 213
        echo "                            
                            <form class=\"form-horizontal col-lg-12\" role=\"form\" method=\"POST\" action=\"";
        // line 214
        echo $this->env->getExtension('routing')->getPath("admin_add_user_submit");
        echo "\"> 
                            
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">University ID</label>
                              <div class=\"col-lg-8\">
                                  <input type=\"text\" class=\"form-control col-lg-3\" id=\"newUserID\"  style=\"width:30%;\" name=\"newUserID\"  required>
                                  <span id=\"msgNoUser\" class=\"alert alert-warning col-lg-8 text-center pull-right\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\">User ID is already registered in the system!!</span>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">First Name</label>
                              <div class=\"col-lg-6\">
                                  <input type=\"text\" class=\"form-control\" id=\"firstName\"  name=\"first_name\"  required>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Last Name</label>
                              <div class=\"col-lg-6\">
                                  <input type=\"text\" class=\"form-control\" id=\"lastName\"  name=\"last_name\" required>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Email</label>
                              <div class=\"col-lg-6\">
                                  <input type=\"email\" class=\"form-control\" id=\"email\"  name=\"email\"  pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" required>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Mobile</label>
                              <div class=\"col-lg-6\">
                                  <input type=\"text\" class=\"form-control\" id=\"mobile\"  name=\"mobile\"  required>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Department</label>
                              <div class=\"col-lg-6\">
                                    <select class=\"form-control\" name=\"department\" required>
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
                                        <option value='ADMIN'>ADMIN</option>
                                    </select>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Profession</label>
                              <div class=\"col-lg-6\">
                                    <select class=\"form-control\" name=\"profession\" onchange=\"changeProfession()\">
                                        <option value='' disabled selected style='display:none;'>Profession</option>
                                        <option value='0'>Staff_Member</option>
                                        <option value='1'>Lecturer</option>
                                        <option value='2'>Student</option>
                                    </select>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Password</label>
                              <div class=\"col-lg-6\">
                                  <input type=\"password\" class=\"form-control\" id=\"password\"  name=\"password\"  required>
                              </div>
                            </div>
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Re-type Password</label>
                              <div class=\"col-lg-6\">
                                  <input type=\"password\" class=\"form-control\" id=\"confirmPassword\"  name=\"confirmPassword\"  required>
                              </div>
                            </div>
                                
                            <!-- validating the re-entered password -->
                                <script>
                                    var password = document.getElementById(\"password\"), confirm_password = document.getElementById(\"confirmPassword\");

                                    function validatePassword(){
                                      if(password.value != confirm_password.value) {
                                        confirm_password.setCustomValidity(\"Passwords Don't Match\");
                                      } else {
                                        confirm_password.setCustomValidity('');
                                      }
                                    }
                                    password.onchange = validatePassword;
                                    confirm_password.onkeyup = validatePassword;
                                </script>
                                
                            <div class=\"form-group\">
                              <label class=\"col-lg-2 control-label\">Status</label>
                              <div class=\"col-lg-6\">
                                  <select class=\"form-control\" name=\"status\" onchange=\"\">
                                      <option value='0' selected>Unregistred</option>
                                        <option value='1'>Registered</option>
                                    </select>
                              </div>
                            </div>
                            
                            <div class=\"form-group\">
                              <label class=\"col-lg-3 control-label\">Change Profile Picture</label>
                              <div class=\"col-lg-6\">
                                  <input type=\"file\" name=\"profPic\" id=\"profPic\"  accept=\"image/*\">
                              </div>
                            </div>

                            <div class=\"form-group\">
                              <div class=\"col-lg-offset-6 col-lg-10\">
                                  <button type=\"submit\" id=\"saveButton\" class=\"btn btn-primary\" style=\"margin-left: 40px;\" disabled>Submit</button>
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
            var id = document.getElementsByID(\"newUserID\");
            //improve the User ID validation process
            if(id.length !== 7){
                id.setCustomValidity(\"Enter a valid user ID\");
            }
        }
                          
    </script>

  
    <!-- javascripts -->
    <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
    
     <!-- check user availability  -->
    <script>
        \$(document).ready(function(){
            \$(\"#newUserID\").on('keydown',function(){
                \$(\".msgs\").css('display','none');
            });
            \$(\"#newUserID\").on('blur keyup',function(){
                var indexNum= \$('#newUserID').val();
                \$.ajax({
                    type: 'GET',
                    url: '";
        // line 380
        echo $this->env->getExtension('routing')->getPath("admin_check_user_availability");
        echo "',
                    data: {'indexNum': indexNum},
                    dataType: 'json',
                    success: function (data){
                       console.log(\"Returned Data: \"+data+\"\\n\");
                        if( data.status === 3){
                            //\$(\"td:contains('null')\").text(\"NA\");
                            document.getElementById('msgNoUser').style.display = '';
                            \$(\"#saveButton\").attr(\"disabled\",\"disabled\");
                        }
                        else{
                            document.getElementById('msgNoUser').style.display = 'none';
                            \$(\"#saveButton\").prop('disabled',false);
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
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/progressbar.js"), "html", null, true);
        echo "\"></script>
    
    <!-- bootstrap -->
    <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- nice scroll -->
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    
        
    <!--script for this page only-->
        
    <!-- custom select -->
    <script src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>

   
    <!--custome script for all page-->
    <script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- custom script for this page-->
    <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
  
    

  </body>
</html>

";
        
        $__internal_0022f9dd7e309ab5ac2d93915ff9122579b32cefa24c53a1b6e5d102ec5efd91->leave($__internal_0022f9dd7e309ab5ac2d93915ff9122579b32cefa24c53a1b6e5d102ec5efd91_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:addUser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 429,  539 => 426,  532 => 422,  522 => 415,  518 => 414,  512 => 411,  506 => 408,  475 => 380,  460 => 368,  456 => 367,  452 => 366,  448 => 365,  294 => 214,  291 => 213,  286 => 212,  282 => 211,  209 => 141,  205 => 140,  201 => 139,  185 => 126,  175 => 119,  151 => 98,  139 => 89,  134 => 87,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
