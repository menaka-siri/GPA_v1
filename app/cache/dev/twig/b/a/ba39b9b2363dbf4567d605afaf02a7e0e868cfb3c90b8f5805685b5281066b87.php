<?php

/* GPABundle:AdminDashboard:viewStudentStats.html.twig */
class __TwigTemplate_ba39b9b2363dbf4567d605afaf02a7e0e868cfb3c90b8f5805685b5281066b87 extends Twig_Template
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
        $__internal_fff29721af3bb296fd74c56d369b0a75034f4bd8d879396f453cb88f91d967db = $this->env->getExtension("native_profiler");
        $__internal_fff29721af3bb296fd74c56d369b0a75034f4bd8d879396f453cb88f91d967db->enter($__internal_fff29721af3bb296fd74c56d369b0a75034f4bd8d879396f453cb88f91d967db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:viewStudentStats.html.twig"));

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
\t\t<div class=\"row\">
                    <div class=\"col-lg-9\">
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
        echo "                        </h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
                                    <li><i class=\"fa fa-user\"></i>Manage Users</li>
                                    <li><i class=\"fa fa-user\"></i>View Users</li>
                                    <li><i class=\"fa fa-user\"></i>View Statistics</li>\t\t\t\t\t\t  \t
                            </ol>
                    </div>
\t\t</div>

                ";
        // line 202
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 0, array(), "array") != null)) {
            // line 203
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 1 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA = </strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>GPA = </strong></div>
                            </div>
                            <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                    <thead>
                                        <tr class=\"\">
                                            <th class=\"col-lg-2\">Code</th>
                                            <th class=\"col-lg-5\">Title</th>
                                            <th class=\"col-lg-1 text-center\">Credits</th>
                                            <th class=\"col-lg-1 text-center\">Grade</th>
                                            <th class=\"col-lg-2 text-center\">Class Best</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        ";
            // line 225
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 0, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 226
                echo "                                            <tr>
                                                <td><strong>";
                // line 227
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 228
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 229
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 230
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 232
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 243
        echo "
               ";
        // line 244
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 1, array(), "array") != null)) {
            // line 245
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 2 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA = </strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>GPA = </strong></div>
                            </div>
                            <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                    <thead>
                                        <tr class=\"\">
                                            <th class=\"col-lg-2\">Code</th>
                                            <th class=\"col-lg-5\">Title</th>
                                            <th class=\"col-lg-1 text-center\">Credits</th>
                                            <th class=\"col-lg-1 text-center\">Grade</th>
                                            <th class=\"col-lg-2 text-center\">Class Best</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        ";
            // line 267
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 1, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 268
                echo "                                            <tr>
                                                <td><strong>";
                // line 269
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 270
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 271
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 272
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 273
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 274
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 285
        echo "                
               ";
        // line 286
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 2, array(), "array") != null)) {
            // line 287
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 3 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA = </strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>GPA = </strong></div>
                            </div>
                            <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                    <thead>
                                        <tr class=\"\">
                                            <th class=\"col-lg-2\">Code</th>
                                            <th class=\"col-lg-5\">Title</th>
                                            <th class=\"col-lg-1 text-center\">Credits</th>
                                            <th class=\"col-lg-1 text-center\">Grade</th>
                                            <th class=\"col-lg-2 text-center\">Class Best</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        ";
            // line 309
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 2, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 310
                echo "                                            <tr>
                                                <td><strong>";
                // line 311
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 312
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 313
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 314
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 315
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 316
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 318
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 327
        echo "                
               ";
        // line 328
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 3, array(), "array") != null)) {
            // line 329
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 4 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA = </strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>GPA = </strong></div>
                            </div>
                            <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                    <thead>
                                        <tr class=\"\">
                                            <th class=\"col-lg-2\">Code</th>
                                            <th class=\"col-lg-5\">Title</th>
                                            <th class=\"col-lg-1 text-center\">Credits</th>
                                            <th class=\"col-lg-1 text-center\">Grade</th>
                                            <th class=\"col-lg-2 text-center\">Class Best</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        ";
            // line 351
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 3, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 352
                echo "                                            <tr>
                                                <td><strong>";
                // line 353
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 354
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 355
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 356
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 357
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 358
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 360
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 369
        echo "               
                ";
        // line 370
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 4, array(), "array") != null)) {
            // line 371
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 5 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA = </strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>GPA = </strong></div>
                            </div>
                            <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                    <thead>
                                        <tr class=\"\">
                                            <th class=\"col-lg-2\">Code</th>
                                            <th class=\"col-lg-5\">Title</th>
                                            <th class=\"col-lg-1 text-center\">Credits</th>
                                            <th class=\"col-lg-1 text-center\">Grade</th>
                                            <th class=\"col-lg-2 text-center\">Class Best</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        ";
            // line 393
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 4, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 394
                echo "                                            <tr>
                                                <td><strong>";
                // line 395
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 396
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 397
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 398
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 399
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 400
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 402
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 411
        echo "                
                ";
        // line 412
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 5, array(), "array") != null)) {
            // line 413
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 6 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA = </strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>GPA = </strong></div>
                            </div>
                            <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                    <thead>
                                        <tr class=\"\">
                                            <th class=\"col-lg-2\">Code</th>
                                            <th class=\"col-lg-5\">Title</th>
                                            <th class=\"col-lg-1 text-center\">Credits</th>
                                            <th class=\"col-lg-1 text-center\">Grade</th>
                                            <th class=\"col-lg-2 text-center\">Class Best</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        ";
            // line 435
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 5, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 436
                echo "                                            <tr>
                                                <td><strong>";
                // line 437
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 438
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 439
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 440
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 441
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 442
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 444
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 453
        echo "                
                ";
        // line 454
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 6, array(), "array") != null)) {
            // line 455
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 7 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA = </strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>GPA = </strong></div>
                            </div>
                            <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                    <thead>
                                        <tr class=\"\">
                                            <th class=\"col-lg-2\">Code</th>
                                            <th class=\"col-lg-5\">Title</th>
                                            <th class=\"col-lg-1 text-center\">Credits</th>
                                            <th class=\"col-lg-1 text-center\">Grade</th>
                                            <th class=\"col-lg-2 text-center\">Class Best</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        ";
            // line 477
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 6, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 478
                echo "                                            <tr>
                                                <td><strong>";
                // line 479
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 480
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 481
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 482
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 483
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 484
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 486
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 495
        echo "                
                ";
        // line 496
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 7, array(), "array") != null)) {
            // line 497
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 8 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA = </strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits = </strong></div>
                                <div class=\"col-lg-2\"><strong>GPA = </strong></div>
                            </div>
                            <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                    <thead>
                                        <tr class=\"\">
                                            <th class=\"col-lg-2\">Code</th>
                                            <th class=\"col-lg-5\">Title</th>
                                            <th class=\"col-lg-1 text-center\">Credits</th>
                                            <th class=\"col-lg-1 text-center\">Grade</th>
                                            <th class=\"col-lg-2 text-center\">Class Best</th>
                                        </tr>
                                    </thead>   
                                    <tbody>
                                        ";
            // line 519
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 7, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 520
                echo "                                            <tr>
                                                <td><strong>";
                // line 521
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 522
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 523
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 524
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 525
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 526
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 528
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 537
        echo "                <!-- statics end -->       

              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
  
    <!-- javascripts -->
    <script src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 548
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
        // line 559
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!--custome script for all page-->
    <script src=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>


  </body>
</html>
";
        
        $__internal_fff29721af3bb296fd74c56d369b0a75034f4bd8d879396f453cb88f91d967db->leave($__internal_fff29721af3bb296fd74c56d369b0a75034f4bd8d879396f453cb88f91d967db_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:viewStudentStats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  913 => 563,  907 => 560,  903 => 559,  889 => 548,  885 => 547,  873 => 537,  862 => 528,  855 => 526,  852 => 525,  846 => 524,  842 => 523,  838 => 522,  835 => 521,  832 => 520,  828 => 519,  804 => 497,  802 => 496,  799 => 495,  788 => 486,  781 => 484,  778 => 483,  772 => 482,  768 => 481,  764 => 480,  761 => 479,  758 => 478,  754 => 477,  730 => 455,  728 => 454,  725 => 453,  714 => 444,  707 => 442,  704 => 441,  698 => 440,  694 => 439,  690 => 438,  687 => 437,  684 => 436,  680 => 435,  656 => 413,  654 => 412,  651 => 411,  640 => 402,  633 => 400,  630 => 399,  624 => 398,  620 => 397,  616 => 396,  613 => 395,  610 => 394,  606 => 393,  582 => 371,  580 => 370,  577 => 369,  566 => 360,  559 => 358,  556 => 357,  550 => 356,  546 => 355,  542 => 354,  539 => 353,  536 => 352,  532 => 351,  508 => 329,  506 => 328,  503 => 327,  492 => 318,  485 => 316,  482 => 315,  476 => 314,  472 => 313,  468 => 312,  465 => 311,  462 => 310,  458 => 309,  434 => 287,  432 => 286,  429 => 285,  418 => 276,  411 => 274,  408 => 273,  402 => 272,  398 => 271,  394 => 270,  391 => 269,  388 => 268,  384 => 267,  360 => 245,  358 => 244,  355 => 243,  344 => 234,  337 => 232,  334 => 231,  328 => 230,  324 => 229,  320 => 228,  317 => 227,  314 => 226,  310 => 225,  286 => 203,  284 => 202,  272 => 192,  267 => 190,  263 => 189,  259 => 188,  255 => 187,  199 => 134,  195 => 133,  191 => 132,  175 => 119,  165 => 112,  141 => 91,  129 => 82,  124 => 80,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
