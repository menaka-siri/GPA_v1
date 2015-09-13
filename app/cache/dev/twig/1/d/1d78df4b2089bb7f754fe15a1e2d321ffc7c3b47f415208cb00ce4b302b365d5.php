<?php

/* GPABundle:StudentDashboard:viewGrades.html.twig */
class __TwigTemplate_1d78df4b2089bb7f754fe15a1e2d321ffc7c3b47f415208cb00ce4b302b365d5 extends Twig_Template
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
        $__internal_bc840a97fb4ec476d9dfd8e0b421968e17d4acbd664701f31189842f97d92d72 = $this->env->getExtension("native_profiler");
        $__internal_bc840a97fb4ec476d9dfd8e0b421968e17d4acbd664701f31189842f97d92d72->enter($__internal_bc840a97fb4ec476d9dfd8e0b421968e17d4acbd664701f31189842f97d92d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:StudentDashboard:viewGrades.html.twig"));

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
                  <li>
                      <a class=\"\" href=\"";
        // line 111
        echo $this->env->getExtension('routing')->getPath("student_dashboard");
        echo "\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
     
                  <li>
                      <a class=\"\" href=\"";
        // line 118
        echo $this->env->getExtension('routing')->getPath("student_profile");
        echo "\">
                          <i class=\"icon_profile\"></i>
                          <span>Profile</span>
                      </a>
                  </li>
                  <li class=\"active\">                     
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
        echo "\" >
                          <i class=\"icon_datareport\"></i>
                          <span>GPA Prediction</span>
                      </a>
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
                    <div class=\"col-lg-9\">
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Course Grades</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
                                    <li><i class=\"fa fa-list\"></i>Grades</li>\t\t\t\t\t\t  \t
                            </ol>
                    </div>
                </div>      <!-- row end -->

               ";
        // line 172
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 0, array(), "array") != null)) {
            // line 173
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 1 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits &nbsp;= &nbsp;";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA &nbsp;= &nbsp; ";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 0, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits &nbsp;= &nbsp; ";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 0, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>GPA &nbsp;= &nbsp; ";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 0, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
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
            // line 195
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 0, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 196
                echo "                                            <tr>
                                                <td><strong>";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 198
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 199
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 200
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 202
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 213
        echo "
               ";
        // line 214
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 1, array(), "array") != null)) {
            // line 215
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 2 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits &nbsp;= &nbsp;";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 1, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA &nbsp;= &nbsp; ";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 1, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits &nbsp;= &nbsp; ";
            // line 222
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 1, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>GPA &nbsp;= &nbsp; ";
            // line 223
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 1, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
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
            // line 237
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 1, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 238
                echo "                                            <tr>
                                                <td><strong>";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 240
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 241
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 242
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 243
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 244
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 255
        echo "                
               ";
        // line 256
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 2, array(), "array") != null)) {
            // line 257
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 3 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits &nbsp;= &nbsp;";
            // line 262
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 2, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA &nbsp;= &nbsp; ";
            // line 263
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 2, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits &nbsp;= &nbsp; ";
            // line 264
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 2, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>GPA &nbsp;= &nbsp; ";
            // line 265
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 2, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
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
            // line 279
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 2, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 280
                echo "                                            <tr>
                                                <td><strong>";
                // line 281
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 282
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 283
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 284
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 285
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 286
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 297
        echo "                
               ";
        // line 298
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 3, array(), "array") != null)) {
            // line 299
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 4 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits &nbsp;= &nbsp;";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 3, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA &nbsp;= &nbsp; ";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 3, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits &nbsp;= &nbsp; ";
            // line 306
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 3, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>GPA &nbsp;= &nbsp; ";
            // line 307
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 3, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
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
            // line 321
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 3, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 322
                echo "                                            <tr>
                                                <td><strong>";
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 324
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 325
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 326
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 327
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 328
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 330
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 339
        echo "               
                ";
        // line 340
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 4, array(), "array") != null)) {
            // line 341
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 5 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits &nbsp;= &nbsp;";
            // line 346
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 4, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA &nbsp;= &nbsp; ";
            // line 347
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 4, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits &nbsp;= &nbsp; ";
            // line 348
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 4, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>GPA &nbsp;= &nbsp; ";
            // line 349
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 4, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
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
            // line 363
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 4, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 364
                echo "                                            <tr>
                                                <td><strong>";
                // line 365
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 366
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 367
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 368
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 369
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 370
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 372
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 381
        echo "                
                ";
        // line 382
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 5, array(), "array") != null)) {
            // line 383
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 6 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits &nbsp;= &nbsp;";
            // line 388
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 5, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA &nbsp;= &nbsp; ";
            // line 389
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 5, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>   
                                <div class=\"col-lg-3\"><strong>Total Credits &nbsp;= &nbsp; ";
            // line 390
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 5, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>GPA &nbsp;= &nbsp; ";
            // line 391
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 5, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
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
            // line 405
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 5, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 406
                echo "                                            <tr>
                                                <td><strong>";
                // line 407
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 408
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 409
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 410
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 411
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 412
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 414
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 423
        echo "                
                ";
        // line 424
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 6, array(), "array") != null)) {
            // line 425
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 7 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits &nbsp;= &nbsp;";
            // line 430
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 6, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA &nbsp;= &nbsp; ";
            // line 431
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 6, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits &nbsp;= &nbsp; ";
            // line 432
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 6, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>GPA &nbsp;= &nbsp; ";
            // line 433
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 6, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
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
            // line 447
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 6, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 448
                echo "                                            <tr>
                                                <td><strong>";
                // line 449
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 450
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 451
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 452
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 453
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 454
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 456
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 465
        echo "                
                ";
        // line 466
        if (($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 7, array(), "array") != null)) {
            // line 467
            echo "                <div class=\"row\">
                    <div class=\"col-lg-9 col-md-12\">\t
                        <div class=\"panel panel-default\">
                            <div class=\"panel-heading col-lg-12\">
                                <div class=\"col-lg-2\"><i class=\"fa fa-square red\"></i><strong>Semester 8 </strong></div>
                                <div class=\"col-lg-3\"><strong>Semester Credits &nbsp;= &nbsp;";
            // line 472
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 7, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>SGPA &nbsp;= &nbsp; ";
            // line 473
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 7, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-3\"><strong>Total Credits &nbsp;= &nbsp; ";
            // line 474
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 7, array(), "array"), 1, array(), "array"), "html", null, true);
            echo "</strong></div>
                                <div class=\"col-lg-2\"><strong>GPA &nbsp;= &nbsp; ";
            // line 475
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 7, array(), "array"), 0, array(), "array"), "html", null, true);
            echo "</strong></div>
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
            // line 489
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["semResults"]) ? $context["semResults"] : $this->getContext($context, "semResults")), 7, array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 490
                echo "                                            <tr>
                                                <td><strong>";
                // line 491
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "id", array()), "html", null, true);
                echo "</strong></td>  ";
                // line 492
                echo "                                                <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "title", array()), "html", null, true);
                echo "</td>               ";
                // line 493
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "credits", array()), "html", null, true);
                echo "</td>               ";
                // line 494
                echo "                                                <td class=\"text-center\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "grade", array()), "html", null, true);
                echo "</td>               ";
                echo " 
                                                <td class=\"text-center\">";
                // line 495
                echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "class_best", array()), "html", null, true);
                echo "</td>               ";
                // line 496
                echo "                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 498
            echo "                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>\t

                    </div>
                </div>      <!-- table div row end -->
                ";
        }
        // line 507
        echo "                <!-- statics end -->

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    

