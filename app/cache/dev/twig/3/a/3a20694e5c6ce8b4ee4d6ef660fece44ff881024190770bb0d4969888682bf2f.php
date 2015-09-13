<?php

/* GPABundle:StudentDashboard:index.html.twig */
class __TwigTemplate_3a20694e5c6ce8b4ee4d6ef660fece44ff881024190770bb0d4969888682bf2f extends Twig_Template
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
        $__internal_710ec8db80c2855b500cd4d83407cc1096076cd65e1a3b4225f00ebd78ed3cb0 = $this->env->getExtension("native_profiler");
        $__internal_710ec8db80c2855b500cd4d83407cc1096076cd65e1a3b4225f00ebd78ed3cb0->enter($__internal_710ec8db80c2855b500cd4d83407cc1096076cd65e1a3b4225f00ebd78ed3cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:StudentDashboard:index.html.twig"));

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
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />    

    <!-- Custom styles -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 25
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
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/chat-avatar2.jpg"), "html", null, true);
        echo "\">
                            </span>
                            <span class=\"username\"><strong>";
        // line 80
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
        // line 89
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
        // line 110
        echo $this->env->getExtension('routing')->getPath("student_dashboard");
        echo "\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
     
                  <li>
                      <a class=\"\" href=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("student_profile");
        echo "\">
                          <i class=\"icon_profile\"></i>
                          <span>Profile</span>
                      </a>
                  </li>
                  <li>                     
                      <a class=\"\" href=\"";
        // line 123
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
        // line 138
        echo $this->env->getExtension('routing')->getPath("student_gpa_analysis");
        echo "\">GPA Analysis</a></li>                          
                          <li><a class=\"\" href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("student_gpa_compare");
        echo "\">Compare</a></li>
                      </ul>
                  </li>
                  
                  <li>
                      <a class=\"\" href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("student_predict_gpa");
        echo "\">
                          <i class=\"icon_datareport\"></i>
                          <span>GPA Prediction</span>
                          ";
        // line 148
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
\t\t\t  <div class=\"row\">
\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t<h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Dashboard</h3>
\t\t\t\t\t<ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t<li><i class=\"fa fa-laptop\"></i>Dashboard</li>\t\t\t\t\t\t  \t
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>
              
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"info-box green-bg\">
                                <i class=\"fa fa-chevron-circle-right\"></i>
                                <div class=\"count\">
                                    ";
        // line 177
        if (($this->getAttribute((isset($context["gpa"]) ? $context["gpa"] : $this->getContext($context, "gpa")), 0, array(), "array") != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["gpa"]) ? $context["gpa"] : $this->getContext($context, "gpa")), 0, array(), "array"), "html", null, true);
            echo "
                                    ";
        } else {
            // line 178
            echo " 0
                                    ";
        }
        // line 180
        echo "                                </div>
                                <div class=\"title\">Overall GPA</div>\t\t\t\t\t\t
                        </div><!--/.info-box-->\t\t\t
                </div><!--/.col-->

                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"info-box green-bg\">
                                <i class=\"fa fa-chevron-circle-right\"></i>
                                
                                <div class=\"count\">
                                    ";
        // line 190
        if (((isset($context["currentSGPA"]) ? $context["currentSGPA"] : $this->getContext($context, "currentSGPA")) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentSGPA"]) ? $context["currentSGPA"] : $this->getContext($context, "currentSGPA")), 0, array(), "array"), "html", null, true);
            echo "
                                    ";
        } else {
            // line 191
            echo " 0
                                    ";
        }
        // line 193
        echo "                                </div>
                                <div class=\"title\">Current SGPA <br>Semester &nbsp;&nbsp;&nbsp;";
        // line 194
        echo twig_escape_filter($this->env, (isset($context["currentSem"]) ? $context["currentSem"] : $this->getContext($context, "currentSem")), "html", null, true);
        echo "</div>\t\t\t\t\t\t
                        </div><!--/.info-box-->\t\t\t
                </div><!--/.col-->\t

                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"info-box red-bg\">
                                <i class=\"fa fa-chevron-circle-right\"></i>
                                <div class=\"count\">";
        // line 201
        echo twig_escape_filter($this->env, (isset($context["totalCredits"]) ? $context["totalCredits"] : $this->getContext($context, "totalCredits")), "html", null, true);
        echo "</div>
                                <div class=\"title\">Total Credits</div>\t\t\t\t\t\t
                        </div><!--/.info-box-->\t\t\t
                </div><!--/.col-->

            </div><!--/.row-->
\t\t 
           ";
        // line 208
        echo " ";
        // line 209
        echo "\t
\t\t\t<div class=\"row\">
               \t
\t\t\t\t<div class=\"col-lg-9 col-md-12\">\t
\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t<i class=\"fa fa-square\"></i><strong>Semester Performance Analysis</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"panel-body\" style=\"padding-bottom: 0px;\">
\t\t\t\t\t\t\t<table class=\"table bootstrap-datatable\" style=\"margin-bottom: 0px;\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<th>Semester #</th>
\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\">SGPA</th>
                                                                                <th class=\"text-center\">Cumulative GPA</th>
\t\t\t\t\t\t\t\t\t\t<th>Performance (SGPA)</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>   
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><strong>1</strong></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 232
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 0, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
                                                                                <td class=\"text-center\">";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 0, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress thin\" id=\"progressbar1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" id=\"sem1bar\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:\" ></div>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 239
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">73%</span>   \t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><strong>2</strong></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 246
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 1, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
                                                                                <td class=\"text-center\">";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 1, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress thin\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" id=\"sem2bar\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: \" ></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">57%</span>   \t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><strong>3</strong></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 2, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
                                                                                <td class=\"text-center\">";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 2, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress thin\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar progress-bar-warning\" id=\"sem3bar\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:\" ></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">93%</span>   \t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><strong>4</strong></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 3, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
                                                                                <td class=\"text-center\">";
        // line 271
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 3, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress thin\">
\t\t\t\t\t\t\t\t\t\t\t  \t<div class=\"progress-bar progress-bar-warning\" id=\"sem4bar\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:\" ></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">20%</span>   \t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><strong>5</strong></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 4, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
                                                                                <td class=\"text-center\">";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 4, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress thin\">
\t\t\t\t\t\t\t\t\t\t\t  \t<div class=\"progress-bar progress-bar-warning\" id=\"sem5bar\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:\" ></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">20%</span>   \t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><strong>6</strong></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 294
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 5, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
                                                                                <td class=\"text-center\">";
        // line 295
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 5, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress thin\">
\t\t\t\t\t\t\t\t\t\t\t  \t<div class=\"progress-bar progress-bar-warning\" id=\"sem6bar\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:\" ></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">20%</span>   \t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><strong>7</strong></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 306
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 6, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
                                                                                <td class=\"text-center\">";
        // line 307
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 6, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress thin\">
\t\t\t\t\t\t\t\t\t\t\t  \t<div class=\"progress-bar progress-bar-warning\" id=\"sem7bar\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:\" ></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">20%</span>   \t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<td><strong>8</strong></td>
\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">";
        // line 318
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 7, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
                                                                                <td class=\"text-center\">";
        // line 319
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["cumulativeStats"]) ? $context["cumulativeStats"] : $this->getContext($context, "cumulativeStats")), 7, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress thin\">
\t\t\t\t\t\t\t\t\t\t\t  \t<div class=\"progress-bar progress-bar-warning\" id=\"sem8bar\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:\" ></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sr-only\">20%</span>   \t
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t
\t\t\t\t\t</div>\t

