<?php

/* GPABundle:StudentDashboard:compareGPA.html.twig */
class __TwigTemplate_e2b3c85a2f65ba65b4c1c40d38074c95376364b23ceaac65ce14d531431e5bfc extends Twig_Template
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
        $__internal_00118e03ba921069306eae9e56c9be737a64db0459261fda5ccb5f8a78fa7ba2 = $this->env->getExtension("native_profiler");
        $__internal_00118e03ba921069306eae9e56c9be737a64db0459261fda5ccb5f8a78fa7ba2->enter($__internal_00118e03ba921069306eae9e56c9be737a64db0459261fda5ccb5f8a78fa7ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:StudentDashboard:compareGPA.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"Student Dashboard in GPA v1.0\">
    <meta name=\"author\" content=\"MnS | Web Solutions\">
    <link rel=\"shortcut icon\" href=\"img/favicon.png\">

    <title>Student | Dashboard </title>

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
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/jquery-ui-1.10.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
    <style>

            .siriButton1:disabled { border-color: rgb(0, 153, 255); background-color: rgb(0, 153, 255);}
            .siriButton2:disabled { border-color: rgb(204, 102, 0); background-color: rgb(204, 102, 0) ;}
        
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
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/chat-avatar2.jpg"), "html", null, true);
        echo "\">
                            </span>
                            <span class=\"username\"><strong>";
        // line 88
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
        // line 97
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
                  <li class=\"active\">
                      <a class=\"\" href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("student_dashboard");
        echo "\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
     
                  <li>
                      <a class=\"\" href=\"";
        // line 125
        echo $this->env->getExtension('routing')->getPath("student_profile");
        echo "\">
                          <i class=\"icon_profile\"></i>
                          <span>Profile</span>
                      </a>
                  </li>
                  <li>                     
                      <a class=\"\" href=\"";
        // line 131
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
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("student_gpa_analysis");
        echo "\">GPA Analysis</a></li>                          
                          <li><a class=\"\" href=\"\">Compare</a></li>
                      </ul>
                  </li>
                  
                  <li>
                      <a class=\"\" href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("student_predict_gpa");
        echo "\">
                          <i class=\"icon_datareport\"></i>
                          <span>GPA Prediction</span>
                          ";
        // line 156
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
              <!--overview start-->
                <div class=\"row\">
                    <div class=\"col-lg-11\">
                            <h3 class=\"page-header\"><i class=\"fa fa-table\"></i> Compare GPA</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
                                    <li><i class=\"fa fa-table\"></i>Performance Analysis</li>
                                    <li><i class=\"fa fa-table\"></i>Compare GPA</li>\t
                            </ol>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-11\">\t
                        <div class=\"panel panel-default col-lg-12\"> 
                            
                            <div class=\"row col-lg-12\" style=\"margin-left: 0px;\">
                                <form class=\"form-horizontal col-lg-12\" method=\"POST\" action=\"";
        // line 187
        echo $this->env->getExtension('routing')->getPath("student_gpa_compare");
        echo "\" style=\"padding-bottom: 20px;\">
                                    <h1> Student Comparison</h1>

                                    <div class=\"form-group\">
                                        <label class=\"control-label col-lg-2\">Student ID</label>
                                        <div class=\"col-lg-2\">
                                            ";
        // line 193
        if (((isset($context["student_id"]) ? $context["student_id"] : $this->getContext($context, "student_id")) != null)) {
            // line 194
            echo "                                                <input type=\"text\" class=\"\" id=\"student_id\"  name=\"student_id\" value='";
            echo twig_escape_filter($this->env, (isset($context["student_id"]) ? $context["student_id"] : $this->getContext($context, "student_id")), "html", null, true);
            echo "' required>
                                            ";
        } else {
            // line 196
            echo "                                                <input type=\"text\" class=\"\" id=\"student_id\"  name=\"student_id\" value='";
            echo twig_escape_filter($this->env, (isset($context["student_id"]) ? $context["student_id"] : $this->getContext($context, "student_id")), "html", null, true);
            echo "' required>
                                            ";
        }
        // line 198
        echo "                                        </div>
                                        <div class=\"col-lg-1\">
                                            <button type=\"submit\" class=\"btn btn-primary\" id=\"searchButton\" name=\"searchButton\" style=\"margin-top:0px;\" disabled>Search</button>
                                        </div>
                                        <div class=\"col-lg-6\">
                                            <span id=\"msgNoUser\" class=\"alert alert-warning col-lg-8 text-center\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\">This Student ID is not in the system!!</span>
                                            <span id=\"msgInvalidID\" class=\"alert alert-warning col-lg-8 text-center\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\">Not a valid Student ID!!</span>
                                        </div>

                                    </div>
                                     <div class=\"form-group\">
                                         <div class=\"col-lg-7\">
                                        <label class=\"col-lg-2 control-label\" style=\"text-align: left;\">Name:</label><div  id=\"labelName\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                                        <label class=\"col-lg-2 control-label\" style=\"text-align: left;\">Department:</label><div id=\"labelDepartment\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                                        <label class=\"col-lg-2 control-label\" style=\"text-align: left;\">Email:</label><div id=\"labelEmail\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                                         </div>
                                         <div><button class=\"btn btn-lg siriButton1\" style=\"margin-bottom: 10px;\" disabled></button> YOU</div>
                                        <div><button class=\"btn btn-lg siriButton2\" disabled></button> FRIEND</div>
                                    </div>
                                
                                </form>
                            </div>
                            
                            ";
        // line 221
        if (((isset($context["sgpaData"]) ? $context["sgpaData"] : $this->getContext($context, "sgpaData")) != null)) {
            // line 222
            echo "                            <div class=\"row col-lg-12\" style=\"margin-left: 0px;\">
                                <div class=\"panel col-lg-6\" style=\"margin-top:30px;margin-bottom: 0px;\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">SGPA Curve</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <canvas id=\"SGPAChart\" width=\"450\" height=\"200\"></canvas>
                                    </div>
                                </div>

                                <div class=\"panel col-lg-6\" style=\"margin-top:30px;margin-bottom: 0px;\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">GPA Curve</h3>
                                    </div>
                                    <div class=\"panel-body\">
                                        <canvas id=\"GPAChart\" width=\"450\" height=\"200\"></canvas>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 242
        echo "                            
                            ";
        // line 243
        if (($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 0, array(), "array") != null)) {
            // line 244
            echo "                            <div class=\"row panel col-lg-12\" style=\"margin-left: 0px;margin-bottom: 0px;\">
                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 1 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 259
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 0, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 260
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 261
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 262
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 263
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 267
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 1 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 287
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["friendSemResults"]) ? $context["friendSemResults"] : $this->getContext($context, "friendSemResults")), 0, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 288
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 289
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 290
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 291
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 295
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 302
        echo "                                                        
                            ";
        // line 303
        if (($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 1, array(), "array") != null)) {
            // line 304
            echo "                            <div class=\"row panel col-lg-12\" style=\"margin-left: 0px;margin-bottom: 0px;\">
                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 2 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 319
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 1, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 320
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 321
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 322
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 323
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 327
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 2 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 347
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["friendSemResults"]) ? $context["friendSemResults"] : $this->getContext($context, "friendSemResults")), 1, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 348
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 349
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 350
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 351
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 355
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 361
        echo "                         
                                                        
                            ";
        // line 363
        if (($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 2, array(), "array") != null)) {
            // line 364
            echo "                            <div class=\"row panel col-lg-12\" style=\"margin-left: 0px;margin-bottom: 0px;\">
                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 3 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 379
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 2, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 380
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 381
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 382
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 383
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 3 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 407
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["friendSemResults"]) ? $context["friendSemResults"] : $this->getContext($context, "friendSemResults")), 2, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 408
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 409
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 410
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 411
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 415
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 422
        echo "                                                        
                            ";
        // line 423
        if (($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 3, array(), "array") != null)) {
            // line 424
            echo "                            <div class=\"row panel col-lg-12\" style=\"margin-left: 0px;margin-bottom: 0px;\">
                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 4 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 439
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 3, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 440
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 441
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 442
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 443
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 447
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 4 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 467
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["friendSemResults"]) ? $context["friendSemResults"] : $this->getContext($context, "friendSemResults")), 3, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 468
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 469
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 470
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 471
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 475
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 481
        echo "}
                                
                            ";
        // line 483
        if (($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 4, array(), "array") != null)) {
            // line 484
            echo "                            <div class=\"row panel col-lg-12\" style=\"margin-left: 0px;margin-bottom: 0px;\">
                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 5 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 499
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 4, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 500
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 501
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 502
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 503
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 507
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 5 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 527
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["friendSemResults"]) ? $context["friendSemResults"] : $this->getContext($context, "friendSemResults")), 4, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 528
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 529
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 530
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 531
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 535
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 541
        echo "                           
                                                        
                            ";
        // line 543
        if (($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 5, array(), "array") != null)) {
            // line 544
            echo "                            <div class=\"row panel col-lg-12\" style=\"margin-left: 0px;margin-bottom: 0px;\">
                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 6 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 559
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 5, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 560
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 561
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 562
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 563
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 567
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 6 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 587
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["friendSemResults"]) ? $context["friendSemResults"] : $this->getContext($context, "friendSemResults")), 5, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 588
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 589
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 590
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 591
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 595
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 601
        echo "                         
                                                        
                            ";
        // line 603
        if (($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 6, array(), "array") != null)) {
            // line 604
            echo "                            <div class=\"row panel col-lg-12\" style=\"margin-left: 0px;margin-bottom: 0px;\">
                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 7 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 619
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 6, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 620
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 621
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 622
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 623
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 627
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 7 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 647
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["friendSemResults"]) ? $context["friendSemResults"] : $this->getContext($context, "friendSemResults")), 6, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 648
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 649
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 650
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 651
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 655
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 662
        echo "                                                        
                            ";
        // line 663
        if (($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 7, array(), "array") != null)) {
            echo " 
                            <div class=\"row panel col-lg-12\" style=\"margin-left: 0px;margin-bottom: 0px;\">
                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 8 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 679
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["mySemResults"]) ? $context["mySemResults"] : $this->getContext($context, "mySemResults")), 7, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 680
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 681
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 682
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 683
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 687
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading col-lg-12\">
                                        <div class=\"col-lg-4\"><i class=\"fa fa-square red\"></i><strong>Semester 8 </strong></div>
                                    </div>
                                    <div class=\"panel-body\" style=\"padding-bottom: 0px; padding-top: 0px;\">
                                        <table class=\"table bootstrap-datatable table-condensed col-lg-11\" style=\"margin-bottom: 0px;\">
                                            <thead>
                                                <tr class=\"\">
                                                    <th class=\"col-lg-2\">Code</th>
                                                    <th class=\"col-lg-5\">Title</th>
                                                    <th class=\"col-lg-1 text-center\">Grade</th>
                                                </tr>
                                            </thead>   
                                            <tbody>
                                                ";
            // line 707
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["friendSemResults"]) ? $context["friendSemResults"] : $this->getContext($context, "friendSemResults")), 7, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 708
                echo "                                                    <tr>
                                                        <td><strong>";
                // line 709
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 710
                echo "                                                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 711
                echo "                                                        <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 

                                                    </tr>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 715
            echo "
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 721
        echo "                            
                                                       
                        </div>
                    </div>

                </div>


          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->

    

    
