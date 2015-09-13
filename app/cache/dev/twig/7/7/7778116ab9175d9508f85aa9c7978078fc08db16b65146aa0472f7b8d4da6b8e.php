<?php

/* GPABundle:StudentDashboard:gpaAnalysis.html.twig */
class __TwigTemplate_7778116ab9175d9508f85aa9c7978078fc08db16b65146aa0472f7b8d4da6b8e extends Twig_Template
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
        $__internal_248b95e25b64db039737d360d3c7962abdd5becd461f79fd1efcef9eec86334e = $this->env->getExtension("native_profiler");
        $__internal_248b95e25b64db039737d360d3c7962abdd5becd461f79fd1efcef9eec86334e->enter($__internal_248b95e25b64db039737d360d3c7962abdd5becd461f79fd1efcef9eec86334e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:StudentDashboard:gpaAnalysis.html.twig"));

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
                  <li class=\"active\">
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
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("student_gpa_analysis");
        echo "\">GPA Analysis</a></li>                          
                          <li><a class=\"\" href=\"\">Compare</a></li>
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
              <!--overview start-->
                <div class=\"row\">
                    <div class=\"col-lg-11\">
                            <h3 class=\"page-header\"><i class=\"fa fa-table\"></i> GPA Analysis</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
                                    <li><i class=\"fa fa-table\"></i>Performance Analysis</li>
                                    <li><i class=\"fa fa-table\"></i>GPA Analysis</li>\t
                            </ol>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-11\">\t
                        <div class=\"panel panel-default col-lg-12\"> 
                            <div class=\"row col-lg-12\" style=\"margin-left: 0px;\">
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

                            <div class=\"row panel col-lg-12\" style=\"margin-left: 0px;margin-bottom: 0px;\">
                                <div class=\"panel col-lg-6\" style=\"margin-top:30px; margin-bottom: 0px;\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Credit Load</h3> <!-- Bar chart -->
                                    </div>
                                    <div class=\"panel-body\">
                                        <canvas id=\"creditLoadChart\" width=\"450\" height=\"200\"></canvas>
                                    </div>
                                </div>

                                <div class=\"panel col-lg-6\" style=\"margin-top:30px;margin-bottom: 0px;\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Cumulative Credits</h3> <!-- Line chart -->
                                    </div>
                                    <div class=\"panel-body\">
                                        <canvas id=\"cumulativeCreditsChart\" width=\"450\" height=\"200\"></canvas>
                                    </div>
                                </div>
                            </div>

                            <div class=\"row panel col-lg-12\" style=\"margin-left: 0px;\"> 
                                <div class=\"panel col-lg-6\" style=\"margin-top:30px;\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Grades Percentages</h3> <!-- Pie chart -->
                                    </div>
                                    <div class=\"panel-body\">
                                        <canvas id=\"gradePercentageChart\" width=\"450\" height=\"200\"></canvas>
                                    </div>
                                </div>

                                <div class=\"panel col-lg-6\" style=\"margin-top:30px;\">
                                    <div class=\"panel-heading\">
                                        <h3 class=\"panel-title\">Course Credits Percentages</h3> <!-- Pie chart -->
                                    </div>
                                    <div class=\"panel-body\">
                                        <canvas id=\"courseCreditsPercentageChart\" width=\"450\" height=\"200\"></canvas>
                                    </div>
                                </div>
                            </div>
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
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    
<!-- bootstrap -->
    <script src=\"";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

<!-- chart.js -->
    <script src=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/Chart.js"), "html", null, true);
        echo "\"></script>


 <!-- Drawing SGPA chart -->
 <script>

    var ctx = \$(\"#SGPAChart\").get(0).getContext(\"2d\");
    
    var data1 = {
        labels: [\"Seme 1\", \"Sem 2\", \"Sem 3\", \"Sem 4\", \"Sem 5\", \"Sem 6\", \"Sem 7\", \"Sem 8\"],
        datasets: [
            {
                label: \"My First dataset\",
                fillColor: \"rgba(220,220,220,0.2)\",
                strokeColor: \"rgba(220,220,220,1)\",
                pointColor: \"rgba(220,220,220,1)\",
                pointStrokeColor: \"#fff\",
                pointHighlightFill: \"#fff\",
                pointHighlightStroke: \"rgba(220,220,220,1)\",
                data: [65.5, 59, 80.25, 81.7, 56, 55.226, 40, 70]
            },
            {
                label: \"My Second dataset\",
                fillColor: \"rgba(151,187,205,0.2)\",
                strokeColor: \"rgba(151,187,205,1)\",
                pointColor: \"rgba(151,187,205,1)\",
                pointStrokeColor: \"#fff\",
                pointHighlightFill: \"#fff\",
                pointHighlightStroke: \"rgba(151,187,205,1)\",
                data: [28, 48, 40, 19, 86, 27, 90, null]
            }
        ]
    };

    var sgpaData = JSON.parse('";
        // line 295
        echo twig_jsonencode_filter((isset($context["sgpaData"]) ? $context["sgpaData"] : $this->getContext($context, "sgpaData")));
        echo "');
    console.log(\"returned json:\");
    console.log(sgpaData);
    var sgpaChart = new Chart(ctx).Line(sgpaData,{bezierCurve: false});
    
    ";
        // line 308
        echo "
    var ctx2 = \$(\"#GPAChart\").get(0).getContext(\"2d\");
    var gpaData = JSON.parse('";
        // line 310
        echo twig_jsonencode_filter((isset($context["gpaData"]) ? $context["gpaData"] : $this->getContext($context, "gpaData")));
        echo "');
    console.log(\"returned json:\");
    console.log(gpaData);
    var gpaChart = new Chart(ctx2).Line(gpaData,{bezierCurve: false});
    
    
    var ctx3 = \$(\"#creditLoadChart\").get(0).getContext(\"2d\");
    var semCreditData = JSON.parse('";
        // line 317
        echo twig_jsonencode_filter((isset($context["semCreditData"]) ? $context["semCreditData"] : $this->getContext($context, "semCreditData")));
        echo "');
    console.log(\"returned json:\");
    console.log(semCreditData);
    var semCreditChart = new Chart(ctx3).Bar(semCreditData);
    
    
    var ctx4 = \$(\"#cumulativeCreditsChart\").get(0).getContext(\"2d\");
    var cumSemCreditsData = JSON.parse('";
        // line 324
        echo twig_jsonencode_filter((isset($context["cumSemCreditsData"]) ? $context["cumSemCreditsData"] : $this->getContext($context, "cumSemCreditsData")));
        echo "');
    console.log(\"returned json:\");
    console.log(cumSemCreditsData);
    var cumSemCreditChart = new Chart(ctx4).Line(cumSemCreditsData);
    
    
    var ctx5 = \$(\"#gradePercentageChart\").get(0).getContext(\"2d\");
    var gradePercentagesData = JSON.parse('";
        // line 331
        echo twig_jsonencode_filter((isset($context["gradePercentagesData"]) ? $context["gradePercentagesData"] : $this->getContext($context, "gradePercentagesData")));
        echo "');
    console.log(\"returned json:\");
    console.log(gradePercentagesData);
    var cumSemCreditChart = new Chart(ctx5).Pie(gradePercentagesData);
    
    var ctx6 = \$(\"#courseCreditsPercentageChart\").get(0).getContext(\"2d\");
    var coursCreditsPercentagesData = JSON.parse('";
        // line 337
        echo twig_jsonencode_filter((isset($context["coursCreditsPercentagesData"]) ? $context["coursCreditsPercentagesData"] : $this->getContext($context, "coursCreditsPercentagesData")));
        echo "');
    console.log(\"returned json:\");
    console.log(coursCreditsPercentagesData);
    var cumSemCreditChart = new Chart(ctx6).Pie(coursCreditsPercentagesData);
    
 </script>


<!-- nice scroll -->
<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<!--custome script for all page-->
<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>


  </body>
</html>

";
        
        $__internal_248b95e25b64db039737d360d3c7962abdd5becd461f79fd1efcef9eec86334e->leave($__internal_248b95e25b64db039737d360d3c7962abdd5becd461f79fd1efcef9eec86334e_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:StudentDashboard:gpaAnalysis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 350,  446 => 347,  442 => 346,  430 => 337,  421 => 331,  411 => 324,  401 => 317,  391 => 310,  387 => 308,  379 => 295,  342 => 261,  336 => 258,  330 => 255,  326 => 254,  322 => 253,  216 => 149,  210 => 145,  201 => 139,  183 => 124,  174 => 118,  164 => 111,  140 => 90,  128 => 81,  123 => 79,  67 => 26,  63 => 25,  59 => 24,  53 => 21,  49 => 20,  42 => 16,  36 => 13,  22 => 1,);
    }
}
