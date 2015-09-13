<?php

/* GPABundle:AdminDashboard:viewLecStats.html.twig */
class __TwigTemplate_e4984fbcdd63b803137fa48c26c8dff307c57575d1161f1da69510c646a2fab0 extends Twig_Template
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
        $__internal_d098a0928faf9197d74ab6c7bf2252d4adf06375f37b23ffa5e3988f70b8b10c = $this->env->getExtension("native_profiler");
        $__internal_d098a0928faf9197d74ab6c7bf2252d4adf06375f37b23ffa5e3988f70b8b10c->enter($__internal_d098a0928faf9197d74ab6c7bf2252d4adf06375f37b23ffa5e3988f70b8b10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:viewLecStats.html.twig"));

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
                <div class=\"col-lg-12\">
                    <div class=\"panel\">
                        <div class=\"panel-body bio-graph-info\" id=\"resultPanel\" style=\"display:\">
                            
                                <form action=\"javascript:void(0);\">
                                    <h1> Course List</h1>
                                    <div class=\"col-lg-2\" style=\"margin-bottom: 20px;\">
                                      <label class=\"control-label\">Order By:</label>
                                      <div class=\"\">
                                          <select class=\"form-control\" id=\"orderBy\" name=\"orderBy\" style=\"padding-top:0px; height: 28px;\">
                                                <option value='title'>Title</option>
                                                <option value='semester' selected>Semester</option>
                                                <option value='year'>Year</option>
                                                <option value='credits'>Credits</option>
                                                <option value='class_avg'>Class Average</option>
                                            </select>
                                      </div>
                                    </div>
                                    <div class=\"col-lg-2\" style=\"margin-bottom: 20px;\">
                                      <label class=\"control-label\">Order:</label>
                                      <div class=\"\">
                                          <select class=\"form-control\" id=\"order\" name=\"order\" style=\"padding-top:0px; height: 28px;\">
                                                <option value='ASC' >Assending</option>
                                                <option value='DESC' selected>Descending</option>

                                            </select>
                                      </div>
                                    </div>
                                </form>
                            
                            <div class=\"alert alert-info col-lg-8 text-center\" role=\"alert\" id=\"msg_noResults\" style=\"color: #03597D; display: none;\">No courses registered yet.</div>
                            <div class=\"alert alert-danger col-lg-8 text-center\" role=\"alert\" id=\"msg_queryFailed\" style=\"color: #03597D; display: none;\">Query execution failed, change the search parameters and search again.</div>
                            <table class=\"table table-bordered\" id=\"courseListTable\">
                                <thead>
                                    <td class=\"col-lg-1\" style=\"padding-right:0px;\">Course ID</td>
                                    <td class=\"col-lg-3\">Title</td>
                                    <td class=\"col-lg-1\">Credits</td>
                                    <td class=\"col-lg-1\">Semester</td>
                                    <td class=\"col-lg-1\">Year</td>
                                    <td class=\"col-lg-1 text-center\">Class Average</td>
                                    <td class=\"col-lg-2 text-center\">Remarks</td>
                                    <td class=\"col-lg-1 text-center\">Results</td>

                                </thead>
                                <tbody>
                                    ";
        // line 251
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseList"]) ? $context["courseList"] : $this->getContext($context, "courseList")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 252
            echo "                                        <tr>
                                            <td><strong>";
            // line 253
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "</strong></td>  
                                            <td>";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</td>               
                                            <td class=\"text-center\">";
            // line 255
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "credits", array()), "html", null, true);
            echo "</td>             
                                            <td class=\"text-center\">";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "semester", array()), "html", null, true);
            echo "</td>               
                                            <td class=\"text-center\">";
            // line 257
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "year", array()), "html", null, true);
            echo "</td>
                                            <td class=\"text-center\">
                                                ";
            // line 259
            if (($this->getAttribute($context["course"], "class_avg", array()) == "")) {
                echo " NA
                                                ";
            } else {
                // line 260
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "class_avg", array()), "html", null, true);
                echo "
                                                ";
            }
            // line 262
            echo "                                            </td>  
                                            <td class=\"text-center\">
                                                ";
            // line 264
            if (($this->getAttribute($context["course"], "remarks", array()) == "")) {
                echo " NA
                                                ";
            } else {
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "remarks", array()), "html", null, true);
                echo "
                                                ";
            }
            // line 267
            echo "                                            </td>
                                            <td class=\"text-center\">
                                                <button class=\"btn btn-sm\" id=\"viewButton\" value=\"";
            // line 269
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" OnClick=\"viewButtonClick(this);\">View</button>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 273
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div><!--/.row-->
            
            <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
  
    <!-- javascripts -->
    <script src=\"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Arranging course list according to a column value - Ajax -->
    <script>
        \$(document).ready(function(){
            \$(\"#orderBy, #order\").change(function(){
                var orderBy = \$('#orderBy').val();
                var order = \$('#order').val();
                var lec_id = '";
        // line 298
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getId", array(), "method"), "html", null, true);
        echo "';
                console.log(\"profession: \"+\$('#profession').val()+\"\\n\");
                \$.ajax({
                    type: 'GET',
                    url: '";
        // line 302
        echo $this->env->getExtension('routing')->getPath("admin_get_ordered_lec_courselist");
        echo "',
                    data: {'orderBy': orderBy,
                            'order': order,
                           'lec_id': lec_id
                            },
                    dataType: 'json',
                    success: function (data){
                       console.log(\"Returned Data: \"+data+\"\\n\");
                        \$('#courseListTable').find('tbody').find('tr').remove();
                        if( data.value === undefined){
                            \$.each(data, function(i, item) {
                                var \$tr = \$('<tr>').append(
                                    \$('<td>').append(\$('<strong>').text(item.id)),
                                    \$('<td>').text(item.title),
                                    \$('<td>').attr({\"class\":\"text-center\"}).text(item.credits),
                                    \$('<td>').attr({\"class\":\"text-center\"}).text(item.semester),
                                    \$('<td>').attr({\"class\":\"text-center\"}).text(item.year),
                                    \$('<td>').attr({\"class\":\"text-center\"}).text(item.class_avg),
                                    \$('<td>').attr({\"class\":\"text-center\"}).text(item.remarks),
                                    \$('<td>').attr({\"class\":\"text-center\"}).append(
                                        \$('<button>').attr({\"value\":item.id , \"id\":\"viewButton\" , \"class\":\"btn btn-sm\", \"OnClick\":\"viewButtonClick(this);\" }).text(\"View\")
                                      )
                                ).appendTo(\$('#courseListTable').find('tbody'));

                                console.log(\$tr.html());
                            });
                            \$(\"td:contains('null')\").text(\"NA\");
                        }
                        else{
                            alert (\"Ajax call to the database failed!, inform Admin.\");
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
    
    <!-- redirecting to course results page -->
    <script>
        function viewButtonClick(el) {
            var indexNum = \$(el).attr('value');
            
                // EDIT button action
                if(\$(el).attr('id') === \"editButton\"){
                    //var win = window.open('http://localhost/gpa2/web/app_dev.php/admin/view_users/'+indexNum, '_blank');
                    ";
        // line 360
        echo "                }
            }
    </script>
    
    
    
    <!-- nice scroll -->
    <script src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    
    <!--custome script for all page-->
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>


  </body>
</html>
";
        
        $__internal_d098a0928faf9197d74ab6c7bf2252d4adf06375f37b23ffa5e3988f70b8b10c->leave($__internal_d098a0928faf9197d74ab6c7bf2252d4adf06375f37b23ffa5e3988f70b8b10c_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:viewLecStats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 371,  506 => 368,  502 => 367,  493 => 360,  439 => 302,  432 => 298,  421 => 290,  417 => 289,  399 => 273,  389 => 269,  385 => 267,  380 => 265,  375 => 264,  371 => 262,  366 => 260,  361 => 259,  356 => 257,  352 => 256,  348 => 255,  344 => 254,  340 => 253,  337 => 252,  333 => 251,  272 => 192,  267 => 190,  263 => 189,  259 => 188,  255 => 187,  199 => 134,  195 => 133,  191 => 132,  175 => 119,  165 => 112,  141 => 91,  129 => 82,  124 => 80,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