<!-- javascripts -->
    <script src=\"";
        // line 739
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 740
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"";
        // line 741
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    
<!-- bootstrap -->
    <script src=\"";
        // line 744
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- chart.js -->
    <script src=\"";
        // line 747
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/Chart.js"), "html", null, true);
        echo "\"></script>

<!-- check student availability  -->
    <script>
        \$(document).ready(function(){
            \$(\"#student_id\").on('keyup',function(){
                var student_id= \$('#student_id').val();
                if (student_id.length === 7){
                    document.getElementById('msgInvalidID').style.display = 'none';
                    \$.ajax({
                        type: 'GET',
                        url: '";
        // line 758
        echo $this->env->getExtension('routing')->getPath("admin_check_student_availability");
        echo "',
                        data: {'indexNum': student_id},
                        dataType: 'json',
                        success: function (data){
                           console.log(\"Returned Data: \"+data+\"\\n\");
                            if( data.status === undefined){
                                //\$(\"td:contains('null')\").text(\"NA\");
                                document.getElementById('msgNoUser').style.display = 'none';
                                \$('#labelName').text(data.first_name+\" \"+data.last_name);
                                \$('#labelDepartment').text(data.department);
                                \$('#labelEmail').text(data.email);
                                \$(\"#searchButton\").prop(\"disabled\",false);
                            }
                            else if( data.status === 1){ //DB query returned a null set
                                document.getElementById('msgNoUser').style.display = '';
                                \$('#labelName').text('NA');
                                \$('#labelDepartment').text('NA');
                                \$('#labelEmail').text('NA');
                                \$(\"#searchButton\").prop(\"disabled\",true);
                            }
                            else{ //when data.status ==2  // DB query failure
                                alert(\"User Availability Ajax call -> DB query execution fail\");
                                \$(\"#searchButton\").prop(\"disabled\",true);
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
                    \$(\"#searchButton\").prop(\"disabled\",true);
                }

            });
        });
    </script>
    
    <!-- if the user is already submitted by the form check student availability  -->
    <script>
        \$(document).ready(function(){
            var student_id= \$('#student_id').val();
            if (student_id.length === 7){
                document.getElementById('msgInvalidID').style.display = 'none';
                \$.ajax({
                    type: 'GET',
                    url: '";
        // line 807
        echo $this->env->getExtension('routing')->getPath("admin_check_student_availability");
        echo "',
                    data: {'indexNum': student_id},
                    dataType: 'json',
                    success: function (data){
                       console.log(\"Returned Data: \"+data+\"\\n\");
                        if( data.status === undefined){
                            //\$(\"td:contains('null')\").text(\"NA\");
                            document.getElementById('msgNoUser').style.display = 'none';
                            \$('#labelName').text(data.first_name+\" \"+data.last_name);
                            \$('#labelDepartment').text(data.department);
                            \$('#labelEmail').text(data.email);
                            \$(\"#searchButton\").prop(\"disabled\",false);
                        }
                        else if( data.status === 1){ //DB query returned a null set
                            document.getElementById('msgNoUser').style.display = '';
                            \$('#labelName').text('NA');
                            \$('#labelDepartment').text('NA');
                            \$('#labelEmail').text('NA');
                            \$(\"#searchButton\").prop(\"disabled\",true);
                        }
                        else{ //when data.status ==2  // DB query failure
                            alert(\"User Availability Ajax call -> DB query execution fail\");
                            \$(\"#searchButton\").prop(\"disabled\",true);
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert(\"Status: \" + textStatus); 
                        alert(\"Error: \" + errorThrown); 
                    }
                });
            }


        });
    </script>
    
    
 <!-- Drawing SGPA chart -->
 <script>

    var ctx = \$(\"#SGPAChart\").get(0).getContext(\"2d\");

    var sgpaData = JSON.parse('";
        // line 849
        echo twig_jsonencode_filter((isset($context["sgpaData"]) ? $context["sgpaData"] : $this->getContext($context, "sgpaData")));
        echo "');
    console.log(\"returned json:\");
    console.log(sgpaData);
    var sgpaChart = new Chart(ctx).Line( sgpaData,{bezierCurve: false});
    


    var ctx2 = \$(\"#GPAChart\").get(0).getContext(\"2d\");

    var gpaData = JSON.parse('";
        // line 858
        echo twig_jsonencode_filter((isset($context["gpaData"]) ? $context["gpaData"] : $this->getContext($context, "gpaData")));
        echo "');
    console.log(\"returned json:\");
    console.log(gpaData);
    var gpaChart = new Chart(ctx2).Line(gpaData,{bezierCurve: false});

 </script>


<!-- nice scroll -->
<script src=\"";
        // line 867
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 868
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--custome script for all page-->
<script src=\"";
        // line 871
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>


  </body>
</html>

";
        
        $__internal_00118e03ba921069306eae9e56c9be737a64db0459261fda5ccb5f8a78fa7ba2->leave($__internal_00118e03ba921069306eae9e56c9be737a64db0459261fda5ccb5f8a78fa7ba2_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:StudentDashboard:compareGPA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1357 => 871,  1351 => 868,  1347 => 867,  1335 => 858,  1323 => 849,  1278 => 807,  1226 => 758,  1212 => 747,  1206 => 744,  1200 => 741,  1196 => 740,  1192 => 739,  1172 => 721,  1163 => 715,  1151 => 711,  1147 => 710,  1144 => 709,  1141 => 708,  1137 => 707,  1115 => 687,  1103 => 683,  1099 => 682,  1096 => 681,  1093 => 680,  1089 => 679,  1070 => 663,  1067 => 662,  1058 => 655,  1046 => 651,  1042 => 650,  1039 => 649,  1036 => 648,  1032 => 647,  1010 => 627,  998 => 623,  994 => 622,  991 => 621,  988 => 620,  984 => 619,  967 => 604,  965 => 603,  961 => 601,  952 => 595,  940 => 591,  936 => 590,  933 => 589,  930 => 588,  926 => 587,  904 => 567,  892 => 563,  888 => 562,  885 => 561,  882 => 560,  878 => 559,  861 => 544,  859 => 543,  855 => 541,  846 => 535,  834 => 531,  830 => 530,  827 => 529,  824 => 528,  820 => 527,  798 => 507,  786 => 503,  782 => 502,  779 => 501,  776 => 500,  772 => 499,  755 => 484,  753 => 483,  749 => 481,  740 => 475,  728 => 471,  724 => 470,  721 => 469,  718 => 468,  714 => 467,  692 => 447,  680 => 443,  676 => 442,  673 => 441,  670 => 440,  666 => 439,  649 => 424,  647 => 423,  644 => 422,  635 => 415,  623 => 411,  619 => 410,  616 => 409,  613 => 408,  609 => 407,  587 => 387,  575 => 383,  571 => 382,  568 => 381,  565 => 380,  561 => 379,  544 => 364,  542 => 363,  538 => 361,  529 => 355,  517 => 351,  513 => 350,  510 => 349,  507 => 348,  503 => 347,  481 => 327,  469 => 323,  465 => 322,  462 => 321,  459 => 320,  455 => 319,  438 => 304,  436 => 303,  433 => 302,  424 => 295,  412 => 291,  408 => 290,  405 => 289,  402 => 288,  398 => 287,  376 => 267,  364 => 263,  360 => 262,  357 => 261,  354 => 260,  350 => 259,  333 => 244,  331 => 243,  328 => 242,  306 => 222,  304 => 221,  279 => 198,  273 => 196,  267 => 194,  265 => 193,  256 => 187,  223 => 156,  217 => 152,  208 => 146,  190 => 131,  181 => 125,  171 => 118,  147 => 97,  135 => 88,  130 => 86,  67 => 26,  63 => 25,  59 => 24,  53 => 21,  49 => 20,  42 => 16,  36 => 13,  22 => 1,);
    }
}
