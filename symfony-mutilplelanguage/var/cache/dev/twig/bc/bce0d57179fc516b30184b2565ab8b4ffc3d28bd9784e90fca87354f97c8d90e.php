<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_520d2edee525c3a95165d6ed96ddc238a904b01b470b6a5abc48624d8cf55778 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_96744a3250d42517c128cea53f856075ceefe0fdf10685fcf56e32de9954170c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96744a3250d42517c128cea53f856075ceefe0fdf10685fcf56e32de9954170c->enter($__internal_96744a3250d42517c128cea53f856075ceefe0fdf10685fcf56e32de9954170c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_45d38d1f7abb0756738d08cf7cc6cda2153020a2b1bd06e03e6b0f54fd28db5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d38d1f7abb0756738d08cf7cc6cda2153020a2b1bd06e03e6b0f54fd28db5e->enter($__internal_45d38d1f7abb0756738d08cf7cc6cda2153020a2b1bd06e03e6b0f54fd28db5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96744a3250d42517c128cea53f856075ceefe0fdf10685fcf56e32de9954170c->leave($__internal_96744a3250d42517c128cea53f856075ceefe0fdf10685fcf56e32de9954170c_prof);

        
        $__internal_45d38d1f7abb0756738d08cf7cc6cda2153020a2b1bd06e03e6b0f54fd28db5e->leave($__internal_45d38d1f7abb0756738d08cf7cc6cda2153020a2b1bd06e03e6b0f54fd28db5e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4ce1f4835be8702af8b1a4e421f36338514180de70c762af5336a7708f10722 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ce1f4835be8702af8b1a4e421f36338514180de70c762af5336a7708f10722->enter($__internal_f4ce1f4835be8702af8b1a4e421f36338514180de70c762af5336a7708f10722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_785144c0f2b8c388e0ef13a14b011aa19f36f9299b1cf57a488a0281cd1cc03a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785144c0f2b8c388e0ef13a14b011aa19f36f9299b1cf57a488a0281cd1cc03a->enter($__internal_785144c0f2b8c388e0ef13a14b011aa19f36f9299b1cf57a488a0281cd1cc03a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_785144c0f2b8c388e0ef13a14b011aa19f36f9299b1cf57a488a0281cd1cc03a->leave($__internal_785144c0f2b8c388e0ef13a14b011aa19f36f9299b1cf57a488a0281cd1cc03a_prof);

        
        $__internal_f4ce1f4835be8702af8b1a4e421f36338514180de70c762af5336a7708f10722->leave($__internal_f4ce1f4835be8702af8b1a4e421f36338514180de70c762af5336a7708f10722_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
