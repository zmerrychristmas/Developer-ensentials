<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_79ad66245fdda2fe060bcba9b4910ad7a2abb539b368c4d251062396da9ab8af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ad66245fdda2fe060bcba9b4910ad7a2abb539b368c4d251062396da9ab8af->enter($__internal_79ad66245fdda2fe060bcba9b4910ad7a2abb539b368c4d251062396da9ab8af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f421e6c0153a33f629bbbcb084dfd6d168ec223d9754b2476da1f4bcdc7e0f51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f421e6c0153a33f629bbbcb084dfd6d168ec223d9754b2476da1f4bcdc7e0f51->enter($__internal_f421e6c0153a33f629bbbcb084dfd6d168ec223d9754b2476da1f4bcdc7e0f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ad66245fdda2fe060bcba9b4910ad7a2abb539b368c4d251062396da9ab8af->leave($__internal_79ad66245fdda2fe060bcba9b4910ad7a2abb539b368c4d251062396da9ab8af_prof);

        
        $__internal_f421e6c0153a33f629bbbcb084dfd6d168ec223d9754b2476da1f4bcdc7e0f51->leave($__internal_f421e6c0153a33f629bbbcb084dfd6d168ec223d9754b2476da1f4bcdc7e0f51_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b53f5c0ddef0421cf4db0df28797864cd783fc3d023e2cfe6e119fae91d93add = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53f5c0ddef0421cf4db0df28797864cd783fc3d023e2cfe6e119fae91d93add->enter($__internal_b53f5c0ddef0421cf4db0df28797864cd783fc3d023e2cfe6e119fae91d93add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9ce4b9da88de09e94770ac1fef6509fb55dbc24ff73df3184e4bdb2ce3138602 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce4b9da88de09e94770ac1fef6509fb55dbc24ff73df3184e4bdb2ce3138602->enter($__internal_9ce4b9da88de09e94770ac1fef6509fb55dbc24ff73df3184e4bdb2ce3138602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9ce4b9da88de09e94770ac1fef6509fb55dbc24ff73df3184e4bdb2ce3138602->leave($__internal_9ce4b9da88de09e94770ac1fef6509fb55dbc24ff73df3184e4bdb2ce3138602_prof);

        
        $__internal_b53f5c0ddef0421cf4db0df28797864cd783fc3d023e2cfe6e119fae91d93add->leave($__internal_b53f5c0ddef0421cf4db0df28797864cd783fc3d023e2cfe6e119fae91d93add_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_69ad6ba391916b31b659a6d87fc242727b0fceebf38cc66c4a6e482954eecf1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ad6ba391916b31b659a6d87fc242727b0fceebf38cc66c4a6e482954eecf1f->enter($__internal_69ad6ba391916b31b659a6d87fc242727b0fceebf38cc66c4a6e482954eecf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6135395c58fe06cdf7b40109e7ce9df3b1eda537cc536188725a7ecc31141383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6135395c58fe06cdf7b40109e7ce9df3b1eda537cc536188725a7ecc31141383->enter($__internal_6135395c58fe06cdf7b40109e7ce9df3b1eda537cc536188725a7ecc31141383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6135395c58fe06cdf7b40109e7ce9df3b1eda537cc536188725a7ecc31141383->leave($__internal_6135395c58fe06cdf7b40109e7ce9df3b1eda537cc536188725a7ecc31141383_prof);

        
        $__internal_69ad6ba391916b31b659a6d87fc242727b0fceebf38cc66c4a6e482954eecf1f->leave($__internal_69ad6ba391916b31b659a6d87fc242727b0fceebf38cc66c4a6e482954eecf1f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_343bd1b1fa2dcf9e1917a6dcbfd634775933e7cc1096db8e3dd99744b42ed714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343bd1b1fa2dcf9e1917a6dcbfd634775933e7cc1096db8e3dd99744b42ed714->enter($__internal_343bd1b1fa2dcf9e1917a6dcbfd634775933e7cc1096db8e3dd99744b42ed714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e7f7fa350c4cb86a59f50aebd8da975920bdb9f757e8fca4a4a4ae35cc54f14b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f7fa350c4cb86a59f50aebd8da975920bdb9f757e8fca4a4a4ae35cc54f14b->enter($__internal_e7f7fa350c4cb86a59f50aebd8da975920bdb9f757e8fca4a4a4ae35cc54f14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e7f7fa350c4cb86a59f50aebd8da975920bdb9f757e8fca4a4a4ae35cc54f14b->leave($__internal_e7f7fa350c4cb86a59f50aebd8da975920bdb9f757e8fca4a4a4ae35cc54f14b_prof);

        
        $__internal_343bd1b1fa2dcf9e1917a6dcbfd634775933e7cc1096db8e3dd99744b42ed714->leave($__internal_343bd1b1fa2dcf9e1917a6dcbfd634775933e7cc1096db8e3dd99744b42ed714_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
