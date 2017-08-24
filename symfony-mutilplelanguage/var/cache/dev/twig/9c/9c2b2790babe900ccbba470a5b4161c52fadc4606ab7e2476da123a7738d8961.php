<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_9c806dd7dfd15734508e5ecd857748ddff474cb3b519999cb3754602a4981050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff156ca35094b6146e25f2ea0252dbb37d89aab3827f64753b50a9322fef8ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff156ca35094b6146e25f2ea0252dbb37d89aab3827f64753b50a9322fef8ff2->enter($__internal_ff156ca35094b6146e25f2ea0252dbb37d89aab3827f64753b50a9322fef8ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_d1d82866773055eaa95d2946b78c26c0057f8089c3926cb7bf4fab42da36d771 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d82866773055eaa95d2946b78c26c0057f8089c3926cb7bf4fab42da36d771->enter($__internal_d1d82866773055eaa95d2946b78c26c0057f8089c3926cb7bf4fab42da36d771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff156ca35094b6146e25f2ea0252dbb37d89aab3827f64753b50a9322fef8ff2->leave($__internal_ff156ca35094b6146e25f2ea0252dbb37d89aab3827f64753b50a9322fef8ff2_prof);

        
        $__internal_d1d82866773055eaa95d2946b78c26c0057f8089c3926cb7bf4fab42da36d771->leave($__internal_d1d82866773055eaa95d2946b78c26c0057f8089c3926cb7bf4fab42da36d771_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_18ca5272f7b08d63d15718d14f33ad9b26a4aa4a408f5f121a8da7bc7d96c7a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18ca5272f7b08d63d15718d14f33ad9b26a4aa4a408f5f121a8da7bc7d96c7a7->enter($__internal_18ca5272f7b08d63d15718d14f33ad9b26a4aa4a408f5f121a8da7bc7d96c7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6cfc6ae128f44b21173d1317065a1915182cbd806e67cb99696359154938bf5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cfc6ae128f44b21173d1317065a1915182cbd806e67cb99696359154938bf5c->enter($__internal_6cfc6ae128f44b21173d1317065a1915182cbd806e67cb99696359154938bf5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_6cfc6ae128f44b21173d1317065a1915182cbd806e67cb99696359154938bf5c->leave($__internal_6cfc6ae128f44b21173d1317065a1915182cbd806e67cb99696359154938bf5c_prof);

        
        $__internal_18ca5272f7b08d63d15718d14f33ad9b26a4aa4a408f5f121a8da7bc7d96c7a7->leave($__internal_18ca5272f7b08d63d15718d14f33ad9b26a4aa4a408f5f121a8da7bc7d96c7a7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
