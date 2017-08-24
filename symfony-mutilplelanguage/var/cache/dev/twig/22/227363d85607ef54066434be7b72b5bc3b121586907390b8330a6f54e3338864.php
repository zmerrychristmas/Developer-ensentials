<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_91aed4adf6a951bc483dd424056c191baf3e416cacbba8e82613c7d2704f25ba extends Twig_Template
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
        $__internal_a5b66478f783321d953e2f5224f92359683cf9e1bc0d03fd4d2135b57a040f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5b66478f783321d953e2f5224f92359683cf9e1bc0d03fd4d2135b57a040f75->enter($__internal_a5b66478f783321d953e2f5224f92359683cf9e1bc0d03fd4d2135b57a040f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5321df1561e69539359d7b6a4f387b04899a8002143e305bec24dfdcf9cedb48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5321df1561e69539359d7b6a4f387b04899a8002143e305bec24dfdcf9cedb48->enter($__internal_5321df1561e69539359d7b6a4f387b04899a8002143e305bec24dfdcf9cedb48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a5b66478f783321d953e2f5224f92359683cf9e1bc0d03fd4d2135b57a040f75->leave($__internal_a5b66478f783321d953e2f5224f92359683cf9e1bc0d03fd4d2135b57a040f75_prof);

        
        $__internal_5321df1561e69539359d7b6a4f387b04899a8002143e305bec24dfdcf9cedb48->leave($__internal_5321df1561e69539359d7b6a4f387b04899a8002143e305bec24dfdcf9cedb48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
