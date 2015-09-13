<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_0a11815a9ab5bf03e4e9bbac3a5f12ca560f1a4eabf2586c5b6452c8b5937fa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6b56669de7490413d71aa08770eeb49e8927fdf476643efc54a6142478a9424 = $this->env->getExtension("native_profiler");
        $__internal_d6b56669de7490413d71aa08770eeb49e8927fdf476643efc54a6142478a9424->enter($__internal_d6b56669de7490413d71aa08770eeb49e8927fdf476643efc54a6142478a9424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b56669de7490413d71aa08770eeb49e8927fdf476643efc54a6142478a9424->leave($__internal_d6b56669de7490413d71aa08770eeb49e8927fdf476643efc54a6142478a9424_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_322c574a9cbb6e9acca7799d065a3851bd38b78fac444e3cb4fd7cf1587a0bb2 = $this->env->getExtension("native_profiler");
        $__internal_322c574a9cbb6e9acca7799d065a3851bd38b78fac444e3cb4fd7cf1587a0bb2->enter($__internal_322c574a9cbb6e9acca7799d065a3851bd38b78fac444e3cb4fd7cf1587a0bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_322c574a9cbb6e9acca7799d065a3851bd38b78fac444e3cb4fd7cf1587a0bb2->leave($__internal_322c574a9cbb6e9acca7799d065a3851bd38b78fac444e3cb4fd7cf1587a0bb2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5657b1d27f5ff810fe3aa7ed9858cc8d6cb6ec909cf5a4da99d24089697b0176 = $this->env->getExtension("native_profiler");
        $__internal_5657b1d27f5ff810fe3aa7ed9858cc8d6cb6ec909cf5a4da99d24089697b0176->enter($__internal_5657b1d27f5ff810fe3aa7ed9858cc8d6cb6ec909cf5a4da99d24089697b0176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5657b1d27f5ff810fe3aa7ed9858cc8d6cb6ec909cf5a4da99d24089697b0176->leave($__internal_5657b1d27f5ff810fe3aa7ed9858cc8d6cb6ec909cf5a4da99d24089697b0176_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b024c6bd22e1c166632c66d5f821a544f136016826fb35e9883545d074ec4642 = $this->env->getExtension("native_profiler");
        $__internal_b024c6bd22e1c166632c66d5f821a544f136016826fb35e9883545d074ec4642->enter($__internal_b024c6bd22e1c166632c66d5f821a544f136016826fb35e9883545d074ec4642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_b024c6bd22e1c166632c66d5f821a544f136016826fb35e9883545d074ec4642->leave($__internal_b024c6bd22e1c166632c66d5f821a544f136016826fb35e9883545d074ec4642_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
