<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ece8fd65e9a9874d8897e83d82b091152760455d574f1af24360e20f1cdef8d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece8fd65e9a9874d8897e83d82b091152760455d574f1af24360e20f1cdef8d8->enter($__internal_ece8fd65e9a9874d8897e83d82b091152760455d574f1af24360e20f1cdef8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_f47e7319aa18f19a5f1d73e5aaabc98ef40907ee9b98f0b53f4383fcce2884a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47e7319aa18f19a5f1d73e5aaabc98ef40907ee9b98f0b53f4383fcce2884a6->enter($__internal_f47e7319aa18f19a5f1d73e5aaabc98ef40907ee9b98f0b53f4383fcce2884a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ece8fd65e9a9874d8897e83d82b091152760455d574f1af24360e20f1cdef8d8->leave($__internal_ece8fd65e9a9874d8897e83d82b091152760455d574f1af24360e20f1cdef8d8_prof);

        
        $__internal_f47e7319aa18f19a5f1d73e5aaabc98ef40907ee9b98f0b53f4383fcce2884a6->leave($__internal_f47e7319aa18f19a5f1d73e5aaabc98ef40907ee9b98f0b53f4383fcce2884a6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b0661f2be2e5e44b3103d5b603648ce3bcfe653945af5d8b87af32b2b1097f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0661f2be2e5e44b3103d5b603648ce3bcfe653945af5d8b87af32b2b1097f1->enter($__internal_7b0661f2be2e5e44b3103d5b603648ce3bcfe653945af5d8b87af32b2b1097f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a6a245c869b87c5f084bd43392eb012514e13ff3a5014fdf09efe4749118664a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6a245c869b87c5f084bd43392eb012514e13ff3a5014fdf09efe4749118664a->enter($__internal_a6a245c869b87c5f084bd43392eb012514e13ff3a5014fdf09efe4749118664a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a6a245c869b87c5f084bd43392eb012514e13ff3a5014fdf09efe4749118664a->leave($__internal_a6a245c869b87c5f084bd43392eb012514e13ff3a5014fdf09efe4749118664a_prof);

        
        $__internal_7b0661f2be2e5e44b3103d5b603648ce3bcfe653945af5d8b87af32b2b1097f1->leave($__internal_7b0661f2be2e5e44b3103d5b603648ce3bcfe653945af5d8b87af32b2b1097f1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2dabe43db6bd0d5c9d23f53734452f1e3d0c11b10fd45d9c4f96188ed89e50a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dabe43db6bd0d5c9d23f53734452f1e3d0c11b10fd45d9c4f96188ed89e50a1->enter($__internal_2dabe43db6bd0d5c9d23f53734452f1e3d0c11b10fd45d9c4f96188ed89e50a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5f3a9eed31138f99ec2bf46e11dcbf6c2a63bbdb42170ada239cfa717a07347d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3a9eed31138f99ec2bf46e11dcbf6c2a63bbdb42170ada239cfa717a07347d->enter($__internal_5f3a9eed31138f99ec2bf46e11dcbf6c2a63bbdb42170ada239cfa717a07347d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5f3a9eed31138f99ec2bf46e11dcbf6c2a63bbdb42170ada239cfa717a07347d->leave($__internal_5f3a9eed31138f99ec2bf46e11dcbf6c2a63bbdb42170ada239cfa717a07347d_prof);

        
        $__internal_2dabe43db6bd0d5c9d23f53734452f1e3d0c11b10fd45d9c4f96188ed89e50a1->leave($__internal_2dabe43db6bd0d5c9d23f53734452f1e3d0c11b10fd45d9c4f96188ed89e50a1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1d15bba1ff801a4e35080984fb450ac2a3f825cf32497afcba7b0e27df5c6f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d15bba1ff801a4e35080984fb450ac2a3f825cf32497afcba7b0e27df5c6f58->enter($__internal_1d15bba1ff801a4e35080984fb450ac2a3f825cf32497afcba7b0e27df5c6f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e7db5b57220e5b7f07841e1020e034d415db553317e5e389f3c04205d1366537 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7db5b57220e5b7f07841e1020e034d415db553317e5e389f3c04205d1366537->enter($__internal_e7db5b57220e5b7f07841e1020e034d415db553317e5e389f3c04205d1366537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_e7db5b57220e5b7f07841e1020e034d415db553317e5e389f3c04205d1366537->leave($__internal_e7db5b57220e5b7f07841e1020e034d415db553317e5e389f3c04205d1366537_prof);

        
        $__internal_1d15bba1ff801a4e35080984fb450ac2a3f825cf32497afcba7b0e27df5c6f58->leave($__internal_1d15bba1ff801a4e35080984fb450ac2a3f825cf32497afcba7b0e27df5c6f58_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
