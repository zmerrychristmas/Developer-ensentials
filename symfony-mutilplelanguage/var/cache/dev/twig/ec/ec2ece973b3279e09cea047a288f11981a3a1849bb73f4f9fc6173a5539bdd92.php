<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_a7b37095c69f1e8d7b81c41ba2dbcc90e8c8a4c580707021f71aa3d7dcf6843f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_dd943e1ffa3468f1b082f1fa9c829cd5a8cb20d3f7ec96c03ba01e6e03203e6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd943e1ffa3468f1b082f1fa9c829cd5a8cb20d3f7ec96c03ba01e6e03203e6b->enter($__internal_dd943e1ffa3468f1b082f1fa9c829cd5a8cb20d3f7ec96c03ba01e6e03203e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_ae5654df17b89b352e94fca54a2779c7ceaf4cc1de4700372486955b19c8e00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae5654df17b89b352e94fca54a2779c7ceaf4cc1de4700372486955b19c8e00e->enter($__internal_ae5654df17b89b352e94fca54a2779c7ceaf4cc1de4700372486955b19c8e00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd943e1ffa3468f1b082f1fa9c829cd5a8cb20d3f7ec96c03ba01e6e03203e6b->leave($__internal_dd943e1ffa3468f1b082f1fa9c829cd5a8cb20d3f7ec96c03ba01e6e03203e6b_prof);

        
        $__internal_ae5654df17b89b352e94fca54a2779c7ceaf4cc1de4700372486955b19c8e00e->leave($__internal_ae5654df17b89b352e94fca54a2779c7ceaf4cc1de4700372486955b19c8e00e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_40f62b6fb97c92c066d4a82b1e1f683ca7203067c41e5149e0f0899cbdc07dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f62b6fb97c92c066d4a82b1e1f683ca7203067c41e5149e0f0899cbdc07dce->enter($__internal_40f62b6fb97c92c066d4a82b1e1f683ca7203067c41e5149e0f0899cbdc07dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bb6df543e6c54226bdcfb79c48219bcf86e1594a825561424b93b7f86a5bb9d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6df543e6c54226bdcfb79c48219bcf86e1594a825561424b93b7f86a5bb9d2->enter($__internal_bb6df543e6c54226bdcfb79c48219bcf86e1594a825561424b93b7f86a5bb9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_bb6df543e6c54226bdcfb79c48219bcf86e1594a825561424b93b7f86a5bb9d2->leave($__internal_bb6df543e6c54226bdcfb79c48219bcf86e1594a825561424b93b7f86a5bb9d2_prof);

        
        $__internal_40f62b6fb97c92c066d4a82b1e1f683ca7203067c41e5149e0f0899cbdc07dce->leave($__internal_40f62b6fb97c92c066d4a82b1e1f683ca7203067c41e5149e0f0899cbdc07dce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
