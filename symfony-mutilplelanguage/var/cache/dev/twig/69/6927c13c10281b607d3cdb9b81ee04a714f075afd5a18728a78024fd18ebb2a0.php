<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_73468cd9ccb10ce1e43908b99c270e1133ca0c67ea9872a10a47cca5dd1cf0d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_ef985bceb8113cfc22d96ee911c83ba9cccc2cf8535e557705e4556109be1a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef985bceb8113cfc22d96ee911c83ba9cccc2cf8535e557705e4556109be1a01->enter($__internal_ef985bceb8113cfc22d96ee911c83ba9cccc2cf8535e557705e4556109be1a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_4268305e40f85aa6d30e28832a0fe46e0196d31ddffe4ea4c2e83ff4aac70421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4268305e40f85aa6d30e28832a0fe46e0196d31ddffe4ea4c2e83ff4aac70421->enter($__internal_4268305e40f85aa6d30e28832a0fe46e0196d31ddffe4ea4c2e83ff4aac70421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef985bceb8113cfc22d96ee911c83ba9cccc2cf8535e557705e4556109be1a01->leave($__internal_ef985bceb8113cfc22d96ee911c83ba9cccc2cf8535e557705e4556109be1a01_prof);

        
        $__internal_4268305e40f85aa6d30e28832a0fe46e0196d31ddffe4ea4c2e83ff4aac70421->leave($__internal_4268305e40f85aa6d30e28832a0fe46e0196d31ddffe4ea4c2e83ff4aac70421_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab53da67dc98464d49a65d59d9bb19615e7316e67d6549cf7ca863b1a96cb88e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab53da67dc98464d49a65d59d9bb19615e7316e67d6549cf7ca863b1a96cb88e->enter($__internal_ab53da67dc98464d49a65d59d9bb19615e7316e67d6549cf7ca863b1a96cb88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3ff23150de5b52582c0b757482a860840a5564fda47f585b0ef1fce5bf063352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff23150de5b52582c0b757482a860840a5564fda47f585b0ef1fce5bf063352->enter($__internal_3ff23150de5b52582c0b757482a860840a5564fda47f585b0ef1fce5bf063352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_3ff23150de5b52582c0b757482a860840a5564fda47f585b0ef1fce5bf063352->leave($__internal_3ff23150de5b52582c0b757482a860840a5564fda47f585b0ef1fce5bf063352_prof);

        
        $__internal_ab53da67dc98464d49a65d59d9bb19615e7316e67d6549cf7ca863b1a96cb88e->leave($__internal_ab53da67dc98464d49a65d59d9bb19615e7316e67d6549cf7ca863b1a96cb88e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
