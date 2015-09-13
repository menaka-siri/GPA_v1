<?php

/* GPABundle:AdminDashboard:viewUserProfile.html.twig */
class __TwigTemplate_667e880fc447a0c6d93ea70e17f89bc21da0e8f59cd3379aaaf66383d14d420e extends Twig_Template
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
        $__internal_7fa61475233aa098cee077afb6a7ef8069863a1d1fd61f453101dfca70380290 = $this->env->getExtension("native_profiler");
        $__internal_7fa61475233aa098cee077afb6a7ef8069863a1d1fd61f453101dfca70380290->enter($__internal_7fa61475233aa098cee077afb6a7ef8069863a1d1fd61f453101dfca70380290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:viewUserProfile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!-- Admin Profile Page --> 
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Administrator Dashboard in GPA v1.0\">
    <meta name=\"author\" content=\"MnS | Web Solutions\">
    <link rel=\"shortcut icon\" href=\"img/favicon.png\">

    <title>Administrator | Profile </title>

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
        echo "\" rel=\"stylesheet\" />\t
    <link href=\"";
        // line 27
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
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/chat-avatar2.jpg"), "html", null, true);
        echo "\">
                            </span>
                            <span class=\"username\"><strong>";
        // line 82
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
        // line 91
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
        // line 112
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
     
                  <li>
                      <a class=\"\" href=\"";
        // line 119
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
        // line 132
        echo $this->env->getExtension('routing')->getPath("admin_view_users");
        echo "\">Add Users</a></li> 
                          <li><a class=\"\" href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("admin_view_users");
        echo "\">View Users</a></li>                          
                          <li><a class=\"\" href=\"";
        // line 134
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
\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-lg-9\">
                                    <h3 class=\"page-header\"><i class=\"fa fa-user-md\"></i>User Profile &nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; <strong>";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["indexNum"]) ? $context["indexNum"] : $this->getContext($context, "indexNum")), "html", null, true);
        echo "</strong> &nbsp;&nbsp;&nbsp; 
                                        ";
        // line 188
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array()) == "0")) {
            echo " Staff
                                        ";
        } elseif (($this->getAttribute(        // line 189
(isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array()) == "1")) {
            echo " Lecturer
                                        ";
        } elseif (($this->getAttribute(        // line 190
(isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array()) == "2")) {
            echo " Student
                                        ";
        }
        // line 192
        echo "                                    </h3>
                                        <ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t<li><i class=\"fa fa-user\"></i>Manage Users</li>
                                                <li><i class=\"fa fa-user\"></i>View Users</li>
                                                <li><i class=\"fa fa-user\"></i>View Profile</li>\t\t\t\t\t\t  \t
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
        // line 208
        if (((((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) || (isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3"))) || (isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4")))) {
            echo "<li class=\"\">
                                  ";
        } else {
            // line 209
            echo "<li class=\"active\">
                                  ";
        }
        // line 211
        echo "                                  
                                      <a data-toggle=\"tab\" href=\"#profile\">
                                          <i class=\"icon-user\"></i>
                                          Current Details
                                      </a>
                                  </li>
                                  
                                  ";
        // line 218
        if (((isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4")) || (isset($context["flag5"]) ? $context["flag5"] : $this->getContext($context, "flag5")))) {
            echo "<li class=\"active\">
                                  ";
        } else {
            // line 219
            echo "<li class=\"\">
                                  ";
        }
        // line 221
        echo "                                      <a data-toggle=\"tab\" href=\"#edit-profile\">
                                          <i class=\"icon-envelope\"></i>
                                          Edit Profile
                                      </a>
                                  </li>
                                  
                                  ";
        // line 227
        if ((((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) || (isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3")))) {
            echo "<li class=\"active\">
                                  ";
        } else {
            // line 228
            echo "<li class=\"\">
                                  ";
        }
        // line 230
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
        // line 241
        if ((((((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) || (isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3"))) || (isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4"))) || (isset($context["flag5"]) ? $context["flag5"] : $this->getContext($context, "flag5")))) {
            echo "<div id=\"profile\" class=\"tab-pane\">
                                  ";
        } else {
            // line 242
            echo "<div id=\"profile\" class=\"tab-pane active\">
                                  ";
        }
        // line 244
        echo "                                    <section class=\"panel\" style=\"width:700px;\">
                                      <div class=\"panel-body bio-graph-info\" style=\"max-width: 600px;\">
                                          <div class=\"col-lg-12\"><h1>Bio Graph</h1></div>
                                          <div class=\"col-lg-6\" style=\"padding:8px;\">Profile Picture</div>
                                          <div class=\"col-lg-3\" style=\"background-color: gray; height:120px; width:120px; padding:0px;\">
                                              <!-- image size = 131.944px * 120px -->
                                            <img alt=\"\" src=\"";
        // line 250
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
                                                <td>User ID</td>
                                                <td>";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getId", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>First Name</td>
                                                <td>";
        // line 269
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getFirstName", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>Last Name</td>
                                                <td>";
        // line 274
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getLastName", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td>";
        // line 279
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getEmail", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>Mobile</td>
                                                <td>";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getMobile", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>Department</td>
                                                <td>";
        // line 289
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method"), "html", null, true);
        echo "</td>
                                            </tr>

                                            <tr>
                                                <td>Profession</td>
                                                <td>";
        // line 294
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array(), "method") == "0")) {
            echo " Staff
                                                    ";
        } elseif (($this->getAttribute(        // line 295
(isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array(), "method") == "1")) {
            echo " Lecturer
                                                    ";
        } elseif (($this->getAttribute(        // line 296
(isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array(), "method") == "2")) {
            echo " Student
                                                    ";
        } else {
            // line 298
            echo "                                                        Error in Profession! Please contact Admin
                                                    ";
        }
        // line 300
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
        // line 314
        if (((isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4")) || (isset($context["flag5"]) ? $context["flag5"] : $this->getContext($context, "flag5")))) {
            // line 315
            echo "                                      <div id=\"edit-profile\" class=\"tab-pane active\">
                                  ";
        } else {
            // line 317
            echo "                                      <div id=\"edit-profile\" class=\"tab-pane\">
                                  ";
        }
        // line 319
        echo "                                    <section class=\"panel\">                                          
                                          <div class=\"panel-body bio-graph-info\" style=\"max-width: 600px;\">
                                              <h1> Profile Info</h1>
                                              ";
        // line 322
        if ((isset($context["flag4"]) ? $context["flag4"] : $this->getContext($context, "flag4"))) {
            echo "<div class=\"alert alert-danger col-lg-9\" role=\"alert\">Your Profile Details are NOT CHANGED successfully!!!<br>Please contact Admin</div>";
        }
        // line 323
        echo "                                              ";
        if ((isset($context["flag5"]) ? $context["flag5"] : $this->getContext($context, "flag5"))) {
            echo "<div class=\"alert alert-success col-lg-9\" role=\"alert\">Your Profile Details are changed successfully.</div>";
        }
        // line 324
        echo "                                              <form class=\"form-horizontal col-lg-12\" role=\"form\" method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_profile_change_details", array("indexNum" => (isset($context["indexNum"]) ? $context["indexNum"] : $this->getContext($context, "indexNum")))), "html", null, true);
        echo "\">                                                  
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">First Name</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"firstName\"  name=\"firstName\" value=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getFirstName", array(), "method"), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">Last Name</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"lastName\"  name=\"lastName\" value=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getLastName", array(), "method"), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">Email</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"email\" class=\"form-control\" id=\"email\"  name=\"email\" value=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getEmail", array(), "method"), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">Mobile</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"mobile\"  name=\"mobile\" value=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getMobile", array(), "method"), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">Department</label>
                                                      <div class=\"col-lg-6\">
                                                          <select class=\"form-control\" name=\"department\" id=\"department\" required>
                                                                ";
        // line 354
        echo "                                                                ";
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method") == "CHEMICAL")) {
            echo " <option value='CHEMICAL' selected >CHEMICAL</option>
                                                                ";
        } else {
            // line 355
            echo " <option value='CHEMICAL'>CHEMICAL</option>
                                                                ";
        }
        // line 357
        echo "                                                                ";
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method") == "CIVIL")) {
            echo " <option value='CIVIL' selected >CIVIL</option>
                                                                ";
        } else {
            // line 358
            echo " <option value='CIVIL'>CIVIL</option>
                                                                ";
        }
        // line 360
        echo "                                                                ";
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method") == "CSE")) {
            echo " <option value='CSE' selected >CSE</option>
                                                                ";
        } else {
            // line 361
            echo " <option value='CSE'>CSE</option>
                                                                ";
        }
        // line 363
        echo "                                                                ";
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method") == "ENTC")) {
            echo " <option value='ENTC' selected >ENTC</option>
                                                                ";
        } else {
            // line 364
            echo " <option value='ENTC'>ENTC</option>
                                                                ";
        }
        // line 366
        echo "                                                                ";
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method") == "ELECTRICAL")) {
            echo " <option value='ELECTRICAL' selected >ELECTRICAL</option>
                                                                ";
        } else {
            // line 367
            echo " <option value='ELECTRICAL'>ELECTRICAL</option>
                                                                ";
        }
        // line 369
        echo "                                                                ";
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method") == "MATERIALS")) {
            echo " <option value='MATERIALS' selected >MATERIALS</option>
                                                                ";
        } else {
            // line 370
            echo " <option value='MATERIALS'>MATERIALS</option>
                                                                ";
        }
        // line 372
        echo "                                                                ";
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method") == "MECHANICAL")) {
            echo " <option value='MECHANICAL' selected >MECHANICAL</option>
                                                                ";
        } else {
            // line 373
            echo " <option value='MECHANICAL'>MECHANICAL</option>
                                                                ";
        }
        // line 375
        echo "                                                                ";
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method") == "TEXTILE")) {
            echo " <option value='TEXTILE' selected >TEXTILE</option>
                                                                ";
        } else {
            // line 376
            echo " <option value='TEXTILE'>TEXTILE</option>
                                                                ";
        }
        // line 378
        echo "                                                                ";
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method") == "TLM")) {
            echo " <option value='TLM' selected >TLM</option>
                                                                ";
        } else {
            // line 379
            echo " <option value='TLM'>TLM</option>
                                                                ";
        }
        // line 381
        echo "                                                                ";
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method") == "EARTH_RESOURCE")) {
            echo " <option value='EARTH_RESOURCE' selected >EARTH_RESOURCE</option>
                                                                ";
        } else {
            // line 382
            echo " <option value='EARTH_RESOURCE'>EARTH_RESOURCE</option>
                                                                ";
        }
        // line 384
        echo "                                                                ";
        if (($this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getDepartment", array(), "method") == "ADMIN")) {
            echo " <option value='ADMIN' selected >ADMIN</option>
                                                                ";
        } else {
            // line 385
            echo " <option value='ADMIN'>ADMIN</option>
                                                                ";
        }
        // line 387
        echo "                                                           </select>
                                                      </div>
                                                  </div>
                                                           
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-4 control-label\">Change Profile Picture</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"file\" name=\"profPic\" id=\"profPic\"  accept=\"image/*\">
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
        // line 410
        if ((((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) || (isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3")))) {
            // line 411
            echo "                                      <div id=\"change-password\" class=\"tab-pane active\">
                                  ";
        } else {
            // line 413
            echo "                                      <div id=\"change-password\" class=\"tab-pane\">
                                  ";
        }
        // line 415
        echo "                                    <section class=\"panel\">
                                          <div class=\"panel-body bio-graph-info\" style=\"max-width: 600px;\">
                                              <h1> Change Password</h1>
                                                ";
        // line 418
        if ((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1"))) {
            echo "<div class=\"alert alert-danger col-lg-6\" role=\"alert\">Old Password entered is INCORRECT!!!</div>";
        }
        // line 419
        echo "                                                ";
        if ((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) {
            echo "<div class=\"alert alert-danger col-lg-6\" role=\"alert\">New Password and Re-entered New Password fields are NOT matching!!!</div>";
        }
        // line 420
        echo "                                                ";
        if ((isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3"))) {
            echo "<div class=\"alert alert-success col-lg-6\" role=\"alert\">Your Password is changed successfully.</div>";
        }
        // line 421
        echo "                                              <form class=\"form-horizontal col-lg-12\" role=\"form\" method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_profile_change_password", array("indexNum" => (isset($context["indexNum"]) ? $context["indexNum"] : $this->getContext($context, "indexNum")))), "html", null, true);
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
        // line 481
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- disableing options in #department select -->
    <script>
       \$(document).ready(function(){
           //\$(\"p:not(:contains('1'))\")
           \$(\"#department option:not(:contains('ADMIN'))\").attr(\"disabled\",\"disabled\");
        });
    </script>
    
    <!-- nice scroll -->
    <script src=\"";
        // line 493
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!--custome script for all page-->
    <script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>


  </body>
</html>
";
        
        $__internal_7fa61475233aa098cee077afb6a7ef8069863a1d1fd61f453101dfca70380290->leave($__internal_7fa61475233aa098cee077afb6a7ef8069863a1d1fd61f453101dfca70380290_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:viewUserProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  787 => 497,  781 => 494,  777 => 493,  763 => 482,  759 => 481,  695 => 421,  690 => 420,  685 => 419,  681 => 418,  676 => 415,  672 => 413,  668 => 411,  666 => 410,  641 => 387,  637 => 385,  631 => 384,  627 => 382,  621 => 381,  617 => 379,  611 => 378,  607 => 376,  601 => 375,  597 => 373,  591 => 372,  587 => 370,  581 => 369,  577 => 367,  571 => 366,  567 => 364,  561 => 363,  557 => 361,  551 => 360,  547 => 358,  541 => 357,  537 => 355,  531 => 354,  521 => 346,  512 => 340,  503 => 334,  494 => 328,  486 => 324,  481 => 323,  477 => 322,  472 => 319,  468 => 317,  464 => 315,  462 => 314,  446 => 300,  442 => 298,  437 => 296,  433 => 295,  429 => 294,  421 => 289,  413 => 284,  405 => 279,  397 => 274,  389 => 269,  381 => 264,  364 => 250,  356 => 244,  352 => 242,  347 => 241,  334 => 230,  330 => 228,  325 => 227,  317 => 221,  313 => 219,  308 => 218,  299 => 211,  295 => 209,  290 => 208,  272 => 192,  267 => 190,  263 => 189,  259 => 188,  255 => 187,  199 => 134,  195 => 133,  191 => 132,  175 => 119,  165 => 112,  141 => 91,  129 => 82,  124 => 80,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
