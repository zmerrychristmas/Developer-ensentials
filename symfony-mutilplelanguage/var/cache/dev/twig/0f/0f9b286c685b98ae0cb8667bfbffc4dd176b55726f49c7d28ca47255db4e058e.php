<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_015caeaf3123cd3977c6cb991b209e3ac2869deaa4203756168003a4d29820c1 extends Twig_Template
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
        $__internal_54aa1a0dac66e5138b58cc80bbe49e4dc4d35b67cb81690cd6347d5a79f425f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54aa1a0dac66e5138b58cc80bbe49e4dc4d35b67cb81690cd6347d5a79f425f7->enter($__internal_54aa1a0dac66e5138b58cc80bbe49e4dc4d35b67cb81690cd6347d5a79f425f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_a15330afc25bb20fa5bfd649705c4ec4bc648b11364d0708d2a46dc461a12478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15330afc25bb20fa5bfd649705c4ec4bc648b11364d0708d2a46dc461a12478->enter($__internal_a15330afc25bb20fa5bfd649705c4ec4bc648b11364d0708d2a46dc461a12478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_54aa1a0dac66e5138b58cc80bbe49e4dc4d35b67cb81690cd6347d5a79f425f7->leave($__internal_54aa1a0dac66e5138b58cc80bbe49e4dc4d35b67cb81690cd6347d5a79f425f7_prof);

        
        $__internal_a15330afc25bb20fa5bfd649705c4ec4bc648b11364d0708d2a46dc461a12478->leave($__internal_a15330afc25bb20fa5bfd649705c4ec4bc648b11364d0708d2a46dc461a12478_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
