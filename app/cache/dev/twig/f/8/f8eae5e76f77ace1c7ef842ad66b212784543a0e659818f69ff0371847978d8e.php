<?php

/* GPABundle:AdminDashboard:viewStudentResults.html.twig */
class __TwigTemplate_f8eae5e76f77ace1c7ef842ad66b212784543a0e659818f69ff0371847978d8e extends Twig_Template
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
        $__internal_2df66fcbe16e97c635ac80036017dad9c11b9f84d722913554e598c338dc722f = $this->env->getExtension("native_profiler");
        $__internal_2df66fcbe16e97c635ac80036017dad9c11b9f84d722913554e598c338dc722f->enter($__internal_2df66fcbe16e97c635ac80036017dad9c11b9f84d722913554e598c338dc722f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:viewStudentResults.html.twig"));

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

    <title>Admin| Manage Results </title>

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
                          <li><a class=\"\" href=\"";
        // line 177
        echo $this->env->getExtension('routing')->getPath("admin_add_results");
        echo "\">Enter Results</a></li>  
                          <li><a class=\"\" href=\"";
        // line 178
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
          <section class=\"wrapper\" style=\"margin-left: 15px;\">            
            
            <!--overview start-->
            <div class=\"row\">
                    <div class=\"col-lg-10\">
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Manage Results</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
                                    <li><i class=\"fa fa-users\"></i>Manage Results</li>
                                    <li><i class=\"fa fa-user\"></i>View Student Results</li>
                            </ol>
                    </div>
            </div>
  
            <div class=\"row\">
                <div class=\"col-lg-10\">
                    <div class=\"panel \">
                        <div class=\"panel-body bio-graph-info\" style=\"\">
                            <form class=\"form-horizontal col-lg-12\" action=\"javascript:void(0);\">
                                <h1> Search</h1>
                                
                                <div class=\"form-group\">
                                    <label class=\"control-label col-lg-2\">Student ID</label>
                                    <div class=\"col-lg-2\">
                                        <input type=\"text\" class=\"\" id=\"student_id\"  name=\"student_id\" value='' required>
                                    </div>
                                    <div class=\"col-lg-1\">
                                        <button type=\"submit\" class=\"btn btn-primary\" id=\"searchButton\" name=\"searchButton\" style=\"margin-top:0px;\">Search</button>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <span id=\"msgNoUser\" class=\"alert alert-warning col-lg-8 text-center\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\">This Student ID is not in the system!!</span>
                                        <span id=\"msgInvalidID\" class=\"alert alert-warning col-lg-8 text-center\" role=\"alert\" style=\"display: none; color: #9E7F01;margin-bottom: 0px;padding-bottom: 5px;padding-top: 5px;\">Not a valid Student ID!!</span>
                                    </div>
                                  
                                </div>
                                 <div class=\"form-group\">
                                    <label class=\"col-lg-2 control-label\">Name:</label><div  id=\"labelName\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                                    <label class=\"col-lg-2 control-label\">Department:</label><div id=\"labelDepartment\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                                    <label class=\"col-lg-2 control-label\">Email:</label><div id=\"labelEmail\" class=\"col-lg-10 control-label\" style=\"text-align: left;\">NA</div>
                                </div>

                                
                            </form>
                        </div>
                    </div> ";
        // line 237
        echo "                </div>  ";
        // line 238
        echo "            </div><!--/.row-->

            <div class=\"row\">
                <div class=\"col-lg-10\">
                    <div class=\"panel\">
                        <div class=\"panel-body bio-graph-info\" id=\"resultPanel\" style=\"display: none;\">
                            <h1> Search Results</h1>
                            <div class=\"alert alert-info col-lg-8 text-center\" role=\"alert\" id=\"msg_noResults\" style=\"color: #03597D; display: none;\">No results found, change the search parameters and search again.</div>
                            <div class=\"alert alert-danger col-lg-8 text-center\" role=\"alert\" id=\"msg_queryFailed\" style=\"color: #03597D; display: none;\">Query execution failed, change the search parameters and search again.</div>
                            <div class=\"col-lg-2 filter\" style=\"margin-bottom: 20px;\">
                              <label class=\"control-label\">Order By:</label>
                              <div class=\"\">
                                  <select class=\"form-control\" id=\"orderBy\" name=\"orderBy\" style=\"padding-top:0px; height: 28px;\">
                                        <option value='id'>Course ID</option>
                                        <option value='title'>Title</option>
                                        <option value='semester'selected>Semester</option>
                                        <option value='grade'>Grade</option>   
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
                                    <td class=\"col-lg-2\">Title</td>
                                    <td class=\"col-lg-1\">Semester</td>
                                    <td class=\"col-lg-1\">Grade</td>
                                    <td class=\"col-lg-1 text-center\">Tasks</td>

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
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
  
  

    <!-- Search Results - Ajax Call -->
    <script>
        \$(document).ready(function(){
            \$('#student_id').keyup(function(){
                if( \$('#student_id').val().length !== 7){
                    document.getElementById('msgInvalidID').style.display = '';
                    document.getElementById('msgNoUser').style.display = 'none';
                }
                else{
                    document.getElementById('msgInvalidID').style.display = 'none';
                }
            });
        });
        
        \$(document).ready(function(){
            \$(\"#searchButton\").click(function(){
                
                var student_id = \$('#student_id').val();
                if( student_id.length === 7){
                    
                    \$.ajax({
                        type: 'GET',
                        url: '";
        // line 327
        echo $this->env->getExtension('routing')->getPath("admin_get_student_results");
        echo "',
                        data: {'student_id': student_id},
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
                                        \$('<td>').append(\$('<strong>').text(item.id)),
                                        \$('<td>').text(item.title),
                                        \$('<td>').attr({\"class\":\"text-center\" }).text(item.semester),
                                        \$('<td>').attr({\"class\":\"text-center\" }).text(item.grade),
                                        \$('<td>').attr({\"class\":\"text-center\" }).append(
                                            \$('<button>').attr({\"value\":item.id , \"id\":\"editButton\" , \"style\": \"margin-left: 5px; margin-top: 3px;\" , \"class\":\"btn btn-sm\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Edit\"),
                                            \$('<button>').attr({\"value\":item.id , \"id\":\"deleteButton\" , \"style\": \"margin-left: 5px; margin-top: 3px;\" , \"class\":\"btn btn-sm\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Delete\")
                                          )
                                    ).appendTo(\$('#resultTable').find('tbody'));

                                    console.log(\$tr.html());
                                });

                           }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert(\"Status: \" + textStatus); 
                            alert(\"Error: \" + errorThrown); 
                        }
                    });
                }
                
  
            });
        });
    </script>
    
    <!-- Arranging users list according to a column value - Ajax -->
    <script>
        \$(document).ready(function(){
            \$(\"#filterBy, #orderBy, #order\").change(function(){
                
                var student_id = \$('#student_id').val();

                var orderBy = \$('#orderBy').val();
                var order = \$('#order').val();
                //console.log(\"profession: \"+\$('#profession').val()+\"\\n\");
                \$.ajax({
                    type: 'GET',
                    url: '";
        // line 396
        echo $this->env->getExtension('routing')->getPath("admin_get_student_results");
        echo "',
                    data: { 'orderBy': orderBy,
                            'order': order,
                            'student_id': student_id},
                    dataType: 'json',
                    success: function (data){
                       console.log(\"Returned Data: \"+data+\"\\n\");
                        \$('#resultTable').find('tbody').find('tr').remove();
                        if( data.status === undefined){
                            document.getElementById('msg_noResults').style.display = 'none';
                            document.getElementById('resultTable').style.display = '';
                            \$.each(data, function(i, item) {
                                    
                                    var \$tr = \$('<tr>').append(
                                        \$('<td>').append(\$('<strong>').text(item.id)),
                                        \$('<td>').text(item.title),
                                        \$('<td>').attr({\"class\":\"text-center\" }).text(item.semester),
                                        \$('<td>').attr({\"class\":\"text-center\" }).text(item.grade),
                                        \$('<td>').attr({\"class\":\"text-center\" }).append(
                                            \$('<button>').attr({\"value\":item.id , \"id\":\"editButton\" , \"style\": \"margin-left: 5px; margin-top: 3px;\" , \"class\":\"btn btn-sm\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Edit\"),
                                            \$('<button>').attr({\"value\":item.id , \"id\":\"deleteButton\" , \"style\": \"margin-left: 5px; margin-top: 3px;\" , \"class\":\"btn btn-sm\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Delete\")
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
     
   <!-- check student availability  -->
    <script>
        \$(document).ready(function(){
            \$(\"#student_id\").on('keyup',function(){
                var student_id= \$('#student_id').val();
                if (student_id.length === 7){
                    document.getElementById('msgInvalidID').style.display = 'none';
                    \$.ajax({
                        type: 'GET',
                        url: '";
        // line 453
        echo $this->env->getExtension('routing')->getPath("admin_check_student_availability");
        echo "',
                        data: {'indexNum': student_id},
                        dataType: 'json',
                        success: function (data){
                           console.log(\"Returned Data: \"+data+\"\\n\");
                            if( data.status === undefined){
                                //\$(\"td:contains('null')\").text(\"NA\");
                                document.getElementById('msgNoUser').style.display = 'none';
                                \$('#labelName').text(data.first_name+\" \"+data.last_name);
                                \$('#labelDepartment').text(data.department);
                                \$('#labelEmail').text(data.email);
                            }
                            else if( data.status === 1){ //DB query returned a null set
                                document.getElementById('msgNoUser').style.display = '';
                                \$('#labelName').text('NA');
                                \$('#labelDepartment').text('NA');
                                \$('#labelEmail').text('NA');
                            }
                            else{ //when data.status ==2  // DB query failure
                                alert(\"User Availability Ajax call -> DB query execution fail\");
                            }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert(\"Status: \" + textStatus); 
                            alert(\"Error: \" + errorThrown); 
                        }
                    });
                }
                else{
                    document.getElementById('msgInvalidID').style.display = '';
                    document.getElementById('msgNoUser').style.display = 'none';
                }

            });
        });
    </script>
    
    <!-- Task Button Actions -->
    <script>
        function resultsButtonClick(el) {
            var course_id = \$(el).attr('value');
            var student_id = \$('#student_id').val();
            
            // EDIT button action
            if(\$(el).attr('id') === \"editButton\"){
                var win = window.open('http://localhost/gpa2/web/app_dev.php/admin/student/edit_results/' + course_id + '/' + student_id, '_blank');
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
                if (confirm('Warning! Are you sure that you want to delete course results?')) {
                        \$.ajax({
                            type: 'GET',
                            url: '";
        // line 513
        echo $this->env->getExtension('routing')->getPath("admin_delete_student_results");
        echo "',
                            data: {'course_id': course_id , 'student_id': student_id },
                            dataType: 'json',
                            success: function (data){
                               console.log(\"Returned Data: \"+data+\"\\n\");
                               if(data.value === 1){
                                   console.log(\"Try to remove the row\");
                                   \$(el).closest('tr').remove();
                                   console.log(\"row is removed\");
                               }
                               else{
                                   alert(\"Result wasn't deleted!!!, DB Query execution error!!! Contact Admin\");
                               }
                            },
                            error: function(XMLHttpRequest, textStatus, errorThrown) { 
                                alert(\"Status: \" + textStatus); 
                                alert(\"Error: \" + errorThrown); 
                            }
                        });
                        alert('Student ' + student_id + ' result for ' + course_id + ' has been deleted from the database!!!');
                }
                else {
                    alert('The course wasn\\'t deleted from the system.');
                }
            }
        
    }
    </script>

    
    <!-- bootstrap -->
    <script src=\"";
        // line 544
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- nice scroll -->
    <script src=\"";
        // line 547
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 548
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    
        
    <!--script for this page only-->
        
    <!-- custom select -->
    <script src=\"";
        // line 555
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>

   
    <!--custome script for all page-->
    <script src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- custom script for this page-->
    <script src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
  
    

  </body>
</html>

";
        
        $__internal_2df66fcbe16e97c635ac80036017dad9c11b9f84d722913554e598c338dc722f->leave($__internal_2df66fcbe16e97c635ac80036017dad9c11b9f84d722913554e598c338dc722f_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:viewStudentResults.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  680 => 562,  674 => 559,  667 => 555,  657 => 548,  653 => 547,  647 => 544,  613 => 513,  550 => 453,  490 => 396,  418 => 327,  389 => 301,  385 => 300,  380 => 298,  376 => 297,  315 => 238,  313 => 237,  252 => 178,  248 => 177,  209 => 141,  205 => 140,  201 => 139,  185 => 126,  175 => 119,  151 => 98,  139 => 89,  134 => 87,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
