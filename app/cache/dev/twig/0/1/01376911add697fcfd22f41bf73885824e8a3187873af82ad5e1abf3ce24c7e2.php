<?php

/* GPABundle:Default:dump.html.twig */
class __TwigTemplate_01376911add697fcfd22f41bf73885824e8a3187873af82ad5e1abf3ce24c7e2 extends Twig_Template
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
        $__internal_de6bb04c3a06d516b48a55f8254f2e12b73ee9d8b0320706b0d38b7c81cde135 = $this->env->getExtension("native_profiler");
        $__internal_de6bb04c3a06d516b48a55f8254f2e12b73ee9d8b0320706b0d38b7c81cde135->enter($__internal_de6bb04c3a06d516b48a55f8254f2e12b73ee9d8b0320706b0d38b7c81cde135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GPABundle:Default:dump.html.twig"));

        // line 1
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["x"]) ? $context["x"] : $this->getContext($context, "x")));
        echo "

";
        // line 3
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["y"]) ? $context["y"] : $this->getContext($context, "y")));
        
        $__internal_de6bb04c3a06d516b48a55f8254f2e12b73ee9d8b0320706b0d38b7c81cde135->leave($__internal_de6bb04c3a06d516b48a55f8254f2e12b73ee9d8b0320706b0d38b7c81cde135_prof);

    }

    public function getTemplateName()
    {
        return "GPABundle:Default:dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  22 => 1,);
    }
}
