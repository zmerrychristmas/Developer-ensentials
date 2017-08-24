<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_0367cebd603c65cd73f9f896be675902d7d1032538db024b3abd4088e1ea7a9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_3d4ac22b27d4a517ace2b5477146aa7b0fcd7e0d840fb7432ff5eecaab22d5b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4ac22b27d4a517ace2b5477146aa7b0fcd7e0d840fb7432ff5eecaab22d5b5->enter($__internal_3d4ac22b27d4a517ace2b5477146aa7b0fcd7e0d840fb7432ff5eecaab22d5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_054e4d63a72e9ac675ceb42fac1c2ab21cf22a6b6de4c02ac0941bfa917da700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054e4d63a72e9ac675ceb42fac1c2ab21cf22a6b6de4c02ac0941bfa917da700->enter($__internal_054e4d63a72e9ac675ceb42fac1c2ab21cf22a6b6de4c02ac0941bfa917da700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4ac22b27d4a517ace2b5477146aa7b0fcd7e0d840fb7432ff5eecaab22d5b5->leave($__internal_3d4ac22b27d4a517ace2b5477146aa7b0fcd7e0d840fb7432ff5eecaab22d5b5_prof);

        
        $__internal_054e4d63a72e9ac675ceb42fac1c2ab21cf22a6b6de4c02ac0941bfa917da700->leave($__internal_054e4d63a72e9ac675ceb42fac1c2ab21cf22a6b6de4c02ac0941bfa917da700_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5060d7720abc44fd547f7b88117a76b99688753477399aab01ac0bcc50f90aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5060d7720abc44fd547f7b88117a76b99688753477399aab01ac0bcc50f90aa8->enter($__internal_5060d7720abc44fd547f7b88117a76b99688753477399aab01ac0bcc50f90aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2d96c91573f780174d59f9c0713a68f3b6359c9ec31258c17533d66f063015d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d96c91573f780174d59f9c0713a68f3b6359c9ec31258c17533d66f063015d6->enter($__internal_2d96c91573f780174d59f9c0713a68f3b6359c9ec31258c17533d66f063015d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2d96c91573f780174d59f9c0713a68f3b6359c9ec31258c17533d66f063015d6->leave($__internal_2d96c91573f780174d59f9c0713a68f3b6359c9ec31258c17533d66f063015d6_prof);

        
        $__internal_5060d7720abc44fd547f7b88117a76b99688753477399aab01ac0bcc50f90aa8->leave($__internal_5060d7720abc44fd547f7b88117a76b99688753477399aab01ac0bcc50f90aa8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
