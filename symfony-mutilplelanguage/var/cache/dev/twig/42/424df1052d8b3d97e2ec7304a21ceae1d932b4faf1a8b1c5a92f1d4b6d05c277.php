<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8adbbb672375a5b9b13f4211de61ea5aba7a844d41552c826a190920e0966e56 extends Twig_Template
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
        $__internal_2c1666baa6948c4408e589881f5fa992690101a3bbd1e3f80cfc69c870efe3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c1666baa6948c4408e589881f5fa992690101a3bbd1e3f80cfc69c870efe3b1->enter($__internal_2c1666baa6948c4408e589881f5fa992690101a3bbd1e3f80cfc69c870efe3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e744d95bf693705fffa11fd29e4e0a7bba08952e24dd7a3421ec094b19af7052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e744d95bf693705fffa11fd29e4e0a7bba08952e24dd7a3421ec094b19af7052->enter($__internal_e744d95bf693705fffa11fd29e4e0a7bba08952e24dd7a3421ec094b19af7052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2c1666baa6948c4408e589881f5fa992690101a3bbd1e3f80cfc69c870efe3b1->leave($__internal_2c1666baa6948c4408e589881f5fa992690101a3bbd1e3f80cfc69c870efe3b1_prof);

        
        $__internal_e744d95bf693705fffa11fd29e4e0a7bba08952e24dd7a3421ec094b19af7052->leave($__internal_e744d95bf693705fffa11fd29e4e0a7bba08952e24dd7a3421ec094b19af7052_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
