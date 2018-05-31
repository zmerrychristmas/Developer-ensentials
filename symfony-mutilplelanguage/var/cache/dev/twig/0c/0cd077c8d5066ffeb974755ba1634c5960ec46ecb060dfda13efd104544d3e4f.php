<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_904f72b347b2e0b6567378e3d2660436a066a12f97bb8927c5077708092dc48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_218ccb1dab535f12e9811ed2ebc7ac8d8f6aeea14aa17ce1ac6183b0c3a29a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_218ccb1dab535f12e9811ed2ebc7ac8d8f6aeea14aa17ce1ac6183b0c3a29a6c->enter($__internal_218ccb1dab535f12e9811ed2ebc7ac8d8f6aeea14aa17ce1ac6183b0c3a29a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_7c0ef4bc418e052c38c3fe59469e8546ade4c9c7ddec4ba04b4e588f7fa79238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0ef4bc418e052c38c3fe59469e8546ade4c9c7ddec4ba04b4e588f7fa79238->enter($__internal_7c0ef4bc418e052c38c3fe59469e8546ade4c9c7ddec4ba04b4e588f7fa79238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_218ccb1dab535f12e9811ed2ebc7ac8d8f6aeea14aa17ce1ac6183b0c3a29a6c->leave($__internal_218ccb1dab535f12e9811ed2ebc7ac8d8f6aeea14aa17ce1ac6183b0c3a29a6c_prof);

        
        $__internal_7c0ef4bc418e052c38c3fe59469e8546ade4c9c7ddec4ba04b4e588f7fa79238->leave($__internal_7c0ef4bc418e052c38c3fe59469e8546ade4c9c7ddec4ba04b4e588f7fa79238_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac57a36fd321cb7c30a57e5d81fe9ccab9572a03e6d033a4cc63fdad6eda354c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac57a36fd321cb7c30a57e5d81fe9ccab9572a03e6d033a4cc63fdad6eda354c->enter($__internal_ac57a36fd321cb7c30a57e5d81fe9ccab9572a03e6d033a4cc63fdad6eda354c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6e5c5da47701b7cf2c0ff61efc43c4cb92d9aa5952489be7bc06aa3404109991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e5c5da47701b7cf2c0ff61efc43c4cb92d9aa5952489be7bc06aa3404109991->enter($__internal_6e5c5da47701b7cf2c0ff61efc43c4cb92d9aa5952489be7bc06aa3404109991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_6e5c5da47701b7cf2c0ff61efc43c4cb92d9aa5952489be7bc06aa3404109991->leave($__internal_6e5c5da47701b7cf2c0ff61efc43c4cb92d9aa5952489be7bc06aa3404109991_prof);

        
        $__internal_ac57a36fd321cb7c30a57e5d81fe9ccab9572a03e6d033a4cc63fdad6eda354c->leave($__internal_ac57a36fd321cb7c30a57e5d81fe9ccab9572a03e6d033a4cc63fdad6eda354c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_69c91c62e60df87372defe707bb86e3dc5561d88d78e40c3004f7b319eaf34ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c91c62e60df87372defe707bb86e3dc5561d88d78e40c3004f7b319eaf34ce->enter($__internal_69c91c62e60df87372defe707bb86e3dc5561d88d78e40c3004f7b319eaf34ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5fc6479996315a6793bdc40c37eced3e37dcf4467908eb04a31e4e9a1eb932ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc6479996315a6793bdc40c37eced3e37dcf4467908eb04a31e4e9a1eb932ca->enter($__internal_5fc6479996315a6793bdc40c37eced3e37dcf4467908eb04a31e4e9a1eb932ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_5fc6479996315a6793bdc40c37eced3e37dcf4467908eb04a31e4e9a1eb932ca->leave($__internal_5fc6479996315a6793bdc40c37eced3e37dcf4467908eb04a31e4e9a1eb932ca_prof);

        
        $__internal_69c91c62e60df87372defe707bb86e3dc5561d88d78e40c3004f7b319eaf34ce->leave($__internal_69c91c62e60df87372defe707bb86e3dc5561d88d78e40c3004f7b319eaf34ce_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
