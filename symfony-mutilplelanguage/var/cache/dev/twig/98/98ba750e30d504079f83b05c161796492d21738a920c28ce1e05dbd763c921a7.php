<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a2db3986fb2a1e436fb6cacff4fa5fc6e0fad0f57c649a09d4f7e25bcf00f313 extends Twig_Template
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
        $__internal_a8c3e0c2ba9eb1e8fcfec1c80675f6cbab381ff3bc308701f38e53981f8fbecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8c3e0c2ba9eb1e8fcfec1c80675f6cbab381ff3bc308701f38e53981f8fbecd->enter($__internal_a8c3e0c2ba9eb1e8fcfec1c80675f6cbab381ff3bc308701f38e53981f8fbecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_866636054872dfb633f722db331a99afada00d4172761963999b6cf74c79245f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866636054872dfb633f722db331a99afada00d4172761963999b6cf74c79245f->enter($__internal_866636054872dfb633f722db331a99afada00d4172761963999b6cf74c79245f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a8c3e0c2ba9eb1e8fcfec1c80675f6cbab381ff3bc308701f38e53981f8fbecd->leave($__internal_a8c3e0c2ba9eb1e8fcfec1c80675f6cbab381ff3bc308701f38e53981f8fbecd_prof);

        
        $__internal_866636054872dfb633f722db331a99afada00d4172761963999b6cf74c79245f->leave($__internal_866636054872dfb633f722db331a99afada00d4172761963999b6cf74c79245f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
