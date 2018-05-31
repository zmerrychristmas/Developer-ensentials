<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_f6531d2dff64266a12d627c7be99e50a0325a9145ef217bf934c05342ae34817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_50733072ffdf31b49d6e560d5d5e54a8a99a7761d13bdc1b68471b4b0b0313cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50733072ffdf31b49d6e560d5d5e54a8a99a7761d13bdc1b68471b4b0b0313cc->enter($__internal_50733072ffdf31b49d6e560d5d5e54a8a99a7761d13bdc1b68471b4b0b0313cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_69109e807f4caa6eff2f956a303d56bcf9da7ec5730a4472d324621366b47c56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69109e807f4caa6eff2f956a303d56bcf9da7ec5730a4472d324621366b47c56->enter($__internal_69109e807f4caa6eff2f956a303d56bcf9da7ec5730a4472d324621366b47c56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50733072ffdf31b49d6e560d5d5e54a8a99a7761d13bdc1b68471b4b0b0313cc->leave($__internal_50733072ffdf31b49d6e560d5d5e54a8a99a7761d13bdc1b68471b4b0b0313cc_prof);

        
        $__internal_69109e807f4caa6eff2f956a303d56bcf9da7ec5730a4472d324621366b47c56->leave($__internal_69109e807f4caa6eff2f956a303d56bcf9da7ec5730a4472d324621366b47c56_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_033dfd31fe6749a0b1623404b83344ff84a1578c83be181ecfc2272d7272fe36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_033dfd31fe6749a0b1623404b83344ff84a1578c83be181ecfc2272d7272fe36->enter($__internal_033dfd31fe6749a0b1623404b83344ff84a1578c83be181ecfc2272d7272fe36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f35f6d64ced5bee2c4278ff55f5df94df9cf85706d81456638504aebdd698253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35f6d64ced5bee2c4278ff55f5df94df9cf85706d81456638504aebdd698253->enter($__internal_f35f6d64ced5bee2c4278ff55f5df94df9cf85706d81456638504aebdd698253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_f35f6d64ced5bee2c4278ff55f5df94df9cf85706d81456638504aebdd698253->leave($__internal_f35f6d64ced5bee2c4278ff55f5df94df9cf85706d81456638504aebdd698253_prof);

        
        $__internal_033dfd31fe6749a0b1623404b83344ff84a1578c83be181ecfc2272d7272fe36->leave($__internal_033dfd31fe6749a0b1623404b83344ff84a1578c83be181ecfc2272d7272fe36_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
