<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_b1cee4bc8b5c0942487186f3c65ad3fe4ad7637b767389ac123d14af27d86e9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_2d3bc65c99116cb6385219b641ca8eb81672f9ee036403521f54b96fad302f39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3bc65c99116cb6385219b641ca8eb81672f9ee036403521f54b96fad302f39->enter($__internal_2d3bc65c99116cb6385219b641ca8eb81672f9ee036403521f54b96fad302f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_bd77cad23f2b57ea584fc9fa7c7568b366aa859383e0262f4e9e91a22a0683a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd77cad23f2b57ea584fc9fa7c7568b366aa859383e0262f4e9e91a22a0683a4->enter($__internal_bd77cad23f2b57ea584fc9fa7c7568b366aa859383e0262f4e9e91a22a0683a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d3bc65c99116cb6385219b641ca8eb81672f9ee036403521f54b96fad302f39->leave($__internal_2d3bc65c99116cb6385219b641ca8eb81672f9ee036403521f54b96fad302f39_prof);

        
        $__internal_bd77cad23f2b57ea584fc9fa7c7568b366aa859383e0262f4e9e91a22a0683a4->leave($__internal_bd77cad23f2b57ea584fc9fa7c7568b366aa859383e0262f4e9e91a22a0683a4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3bbe209a297fd5360e06a22209348c7f9f92e926610b6630682eb7bec59677af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bbe209a297fd5360e06a22209348c7f9f92e926610b6630682eb7bec59677af->enter($__internal_3bbe209a297fd5360e06a22209348c7f9f92e926610b6630682eb7bec59677af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_68418aa1dd9b5e747146db3990fe9ba9287b42bfb62146ba5cb114035f5baa8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68418aa1dd9b5e747146db3990fe9ba9287b42bfb62146ba5cb114035f5baa8d->enter($__internal_68418aa1dd9b5e747146db3990fe9ba9287b42bfb62146ba5cb114035f5baa8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_68418aa1dd9b5e747146db3990fe9ba9287b42bfb62146ba5cb114035f5baa8d->leave($__internal_68418aa1dd9b5e747146db3990fe9ba9287b42bfb62146ba5cb114035f5baa8d_prof);

        
        $__internal_3bbe209a297fd5360e06a22209348c7f9f92e926610b6630682eb7bec59677af->leave($__internal_3bbe209a297fd5360e06a22209348c7f9f92e926610b6630682eb7bec59677af_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
