<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_f0d4b89f2b2a6a3e4ae13e51b38fb6bafa54d0b64da4acb72b89c1cc0dffe80f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_f6063fdf0443e01960bf288dc9e296ceb4212e17ed2764ff1a1b13d6232b8268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6063fdf0443e01960bf288dc9e296ceb4212e17ed2764ff1a1b13d6232b8268->enter($__internal_f6063fdf0443e01960bf288dc9e296ceb4212e17ed2764ff1a1b13d6232b8268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_98dd10c404b9dd8386309795f1333f209ab3b390f1d53b7cf6c12d1518c53700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dd10c404b9dd8386309795f1333f209ab3b390f1d53b7cf6c12d1518c53700->enter($__internal_98dd10c404b9dd8386309795f1333f209ab3b390f1d53b7cf6c12d1518c53700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6063fdf0443e01960bf288dc9e296ceb4212e17ed2764ff1a1b13d6232b8268->leave($__internal_f6063fdf0443e01960bf288dc9e296ceb4212e17ed2764ff1a1b13d6232b8268_prof);

        
        $__internal_98dd10c404b9dd8386309795f1333f209ab3b390f1d53b7cf6c12d1518c53700->leave($__internal_98dd10c404b9dd8386309795f1333f209ab3b390f1d53b7cf6c12d1518c53700_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3fe05f3d5a46be296955fcf5a2bcfdc77b95169584937af0bd3f110053a39cc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fe05f3d5a46be296955fcf5a2bcfdc77b95169584937af0bd3f110053a39cc5->enter($__internal_3fe05f3d5a46be296955fcf5a2bcfdc77b95169584937af0bd3f110053a39cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_209b8c92b05479b255ab8f6e215c06f676fc9179f0c2c823dabf8cb448587665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209b8c92b05479b255ab8f6e215c06f676fc9179f0c2c823dabf8cb448587665->enter($__internal_209b8c92b05479b255ab8f6e215c06f676fc9179f0c2c823dabf8cb448587665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_209b8c92b05479b255ab8f6e215c06f676fc9179f0c2c823dabf8cb448587665->leave($__internal_209b8c92b05479b255ab8f6e215c06f676fc9179f0c2c823dabf8cb448587665_prof);

        
        $__internal_3fe05f3d5a46be296955fcf5a2bcfdc77b95169584937af0bd3f110053a39cc5->leave($__internal_3fe05f3d5a46be296955fcf5a2bcfdc77b95169584937af0bd3f110053a39cc5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
