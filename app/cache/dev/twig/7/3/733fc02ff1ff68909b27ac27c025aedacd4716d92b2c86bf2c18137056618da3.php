<?php

/* GPABundle:AdminDashboard:viewUsers.html.twig */
class __TwigTemplate_733fc02ff1ff68909b27ac27c025aedacd4716d92b2c86bf2c18137056618da3 extends Twig_Template
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
        $__internal_4ef0d277a693caadb224364b1820cf298c6db98141529abb0d0698c0de92bb09 = $this->env->getExtension("native_profiler");
        $__internal_4ef0d277a693caadb224364b1820cf298c6db98141529abb0d0698c0de92bb09->enter($__internal_4ef0d277a693caadb224364b1820cf298c6db98141529abb0d0698c0de92bb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:AdminDashboard:viewUsers.html.twig"));

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
                            <h3 class=\"page-header\"><i class=\"fa fa-laptop\"></i> Manage Users</h3>
                            <ol class=\"breadcrumb\">
                                    <li><i class=\"fa fa-home\"></i><a href=\"index.html\">Home</a></li>
                                    <li><i class=\"fa fa-users\"></i>Manage Users</li>
                                    <li><i class=\"fa fa-user\"></i>View Users</li>
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
                                  <label class=\"control-label\">Profession</label>
                                  <div class=\"\">
                                      <select class=\"form-control\" id=\"profession\" name=\"profession\" onchange=\"changeProfession()\" required style=\"padding-top:0px; height: 28px;\">
                                            <option value='9' disabled selected style='display:none;'>Profession</option>
                                            <option value='0'>Staff_Member</option>
                                            <option value='1'>Lecturer</option>
                                            <option value='2'>Student</option>
                                        </select>
                                  </div>
                                </div>

                                <div class=\"col-lg-2\">
                                  <label class=\" control-label\">Department</label>
                                  <div class=\"\">
                                      <select class=\"form-control\" id=\"department\" name=\"department\" onblur=\"confirmProfession()\" required style=\"padding-top:0px; height: 28px;\">
                                            <option value='9' disabled selected style='display:none;'>Department</option>
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

                                <div class=\"col-lg-2\">
                                  <label class=\"control-label\">ID</label>
                                  <div class=\"\">
                                      <input type=\"text\" class=\"\" id=\"indexNum\"  name=\"indexNum\" value=''>
                                  </div>
                                </div>

                                <div class=\"col-lg-2\">
                                  <label class=\"control-label\">Email</label>
                                  <div class=\"\">
                                      <input type=\"email\" class=\"\" id=\"email\"  name=\"email\" pattern=\"[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}\$\" value=''>
                                  </div>
                                </div>

                                <div class=\"col-lg-2\">
                                  <label class=\"control-label\">Name</label>
                                  <div class=\"\">
                                      <input type=\"text\" class=\"\" id=\"name\"  name=\"name\" value=''>
                                  </div>
                                </div>

                                <div class=\"col-lg-1\">
                                    <button type=\"submit\" class=\"btn btn-primary\" id=\"searchButton\" name=\"searchButton\" style=\"margin-top:20px;\">Search</button>
                                </div>
                            </form>
                        </div>
                    </div> ";
        // line 270
        echo "                </div>  ";
        // line 271
        echo "            </div><!--/.row-->

            <div class=\"row\">
                <div class=\"col-lg-11\">
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
                                    <td class=\"col-lg-1\">Index No.</td>
                                    <td class=\"col-lg-2\">First Name</td>
                                    <td class=\"col-lg-2\">Last Name</td>
                                    <td class=\"col-lg-2\">Email</td>
                                    <td class=\"col-lg-2\">Mobile</td>
                                    <td class=\"col-lg-3 text-center\">Tasks</td>

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
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" ></script>
    <script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.10.4.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui-1.9.2.custom.min.js"), "html", null, true);
        echo "\"></script>
  
  
  <!-- Search Parameters validation -->
  <script>
        
        function changeProfession(){
          if(document.getElementsByName(\"profession\")[0].value === '0' ) {
                document.getElementsByName(\"department\")[0].value = 'ADMIN';
          }
          else if (document.getElementsByName(\"department\")[0].value === 'ADMIN' && (document.getElementsByName(\"profession\")[0].value === '1' || document.getElementsByName(\"profession\")[0].value === '2')){
              document.getElementsByName(\"department\")[0].value = '';
              alert(\"Select a department!\");
          }
        }
        
        function confirmProfession(){
           if(document.getElementsByName(\"profession\")[0].value === '0' && document.getElementsByName(\"department\")[0].value != 'ADMIN') {
                document.getElementsByName(\"department\")[0].value = 'ADMIN';
          } 
        }
        
        function validateID(){
            var id = document.getElementsByName(\"id\")[0];
            //improve the User ID validation process
            if(id.length !== 7){
                id.setCustomValidity(\"Enter a valid ID\");
            }
        }
                          
    </script>
  
    <!-- Search Results - Ajax Call -->
    <script>
        \$(document).ready(function(){
            \$(\"#searchButton\").click(function(){
                var one = \$('#profession').val();
                var two = \$('#department').val();
                var three = \$('#indexNum').val();
                //console.log(\"profession: \"+one+\"\\n\");
                //console.log(\"dapartment: \"+two+\"\\n\");
                
                if( one !== null && two !== null ){
                    console.log(\"profession: \"+\$('#profession').val()+\"\\n\");
                    console.log(\"department: \"+\$('#department').val()+\"\\n\");
                    console.log(\"index: \"+three+\"\\n\");
                    console.log(\"email: \"+\$('#email').val()+\"\\n\");
                    console.log(\"name: \"+\$('#name').val()+\"\\n\");
                    \$.ajax({
                        type: 'GET',
                        url: '";
        // line 386
        echo $this->env->getExtension('routing')->getPath("admin_ajax_view_users");
        echo "',
                        data: {'profession': \$('#profession').val(),
                               'department': \$('#department').val(),
                               'indexNum': \$('#indexNum').val(),
                               'email': \$('#email').val(),
                               'name': \$('#name').val()
                        },
                        dataType: 'json',
                        success: function (data){
                           console.log(\"Returned Data: \"+data+\"\\n\");
                           if(data.value !== undefined){
                                if(data.value === 1){
                                   document.getElementById('resultPanel').style.display = 'block';
                                   document.getElementById('msg_noResults').style.display = 'block';
                                   document.getElementById('resultTable').style.display = 'none';
                                   \$(\".filter\").css(\"display\",\"none\");
                                }
                                    if(data.value === 2){
                                   document.getElementById('resultPanel').style.display = 'block';
                                   document.getElementById('msg_queryFailed').style.display = 'block';
                                   document.getElementById('resultTable').style.display = 'none';
                                   \$(\".filter\").css(\"display\",\"none\");
                               }
                           }
                           else{
                                document.getElementById('resultPanel').style.display = 'block';
                                document.getElementById('msg_noResults').style.display = 'none';
                                document.getElementById('msg_queryFailed').style.display = 'none';
                                document.getElementById('resultTable').style.display = '';
                                //var trHTML = '';
                                ";
        // line 422
        echo "                                \$('#resultTable').find('tbody').find('tr').remove();                            
                                \$.each(data, function(i, item) {
                                    
                                    var \$tr = \$('<tr>').append(
                                        \$('<td>').text(item.indexNum),
                                        \$('<td>').text(item.first_name),
                                        \$('<td>').text(item.last_name),
                                        \$('<td>').text(item.email),
                                        \$('<td>').text(item.mobile),
                                        \$('<td>').append(
                                            \$('<button>').attr({\"value\":item.indexNum , \"id\":\"viewButton\" , \"style\": \"margin-left: 15px; margin-top: 3px;\" , \"class\":\"btn btn-sm viewButton\", \"OnClick\":\"resultsButtonClick(this);\" }).text(\"View\"),
                                            \$('<button>').attr({\"value\":item.indexNum , \"id\":\"editButton\" , \"style\": \"margin-left: 15px; margin-top: 3px;\" , \"class\":\"btn btn-sm editButton\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Edit Details\"),
                                            \$('<button>').attr({\"value\":item.indexNum , \"id\":\"deleteButton\" , \"style\": \"margin-left: 15px; margin-top: 3px;\" , \"class\":\"btn btn-sm deleteButton\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Delete\")
                                          )
                                    ).appendTo(\$('#resultTable').find('tbody'));

                                    console.log(\$tr.html());
                                });
                                //\$('#resultTable').find('tbody').append(trHTML);
                                //\$( \"input[value='Hot Fuzz']\" ).next().text( \"Hot Fuzz\" );
                                //\$(\"#department option:not(:contains('ADMIN'))\").attr(\"disabled\",\"disabled\");
                                ";
        // line 446
        echo "                                
                                //following if block won't wor outside the ajax success function - Contact Mirage
                                if( ";
        // line 448
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array(), "method"), "html", null, true);
        echo " !== 3  && \$('#profession').val() === '0'){
                                    \$(\".editButton\").attr(\"disabled\",\"disabled\");
                                    \$(\".viewButton\").attr(\"disabled\",\"disabled\");
                                    \$(\".deleteButton\").attr(\"disabled\",\"disabled\");
                                }
                                if( ";
        // line 453
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array(), "method"), "html", null, true);
        echo " == 3 ){
                                    //\$(\".viewButton\").attr(\"disabled\",\"disabled\");
                                }
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
                var profession = \$('#profession').val();
                var department = \$('#department').val();
                var indexNum = \$('#indexNum').val();
                var email = \$('#email').val();
                var name = \$('#name').val();
                
                
                var orderBy = \$('#orderBy').val();
                var order = \$('#order').val();
                //console.log(\"profession: \"+\$('#profession').val()+\"\\n\");
                \$.ajax({
                    type: 'GET',
                    url: '";
        // line 492
        echo $this->env->getExtension('routing')->getPath("admin_ajax_view_users");
        echo "',
                    data: {'orderBy': orderBy,
                            'order': order,
                            'profession': profession,
                            'department': department,
                            'indexNum': indexNum,
                            'email': email,
                            'name': name
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
                                    \$('<td>').append(\$('<strong>').text(item.indexNum)),
                                    \$('<td>').text(item.first_name),
                                    \$('<td>').text(item.last_name),
                                    \$('<td>').text(item.email),
                                    \$('<td>').text(item.mobile),
                                    \$('<td>').attr({\"class\":\"text-center\"}).append(
                                            \$('<button>').attr({\"value\":item.indexNum , \"id\":\"viewButton\" , \"style\": \"margin-left: 15px; margin-top: 3px;\" , \"class\":\"btn btn-sm viewButton\", \"OnClick\":\"resultsButtonClick(this);\" }).text(\"View\"),
                                            \$('<button>').attr({\"value\":item.indexNum , \"id\":\"editButton\" , \"style\": \"margin-left: 15px; margin-top: 3px;\" , \"class\":\"btn btn-sm editButton\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Edit Details\"),
                                            \$('<button>').attr({\"value\":item.indexNum , \"id\":\"deleteButton\" , \"style\": \"margin-left: 15px; margin-top: 3px;\" , \"class\":\"btn btn-sm deleteButton\", \"OnClick\":\"resultsButtonClick(this);\"}).text(\"Delete\")
                                      )
                                ).appendTo(\$('#resultTable').find('tbody'));

                                console.log(\$tr.html());
                                if( ";
        // line 523
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array(), "method"), "html", null, true);
        echo " !== 3  && \$('#profession').val() === '0'){
                                    \$(\".editButton\").attr(\"disabled\",\"disabled\");
                                    \$(\".viewButton\").attr(\"disabled\",\"disabled\");
                                    \$(\".deleteButton\").attr(\"disabled\",\"disabled\");
                                }
                                
                                if( ";
        // line 529
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userDetails"]) ? $context["userDetails"] : $this->getContext($context, "userDetails")), "getProfession", array(), "method"), "html", null, true);
        echo " === 3 ){
                                    \$(\".viewButton\").attr(\"disabled\",\"disabled\");
                                }
                            });
                            \$(\"td:contains('null')\").text(\"NA\");
                            \$(\".userProfession:contains('0')\").text(\"Staff\");
                            \$(\".userProfession:contains('1')\").text(\"Lecturer\");
                            \$(\".userProfession:contains('2')\").text(\"Student\");
                            
                            
                        }
                        else if(data.status === 1){
                            document.getElementById('msg_noResults').style.display = '';
                            document.getElementById('resultTable').style.display = 'none'
                            \$(\".filter\").css(\"display\",\"none\");;
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
    
    
    <!-- Redirecting respective user's profile page -->
    <script>
        function resultsButtonClick(el) {
            var indexNum = \$(el).attr('value');
            
            // EDIT button action
            if(\$(el).attr('id') === \"editButton\"){
                var win = window.open('http://localhost/gpa2/web/app_dev.php/admin/view_users/'+indexNum, '_blank');
                if(win){
                    //Browser has allowed it to be opened
                    win.focus();
                }else{
                    //Broswer has blocked it
                    alert('Please allow popups for GPA App');
                }
            
            //VIEW button action
            }else if(\$(el).attr('id') === \"viewButton\"){
                var win = window.open('http://localhost/gpa2/web/app_dev.php/admin/view_users/stats/'+indexNum, '_blank');
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
                if (confirm('Are you sure that you want to delete the user?')) {
                    \$.ajax({
                        type: 'GET',
                        url: '";
        // line 594
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
                               alert(\"User wasn't deleted!!!, DB Query execution error!!! Contact Admin\");
                           }
                        },
                        error: function(XMLHttpRequest, textStatus, errorThrown) { 
                            alert(\"Status: \" + textStatus); 
                            alert(\"Error: \" + errorThrown); 
                        }
                    });
                    alert('User ' + indexNum + ' has been deleted from the database!!!');
                } else {
                    alert('User account wasn\\'t dropped from the system.');
                }
            }
        
    }
    </script>
    
    
    <!-- Progressbar  -->
    <script src=\"";
        // line 624
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/progressbar.js"), "html", null, true);
        echo "\"></script>
    
    <!-- bootstrap -->
    <script src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- nice scroll -->
    <script src=\"";
        // line 630
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 631
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    
        
    <!--script for this page only-->
        
    <!-- custom select -->
    <script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.customSelect.min.js"), "html", null, true);
        echo "\" ></script>

   
    <!--custome script for all page-->
    <script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
    
    <!-- custom script for this page-->
    <script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
  
    

  </body>
</html>

";
        
        $__internal_4ef0d277a693caadb224364b1820cf298c6db98141529abb0d0698c0de92bb09->leave($__internal_4ef0d277a693caadb224364b1820cf298c6db98141529abb0d0698c0de92bb09_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:AdminDashboard:viewUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  764 => 645,  758 => 642,  751 => 638,  741 => 631,  737 => 630,  731 => 627,  725 => 624,  692 => 594,  624 => 529,  615 => 523,  581 => 492,  539 => 453,  531 => 448,  527 => 446,  504 => 422,  471 => 386,  418 => 336,  414 => 335,  409 => 333,  405 => 332,  342 => 271,  340 => 270,  209 => 141,  205 => 140,  201 => 139,  185 => 126,  175 => 119,  151 => 98,  139 => 89,  134 => 87,  72 => 28,  68 => 27,  64 => 26,  60 => 25,  54 => 22,  50 => 21,  43 => 17,  37 => 14,  22 => 1,);
    }
}
