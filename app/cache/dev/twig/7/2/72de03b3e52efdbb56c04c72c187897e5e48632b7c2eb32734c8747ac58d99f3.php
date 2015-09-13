<?php

/* GPABundle:StudentDashboard:profile.html.twig */
class __TwigTemplate_72de03b3e52efdbb56c04c72c187897e5e48632b7c2eb32734c8747ac58d99f3 extends Twig_Template
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
        $__internal_89e2db5a90fcb4a415e475052956fec21d23bf28a0d5f77d6cd03b9aed3ada59 = $this->env->getExtension("native_profiler");
        $__internal_89e2db5a90fcb4a415e475052956fec21d23bf28a0d5f77d6cd03b9aed3ada59->enter($__internal_89e2db5a90fcb4a415e475052956fec21d23bf28a0d5f77d6cd03b9aed3ada59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:StudentDashboard:profile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Student Dashboard in GPA v1.0\">
    <meta name=\"author\" content=\"MnS | Web Solutions\">
    <link rel=\"shortcut icon\" href=\"img/favicon.png\">

    <title>Student | Profile </title>

    <!-- Bootstrap CSS -->    
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!-- bootstrap theme -->
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <!--external css-->
    <!-- font icon -->
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />    

    <!-- Custom styles -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />\t
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui-1.10.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  </head>

  <body>
  <!-- container section start -->
  <section id=\"container\" class=\"\">
     
      
      <header class=\"header dark-bg\">
            <div class=\"toggle-nav\">
                <div class=\"icon-reorder tooltips\" data-original-title=\"Toggle Navigation\" data-placement=\"bottom\"></div>
            </div>

            <!--logo start-->
            <a href=\"index.html\" class=\"logo\"><h4><strong>GPA v1.0<span class=\"lite\"> &nbsp;&nbsp;&nbsp;&nbsp;  Grade Performance Analyzer</strong></h4></span></a>
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
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/chat-avatar2.jpg"), "html", null, true);
        echo "\">
                            </span>
                            <span class=\"username\"><strong>";
        // line 81
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
        // line 90
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
          <div id=\"sidebar\"  class=\"nav-collapse \" style=\"width: 210px;\">
              <!-- sidebar menu start-->
              <ul class=\"sidebar-menu\">                
                  <li class=\"\">
                      <a class=\"\" href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("student_dashboard");
        echo "\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
     
                  <li class=\"active\">
                      <a class=\"\" href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("student_profile");
        echo "\">
                          <i class=\"icon_profile\"></i>
                          <span>Profile</span>
                      </a>
                  </li>
                  <li>                     
                      <a class=\"\" href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("student_view_grades");
        echo "\">
                          <i class=\"icon_piechart\"></i>
                          <span>View Grades</span>
                          
                      </a>
                                         
                  </li>
                             
                  <li class=\"sub-menu\">
                      <a class=\"\" href=\"javascript:;\">
                          <i class=\"icon_table\"></i>
                          <span>Performance Analysis</span>
                         ";
        // line 137
        echo "                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"\">SGPA Statistics</a></li>                          
                          <li><a class=\"\" href=\"\">Curves</a></li>
                      </ul>
                  </li>
                  
                  <li>
                      <a class=\"\" href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("student_predict_gpa");
        echo "\">
                          <i class=\"icon_datareport\"></i>
                          <span>GPA Prediction</span>
                          ";
        // line 149
        echo "                      </a>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      
      <!--main content start-->
      <section id=\"main-content\">
          <section class=\"wrapper\" style=\"margin-left: 30px;\">
\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<h3 class=\"page-header\"><i class=\"fa fa-user-md\"></i> Profile</h3>
                                        <ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t<li><i class=\"fa fa-user\"></i>Profile</li>\t\t\t\t\t\t  \t
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>

              <!-- page start-->
              <div class=\"row\">
                 <div class=\"col-lg-9\">
                    <section class=\"panel\">
                          <header class=\"panel-heading tab-bg-info\">
                              <ul class=\"nav nav-tabs\">
                                  ";
        // line 178
        if (((((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) || (isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3"))) || (isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4")))) {
            echo "<li class=\"\">
                                  ";
        } else {
            // line 179
            echo "<li class=\"active\">
                                  ";
        }
        // line 181
        echo "                                  
                                      <a data-toggle=\"tab\" href=\"#profile\">
                                          <i class=\"icon-user\"></i>
                                          Current Details
                                      </a>
                                  </li>
                                  
                                  ";
        // line 188
        if (((isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4")) || (isset($context["flag5"]) ? $context["flag5"] : $this->getContext($context, "flag5")))) {
            echo "<li class=\"active\">
                                  ";
        } else {
            // line 189
            echo "<li class=\"\">
                                  ";
        }
        // line 191
        echo "                                      <a data-toggle=\"tab\" href=\"#edit-profile\">
                                          <i class=\"icon-envelope\"></i>
                                          Edit Profile
                                      </a>
                                  </li>
                                  
                                  ";
        // line 197
        if ((((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) || (isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3")))) {
            echo "<li class=\"active\">
                                  ";
        } else {
            // line 198
            echo "<li class=\"\">
                                  ";
        }
        // line 200
        echo "                                      <a data-toggle=\"tab\" href=\"#change-password\">
                                          <i class=\"icon-envelope\"></i>
                                          Change Password
                                      </a>
                                  </li>
                              </ul>
                          </header>
                          <div class=\"panel-body\">
                              <div class=\"tab-content\">
                                  
                                  <!-- profile -->
                                  ";
        // line 211
        if ((((((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) || (isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3"))) || (isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4"))) || (isset($context["flag5"]) ? $context["flag5"] : $this->getContext($context, "flag5")))) {
            echo "<div id=\"profile\" class=\"tab-pane\">
                                  ";
        } else {
            // line 212
            echo "<div id=\"profile\" class=\"tab-pane active\">
                                  ";
        }
        // line 214
        echo "                                    <section class=\"panel\" style=\"width:700px;\">
                                      <div class=\"panel-body bio-graph-info\" style=\"max-width: 600px;\">
                                          <div class=\"col-lg-12\"><h1>Bio Graph</h1></div>
                                          <div class=\"col-lg-6\" style=\"padding:8px;\">Profile Picture</div>
                                          <div class=\"col-lg-3\" style=\"background-color: gray; height:120px; width:120px; padding:0px;\">
                                              <!-- image size = 131.944px * 120px -->
                                            <img alt=\"\" src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/chat-avatar2.jpg"), "html", null, true);
        echo "\" style=\"height:inherit;\">
                                          </div>
                                          <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                            <tr>
                                                <td>Student ID</td>
                                                <td>";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getId", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>First Name</td>
                                                <td>";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getFirstName", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>Last Name</td>
                                                <td>";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getLastName", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td>";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getEmail", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>Mobile</td>
                                                <td>";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getMobile", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>Department</td>
                                                <td>";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>Profession</td>
                                                <td>";
        // line 264
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array()) == "2")) {
            // line 265
            echo "                                                        Student
                                                    ";
        } else {
            // line 267
            echo "                                                        Error in Profession! Please contact Admin
                                                    ";
        }
        // line 269
        echo "                                                </td>
                                            </tr>

                                            </tbody>
                            
                                         </table> 
                                      </div>
                                    </section>
                                      <section>
                                          <div class=\"row\">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->
                                  ";
        // line 283
        if (((isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4")) || (isset($context["flag5"]) ? $context["flag5"] : $this->getContext($context, "flag5")))) {
            // line 284
            echo "                                      <div id=\"edit-profile\" class=\"tab-pane active\">
                                  ";
        } else {
            // line 286
            echo "                                      <div id=\"edit-profile\" class=\"tab-pane\">
                                  ";
        }
        // line 288
        echo "                                    <section class=\"panel\">                                          
                                          <div class=\"panel-body bio-graph-info\" style=\"max-width: 600px;\">
                                              <h1> Profile Info</h1>
                                              ";
        // line 291
        if ((isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4"))) {
            echo "<div class=\"alert alert-danger col-lg-9\" role=\"alert\">Your Profile Details are NOT CHANGED successfully!!!<br>Please contact Admin</div>";
        }
        // line 292
        echo "                                              ";
        if ((isset($context["flag5"]) ? $context["flag5"] : $this->getContext($context, "flag5"))) {
            echo "<div class=\"alert alert-success col-lg-9\" role=\"alert\">Your Profile Details are changed successfully.</div>";
        }
        // line 293
        echo "                                              <form class=\"form-horizontal col-lg-12\" role=\"form\" method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("student_change_details");
        echo "\">                                                  
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">First Name</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"firstName\"  name=\"firstName\" value=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getFirstName", array(), "method"), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">Last Name</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"lastName\"  name=\"lastName\" value=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getLastName", array(), "method"), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">Email</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"email\" class=\"form-control\" id=\"email\"  name=\"email\" value=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getEmail", array(), "method"), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">Mobile</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"mobile\"  name=\"mobile\" value=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getMobile", array(), "method"), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                      
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">Change Profile Picture</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"file\" name=\"profPic\" id=\"profPic\">
                                                      </div>
                                                  </div>
                                                  
                                                  <div class=\"form-group\">
                                                      <div class=\"col-lg-offset-7 col-lg-10\">
                                                          <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                                                          <button type=\"button\" class=\"btn btn-danger\">Cancel</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
                                  </div>
                                  
                                  <!-- change password -->
                                  ";
        // line 338
        if ((((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) || (isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3")))) {
            // line 339
            echo "                                      <div id=\"change-password\" class=\"tab-pane active\">
                                  ";
        } else {
            // line 341
            echo "                                      <div id=\"change-password\" class=\"tab-pane\">
                                  ";
        }
        // line 343
        echo "                                    <section class=\"panel\">
                                          <div class=\"panel-body bio-graph-info\" style=\"max-width: 600px;\">
                                              <h1> Change Password</h1>
                                                ";
        // line 346
        if ((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1"))) {
            echo "<div class=\"alert alert-danger col-lg-6\" role=\"alert\">Old Password entered is INCORRECT!!!</div>";
        }
        // line 347
        echo "                                                ";
        if ((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) {
            echo "<div class=\"alert alert-danger col-lg-6\" role=\"alert\">New Password and Re-entered New Password fields are NOT matching!!!</div>";
        }
        // line 348
        echo "                                                ";
        if ((isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3"))) {
            echo "<div class=\"alert alert-success col-lg-6\" role=\"alert\">Your Password is changed successfully.</div>";
        }
        // line 349
        echo "                                              <form class=\"form-horizontal col-lg-12\" role=\"form\" method=\"POST\" action=\"";
        echo $this->env->getExtension('routing')->getPath("student_change_password");
        echo "\">                                                  
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">Old Password</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"password\" class=\"form-control\" id=\"oldPassword\" name=\"oldPassword\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">New Password</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"password\" class=\"form-control\" id=\"newPassword\" name=\"newPassword\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">Re-type New Password</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"password\" class=\"form-control\" id=\"confirmPassword\" name=\"confirmPassword\" required>
                                                      </div>
                                                  </div>
                                                  
                                                  <!-- validating the re-entered password -->
                                                    <script>
                                                        var password = document.getElementById(\"newPassword\"), confirm_password = document.getElementById(\"confirmPassword\");

                                                        function validatePassword(){
                                                          if(newPassword.value != confirmPassword.value) {
                                                            confirm_password.setCustomValidity(\"New Passwords Don't Match\");
                                                          } else {
                                                            confirm_password.setCustomValidity('');
                                                          }
                                                        }

                                                        password.onchange = validatePassword;
                                                        confirm_password.onkeyup = validatePassword;
                                                    </script>
                                                  
                                                  <div class=\"form-group\">
                                                      <div class=\"col-lg-offset-7 col-lg-10\">
                                                          <button type=\"submit\" class=\"btn btn-primary\">Save</button>
                                                          <button type=\"button\" class=\"btn btn-danger\">Cancel</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
                                  </div>
                              </div>
                          </div>
                      </section>
                 </div>
              </div>

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
  
    <!-- javascripts -->
    <script src=\"";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- nice scroll -->
    <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!--custome script for all page-->
    <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>


  </body>
</html>
";
        
        $__internal_89e2db5a90fcb4a415e475052956fec21d23bf28a0d5f77d6cd03b9aed3ada59->leave($__internal_89e2db5a90fcb4a415e475052956fec21d23bf28a0d5f77d6cd03b9aed3ada59_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:StudentDashboard:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  608 => 417,  602 => 414,  598 => 413,  592 => 410,  588 => 409,  524 => 349,  519 => 348,  514 => 347,  510 => 346,  505 => 343,  501 => 341,  497 => 339,  495 => 338,  469 => 315,  460 => 309,  451 => 303,  442 => 297,  434 => 293,  429 => 292,  425 => 291,  420 => 288,  416 => 286,  412 => 284,  410 => 283,  394 => 269,  390 => 267,  386 => 265,  384 => 264,  376 => 259,  368 => 254,  360 => 249,  352 => 244,  344 => 239,  336 => 234,  319 => 220,  311 => 214,  307 => 212,  302 => 211,  289 => 200,  285 => 198,  280 => 197,  272 => 191,  268 => 189,  263 => 188,  254 => 181,  250 => 179,  245 => 178,  214 => 149,  208 => 145,  198 => 137,  183 => 124,  174 => 118,  164 => 111,  140 => 90,  128 => 81,  123 => 79,  67 => 26,  63 => 25,  59 => 24,  53 => 21,  49 => 20,  42 => 16,  36 => 13,  22 => 1,);
    }
}
