<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7db6f492e97e61dbf64944fbcecd37bdda859fc6789e5bb4c8a68e9edb70f1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77dc87be0715d03492bc21180b0b29efcd0d4f4e3a7c441eef8fa72cab2ce730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77dc87be0715d03492bc21180b0b29efcd0d4f4e3a7c441eef8fa72cab2ce730->enter($__internal_77dc87be0715d03492bc21180b0b29efcd0d4f4e3a7c441eef8fa72cab2ce730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_df43e131b7a39952e4d40a90e86d4621e464586f6ff87e394fa457ad7f009af2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df43e131b7a39952e4d40a90e86d4621e464586f6ff87e394fa457ad7f009af2->enter($__internal_df43e131b7a39952e4d40a90e86d4621e464586f6ff87e394fa457ad7f009af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77dc87be0715d03492bc21180b0b29efcd0d4f4e3a7c441eef8fa72cab2ce730->leave($__internal_77dc87be0715d03492bc21180b0b29efcd0d4f4e3a7c441eef8fa72cab2ce730_prof);

        
        $__internal_df43e131b7a39952e4d40a90e86d4621e464586f6ff87e394fa457ad7f009af2->leave($__internal_df43e131b7a39952e4d40a90e86d4621e464586f6ff87e394fa457ad7f009af2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a534914356f91578ddb1ec6fcecc9e29baa9ff94c1a4eb404a88c3a2e3068708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a534914356f91578ddb1ec6fcecc9e29baa9ff94c1a4eb404a88c3a2e3068708->enter($__internal_a534914356f91578ddb1ec6fcecc9e29baa9ff94c1a4eb404a88c3a2e3068708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c169595c42b5ca02a9abbaacc327c89cd6dc5ad277d9517a7723a376a4e4d1dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c169595c42b5ca02a9abbaacc327c89cd6dc5ad277d9517a7723a376a4e4d1dd->enter($__internal_c169595c42b5ca02a9abbaacc327c89cd6dc5ad277d9517a7723a376a4e4d1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c169595c42b5ca02a9abbaacc327c89cd6dc5ad277d9517a7723a376a4e4d1dd->leave($__internal_c169595c42b5ca02a9abbaacc327c89cd6dc5ad277d9517a7723a376a4e4d1dd_prof);

        
        $__internal_a534914356f91578ddb1ec6fcecc9e29baa9ff94c1a4eb404a88c3a2e3068708->leave($__internal_a534914356f91578ddb1ec6fcecc9e29baa9ff94c1a4eb404a88c3a2e3068708_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b32adbbe4f1411ce055c8c69f7ed534a35090430367114c223de5810caa2942d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b32adbbe4f1411ce055c8c69f7ed534a35090430367114c223de5810caa2942d->enter($__internal_b32adbbe4f1411ce055c8c69f7ed534a35090430367114c223de5810caa2942d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2309397d61c8a1e63e9b7039b44e63eda8c2036bff6e08e00672bb01a46563b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2309397d61c8a1e63e9b7039b44e63eda8c2036bff6e08e00672bb01a46563b0->enter($__internal_2309397d61c8a1e63e9b7039b44e63eda8c2036bff6e08e00672bb01a46563b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_2309397d61c8a1e63e9b7039b44e63eda8c2036bff6e08e00672bb01a46563b0->leave($__internal_2309397d61c8a1e63e9b7039b44e63eda8c2036bff6e08e00672bb01a46563b0_prof);

        
        $__internal_b32adbbe4f1411ce055c8c69f7ed534a35090430367114c223de5810caa2942d->leave($__internal_b32adbbe4f1411ce055c8c69f7ed534a35090430367114c223de5810caa2942d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
