<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8e5c82b447fdff23566d6eec0a9b1097112907d973983c6cb81700fa55772fd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b17991dc012b5241540737a6af498fb6c986a8ec23276015951ab0e808057fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b17991dc012b5241540737a6af498fb6c986a8ec23276015951ab0e808057fb->enter($__internal_8b17991dc012b5241540737a6af498fb6c986a8ec23276015951ab0e808057fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_4abd8cd53517d3dcb46a366eab31f5fc8067da2d94cb68447577e80008f4370d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4abd8cd53517d3dcb46a366eab31f5fc8067da2d94cb68447577e80008f4370d->enter($__internal_4abd8cd53517d3dcb46a366eab31f5fc8067da2d94cb68447577e80008f4370d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b17991dc012b5241540737a6af498fb6c986a8ec23276015951ab0e808057fb->leave($__internal_8b17991dc012b5241540737a6af498fb6c986a8ec23276015951ab0e808057fb_prof);

        
        $__internal_4abd8cd53517d3dcb46a366eab31f5fc8067da2d94cb68447577e80008f4370d->leave($__internal_4abd8cd53517d3dcb46a366eab31f5fc8067da2d94cb68447577e80008f4370d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6d124707f977aca561360bde3a6795cf4dbd1e882597fae69eb37af1885c18ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d124707f977aca561360bde3a6795cf4dbd1e882597fae69eb37af1885c18ae->enter($__internal_6d124707f977aca561360bde3a6795cf4dbd1e882597fae69eb37af1885c18ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e635d6aef445490403849e318fc122a14ff851256ee94e7a9d41d2e0ea41f16d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e635d6aef445490403849e318fc122a14ff851256ee94e7a9d41d2e0ea41f16d->enter($__internal_e635d6aef445490403849e318fc122a14ff851256ee94e7a9d41d2e0ea41f16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_e635d6aef445490403849e318fc122a14ff851256ee94e7a9d41d2e0ea41f16d->leave($__internal_e635d6aef445490403849e318fc122a14ff851256ee94e7a9d41d2e0ea41f16d_prof);

        
        $__internal_6d124707f977aca561360bde3a6795cf4dbd1e882597fae69eb37af1885c18ae->leave($__internal_6d124707f977aca561360bde3a6795cf4dbd1e882597fae69eb37af1885c18ae_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4df374e91a80197ffc337f12f572bdcf526594c028cc5ed00693d5f3e3aa14af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4df374e91a80197ffc337f12f572bdcf526594c028cc5ed00693d5f3e3aa14af->enter($__internal_4df374e91a80197ffc337f12f572bdcf526594c028cc5ed00693d5f3e3aa14af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fd879f9d687eae234cc16dde9ccd92ff6ffcb3ecd1e4cd863905a1ab1251fed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd879f9d687eae234cc16dde9ccd92ff6ffcb3ecd1e4cd863905a1ab1251fed3->enter($__internal_fd879f9d687eae234cc16dde9ccd92ff6ffcb3ecd1e4cd863905a1ab1251fed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_fd879f9d687eae234cc16dde9ccd92ff6ffcb3ecd1e4cd863905a1ab1251fed3->leave($__internal_fd879f9d687eae234cc16dde9ccd92ff6ffcb3ecd1e4cd863905a1ab1251fed3_prof);

        
        $__internal_4df374e91a80197ffc337f12f572bdcf526594c028cc5ed00693d5f3e3aa14af->leave($__internal_4df374e91a80197ffc337f12f572bdcf526594c028cc5ed00693d5f3e3aa14af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
