<?php

/* GPABundle:AdminDashboard:viewCourse.html.twig */
class __TwigTemplate_652484ed025e7ba93b2f88bde39dfe8979f5a2fa2ff9391432a15919af22e5da extends Twig_Template
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
        $__internal_c4518a211a2f9e7a4f24a158d177cfea2140720d2b542fcb5ba3644259967a63 = $this->env->getExtension("native_profiler");
        $__internal_c4518a211a2f9e7a4f24a158d177cfea2140720d2b542fcb5ba3644259967a63->enter($__internal_c4518a211a2f9e7a4f24a158d177cfea2140720d2b542fcb5ba3644259967a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:viewCourse.html.twig"));

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

    <title>Admin| Manage Courses </title>

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
        echo $this->env->getExtension('routing')->getPath("admin_add_user");
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
                    <div class=\"col-lg-11\">
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Manage Courses</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
                                    <li><i class=\"fa fa-users\"></i>Manage Courses</li>
                                    <li><i class=\"fa fa-user\"></i>View Courses</li>
                            </ol>
                    </div>
            </div>
  
            <div class=\"row\">
                <div class=\"col-lg-11\">
                    <div class=\"panel \">
                        <div class=\"panel-body bio-graph-info\" style=\"\">
                            <form action=\"javascript:void(0);\">
                                <h1> Search</h1>
                                
                                <div class=\"col-lg-2\">
                                  <label class=\" control-label\">Department</label>
                                  <div class=\"\">
                                      <select class=\"form-control\" id=\"department\" name=\"department\" required style=\"padding-top:0px; height: 28px;\">
                                            <option value='0' disabled selected style='display:none;'>Department</option>
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
                                            <option value='ADMIN'>ADMIN</option>
                                        </select>
                                  </div>
                                </div>
                                
                                <div class=\"col-lg-3\">
                                  <label class=\"control-label\">Lecturer</label>
                                  <div class=\"\">
                                      <select class=\"form-control\" id=\"lec_name\" name=\"lec_name\" required style=\"padding-top:0px; height: 28px;\">
                                            <option value='0' disabled selected style='display:none;'>Lecturer</option>
                                        </select>
                                  </div>
                                </div>

                                <div class=\"col-lg-2\">
                                  <label class=\"control-label\">Course ID</label>
                                  <div class=\"\">
                                      <input type=\"text\" class=\"\" id=\"course_id\"  name=\"course_id\" value=''>
                                  </div>
                                </div>

                                <div class=\"col-lg-2\">
                                  <label class=\"control-label\">Title</label>
                                  <div class=\"\">
                                      <input type=\"text\" class=\"\" id=\"title\"  name=\"title\" value=''>
                                  </div>
                                </div>

                                <div class=\"col-lg-1\">
                                    <button type=\"submit\" class=\"btn btn-primary\" id=\"searchButton\" name=\"searchButton\" style=\"margin-top:20px;\">Search</button>
                                </div>
                            </form>
                        </div>
                    </div> ";
        // line 261
        echo "                </div>  ";
        // line 262
        echo "            </div><!--/.row-->

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"panel\">
                        <div class=\"panel-body bio-graph-info\" id=\"resultPanel\" style=\"display: none;\">
                            <h1> Search Results</h1>
                            <div class=\"alert alert-info col-lg-8 text-center\" role=\"alert\" id=\"msg_noResults\" style=\"color: #03597D; display: none;\">No results found, change the search parameters and search again.</div>
                            <div class=\"alert alert-danger col-lg-8 text-center\" role=\"alert\" id=\"msg_queryFailed\" style=\"color: #03597D; display: none;\">Query execution failed, change the search parameters and search again.</div>
                            <div class=\"col-lg-2 filter\" style=\"margin-bottom: 20px;\">
                              <label class=\"control-label\">Order By:</label>
                              <div class=\"\">
                                  <select class=\"form-control\" id=\"orderBy\" name=\"orderBy\" style=\"padding-top:0px; height: 28px;\">
                                        <option value='id' selected>User ID</option>
                                        <option value='first_name'>First Name</option>
                                        <option value='last_name'>Last Name</option>
                                        <option value='email'>Email</option>   
                                    </select>
                              </div>
                            </div>
                            <div class=\"col-lg-2 filter\" style=\"margin-bottom: 20px;\">
                              <label class=\"control-label\">Order:</label>
                              <div class=\"\">
                                  <select class=\"form-control\" id=\"order\" name=\"order\" style=\"padding-top:0px; height: 28px;\">
                                        <option value='ASC' selected>Assending</option>
                                        <option value='DESC'>Descending</option>

                                    </select>
                              </div>
                            </div>
                            
                            <table class=\"table table-bordered\" id=\"resultTable\">
                                <thead>
                                    <td class=\"col-lg-1\">Course ID</td>
                                    <td class=\"col-lg-3\">Title</td>
                                    <td class=\"col-lg-1\">Credits</td>
                                    <td class=\"col-lg-1\">Semester</td>
                                    <td class=\"col-lg-1 text-center\">Year</td>
                                    <td class=\"col-lg-2 text-center\">Remarks</td>
                                    <td class=\"col-lg-2 text-center\">Tasks</td>

                                </thead>
                                <tbody>
                                    
                                </tbody>
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
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
  
  

    <!-- Search Results - Ajax Call -->
    <script>
        \$(document).ready(function(){
            \$(\"#searchButton\").click(function(){
                
                var lec_id = \$('#lec_name').val();
                var department = \$('#department').val();
                var course_id = \$('#course_id').val();
                var title = \$('#title').val();
                //console.log(\"profession: \"+one+\"\\n\");
                //console.log(\"dapartment: \"+two+\"\\n\");
                if(lec_id == 0){
                    document.getElementById('msg_noResults').style.display = '';
                    document.getElementById('resultTable').style.display = 'none';
                    document.getElementById('msg_queryFailed').style.display = 'none';
                }
                
                if( department !== 0 && lec_id !== 0){
                    \$.ajax({
                        type: 'GET',
                        url: '";
        // line 351
        echo $this->env->getExtension('routing')->getPath("admin_ajax_view_courses");
        echo "',
                        data: {'lec_id': lec_id,
                               'department': department,
                               'course_id': course_id,
                               'title': title
                        },
                        dataType: 'json',
                        success: function (data){
                           console.log(\"Returned Data: \"+data+\"\\n\");
                           if(data.value !== undefined){
                                if(data.value === 1){
                                   document.getElementById('resultPanel').style.display = '';
                                   document.getElementById('msg_noResults').style.display = '';
                                   document.getElementById('resultTable').style.display = 'none';
                                   \$(\".filter\").css(\"display\",\"none\");
                                }
                                    if(data.value === 2){
                                   document.getElementById('resultPanel').style.display = '';
                                   document.getElementById('msg_queryFailed').style.display = '';
                                   document.getElementById('resultTable').style.display = 'none';
                                   \$(\".filter\").css(\"display\",\"none\");
                               }
                           }
                           else{
                                document.getElementById('resultPanel').style.display = '';
                                document.getElementById('msg_noResults').style.display = 'none';
                                document.getElementById('msg_queryFailed').style.display = 'none';
                                document.getElementById('resultTable').style.display = '';
                                \$(\".filter\").css(\"display\",\"\");
                                
                                \$('#resultTable').find('tbody').find('tr').remove();                            
                                \$.each(data, function(i, item) {
                                    
                                    var \$tr = \$('<tr>').append(
                                        \$('<td>').append(\$('<strong>').text(item.course_id)),
                                        \$('<td>').text(item.title),
                                        \$('<td>').attr({\"class\":\"text-center\" }).text(item.credits),
                                        \$('<td>').attr({\"class\":\"text-center\" }).text(item.semester),
                                        \$('<td>').attr({\"class\":\"text-center\" }).text(item.year),
                                        \$('<td>').text(item.remarks),
                                        \$('<td>').append(
                                            \$('<button>').attr({\"value\":item.course_id , \"id\":\"resultsButton\" , \"style\": \"margin-left: 5px; margin-top: 3px;\" , \"class\":\"btn btn-sm\", \"OnClick\":\"resultsButtonClick(this);\" }).text(\"Results\"),
                                            \$('<button>').attr({\"value\":item.course_id , \"id\":\"editButton\" , \"style\": \"margin-left: 5px; margin-top: 3px;\" , \"class\":\"btn btn-sm\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Edit\"),
                                            \$('<button>').attr({\"value\":item.course_id , \"id\":\"deleteButton\" , \"style\": \"margin-left: 5px; margin-top: 3px;\" , \"class\":\"btn btn-sm\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Delete\")
                                          )
                                    ).appendTo(\$('#resultTable').find('tbody'));

                                    console.log(\$tr.html());
                                });
                                
                                //following if block won't wor outside the ajax success function - Contact Mirage
                                //if( ";
        // line 402
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array(), "method"), "html", null, true);
        echo " !== 3  && \$('#profession').val() === '0'){
                                    //\$(\"#editButton\").attr(\"disabled\",\"disabled\");
                                //}
                           }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert(\"Status: \" + textStatus); 
                            alert(\"Error: \" + errorThrown); 
                        }
                    });
                }
                else{
                    alert(\"Select a profession and a department\");
                }
  
            });
        });
    </script>
    
    <!-- Arranging users list according to a column value - Ajax -->
    <script>
        \$(document).ready(function(){
            \$(\"#filterBy, #orderBy, #order\").change(function(){
                
                var lec_id = \$('#lec_name').val();
                var department = \$('#department').val();
                var course_id = \$('#course_id').val();
                var title = \$('#title').val();
                
                
                var orderBy = \$('#orderBy').val();
                var order = \$('#order').val();
                //console.log(\"profession: \"+\$('#profession').val()+\"\\n\");
                \$.ajax({
                    type: 'GET',
                    url: '";
        // line 437
        echo $this->env->getExtension('routing')->getPath("admin_ajax_view_courses");
        echo "',
                    data: { 'orderBy': orderBy,
                            'order': order,
                            'lec_id': lec_id,
                            'department': department,
                            'course_id': course_id,
                            'title': title
                            },
                    dataType: 'json',
                    success: function (data){
                       console.log(\"Returned Data: \"+data+\"\\n\");
                        \$('#resultTable').find('tbody').find('tr').remove();
                        if( data.status === undefined){
                            document.getElementById('msg_noResults').style.display = 'none';
                            document.getElementById('resultTable').style.display = '';
                            \$.each(data, function(i, item) {
                                    
                                    var \$tr = \$('<tr>').append(
                                        \$('<td>').append(\$('<strong>').text(item.course_id)),
                                        \$('<td>').text(item.title),
                                        \$('<td>').attr({\"class\":\"text-center\" }).text(item.credits),
                                        \$('<td>').attr({\"class\":\"text-center\" }).text(item.semester),
                                        \$('<td>').attr({\"class\":\"text-center\" }).text(item.year),
                                        \$('<td>').text(item.remarks),
                                        \$('<td>').append(
                                            \$('<button>').attr({\"value\":item.course_id , \"id\":\"resultsButton\" , \"style\": \"margin-left: 5px; margin-top: 3px;\" , \"class\":\"btn btn-sm\", \"OnClick\":\"resultsButtonClick(this);\" }).text(\"Results\"),
                                            \$('<button>').attr({\"value\":item.course_id , \"id\":\"editButtton\" , \"style\": \"margin-left: 5px; margin-top: 3px;\" , \"class\":\"btn btn-sm\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Edit\"),
                                            \$('<button>').attr({\"value\":item.course_id , \"id\":\"deleteButton\" , \"style\": \"margin-left: 5px; margin-top: 3px;\" , \"class\":\"btn btn-sm\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Delete\")
                                          )
                                    ).appendTo(\$('#resultTable').find('tbody'));

                                    console.log(\$tr.html());
                                });
  
                        }
                        else if(data.status === 1){
                            document.getElementById('msg_noResults').style.display = '';
                            document.getElementById('resultTable').style.display = 'none';
                            \$(\".filter\").css(\"display\",\"none\");
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
        // line 501
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
    
    <!-- Task Button Actions -->
    <script>
        function resultsButtonClick(el) {
            var course_id = \$(el).attr('value');
            
            // EDIT button action
            if(\$(el).attr('id') === \"editButton\"){
                var win = window.open('http://localhost/gpa2/web/app_dev.php/admin/manage_course/edit/'+course_id, '_blank');
                if(win){
                    //Browser has allowed it to be opened
                    win.focus();
                }else{
                    //Broswer has blocked it
                    alert('Please allow popups for GPA App');
                }
            
            //Results button action
            }else if(\$(el).attr('id') === \"resultsButton\"){
                var win = window.open('http://localhost/gpa2/web/app_dev.php/admin/manage_course/results/'+course_id, '_blank');
                if(win){
                    //Browser has allowed it to be opened
                    win.focus();
                }else{
                    //Broswer has blocked it
                    alert('Please allow popups for GPA App');
                }
            }
            
            //DELETE button action
            else{
                if (confirm('Warning! Are you sure that you want to delete this course?')) {
                    if (confirm('Warning! The Results associated with this course also will be deleted!')) {
                        \$.ajax({
                            type: 'GET',
                            url: '";
        // line 570
        echo $this->env->getExtension('routing')->getPath("admin_delete_course");
        echo "',
                            data: {'courseID': course_id },
                            dataType: 'json',
                            success: function (data){
                               console.log(\"Returned Data: \"+data+\"\\n\");
                               if(data.value === 1){
                                   console.log(\"Try to remove the row\");
                                   \$(el).closest('tr').remove();
                                   console.log(\"row is removed\");
                               }
                               else{
                                   alert(\"Course wasn't deleted!!!, DB Query execution error!!! Contact Admin\");
                               }
                            },
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                                alert(\"Status: \" + textStatus); 
                                alert(\"Error: \" + errorThrown); 
                            }
                        });
                        alert('Course ' + course_id + ' has been deleted from the database!!!');
                    }
                }
                else {
                    alert('The course wasn\\'t deleted from the system.');
                }
            }
        
    }
    </script>

    
    <!-- bootstrap -->
    <script src=\"";
        // line 602
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- nice scroll -->
    <script src=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 606
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    
        
    <!--script for this page only-->
        
    <!-- custom select -->
    <script src=\"";
        // line 613
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>

   
    <!--custome script for all page-->
    <script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- custom script for this page-->
    <script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
  
    

  </body>
</html>

";
        
        $__internal_c4518a211a2f9e7a4f24a158d177cfea2140720d2b542fcb5ba3644259967a63->leave($__internal_c4518a211a2f9e7a4f24a158d177cfea2140720d2b542fcb5ba3644259967a63_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:viewCourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  735 => 620,  729 => 617,  722 => 613,  712 => 606,  708 => 605,  702 => 602,  667 => 570,  595 => 501,  528 => 437,  490 => 402,  436 => 351,  409 => 327,  405 => 326,  400 => 324,  396 => 323,  333 => 262,  331 => 261,  209 => 141,  205 => 140,  201 => 139,  185 => 126,  175 => 119,  151 => 98,  139 => 89,  134 => 87,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
