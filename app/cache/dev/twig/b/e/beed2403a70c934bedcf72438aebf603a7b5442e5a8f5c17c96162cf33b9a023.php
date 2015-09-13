<?php

/* GPABundle:Default:user_registration_status.html.twig */
class __TwigTemplate_beed2403a70c934bedcf72438aebf603a7b5442e5a8f5c17c96162cf33b9a023 extends Twig_Template
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
        $__internal_d466383e7bde742820f9113324addfd664af99b39ecbd604ff63b33db11b5c19 = $this->env->getExtension("native_profiler");
        $__internal_d466383e7bde742820f9113324addfd664af99b39ecbd604ff63b33db11b5c19->enter($__internal_d466383e7bde742820f9113324addfd664af99b39ecbd604ff63b33db11b5c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:Default:user_registration_status.html.twig"));

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

</head>

  <body class=\"login-img3-body\" >

    <div class=\"container\" style=\"\">
        ";
        // line 30
        echo "            <div class=\"row\" style=\"max-width: 425px; margin:110px auto; background: rgba(213,215,222,0.9); padding: 0 20px 8px 20px; \">
                
                <p class=\"login-img text-center\" style=\"margin: 0px; color: #34aadc; font-size: 50px;\"><i class=\"icon_info\"></i></p>
                <h2 class=\"text-center\" style=\"margin: 0 0 10px 0;\"> User Registration Status </h2>
                ";
        // line 34
        if ((isset($context["flag1"]) ? $context["flag1"] : $this->getContext($context, "flag1"))) {
            echo "<div class=\"alert alert-warning col-lg-12 text-center\" role=\"alert\" style=\"color: #9E7F01;\">User ID is already registered in the system!! Please go to login page</div>";
        }
        // line 35
        echo "                ";
        if ((isset($context["flag2"]) ? $context["flag2"] : $this->getContext($context, "flag2"))) {
            echo "<div class=\"alert alert-danger col-lg-12 text-center\" role=\"alert\">User registration failed!!! Contact Admin.</div>";
        }
        // line 36
        echo "                ";
        if ((isset($context["flag3"]) ? $context["flag3"] : $this->getContext($context, "flag3"))) {
            echo "<div class=\"alert alert-success col-lg-12 text-center\" role=\"alert\" style=\"color: #087B1B;\">User is registered with the system successfully!<br>Please wait till you get the confirmation by Administration.</div>";
        }
        // line 37
        echo "                
                <div class=\"col-lg-12\">
                    <div class=\"col-lg-6 pull-left\">
                        <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("gpa_user_registration_form");
        echo "\" class=\"btn btn-info btn-lg btn-block\" style=\"border-radius: 0px;\">Back to<br>Signup</a>
                    </div>
                    <div class=\"col-lg-6 pull-right\">
                        <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("gpa_login");
        echo "\" ><button class=\"btn btn-info btn-lg btn-block\" style=\"border-radius: 0px;\" >Back to<br>Login</button></a>
                    </div>
                    
                </div>
            </div>
        ";
        // line 49
        echo "    </div>

  </body>
</html>
";
        
        $__internal_d466383e7bde742820f9113324addfd664af99b39ecbd604ff63b33db11b5c19->leave($__internal_d466383e7bde742820f9113324addfd664af99b39ecbd604ff63b33db11b5c19_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:Default:user_registration_status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 49,  101 => 43,  95 => 40,  90 => 37,  85 => 36,  80 => 35,  76 => 34,  70 => 30,  60 => 22,  56 => 21,  51 => 19,  47 => 18,  41 => 15,  36 => 13,  22 => 1,);
    }
}
