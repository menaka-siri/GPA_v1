<?php

/* GPABundle:Default:user_registration.html.twig */
class __TwigTemplate_0ff6a0ca0145794ec87f242cc967681dbc8104f34de29696ef1897176e129edb extends Twig_Template
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
        $__internal_fe3d298c7f88ef39370436328e5d17cd244eb5b9550fd153552f656305b69ed0 = $this->env->getExtension("native_profiler");
        $__internal_fe3d298c7f88ef39370436328e5d17cd244eb5b9550fd153552f656305b69ed0->enter($__internal_fe3d298c7f88ef39370436328e5d17cd244eb5b9550fd153552f656305b69ed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:Default:user_registration.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    
    <link rel=\"shortcut icon\" href=\"img/favicon.png\">

    <title>User Registration | GPA v1.0 | A project by MnS </title>

    <!-- Bootstrap CSS -->    
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap theme -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!--external css-->
    <!-- font icon -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/elegant-icons-style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <!-- Custom styles -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style-responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
    <script src=\"js/html5shiv.js\"></script>
    <script src=\"js/respond.min.js\"></script>
    <![endif]-->
</head>

  <body class=\"login-img3-body\">

    <div class=\"container\">
        
      <form class=\"login-form\" method=\"POST\" action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("gpa_user_registration");
        echo "\">        
        <div class=\"login-wrap\">
            <p class=\"login-img\" style=\"margin: 0px;\"><i class=\"icon_profile\"></i></p>
            <h2 class=\"text-center\" style=\"margin: 0 0 10px 0;\"> User Registration </h2>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_pencil\"></i></span>
              <input type=\"text\" class=\"form-control\" placeholder=\"University ID\" name=\"id\" autofocus required onchange=\"validateID()\">
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_pencil\"></i></span>
              <input type=\"text\" class=\"form-control\" placeholder=\"First name\" name=\"first_name\" required>
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_pencil\"></i></span>
              <input type=\"text\" class=\"form-control\" placeholder=\"Last name\" name=\"last_name\" required>
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_paperclip\"></i></span>
              <input type=\"email\" class=\"form-control\" placeholder=\"Email\" name=\"email\" required>
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_mobile\"></i></span>
              <input type=\"text\" class=\"form-control\" placeholder=\"Mobile\" name=\"mobile\">
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_building\"></i></span>
              <select class=\"form-control\" name=\"department\" required>
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
                    <option value='ADMIN'>ADMIN</option>
              </select>
            </div>
            <div class=\"input-group\">
              <span class=\"input-group-addon\"><i class=\"icon_profile\"></i></span>
              <select class=\"form-control\" name=\"profession\" onchange=\"changeProfession()\">
                    <option value='' disabled selected style='display:none;'>Profession</option>
                    <option value='0'>Staff_Member</option>
                    <option value='1'>Lecturer</option>
                    <option value='2'>Student</option>
                </select>
            </div>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                <input type=\"password\" class=\"form-control\" placeholder=\"Password\" name=\"password\" id=\"password\">
            </div>
            <div class=\"input-group\">
                <span class=\"input-group-addon\"><i class=\"icon_key_alt\"></i></span>
                <input type=\"password\" class=\"form-control\" placeholder=\"Re-enter the password\" name=\"confirmPassword\" id=\"confirmPassword\">
            </div>
            
            <!-- validating the re-entered password -->
            <script>
                var password = document.getElementById(\"password\"), confirm_password = document.getElementById(\"confirmPassword\");

                function validatePassword(){
                  if(password.value != confirm_password.value) {
                    confirm_password.setCustomValidity(\"Passwords Don't Match\");
                  } else {
                    confirm_password.setCustomValidity('');
                  }
                }
                password.onchange = validatePassword;
                confirm_password.onkeyup = validatePassword;
            </script>

            <button class=\"btn btn-primary btn-lg btn-block\" type=\"submit\" name=\"submit\">Signup</button>
        </div>
      </form>
      <div class=\"login-wrap\" style=\"max-width: 350px; margin:0px auto; background: rgba(213,215,222,0.9); padding: 0 20px 8px 20px; \">
            <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("gpa_login");
        echo "\"><button class=\"btn btn-info btn-lg btn-block\" style=\"border-radius: 0px;\" >Back</button></a>
      </div>
    </div>
      
      
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
        
        function validateID(){
            var id = document.getElementsByName(\"id\")[0];
            //improve the User ID validation process
            if(id.length !== 7){
                id.setCustomValidity(\"Enter a valid ID\");
            }
        }
                          
    </script>

  </body>
</html>
";
        
        $__internal_fe3d298c7f88ef39370436328e5d17cd244eb5b9550fd153552f656305b69ed0->leave($__internal_fe3d298c7f88ef39370436328e5d17cd244eb5b9550fd153552f656305b69ed0_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:Default:user_registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 113,  76 => 35,  60 => 22,  56 => 21,  51 => 19,  47 => 18,  41 => 15,  36 => 13,  22 => 1,);
    }
}
