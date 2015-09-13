<?php

/* GPABundle:AdminDashboard:editResults.html.twig */
class __TwigTemplate_3b43baa1730a017658303814de8326dcaf55c6775685ec6425997d8216c33149 extends Twig_Template
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
        $__internal_916a8f55119dd0857326d8f138ccde399c99a82c7adde0416db155d9faae5238 = $this->env->getExtension("native_profiler");
        $__internal_916a8f55119dd0857326d8f138ccde399c99a82c7adde0416db155d9faae5238->enter($__internal_916a8f55119dd0857326d8f138ccde399c99a82c7adde0416db155d9faae5238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:editResults.html.twig"));

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

    <title>Administrator | Manage Results </title>

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
                                    <h3 class=\"page-header\"><i class=\"fa fa-user-md\"></i>Edit Results</h3> 
                                        <ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t<li><i class=\"fa fa-user\"></i>Manage Results</li>
                                                <li><i class=\"fa fa-user\"></i>Edit Results</li>\t\t\t\t\t  \t
\t\t\t\t\t</ol>
\t\t\t\t</div>
\t\t\t</div>

              <!-- page start-->
              <div class=\"row\">
                 <div class=\"col-lg-9\">
                    <div class=\"panel\">  
                                                                      
                              <div class=\"panel-body bio-graph-info\" style=\"\">
                                  <h1> Edit Results</h1>
                                  ";
        // line 203
        if ((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1"))) {
            echo "<div class=\"alert alert-danger col-lg-9\" role=\"alert\">Course Details are NOT CHANGED successfully!!!<br>Please contact Admin</div>";
        }
        // line 204
        echo "                                  ";
        if ((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) {
            echo "<div class=\"alert alert-success col-lg-9\" role=\"alert\">Course Details updated successfully.</div>";
        }
        echo " 
                                  <form class=\"form-horizontal col-lg-12\" role=\"form\" method=\"POST\" action=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("admin_change_student_results");
        echo "\" id=\"editResultForm\">                                          
                                      <div class=\"form-group\">
                                          <label class=\"col-lg-3 control-label\">Student ID</label>
                                          <label class=\"col-lg-1 control-label\">";
        // line 208
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseResult"]) ? $context["courseResult"] : $this->getContext($context, "courseResult")), "getStudentId", array(), "method"), "html", null, true);
        echo "</label>
                                          <div class=\"col-lg-2\">
                                              <input type=\"hidden\" class=\"form-control\" id=\"studentID\"  name=\"studentID\" value=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseResult"]) ? $context["courseResult"] : $this->getContext($context, "courseResult")), "getStudentId", array(), "method"), "html", null, true);
        echo "\">
                                          </div>
                                      </div>
                                      <div class=\"form-group\">
                                          <label class=\"col-lg-3 control-label\">Course ID</label>
                                          <label class=\"col-lg-1 control-label\">";
        // line 215
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseResult"]) ? $context["courseResult"] : $this->getContext($context, "courseResult")), "getCourseId", array(), "method"), "html", null, true);
        echo "</label>
                                          <div class=\"col-lg-2\">
                                              <input type=\"hidden\" class=\"form-control\" id=\"courseID\"  name=\"courseID\" value=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseResult"]) ? $context["courseResult"] : $this->getContext($context, "courseResult")), "getCourseId", array(), "method"), "html", null, true);
        echo "\" style=\"\">
                                          </div>
                                      </div>
                                      <div class=\"form-group\">
                                          <label class=\"col-lg-3 control-label\">Grade</label>
                                          <div class=\"col-lg-1\" style=\"padding-left: 0px; padding-right: 0px;margin-left: 15px;\">
                                                <select class=\"form-control\" name=\"gradeCredits\" id=\"gradeCredits\" required style=\"\">
                                                    <option value='' disabled selected style='display:none;'>&nbsp;-&nbsp;</option>
                                                    <option value='4.2'>A+</option>
                                                    <option value='4.0'>A</option>
                                                    <option value='3.7'>A-</option>
                                                    <option value='3.3'>B+</option>
                                                    <option value='3.0'>B</option>
                                                    <option value='2.7'>B-</option>
                                                    <option value='2.3'>C+</option>
                                                    <option value='2.0'>C</option>
                                                    <option value='1.5'>C-</option>
                                                    <option value='1.0'>D</option>
                                                </select>
                                          </div>
                                      </div>
                                          
                                      
                                      <input type='hidden' name='grade' id=\"grade\" value='' >
                                      
                                      <div class=\"form-group\">
                                          <label class=\"col-lg-3 control-label\">Semester</label>
                                          <div class=\"col-lg-1\" style=\"padding-left: 0px; padding-right: 0px;margin-left: 15px;\">
                                              <select class=\"form-control\" name=\"semester\" id=\"semester\" required style=\"\">
                                                <option value='' disabled selected style='display:none;'> &nbsp;-&nbsp; </option>
                                                <option value='1'>1</option>
                                                <option value='2'>2</option>
                                                <option value='3'>3</option>
                                                <option value='4'>4</option>
                                                <option value='5'>5</option>
                                                <option value='6'>6</option>
                                                <option value='7'>7</option>
                                                <option value='8'>8</option>
                                              </select>
                                          </div>
                                      </div>


                                      <div class=\"form-group\">
                                          <div class=\"col-lg-offset-8 col-lg-10\">
                                              <button type=\"submit\" id=\"changeButton\" class=\"btn btn-primary\" disabled>Change</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                      </div>
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
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>  
    <script src=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>


    <!-- Form validation  -->
    <script>
        //assigning the current sem. and grade to the select tags
        \$(document).ready(function(){
            var currentSem = ";
        // line 289
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseResult"]) ? $context["courseResult"] : $this->getContext($context, "courseResult")), "getSemester", array(), "method"), "html", null, true);
        echo ";
            \$('#semester').val(currentSem);
            
            var currentCredit = \"";
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseResult"]) ? $context["courseResult"] : $this->getContext($context, "courseResult")), "getCredits", array(), "method"), "html", null, true);
        echo "\";
            \$('#gradeCredits').val(currentCredit);
        });

        //Assigning grade to respective credit value before submitting the form
        \$(\"#gradeCredits\").change(function(){
           var text = \$('#gradeCredits').find(\":selected\").text();
            \$('input[name=\"grade\"]').val(text); 
        });

    </script>

    
    <!-- Search Parameters validation -->
    <script>

        \$(document).ready(function(){
            ";
        // line 317
        echo "            \$(\"#semester\").click(function(){
                if( \$('#gradeCredits').val() !== null ){
                    \$('#changeButton').prop(\"disabled\", false);
                }
                else{
                    \$('#changeButton').prop(\"disabled\", true);
                }
            });
        });

                          
    </script>
    
    <!-- bootstrap -->
    <script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
    
    <!-- nice scroll -->
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!--custome script for all page-->
    <script src=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- custom script for this page-->
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>


  
</html>

";
        
        $__internal_916a8f55119dd0857326d8f138ccde399c99a82c7adde0416db155d9faae5238->leave($__internal_916a8f55119dd0857326d8f138ccde399c99a82c7adde0416db155d9faae5238_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:editResults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 341,  448 => 338,  442 => 335,  438 => 334,  432 => 331,  416 => 317,  396 => 292,  390 => 289,  380 => 282,  376 => 281,  372 => 280,  306 => 217,  301 => 215,  293 => 210,  288 => 208,  282 => 205,  275 => 204,  271 => 203,  199 => 134,  195 => 133,  191 => 132,  175 => 119,  165 => 112,  141 => 91,  129 => 82,  124 => 80,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
