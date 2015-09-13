<?php

/* GPABundle:AdminDashboard:registerUsers.html.twig */
class __TwigTemplate_add10e23db98cf28cf118533948489f2ffa34aa623d89c7e964b394759e657ed extends Twig_Template
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
        $__internal_3f8f88642d5bb3ee8bbba15d4dd9cf18b6d32a03921beca7e1a04f96b39adef4 = $this->env->getExtension("native_profiler");
        $__internal_3f8f88642d5bb3ee8bbba15d4dd9cf18b6d32a03921beca7e1a04f96b39adef4->enter($__internal_3f8f88642d5bb3ee8bbba15d4dd9cf18b6d32a03921beca7e1a04f96b39adef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:registerUsers.html.twig"));

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

    <title>Admin| Manage Users </title>

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
            <a href=\"index.html\" class=\"logo\"><h4><strong>GPA v1.0<span class=\"lite\"> &nbsp;&nbsp;&nbsp;&nbsp;  Grade Performance Analyzer</span></strong></h4></a>
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
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/chat-avatar2.jpg"), "html", null, true);
        echo "\">
                            </span>
                            <span class=\"username\"><strong>";
        // line 89
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
        // line 98
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
        // line 119
        echo $this->env->getExtension('routing')->getPath("admin_dashboard");
        echo "\">
                          <i class=\"icon_house_alt\"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
     
                  <li>
                      <a class=\"\" href=\"";
        // line 126
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
        // line 139
        echo $this->env->getExtension('routing')->getPath("admin_view_users");
        echo "\">Add Users</a></li> 
                          <li><a class=\"\" href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("admin_view_users");
        echo "\">View Users</a></li>                          
                          <li><a class=\"\" href=\"";
        // line 141
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
            
            <!--overview start-->
            <div class=\"row\">
                    <div class=\"col-lg-9\">
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Manage Users</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
                                    <li><i class=\"fa fa-users\"></i>Manage Users</li>
                                    <li><i class=\"fa fa-user\"></i>Register Users</li>
                            </ol>
                    </div>
            </div>
  

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel\">
                        <div class=\"panel-body bio-graph-info\" id=\"resultPanel\" style=\"display:\">
                            
                                <form action=\"javascript:void(0);\">
                                    <h1> Unregistered User List</h1>
                                    <div class=\"col-lg-2\" style=\"margin-bottom: 20px;\">
                                      <label class=\"control-label\">Filter By:</label>
                                      <div class=\"\">
                                          <select class=\"form-control\" id=\"filterBy\" name=\"filterBy\" style=\"padding-top:0px; height: 28px;\">
                                                <option value='' disabled selected style='display:none;'>Profession</option>
                                                <option value='2'>Student</option>
                                                <option value='1'>Lecturer</option>
                                                <option value='0'>Staff</option>
                                            </select>
                                      </div>
                                    </div>
                                    <div class=\"col-lg-2\" style=\"margin-bottom: 20px;\">
                                      <label class=\"control-label\">Order By:</label>
                                      <div class=\"\">
                                          <select class=\"form-control\" id=\"orderBy\" name=\"orderBy\" style=\"padding-top:0px; height: 28px;\">
                                                <option value='id' selected>User ID</option>
                                                <option value='first_name'>First Name</option>
                                                <option value='last_name'>Last Name</option>
                                                <option value='email'>Email</option>
                                                <option value='department'>Department</option>
                                                
                                            </select>
                                      </div>
                                    </div>
                                    <div class=\"col-lg-2\" style=\"margin-bottom: 20px;\">
                                      <label class=\"control-label\">Order:</label>
                                      <div class=\"\">
                                          <select class=\"form-control\" id=\"order\" name=\"order\" style=\"padding-top:0px; height: 28px;\">
                                                <option value='ASC' selected>Assending</option>
                                                <option value='DESC'>Descending</option>

                                            </select>
                                      </div>
                                    </div>
                                </form>
                            
                            <div class=\"alert alert-info col-lg-8 text-center\" role=\"alert\" id=\"msg_noResults\" style=\"color: #03597D; display: none;\">No equalent users to the profession selected. Change the filter parameter</div>
                            <div class=\"alert alert-danger col-lg-8 text-center\" role=\"alert\" id=\"msg_queryFailed\" style=\"color: #03597D; display: none;\">Query execution failed, change the search parameters and search again.</div>
                            <table class=\"table table-bordered\" id=\"userListTable\">
                                <thead>
                                    <td class=\"col-lg-1\" style=\"padding-right:0px;\">User ID</td>
                                    <td class=\"col-lg-1\">First Name</td>
                                    <td class=\"col-lg-2\">Last Name</td>
                                    <td class=\"col-lg-2\">Email</td>
                                    <td class=\"col-lg-1\">Mobile</td>
                                    <td class=\"col-lg-1 text-center\">Department</td>
                                    <td class=\"col-lg-1 text-center\">Profession</td>
                                    <td class=\"col-lg-2 text-center\">Tasks</td>

                                </thead>
                                <tbody>
                                    ";
        // line 264
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userList"]) ? $context["userList"] : $this->getContext($context, "userList")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 265
            echo "                                        <tr>
                                            <td><strong>";
            // line 266
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</strong></td>  
                                            <td class=\"\">";
            // line 267
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "first_name", array()), "html", null, true);
            echo "</td>               
                                            <td class=\"\">";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "last_name", array()), "html", null, true);
            echo "</td>             
                                            <td class=\"\">";
            // line 269
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>               
                                            <td class=\"\">";
            // line 270
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "mobile", array()), "html", null, true);
            echo "</td>
                                            <td class=\"\">
                                                ";
            // line 272
            if (($this->getAttribute($context["user"], "department", array()) == "")) {
                echo " NA
                                                ";
            } else {
                // line 273
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "department", array()), "html", null, true);
                echo "
                                                ";
            }
            // line 275
            echo "                                            </td>  
                                            <td class=\"\">
                                                ";
            // line 277
            if (($this->getAttribute($context["user"], "profession", array()) == "0")) {
                echo " Staff
                                                ";
            } elseif (($this->getAttribute(            // line 278
$context["user"], "profession", array()) == "1")) {
                echo " Lecturer
                                                ";
            } elseif (($this->getAttribute(            // line 279
$context["user"], "profession", array()) == "2")) {
                echo " Student
                                                ";
            }
            // line 281
            echo "                                            </td>
                                            <td class=\"text-center\">
                                                <button class=\"btn btn-sm\" id=\"regButton\" value=\"";
            // line 283
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" OnClick=\"regButtonClick(this);\">Register</button>
                                                <button class=\"btn btn-sm\" id=\"deleteButton\" value=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" OnClick=\"deleteButtonClick(this);\">Delete</button>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 288
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div><!--/.row-->
            

            
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->


  
    <!-- javascripts -->
    <script src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Arranging course list according to a column value - Ajax -->
    <script>
        \$(document).ready(function(){
            \$(\"#filterBy, #orderBy, #order\").change(function(){
                var filterBy = \$('#filterBy').val();
                var orderBy = \$('#orderBy').val();
                var order = \$('#order').val();
                //console.log(\"profession: \"+\$('#profession').val()+\"\\n\");
                \$.ajax({
                    type: 'GET',
                    url: '";
        // line 321
        echo $this->env->getExtension('routing')->getPath("admin_get_ordered_unreg_userlist");
        echo "',
                    data: {'orderBy': orderBy,
                            'order': order,
                           'filterBy': filterBy
                            },
                    dataType: 'json',
                    success: function (data){
                       console.log(\"Returned Data: \"+data+\"\\n\");
                        \$('#userListTable').find('tbody').find('tr').remove();
                        if( data.status === undefined){
                            document.getElementById('msg_noResults').style.display = 'none';
                            document.getElementById('userListTable').style.display = '';
                            \$.each(data, function(i, item) {
                                var \$tr = \$('<tr>').append(
                                    \$('<td>').append(\$('<strong>').text(item.id)),
                                    \$('<td>').text(item.first_name),
                                    \$('<td>').text(item.last_name),
                                    \$('<td>').text(item.email),
                                    \$('<td>').text(item.mobile),
                                    \$('<td>').text(item.department),
                                    \$('<td>').attr({\"class\":\"userProfession\"}).text(item.profession),
                                    \$('<td>').attr({\"class\":\"text-center\"}).append(
                                        \$('<button>').attr({\"value\":item.id , \"id\":\"regButton\" , \"class\":\"btn btn-sm\", \"OnClick\":\"regButtonClick(this);\" }).text(\"Register\"),
                                        \$('<button>').attr({\"value\":item.id , \"id\":\"deleteButton\" , \"class\":\"btn btn-sm\", \"OnClick\":\"deleteButtonClick(this);\" , \"style\":\"margin-left:4px;\"}).text(\"Delete\")
                                      )
                                ).appendTo(\$('#userListTable').find('tbody'));

                                console.log(\$tr.html());
                            });
                            \$(\"td:contains('null')\").text(\"NA\");
                            \$(\".userProfession:contains('0')\").text(\"Staff\");
                            \$(\".userProfession:contains('1')\").text(\"Lecturer\");
                            \$(\".userProfession:contains('2')\").text(\"Student\");
                        }
                        else if(data.status === 1){
                            document.getElementById('msg_noResults').style.display = '';
                            document.getElementById('userListTable').style.display = 'none';
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
    
    <!-- confirm user registration -->
    <script>
        function regButtonClick(el) {
            var indexNum = \$(el).attr('value');
            
            if (confirm('Are you sure that you want to register the user?')) {
                
                //var profession = \$(el).closest(\$(\"td:contains(Student)\")).text();
                    \$.ajax({
                        type: 'GET',
                        url: '";
        // line 384
        echo $this->env->getExtension('routing')->getPath("admin_register_users_confirm");
        echo "',
                        data: {'indexNum': indexNum },
                        dataType: 'json',
                        success: function (data){
                           console.log(\"Returned Data: \"+data+\"\\n\");
                           if(data.value === 1){
                               console.log(\"Try to remove the row\");
                               \$(el).closest('tr').remove();
                               console.log(\"row is removed\");
                           }
                           else{
                               alert(\"User registration failed!!!, DB Query execution error!!! Contact Admin\");
                           }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert(\"Status: \" + textStatus); 
                            alert(\"Error: \" + errorThrown); 
                        }
                    });
                    alert('User ' + indexNum + ' has been registered with the system!!!');
                } else {
                    alert('User account wasn\\'t registered with the system.');
                }
                
        }
    </script>
    
    <!-- confirm user registration -->
    <script>
        function deleteButtonClick(el) {
            var indexNum = \$(el).attr('value');
            
            if (confirm('Are you sure that you want to delete the user?')) {
                    \$.ajax({
                        type: 'GET',
                        url: '";
        // line 419
        echo $this->env->getExtension('routing')->getPath("admin_drop_user");
        echo "',
                        data: {'indexNum': indexNum },
                        dataType: 'json',
                        success: function (data){
                           console.log(\"Returned Data: \"+data+\"\\n\");
                           if(data.value === 1){
                               console.log(\"Try to remove the row\");
                               \$(el).closest('tr').remove();
                               console.log(\"row is removed\");
                           }
                           else{
                               alert(\"User deletion failed!!!, DB Query execution error!!! Contact Admin\");
                           }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert(\"Status: \" + textStatus); 
                            alert(\"Error: \" + errorThrown); 
                        }
                    });
                    alert('User ' + indexNum + ' has been deleted with the system!!!');
                } else {
                    alert('User account wasn\\'t registered with the system.');
                }
                
        }
    </script>
    
    
    
    
    <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Progressbar  -->
    <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/progressbar.js"), "html", null, true);
        echo "\"></script>
    
    <!-- bootstrap -->
    <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- nice scroll -->
    <script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    
        
    <!--script for this page only-->
        
    <!-- custom select -->
    <script src=\"";
        // line 466
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>

   
    <!--custome script for all page-->
    <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- custom script for this page-->
    <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
  
    

  </body>
</html>


";
        
        $__internal_3f8f88642d5bb3ee8bbba15d4dd9cf18b6d32a03921beca7e1a04f96b39adef4->leave($__internal_3f8f88642d5bb3ee8bbba15d4dd9cf18b6d32a03921beca7e1a04f96b39adef4_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:registerUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 473,  628 => 470,  621 => 466,  611 => 459,  607 => 458,  601 => 455,  595 => 452,  589 => 449,  556 => 419,  518 => 384,  452 => 321,  437 => 309,  433 => 308,  429 => 307,  408 => 288,  398 => 284,  394 => 283,  390 => 281,  385 => 279,  381 => 278,  377 => 277,  373 => 275,  368 => 273,  363 => 272,  358 => 270,  354 => 269,  350 => 268,  346 => 267,  342 => 266,  339 => 265,  335 => 264,  209 => 141,  205 => 140,  201 => 139,  185 => 126,  175 => 119,  151 => 98,  139 => 89,  134 => 87,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
