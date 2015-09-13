<?php

/* GPABundle:StudentDashboard:compareGrades.html.twig */
class __TwigTemplate_634ae2c90d38f9321c170ea918d5774c1b14d79103a8e0bd19cc44c344653cdb extends Twig_Template
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
        $__internal_337479468168edaf5d7bf25611e2d389c760ff6b2de8292eadbd78ccc3b34d4d = $this->env->getExtension("native_profiler");
        $__internal_337479468168edaf5d7bf25611e2d389c760ff6b2de8292eadbd78ccc3b34d4d->enter($__internal_337479468168edaf5d7bf25611e2d389c760ff6b2de8292eadbd78ccc3b34d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:StudentDashboard:compareGrades.html.twig"));

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
          <div id=\"sidebar\"  class=\"nav-collapse \">
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
                  <li class=\"\">                     
                      <a class=\"\" href=\"";
        // line 124
        echo $this->env->getExtension('routing')->getPath("student_view_grades");
        echo "\">
                          <i class=\"icon_piechart\"></i>
                          <span>View Grades</span>
                          
                      </a>
                                         
                  </li>
                             
                  <li>
                      <a class=\"active\" href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("student_compare_grades");
        echo "\" >
                          <i class=\"icon_table\"></i>
                          <span>Compare Grades</span>
                      </a>
                  </li>
                  
                  <li>
                      <a class=\"\" href=\"";
        // line 140
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
            <section class=\"wrapper\">            
              <!--overview start-->
                <div class=\"row\">
                    <div class=\"col-lg-9\">
                            <h3 class=\"page-header\"><i class=\"fa fa-table\"></i> Grades Comparison</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
                                    <li><i class=\"fa fa-table\"></i>Compare Grades</li>\t\t\t\t\t\t  \t
                            </ol>
                    </div>
                </div>

\t\t\t<div class=\"row\">
                            <div class=\"col-lg-9 col-md-12\">\t
                                    <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\">
                                                    <h2><i class=\"fa fa-flag-o red\"></i><strong>Semester Performance Analysis</strong></h2>
                                            </div>
                                            <div class=\"panel-body\">
                                                    <table class=\"table bootstrap-datatable\">
                                                            <thead>
                                                                    <tr>
                                                                        <th>Semester #</th>
                                                                        <th>SGPA</th>
                                                                        <th>GPA</th>
                                                                        <th>Class Average (SGPA)</th>
                                                                        <th>Performance</th>
                                                                    </tr>
                                                            </thead>   
                                                            <tbody>
                                                                    <tr>
                                                                        <td><strong>1</strong></td>
                                                                        <td>3.64</td>
                                                                        <td>3.64</td>
                                                                        <td>3.17</td>
                                                                        <td>
                                                                                <div class=\"progress thin\" id=\"progressbar1\">
                                                                                        <div class=\"progress-bar progress-bar-success\" role=\"progressbar\" aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 73%\" >
                                                                                        </div>
                                                                                        ";
        // line 196
        echo "                                                                                </div>
                                                                                <span class=\"sr-only\">73%</span>   \t
                                                                        </td>
                                                                    </tr>
                                                                    <tr>

                                                                            <td><strong>2</strong></td>
                                                                            <td>3.41</td>
                                                                            <td>3.64</td>
                                                                            <td>3.23</td>
                                                                            <td>
                                                                                    <div class=\"progress thin\">
                                                                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"57\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 57%\">
                                                                                            </div>
                                                                                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"43\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 43%\">
                                                                                            </div>
                                                                                    </div>
                                                                                    <span class=\"sr-only\">57%</span>   \t
                                                                            </td>
                                                                    </tr>
                                                                    <tr>

                                                                            <td><strong>3</strong></td>
                                                                            <td>3.37</td>
                                                                            <td>3.64</td>
                                                                            <td>3.19</td>
                                                                            <td>
                                                                                    <div class=\"progress thin\">
                                                                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"93\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 93%\">
                                                                                            </div>
                                                                                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"7\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 7%\">
                                                                                            </div>
                                                                                    </div>
                                                                                    <span class=\"sr-only\">93%</span>   \t
                                                                            </td>
                                                                    </tr>
                                                                    <tr>

                                                                            <td><strong>4</strong></td>
                                                                            <td>3.22</td>
                                                                            <td>3.64</td>
                                                                            <td>3.02</td>
                                                                            <td>
                                                                                    <div class=\"progress thin\">
                                                                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                                                                            </div>
                                                                                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                                                            </div>
                                                                                    </div>
                                                                                    <span class=\"sr-only\">20%</span>   \t
                                                                            </td>
                                                                    </tr>
                                                                    <tr>

                                                                            <td><strong>5</strong></td>
                                                                            <td>3.31</td>
                                                                            <td>3.64</td>
                                                                            <td>3.30</td>
                                                                            <td>
                                                                                    <div class=\"progress thin\">
                                                                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                                                                            </div>
                                                                                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                                                            </div>
                                                                                    </div>
                                                                                    <span class=\"sr-only\">20%</span>   \t
                                                                            </td>
                                                                    </tr>
                                                                    <tr>

                                                                            <td><strong>6</strong></td>
                                                                            <td>3.45</td>
                                                                            <td>3.64</td>
                                                                            <td>3.29</td>
                                                                            <td>
                                                                                    <div class=\"progress thin\">
                                                                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                                                                            </div>
                                                                                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                                                            </div>
                                                                                    </div>
                                                                                    <span class=\"sr-only\">20%</span>   \t
                                                                            </td>
                                                                    </tr>
                                                                    <tr>

                                                                            <td><strong>7</strong></td>
                                                                            <td>3.56</td>
                                                                            <td>3.64</td>
                                                                            <td>3.29</td>
                                                                            <td>
                                                                                    <div class=\"progress thin\">
                                                                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                                                                            </div>
                                                                                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                                                            </div>
                                                                                    </div>
                                                                                    <span class=\"sr-only\">20%</span>   \t
                                                                            </td>
                                                                    </tr>
                                                                    <tr>

                                                                            <td><strong>8</strong></td>
                                                                            <td>3.69</td>
                                                                            <td>3.64</td>
                                                                            <td>3.41</td>
                                                                            <td>
                                                                                    <div class=\"progress thin\">
                                                                                            <div class=\"progress-bar progress-bar-danger\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 20%\">
                                                                                            </div>
                                                                                            <div class=\"progress-bar progress-bar-warning\" role=\"progressbar\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 80%\">
                                                                                            </div>
                                                                                    </div>
                                                                                    <span class=\"sr-only\">20%</span>   \t
                                                                            </td>
                                                                    </tr>
                                                            </tbody>
                                                    </table>
                                            </div>

                                    </div>\t

                            </div>
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
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- Progressbar  -->
<script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/progressbar.js"), "html", null, true);
        echo "\"></script>

<!-- nice scroll -->
<script src=\"";
        // line 340
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--custome script for all page-->
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>


  </body>
</html>

";
        
        $__internal_337479468168edaf5d7bf25611e2d389c760ff6b2de8292eadbd78ccc3b34d4d->leave($__internal_337479468168edaf5d7bf25611e2d389c760ff6b2de8292eadbd78ccc3b34d4d_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:StudentDashboard:compareGrades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  427 => 344,  421 => 341,  417 => 340,  411 => 337,  405 => 334,  401 => 333,  262 => 196,  205 => 140,  195 => 133,  183 => 124,  174 => 118,  164 => 111,  140 => 90,  128 => 81,  123 => 79,  67 => 26,  63 => 25,  59 => 24,  53 => 21,  49 => 20,  42 => 16,  36 => 13,  22 => 1,);
    }
}