<!-- javascripts -->
<script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Progressbar  -->
<script src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/progressbar.js"), "html", null, true);
        echo "\"></script>

<!-- nice scroll -->
<script src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--custome script for all page-->
<script src=\"";
        // line 529
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>


  </body>
</html>

";
        
        $__internal_bc840a97fb4ec476d9dfd8e0b421968e17d4acbd664701f31189842f97d92d72->leave($__internal_bc840a97fb4ec476d9dfd8e0b421968e17d4acbd664701f31189842f97d92d72_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:StudentDashboard:viewGrades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  962 => 529,  956 => 526,  952 => 525,  946 => 522,  940 => 519,  936 => 518,  923 => 507,  912 => 498,  905 => 496,  902 => 495,  896 => 494,  892 => 493,  888 => 492,  885 => 491,  882 => 490,  878 => 489,  861 => 475,  857 => 474,  853 => 473,  849 => 472,  842 => 467,  840 => 466,  837 => 465,  826 => 456,  819 => 454,  816 => 453,  810 => 452,  806 => 451,  802 => 450,  799 => 449,  796 => 448,  792 => 447,  775 => 433,  771 => 432,  767 => 431,  763 => 430,  756 => 425,  754 => 424,  751 => 423,  740 => 414,  733 => 412,  730 => 411,  724 => 410,  720 => 409,  716 => 408,  713 => 407,  710 => 406,  706 => 405,  689 => 391,  685 => 390,  681 => 389,  677 => 388,  670 => 383,  668 => 382,  665 => 381,  654 => 372,  647 => 370,  644 => 369,  638 => 368,  634 => 367,  630 => 366,  627 => 365,  624 => 364,  620 => 363,  603 => 349,  599 => 348,  595 => 347,  591 => 346,  584 => 341,  582 => 340,  579 => 339,  568 => 330,  561 => 328,  558 => 327,  552 => 326,  548 => 325,  544 => 324,  541 => 323,  538 => 322,  534 => 321,  517 => 307,  513 => 306,  509 => 305,  505 => 304,  498 => 299,  496 => 298,  493 => 297,  482 => 288,  475 => 286,  472 => 285,  466 => 284,  462 => 283,  458 => 282,  455 => 281,  452 => 280,  448 => 279,  431 => 265,  427 => 264,  423 => 263,  419 => 262,  412 => 257,  410 => 256,  407 => 255,  396 => 246,  389 => 244,  386 => 243,  380 => 242,  376 => 241,  372 => 240,  369 => 239,  366 => 238,  362 => 237,  345 => 223,  341 => 222,  337 => 221,  333 => 220,  326 => 215,  324 => 214,  321 => 213,  310 => 204,  303 => 202,  300 => 201,  294 => 200,  290 => 199,  286 => 198,  283 => 197,  280 => 196,  276 => 195,  259 => 181,  255 => 180,  251 => 179,  247 => 178,  240 => 173,  238 => 172,  208 => 145,  198 => 137,  183 => 124,  174 => 118,  164 => 111,  140 => 90,  128 => 81,  123 => 79,  67 => 26,  63 => 25,  59 => 24,  53 => 21,  49 => 20,  42 => 16,  36 => 13,  22 => 1,);
    }
}
