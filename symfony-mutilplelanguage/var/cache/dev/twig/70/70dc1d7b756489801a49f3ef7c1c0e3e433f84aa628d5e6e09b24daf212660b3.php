<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_3ba85ebd760861d043be21064f1eaf3daa8be1bc7afebc1472547b4ad6a16026 extends Twig_Template
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
        $__internal_449cd55dc72de43dfa1f16655f90f0c14d729224998ebe49f864ca9b71357522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_449cd55dc72de43dfa1f16655f90f0c14d729224998ebe49f864ca9b71357522->enter($__internal_449cd55dc72de43dfa1f16655f90f0c14d729224998ebe49f864ca9b71357522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_1f02f0a4d3e30a79eed1cbec5600531ec637d3c11547a6bf13636534fd4cbb7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f02f0a4d3e30a79eed1cbec5600531ec637d3c11547a6bf13636534fd4cbb7e->enter($__internal_1f02f0a4d3e30a79eed1cbec5600531ec637d3c11547a6bf13636534fd4cbb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_449cd55dc72de43dfa1f16655f90f0c14d729224998ebe49f864ca9b71357522->leave($__internal_449cd55dc72de43dfa1f16655f90f0c14d729224998ebe49f864ca9b71357522_prof);

        
        $__internal_1f02f0a4d3e30a79eed1cbec5600531ec637d3c11547a6bf13636534fd4cbb7e->leave($__internal_1f02f0a4d3e30a79eed1cbec5600531ec637d3c11547a6bf13636534fd4cbb7e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
