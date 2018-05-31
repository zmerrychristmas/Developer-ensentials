<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_672ce66ce36bb0fec0d531aa70f4e572e23ff97d3b5706b3f5721e1fe4edaafb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_99f5533cb391eefca24e68efcbda9a34eefe290a8508c49ee83b3e80ac29db09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99f5533cb391eefca24e68efcbda9a34eefe290a8508c49ee83b3e80ac29db09->enter($__internal_99f5533cb391eefca24e68efcbda9a34eefe290a8508c49ee83b3e80ac29db09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_7752105c0f6ec843d6fc0e532d67843224b976c6cfe1ea3322dbfbcc24c4c42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7752105c0f6ec843d6fc0e532d67843224b976c6cfe1ea3322dbfbcc24c4c42a->enter($__internal_7752105c0f6ec843d6fc0e532d67843224b976c6cfe1ea3322dbfbcc24c4c42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99f5533cb391eefca24e68efcbda9a34eefe290a8508c49ee83b3e80ac29db09->leave($__internal_99f5533cb391eefca24e68efcbda9a34eefe290a8508c49ee83b3e80ac29db09_prof);

        
        $__internal_7752105c0f6ec843d6fc0e532d67843224b976c6cfe1ea3322dbfbcc24c4c42a->leave($__internal_7752105c0f6ec843d6fc0e532d67843224b976c6cfe1ea3322dbfbcc24c4c42a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ea9e0f9dceb297fbf182d5ac33c81ec399ea699836b6092d04097bb3855a9693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea9e0f9dceb297fbf182d5ac33c81ec399ea699836b6092d04097bb3855a9693->enter($__internal_ea9e0f9dceb297fbf182d5ac33c81ec399ea699836b6092d04097bb3855a9693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b7e678926888e29390489c5cefa4a9ed7de9c7172b3742d7fb5130557aa1f73a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e678926888e29390489c5cefa4a9ed7de9c7172b3742d7fb5130557aa1f73a->enter($__internal_b7e678926888e29390489c5cefa4a9ed7de9c7172b3742d7fb5130557aa1f73a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_b7e678926888e29390489c5cefa4a9ed7de9c7172b3742d7fb5130557aa1f73a->leave($__internal_b7e678926888e29390489c5cefa4a9ed7de9c7172b3742d7fb5130557aa1f73a_prof);

        
        $__internal_ea9e0f9dceb297fbf182d5ac33c81ec399ea699836b6092d04097bb3855a9693->leave($__internal_ea9e0f9dceb297fbf182d5ac33c81ec399ea699836b6092d04097bb3855a9693_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