\t\t\t\t</div>
\t
                        </div>

                <!-- statics end -->

          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->


  
    <!-- javascripts -->
    <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 351
        echo "    
    <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Progressbar  -->
    <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/progressbar.js"), "html", null, true);
        echo "\"></script>
    
    <!-- bootstrap -->
    <script src=\"";
        // line 359
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- progresbar values-->
    <script>
        \$(document).ready(function () {
            //var text = \$('.Gadget').find('input[name=\"Percentage\"]').val();
            var sem1 = '";
        // line 365
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 0, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "'/4.2 * 100;
            \$( \"#sem1bar\" ).css(\"width\", sem1+\"%\");
            
            var sem2 = '";
        // line 368
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 1, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "'/4.2 * 100;
            \$( \"#sem2bar\" ).css(\"width\", sem2+\"%\");
            
            var sem3 = '";
        // line 371
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 2, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "'/4.2 * 100;
            \$( \"#sem3bar\" ).css(\"width\", sem3+\"%\");
            
            var sem4 = '";
        // line 374
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 3, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "'/4.2 * 100;
            \$( \"#sem4bar\" ).css(\"width\", sem4+\"%\");
            
            var sem5 = '";
        // line 377
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 4, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "'/4.2 * 100;
            \$( \"#sem5bar\" ).css(\"width\", sem5+\"%\");
            
            var sem6 = '";
        // line 380
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 5, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "'/4.2 * 100;
            \$( \"#sem6bar\" ).css(\"width\", sem6+\"%\");
            
            var sem7 = '";
        // line 383
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 6, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "'/4.2 * 100;
            \$( \"#sem7bar\" ).css(\"width\", sem7+\"%\");
            
            var sem8 = '";
        // line 386
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["semStats"]) ? $context["semStats"] : $this->getContext($context, "semStats")), 7, array(), "array"), 0, array(), "array"), "html", null, true);
        echo "'/4.2 * 100;
            \$( \"#sem8bar\" ).css(\"width\", sem8+\"%\");

        });
    </script>
    
    
    <!-- nice scroll -->
    <script src=\"";
        // line 394
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 395
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        
    <!-- custom select -->
    <script src=\"";
        // line 399
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>

   
    <!--custome script for all page-->
    <script src=\"";
        // line 403
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- custom script for this page-->

    <script src=\"";
        // line 407
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.autosize.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.placeholder.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/gdp-data.js"), "html", null, true);
        echo "\"></script>\t
    <script src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/morris.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/sparklines.js"), "html", null, true);
        echo "\"></script>\t
    <script src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>

  </body>
</html>
";
        
        $__internal_710ec8db80c2855b500cd4d83407cc1096076cd65e1a3b4225f00ebd78ed3cb0->leave($__internal_710ec8db80c2855b500cd4d83407cc1096076cd65e1a3b4225f00ebd78ed3cb0_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:StudentDashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  640 => 415,  636 => 414,  632 => 413,  628 => 412,  624 => 411,  620 => 410,  615 => 408,  611 => 407,  604 => 403,  597 => 399,  590 => 395,  586 => 394,  575 => 386,  569 => 383,  563 => 380,  557 => 377,  551 => 374,  545 => 371,  539 => 368,  533 => 365,  524 => 359,  518 => 356,  512 => 353,  508 => 352,  505 => 351,  501 => 349,  497 => 348,  465 => 319,  461 => 318,  447 => 307,  443 => 306,  429 => 295,  425 => 294,  411 => 283,  407 => 282,  393 => 271,  389 => 270,  375 => 259,  371 => 258,  357 => 247,  353 => 246,  344 => 239,  337 => 233,  333 => 232,  308 => 209,  306 => 208,  296 => 201,  286 => 194,  283 => 193,  279 => 191,  272 => 190,  260 => 180,  256 => 178,  249 => 177,  218 => 148,  212 => 144,  204 => 139,  200 => 138,  182 => 123,  173 => 117,  163 => 110,  139 => 89,  127 => 80,  122 => 78,  66 => 25,  62 => 24,  58 => 23,  52 => 20,  48 => 19,  42 => 16,  36 => 13,  22 => 1,);
    }
}
