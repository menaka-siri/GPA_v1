<?php

/* GPABundle:Default:home.html.twig */
class __TwigTemplate_1cec3c9c52d0bb799428c76f03d05b34ca9ba02a00f3dbe13644e740f8564520 extends Twig_Template
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
        $__internal_5568c22a8929d52db10091314918da01791d88bf436e504e957f4ef2f5f638aa = $this->env->getExtension("native_profiler");
        $__internal_5568c22a8929d52db10091314918da01791d88bf436e504e957f4ef2f5f638aa->enter($__internal_5568c22a8929d52db10091314918da01791d88bf436e504e957f4ef2f5f638aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:Default:home.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta http-equiv=\"content-type\" content=\"text/html; charset=UTF-8\">
\t\t<meta charset=\"utf-8\">
\t\t<title>Welcome | GPA v1.0 | A project by MnS </title>
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
\t\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t<!--[if lt IE 9]>
\t\t\t<script src=\"//html5shim.googlecode.com/svn/trunk/html5.js\"></script>
\t\t<![endif]-->
\t\t<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t</head>
\t<body bgcolor=\"#26C281\">
        
<!--login modal-->
<div id=\"loginModal\" class=\"modal show\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" style=\"width:425px; background: rgba(213,215,222,0.9); margin-top: 110px;\">
  <div class=\"modal-content\" style=\"background-color:transparent ;\">
      <div class=\"modal-header\">
          ";
        // line 24
        echo "          <h1 class=\"text-center\">GPA v1.0</h1>
      </div>
      <div class=\"modal-body\">
          <form class=\"form col-md-12 center-block\" method=\"POST\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("gpa_login");
        echo "\">
            ";
        // line 28
        if ((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1"))) {
            echo "<div class=\"alert alert-danger col-lg-12\" role=\"alert\">Your Username and Password do not match!!! Try Again.</div>";
        }
        echo " 
            ";
        // line 29
        if ((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) {
            echo "<div class=\"alert alert-danger col-lg-12 text-center\" role=\"alert\">Your profile is still in the process of registration.<br>Try again later or contact Admin.</div>";
        }
        // line 30
        echo "            <div class=\"form-group\">
              <input type=\"text\" class=\"form-control input-lg\" name=\"id\" style=\"font-size: 17px;\" placeholder=\"Username: Your University Index Number\">
            </div>
            <div class=\"form-group\">
              <input type=\"password\" class=\"form-control input-lg\" style=\"font-size: 17px;\" placeholder=\"Password\" name=\"password\">
            </div>
            <div class=\"form-group\">
              <button class=\"btn btn-primary btn-lg btn-block\">Login</button>
              
            </div>
          </form>
      </div>
      <div class=\"modal-footer\">
          <div class=\"col-md-12\" style=\"padding: 0 5px 0 5px\">
              <span class=\"pull-right\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("gpa_user_registration_form");
        echo "\" class=\"btn btn-default btn-primary btn-info\">Register</a></span>
              <div class='text-left pull-right' style=\"padding: 8px 8px 0px 0px\"><p>Still don't have an account, click register!</p></div>
          </div>\t
      </div>
  </div>
  </div>
</div>
\t<!-- script references -->
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js\"></script>
\t\t<script src=\"js/bootstrap.min.js\"></script>
\t</body>
</html>";
        
        $__internal_5568c22a8929d52db10091314918da01791d88bf436e504e957f4ef2f5f638aa->leave($__internal_5568c22a8929d52db10091314918da01791d88bf436e504e957f4ef2f5f638aa_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 44,  70 => 30,  66 => 29,  60 => 28,  56 => 27,  51 => 24,  39 => 14,  32 => 10,  22 => 2,);
    }
}
