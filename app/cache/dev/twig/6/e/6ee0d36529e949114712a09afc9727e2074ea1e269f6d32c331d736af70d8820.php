<?php

/* GPABundle:AdminDashboard:editCourse.html.twig */
class __TwigTemplate_6ee0d36529e949114712a09afc9727e2074ea1e269f6d32c331d736af70d8820 extends Twig_Template
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
        $__internal_4fd21a59cdb26da8ff0c2fed2163ffe1bc8bd1be7bc7b84c4f3b105075578abc = $this->env->getExtension("native_profiler");
        $__internal_4fd21a59cdb26da8ff0c2fed2163ffe1bc8bd1be7bc7b84c4f3b105075578abc->enter($__internal_4fd21a59cdb26da8ff0c2fed2163ffe1bc8bd1be7bc7b84c4f3b105075578abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:editCourse.html.twig"));

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
                                    <h3 class=\"page-header\"><i class=\"fa fa-user-md\"></i>Course ID &nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp; <strong>";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getId", array()), "html", null, true);
        echo "</strong> &nbsp;&nbsp;&nbsp; ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getTitle", array()), "html", null, true);
        echo "
                                    </h3>
                                        <ol class=\"breadcrumb\">
\t\t\t\t\t\t<li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
\t\t\t\t\t\t<li><i class=\"fa fa-user\"></i>Manage Courses</li>
                                                <li><i class=\"fa fa-user\"></i>Edit Course</li>\t\t\t\t\t  \t
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
        // line 203
        if (((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2")))) {
            echo "<li class=\"\">
                                  ";
        } else {
            // line 204
            echo "<li class=\"active\">
                                  ";
        }
        // line 206
        echo "                                  
                                      <a data-toggle=\"tab\" href=\"#course\">
                                          <i class=\"icon-user\"></i>
                                          Current Details
                                      </a>
                                  </li>
                                  
                                  ";
        // line 213
        if (((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2")))) {
            echo "<li class=\"active\">
                                  ";
        } else {
            // line 214
            echo "<li class=\"\">
                                  ";
        }
        // line 216
        echo "                                      <a data-toggle=\"tab\" href=\"#editCourse\">
                                          <i class=\"icon-envelope\"></i>
                                          Edit Course
                                      </a>
                                  </li>

                              </ul>
                          </header>
                          <div class=\"panel-body\">
                              <div class=\"tab-content\">
                                  
                                  <!-- profile -->
                                  ";
        // line 228
        if (((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2")))) {
            echo "<div id=\"course\" class=\"tab-pane\">
                                  ";
        } else {
            // line 229
            echo "<div id=\"course\" class=\"tab-pane active\">
                                  ";
        }
        // line 231
        echo "                                    <section class=\"panel\" style=\"width:700px;\">
                                      <div class=\"panel-body bio-graph-info\" style=\"max-width: 600px;\">
                                          <div class=\"col-lg-12\"><h1>Course Details</h1></div>
                  
                                          <table class=\"table table-hover\">
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                
                                                <tr>
                                                    <td>Course ID</td>
                                                    <td>";
        // line 247
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getId", array(), "method"), "html", null, true);
        echo "</td>
                                                </tr>

                                                <tr>
                                                    <td>Title</td>
                                                    <td>";
        // line 252
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getTitle", array(), "method"), "html", null, true);
        echo "</td>
                                                </tr>

                                                <tr>
                                                    <td>Lecturer ID</td>
                                                    <td>";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getLecId", array(), "method"), "html", null, true);
        echo "</td>
                                                </tr>

                                                <tr>
                                                    <td>Credits</td>
                                                    <td>";
        // line 262
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getCredits", array(), "method"), "html", null, true);
        echo "</td>
                                                </tr>

                                                <tr>
                                                    <td>Semester</td>
                                                    <td>";
        // line 267
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getSemester", array(), "method"), "html", null, true);
        echo "</td>
                                                </tr>

                                                <tr>
                                                    <td>Year</td>
                                                    <td>";
        // line 272
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getYear", array(), "method"), "html", null, true);
        echo "</td>
                                                </tr>

                                                <tr>
                                                    <td>Remarks</td>
                                                    <td>";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getRemarks", array(), "method"), "html", null, true);
        echo "</td>
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
                                  <!-- edit-course -->
                                  ";
        // line 292
        if (((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1")) || (isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2")))) {
            // line 293
            echo "                                      <div id=\"editCourse\" class=\"tab-pane active\">
                                  ";
        } else {
            // line 295
            echo "                                      <div id=\"editCourse\" class=\"tab-pane\">
                                  ";
        }
        // line 297
        echo "                                    <section class=\"panel\">                                          
                                          <div class=\"panel-body bio-graph-info\" style=\"max-width: 800px;\">
                                              <h1> Edit Information</h1>
                                              ";
        // line 300
        if ((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1"))) {
            echo "<div class=\"alert alert-danger col-lg-9\" role=\"alert\">Course Details are NOT CHANGED successfully!!!<br>Please contact Admin</div>";
        }
        // line 301
        echo "                                              ";
        if ((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) {
            echo "<div class=\"alert alert-success col-lg-9\" role=\"alert\">Course Details updated successfully.</div>";
        }
        echo " 
                                              <form class=\"form-horizontal col-lg-12\" role=\"form\" method=\"POST\" action=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_change_course_details", array("currentCourseID" => (isset($context["currentCourseID"]) ? $context["currentCourseID"] : $this->getContext($context, "currentCourseID")))), "html", null, true);
        echo " \" id=\"courseDetails\">                                          
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-3 control-label\">Course ID</label>
                                                      <div class=\"col-lg-2\">
                                                          <input type=\"text\" class=\"form-control\" id=\"courseID\"  name=\"courseID\" value=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getId", array(), "method"), "html", null, true);
        echo "\" required>
                                                      </div>
                                                      <span id=\"msgNoCourse\" class=\"alert alert-warning col-lg-5 text-center\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\">Course ID is already in the system!!</span>
                                                      <span id=\"msgInvalidCourse\" class=\"alert alert-warning col-lg-4 text-center\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\">Invalid Course ID!!</span>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-3 control-label\">Title</label>
                                                      <div class=\"col-lg-6\">
                                                          <input type=\"text\" class=\"form-control\" id=\"title\"  name=\"title\" value=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getTitle", array(), "method"), "html", null, true);
        echo "\" style=\"width: 388px;\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-3 control-label\">Lecturer</label>
                                                      <div class=\"col-lg-3\" style=\"padding-left: 0px; padding-right: 0px;margin-left: 15px;\">
                                                            <select class=\"form-control\" name=\"department\" id=\"department\" required style=\"padding-left: 0px;\">
                                                                <option value='' disabled selected style='display:none;'>Department</option>
                                                                <option value='CHEMICAL'>CHEMICAL</option>
                                                                <option value='CIVIL'>CIVIL</option>
                                                                <option value='CSE'>CSE</option>
                                                                <option value='ENTC'>ENTC</option>
                                                                <option value='ELECTRICAL'>ELECTRICAL</option>
                                                                <option value='MATERIALS'>MATERIALS</option>
                                                                <option value='MECHANICAL'>MECHANICAL</option>
                                                                <option value='TEXTILE'>TEXTILE</option>
                                                                <option value='TLM'>TLM</option>
                                                                <option value='EARTH_RESOURCE'>EARTH_RESOURCE</option>
                                                            </select>
                                                      </div>
                                                      <div class=\"col-lg-3\" style=\"padding-left: 0px; padding-right: 0px;margin-left: 5px;\">
                                                        <select class=\"form-control\" name=\"lec_name\" id=\"lec_name\" required style=\"padding-left: 0px;\">
                                                            <option value='0' disabled selected style='display:none;'>Lecturer</option>
                                                        </select>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-3 control-label\">Credits</label>
                                                      <div class=\"col-lg-2\">
                                                          <input type=\"text\" class=\"form-control\" id=\"credits\"  name=\"credits\" value=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getCredits", array(), "method"), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-3 control-label\">Semester</label>
                                                      <div class=\"col-lg-2\">
                                                          <select class=\"form-control\" name=\"semester\" id=\"semester\" required style=\"\">
                                                            <option value='0' disabled selected style='display:none;'>-</option>
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
                                                      <label class=\"col-lg-3 control-label\">Year</label>
                                                      <div class=\"col-lg-2\">
                                                          <input type=\"text\" class=\"form-control\" id=\"year\"  name=\"year\" value=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getYear", array(), "method"), "html", null, true);
        echo "\" required>
                                                      </div>
                                                  </div>
                                                  
                                                  <div class=\"form-group\">
                                                      <label class=\"col-lg-3 control-label\">Remarks</label>
                                                        <div class=\"col-lg-6\">
                                                            <textarea name=\"remarks\" id=\"remarks\" form=\"courseDetails\" class=\"form-control\" style=\"width: 388px;\">";
        // line 373
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getRemarks", array(), "method"), "html", null, true);
        echo "</textarea>
                                                        </div>
                                                  </div>
                                                  
                                                  <div class=\"form-group\">
                                                      <div class=\"col-lg-offset-8 col-lg-10\">
                                                          <button type=\"submit\" id=\"changeButton\" class=\"btn btn-primary\" disabled>Change</button>
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
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 402
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- check course availability  -->
    <script>
        \$(document).ready(function(){
            \$(\"#courseID\").on('keydown',function(){
                \$(\".msgs\").css('display','none');
                \$(\"#changeButton\").prop('disabled',true);
            });
            
            \$(\"#lec_name\").change(function(){
                \$(\".msgs\").css('display','none');
                \$(\"#changeButton\").prop('disabled',false);
            });
            
            \$(\"#courseID\").on('blur keyup',function(){
                var course_id= \$('#courseID').val();
                if( course_id.length === 6 ){
                    document.getElementById('msgInvalidCourse').style.display = 'none';
                    \$.ajax({
                        type: 'GET',
                        url: '";
        // line 423
        echo $this->env->getExtension('routing')->getPath("admin_check_course_availability");
        echo "',
                        data: {'course_id': course_id},
                        dataType: 'json',
                        success: function (data){
                           console.log(\"Returned Data: \"+data+\"\\n\");
                            if( data.status === 3){
                                //\$(\"td:contains('null')\").text(\"NA\");
                                document.getElementById('msgNoCourse').style.display = '';
                                \$(\"#changeButton\").attr(\"disabled\",\"disabled\");
                            }
                            else{
                                document.getElementById('msgNoCourse').style.display = 'none';
                                \$(\"#changeButton\").prop('disabled',false);
                            }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert(\"Status: \" + textStatus); 
                            alert(\"Error: \" + errorThrown); 
                        }
                    });
                }
                else{ 
                    document.getElementById('msgInvalidCourse').style.display = '';
                    document.getElementById('msgNoCourse').style.display = 'none';
                    \$(\"#changeButton\").attr(\"disabled\",\"disabled\");
                }
            });
        });
    </script>
    
    <!-- Department's Lecturer lists -->
    <script>
    \$(document).ready(function(){
        \$(\"#department\").change(function(){
             var department= \$(\"#department\").val();
            //console.log(student_id);
            //\$(\"#div1\").load(\"demo_test.txt\");
            \$.ajax({ 
                type: 'GET', 
                url: '";
        // line 462
        echo $this->env->getExtension('routing')->getPath("admin_check_dept_lec_list");
        echo "', 
                data: { 'department' : department }, 
                dataType: 'json',
                success: function (data) { 
                    console.log(\"Returned Data: \"+data+\"\\n\");
                    if( data.status === undefined){
                        var \$el = \$(\"#lec_name\");
                        var namesWithID = [];
                        
                        \$.each(data, function(i,item) {
                            namesWithID[i] = item.id+\"  \"+item.first_name+\" \"+item.last_name;
                        });;

                        //\$el.empty(); // remove old options
                        \$('#lec_name option:gt(0)').remove();
                        // Function( String propertyName, Object valueOfProperty )
                        \$.each(data, function(i,item) {
                          \$el.append( \$(\"<option></option>\").attr(\"value\", item.id).text(namesWithID[i]) );
                        });;
                    }
                    else{
                        \$('#lec_name option:gt(0)').remove();
                    }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) { 
                        alert(\"Status: \" + textStatus); 
                        alert(\"Error: \" + errorThrown); 
                    }
            });
        });
    }); 
        
         </script>
    
    <!-- Search Parameters validation -->
  <script>
        
        \$(document).ready(function(){
            var currentSem = ";
        // line 500
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseDetails"]) ? $context["courseDetails"] : $this->getContext($context, "courseDetails")), "getSemester", array(), "method"), "html", null, true);
        echo ";
          \$('#semester').val(currentSem);
        });
        
        \$(document).ready(function(){
            if( \$('#lec_name').val() === \"0\"){
                \$('#changeButton').prop(\"disabled\", true);
            }
        });

                          
    </script>    
         
    <!-- nice scroll -->
    <script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!--custome script for all page-->
    <script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>


  
</html>

";
        
        $__internal_4fd21a59cdb26da8ff0c2fed2163ffe1bc8bd1be7bc7b84c4f3b105075578abc->leave($__internal_4fd21a59cdb26da8ff0c2fed2163ffe1bc8bd1be7bc7b84c4f3b105075578abc_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:editCourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  691 => 518,  685 => 515,  681 => 514,  664 => 500,  623 => 462,  581 => 423,  557 => 402,  553 => 401,  522 => 373,  512 => 366,  486 => 343,  454 => 314,  443 => 306,  436 => 302,  429 => 301,  425 => 300,  420 => 297,  416 => 295,  412 => 293,  410 => 292,  392 => 277,  384 => 272,  376 => 267,  368 => 262,  360 => 257,  352 => 252,  344 => 247,  326 => 231,  322 => 229,  317 => 228,  303 => 216,  299 => 214,  294 => 213,  285 => 206,  281 => 204,  276 => 203,  255 => 187,  199 => 134,  195 => 133,  191 => 132,  175 => 119,  165 => 112,  141 => 91,  129 => 82,  124 => 80,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
