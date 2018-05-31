<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_e4ea56bab3502f3da936ffd9a103a86239b82b19856d93c74d0c3c27071128c6 extends Twig_Template
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
        $__internal_1086148490137af2f1b336601032e9878a97d67f1f2e26f15b32237c3425e837 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1086148490137af2f1b336601032e9878a97d67f1f2e26f15b32237c3425e837->enter($__internal_1086148490137af2f1b336601032e9878a97d67f1f2e26f15b32237c3425e837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_9a740731f323c96371134e9237d303d1443ad7477ad9f0f2a0694ff8b3ed8a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a740731f323c96371134e9237d303d1443ad7477ad9f0f2a0694ff8b3ed8a24->enter($__internal_9a740731f323c96371134e9237d303d1443ad7477ad9f0f2a0694ff8b3ed8a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1086148490137af2f1b336601032e9878a97d67f1f2e26f15b32237c3425e837->leave($__internal_1086148490137af2f1b336601032e9878a97d67f1f2e26f15b32237c3425e837_prof);

        
        $__internal_9a740731f323c96371134e9237d303d1443ad7477ad9f0f2a0694ff8b3ed8a24->leave($__internal_9a740731f323c96371134e9237d303d1443ad7477ad9f0f2a0694ff8b3ed8a24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
