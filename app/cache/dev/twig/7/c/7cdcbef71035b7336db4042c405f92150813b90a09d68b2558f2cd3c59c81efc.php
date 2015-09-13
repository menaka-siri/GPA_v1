<?php

/* GPABundle:AdminDashboard:index.html.twig */
class __TwigTemplate_7cdcbef71035b7336db4042c405f92150813b90a09d68b2558f2cd3c59c81efc extends Twig_Template
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
        $__internal_b1774b191f241eba6942a0539a0ef17190fd4d1f4006e28b7d4c34df18522088 = $this->env->getExtension("native_profiler");
        $__internal_b1774b191f241eba6942a0539a0ef17190fd4d1f4006e28b7d4c34df18522088->enter($__internal_b1774b191f241eba6942a0539a0ef17190fd4d1f4006e28b7d4c34df18522088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:index.html.twig"));

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

    <title>Admin| Dashboard </title>

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
            <a href=\"javascript:;\" class=\"logo\">  
                <h4><strong>GPA v1.0<span class=\"lite\"> &nbsp;&nbsp;&nbsp;&nbsp;  Grade Performance Analyzer</span></strong></h4>
            </a>
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
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/chat-avatar2.jpg"), "html", null, true);
        echo "\">
                            </span>
                            <span class=\"username\"><strong>";
        // line 91
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
        // line 100
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
        // line 121
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
     
                  <li>
                      <a class=\"\" href=\"";
        // line 128
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
        // line 141
        echo $this->env->getExtension('routing')->getPath("admin_add_user");
        echo "\">Add User</a></li> 
                          <li><a class=\"\" href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("admin_view_users");
        echo "\">View Users</a></li>                          
                          <li><a class=\"\" href=\"";
        // line 143
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
                          <li><a class=\"\" href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("admin_add_course");
        echo "\">Add Course</a></li>                          
                          <li><a class=\"\" href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("admin_view_course");
        echo "\">View Courses</a></li>
                      </ul>
                  </li>
                  
                  <li class=\"sub-menu\">
                      <a class=\"\" href=\"javascript:;\">
                          <i class=\"icon_datareport\"></i>
                          <span>Course Enrolments</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("admin_add_enrolment");
        echo "\">Add New Enrolment</a></li>  
                          <li><a class=\"\" href=\"\">View Enrolments</a></li>                          
                      </ul> 
                  </li>
                  
                  <li class=\"sub-menu\">
                      <a class=\"\" href=\"javascript:;\">
                          <i class=\"icon_datareport\"></i>
                          <span>Manage Results</span>
                          <span class=\"menu-arrow arrow_carrot-right\"></span>
                      </a>
                      <ul class=\"sub\">
                          <li><a class=\"\" href=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("admin_add_results");
        echo "\">Enter Results</a></li>  
                          <li><a class=\"\" href=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("admin_view_student_results");
        echo "\">View Student Results</a></li>
                          <li><a class=\"\" href=\"\">View Course Results</a></li>
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
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Dashboard</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"\">Home</a></li>
                                    <li><i class=\"fa fa-laptop\"></i>Dashboard</li>\t\t\t\t\t\t  \t
                            </ol>
                    </div>
            </div>
  

            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"info-box green-bg\">
                                <i class=\"fa fa-chevron-circle-right\"></i>
                                <div class=\"count\">7</div>
                                <div class=\"title\">Staff Members</div>\t\t\t\t\t\t
                        </div><!--/.info-box-->\t\t\t
                </div><!--/.col-->

                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"info-box lime-bg\">
                                <i class=\"fa fa-chevron-circle-right\"></i>
                                <div class=\"count\">80</div>
                                <div class=\"title\">Students</div>\t\t\t\t\t\t
                        </div><!--/.info-box-->\t\t\t
                </div><!--/.col-->\t

                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"info-box lime-bg\">
                                <i class=\"fa fa-chevron-circle-right\"></i>
                                <div class=\"count\">12</div>
                                <div class=\"title\">Lecturers</div>\t\t\t\t\t\t
                        </div><!--/.info-box-->\t\t\t
                </div><!--/.col-->

            </div><!--/.row-->
            
            <div class=\"row\">
                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"info-box red-bg\">
                                <i class=\"fa fa-chevron-circle-right\"></i>
                                <div class=\"count\">80</div>
                                <div class=\"title\">Unregistered Users</div>\t\t\t\t\t\t
                        </div><!--/.info-box-->\t\t\t
                </div><!--/.col-->

                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"info-box yellow-bg\">
                                <i class=\"fa fa-chevron-circle-right\" ></i>
                                <div class=\"count\">50</div>
                                <div class=\"title\">Courses registred</div>\t\t\t\t\t\t
                        </div><!--/.info-box-->\t\t\t
                </div><!--/.col-->\t

            </div><!--/.row-->
            
            <div class=\"row\">
                
                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"info-box blue-bg\" style=\"padding-right: 0px;\">
                                <i class=\"fa fa-chevron-circle-right\" style=\"margin-right: 0px;\"></i>
                                <div class=\"count\">36</div>
                                <div class=\"title\">Students accessed the system</div>\t\t\t\t\t\t
                        </div><!--/.info-box-->\t\t\t
                </div><!--/.col-->\t

                <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
                        <div class=\"info-box blue-bg\" style=\"padding-right: 0px;\">
                                <i class=\"fa fa-chevron-circle-right\" style=\"margin-right: 0px;\"></i>
                                <div class=\"count\">5</div>
                                <div class=\"title\">Lecturers accessed the system</div>\t\t\t\t\t\t
                        </div><!--/.info-box-->\t\t\t
                </div><!--/.col-->

            </div><!--/.row-->
            
            
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->


  
    <!-- javascripts -->
    <script src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
    <!-- <script src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.8.3.min.js"), "html", null, true);
        echo "\"></script> -->
    
    <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Progressbar  -->
    <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/progressbar.js"), "html", null, true);
        echo "\"></script>
    
    <!-- bootstrap -->
    <script src=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- nice scroll -->
    <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    
        
    <!--script for this page only-->
        
    <!-- custom select -->
    <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>

   
    <!--custome script for all page-->
    <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- custom script for this page-->
    <script src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
  
    

  </body>
</html>
";
        
        $__internal_b1774b191f241eba6942a0539a0ef17190fd4d1f4006e28b7d4c34df18522088->leave($__internal_b1774b191f241eba6942a0539a0ef17190fd4d1f4006e28b7d4c34df18522088_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 314,  427 => 311,  420 => 307,  410 => 300,  406 => 299,  400 => 296,  394 => 293,  388 => 290,  384 => 289,  379 => 287,  375 => 286,  371 => 285,  263 => 180,  259 => 179,  244 => 167,  230 => 156,  226 => 155,  211 => 143,  207 => 142,  203 => 141,  187 => 128,  177 => 121,  153 => 100,  141 => 91,  136 => 89,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
