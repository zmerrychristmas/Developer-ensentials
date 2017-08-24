<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_01f51919ce56e22c3d95ec38d6d0b067f66d7a28a249c0157031c603493cf748 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_de31b8420f43bba339dd2ba00fa2293d567916065d6f18e55628187bd21101b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de31b8420f43bba339dd2ba00fa2293d567916065d6f18e55628187bd21101b0->enter($__internal_de31b8420f43bba339dd2ba00fa2293d567916065d6f18e55628187bd21101b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_012d6c7a021631944fef9f6a6ba8bfa102a00c81350a2330f0a388d6689bfa04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_012d6c7a021631944fef9f6a6ba8bfa102a00c81350a2330f0a388d6689bfa04->enter($__internal_012d6c7a021631944fef9f6a6ba8bfa102a00c81350a2330f0a388d6689bfa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de31b8420f43bba339dd2ba00fa2293d567916065d6f18e55628187bd21101b0->leave($__internal_de31b8420f43bba339dd2ba00fa2293d567916065d6f18e55628187bd21101b0_prof);

        
        $__internal_012d6c7a021631944fef9f6a6ba8bfa102a00c81350a2330f0a388d6689bfa04->leave($__internal_012d6c7a021631944fef9f6a6ba8bfa102a00c81350a2330f0a388d6689bfa04_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb74fa23c039d7b1b90914dba9110cdb2b2ccaa48c493a26d9890e155e941290 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb74fa23c039d7b1b90914dba9110cdb2b2ccaa48c493a26d9890e155e941290->enter($__internal_bb74fa23c039d7b1b90914dba9110cdb2b2ccaa48c493a26d9890e155e941290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_44fc8d9ca6906d27fe3c085a03d233ec1d69a2035e7492e0ae43146c3507cf90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fc8d9ca6906d27fe3c085a03d233ec1d69a2035e7492e0ae43146c3507cf90->enter($__internal_44fc8d9ca6906d27fe3c085a03d233ec1d69a2035e7492e0ae43146c3507cf90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_44fc8d9ca6906d27fe3c085a03d233ec1d69a2035e7492e0ae43146c3507cf90->leave($__internal_44fc8d9ca6906d27fe3c085a03d233ec1d69a2035e7492e0ae43146c3507cf90_prof);

        
        $__internal_bb74fa23c039d7b1b90914dba9110cdb2b2ccaa48c493a26d9890e155e941290->leave($__internal_bb74fa23c039d7b1b90914dba9110cdb2b2ccaa48c493a26d9890e155e941290_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
