<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_d7fbf7c6a0dfac30509226a0b6d2aa6472ab488d619d2064c569dc9bedb43930 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_5b570455d69146e7f3105ec143bfa803cd9ac402e6aee7d12144943a9e226be7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b570455d69146e7f3105ec143bfa803cd9ac402e6aee7d12144943a9e226be7->enter($__internal_5b570455d69146e7f3105ec143bfa803cd9ac402e6aee7d12144943a9e226be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_0336bab6ca7797041991e4fc463af4942fb0361c3532dc6cf5b1250b345ab77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0336bab6ca7797041991e4fc463af4942fb0361c3532dc6cf5b1250b345ab77d->enter($__internal_0336bab6ca7797041991e4fc463af4942fb0361c3532dc6cf5b1250b345ab77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b570455d69146e7f3105ec143bfa803cd9ac402e6aee7d12144943a9e226be7->leave($__internal_5b570455d69146e7f3105ec143bfa803cd9ac402e6aee7d12144943a9e226be7_prof);

        
        $__internal_0336bab6ca7797041991e4fc463af4942fb0361c3532dc6cf5b1250b345ab77d->leave($__internal_0336bab6ca7797041991e4fc463af4942fb0361c3532dc6cf5b1250b345ab77d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_35b9c44ff6f492be959ce52c2523016ad4d6985143aa9ac3eaacc1db390c51b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35b9c44ff6f492be959ce52c2523016ad4d6985143aa9ac3eaacc1db390c51b4->enter($__internal_35b9c44ff6f492be959ce52c2523016ad4d6985143aa9ac3eaacc1db390c51b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c70c96b1246bef78ddc9bbeeaa2674a1314bac6bf54329e42758ba2aa770b89d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c70c96b1246bef78ddc9bbeeaa2674a1314bac6bf54329e42758ba2aa770b89d->enter($__internal_c70c96b1246bef78ddc9bbeeaa2674a1314bac6bf54329e42758ba2aa770b89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c70c96b1246bef78ddc9bbeeaa2674a1314bac6bf54329e42758ba2aa770b89d->leave($__internal_c70c96b1246bef78ddc9bbeeaa2674a1314bac6bf54329e42758ba2aa770b89d_prof);

        
        $__internal_35b9c44ff6f492be959ce52c2523016ad4d6985143aa9ac3eaacc1db390c51b4->leave($__internal_35b9c44ff6f492be959ce52c2523016ad4d6985143aa9ac3eaacc1db390c51b4_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
