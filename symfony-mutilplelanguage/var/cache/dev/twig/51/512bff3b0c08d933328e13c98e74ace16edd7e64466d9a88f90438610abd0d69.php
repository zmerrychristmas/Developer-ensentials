<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3223e0f9522de4c37d9c7322f662d6ba3b2a2df77596e5c466ef565c34fcf0fc extends Twig_Template
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
        $__internal_5a0405e05e216aedbf71e00d3cc6d744afcb42382f25941391bd7d468668164a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0405e05e216aedbf71e00d3cc6d744afcb42382f25941391bd7d468668164a->enter($__internal_5a0405e05e216aedbf71e00d3cc6d744afcb42382f25941391bd7d468668164a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_964477849ea3255bfea01991b1ea9e7eddc2a684e27c22052700c41d245cf45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_964477849ea3255bfea01991b1ea9e7eddc2a684e27c22052700c41d245cf45b->enter($__internal_964477849ea3255bfea01991b1ea9e7eddc2a684e27c22052700c41d245cf45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5a0405e05e216aedbf71e00d3cc6d744afcb42382f25941391bd7d468668164a->leave($__internal_5a0405e05e216aedbf71e00d3cc6d744afcb42382f25941391bd7d468668164a_prof);

        
        $__internal_964477849ea3255bfea01991b1ea9e7eddc2a684e27c22052700c41d245cf45b->leave($__internal_964477849ea3255bfea01991b1ea9e7eddc2a684e27c22052700c41d245cf45b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
