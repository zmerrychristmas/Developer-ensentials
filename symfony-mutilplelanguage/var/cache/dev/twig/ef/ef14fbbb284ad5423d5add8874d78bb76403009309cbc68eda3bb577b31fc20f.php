<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5390b84b48348256ff891d4fbe3d59406dc5309f04a6400df6cb7f05609d507f extends Twig_Template
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
        $__internal_a68e842068300f4b2d1ff3347a88ac6685a98a8cf99685cd9b47c2024face48a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a68e842068300f4b2d1ff3347a88ac6685a98a8cf99685cd9b47c2024face48a->enter($__internal_a68e842068300f4b2d1ff3347a88ac6685a98a8cf99685cd9b47c2024face48a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_08162d6440c9757150058018e4619ceb9dbb9fe312424ef7bf2f926d78c0887f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08162d6440c9757150058018e4619ceb9dbb9fe312424ef7bf2f926d78c0887f->enter($__internal_08162d6440c9757150058018e4619ceb9dbb9fe312424ef7bf2f926d78c0887f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_a68e842068300f4b2d1ff3347a88ac6685a98a8cf99685cd9b47c2024face48a->leave($__internal_a68e842068300f4b2d1ff3347a88ac6685a98a8cf99685cd9b47c2024face48a_prof);

        
        $__internal_08162d6440c9757150058018e4619ceb9dbb9fe312424ef7bf2f926d78c0887f->leave($__internal_08162d6440c9757150058018e4619ceb9dbb9fe312424ef7bf2f926d78c0887f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
