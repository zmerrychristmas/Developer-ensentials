<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_a024dafbc5674a8ba25deb5c4217d1e2ec04411af345cbad092b266948505bbd extends Twig_Template
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
        $__internal_fb0d8b7231513d3052c61ba94c8ad7da860b730a8e739ca9df70a7ac7bcd3fe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0d8b7231513d3052c61ba94c8ad7da860b730a8e739ca9df70a7ac7bcd3fe2->enter($__internal_fb0d8b7231513d3052c61ba94c8ad7da860b730a8e739ca9df70a7ac7bcd3fe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8860739bdbf636f362e2c6a25886262b81b6fa0680fe8d18f85783fdf7d2d461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8860739bdbf636f362e2c6a25886262b81b6fa0680fe8d18f85783fdf7d2d461->enter($__internal_8860739bdbf636f362e2c6a25886262b81b6fa0680fe8d18f85783fdf7d2d461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_fb0d8b7231513d3052c61ba94c8ad7da860b730a8e739ca9df70a7ac7bcd3fe2->leave($__internal_fb0d8b7231513d3052c61ba94c8ad7da860b730a8e739ca9df70a7ac7bcd3fe2_prof);

        
        $__internal_8860739bdbf636f362e2c6a25886262b81b6fa0680fe8d18f85783fdf7d2d461->leave($__internal_8860739bdbf636f362e2c6a25886262b81b6fa0680fe8d18f85783fdf7d2d461_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
