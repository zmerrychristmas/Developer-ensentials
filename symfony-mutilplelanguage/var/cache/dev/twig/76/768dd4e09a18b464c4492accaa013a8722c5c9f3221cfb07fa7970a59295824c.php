<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_e2cd2f8c969170ff794fabc772ebd8cd04c7c597f2ead3ea5eb17fb1d700a66c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_4c9da12ae0112c1b8dd71175cb2b97a2f04b045ebd0e19688ab4457a1a56d30b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9da12ae0112c1b8dd71175cb2b97a2f04b045ebd0e19688ab4457a1a56d30b->enter($__internal_4c9da12ae0112c1b8dd71175cb2b97a2f04b045ebd0e19688ab4457a1a56d30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_fa75df32bf751bb029326a7fd5563f38cd65610205605728e3cea25a431a82bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa75df32bf751bb029326a7fd5563f38cd65610205605728e3cea25a431a82bd->enter($__internal_fa75df32bf751bb029326a7fd5563f38cd65610205605728e3cea25a431a82bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9da12ae0112c1b8dd71175cb2b97a2f04b045ebd0e19688ab4457a1a56d30b->leave($__internal_4c9da12ae0112c1b8dd71175cb2b97a2f04b045ebd0e19688ab4457a1a56d30b_prof);

        
        $__internal_fa75df32bf751bb029326a7fd5563f38cd65610205605728e3cea25a431a82bd->leave($__internal_fa75df32bf751bb029326a7fd5563f38cd65610205605728e3cea25a431a82bd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12294d4392c41c366e4dbd081b6db91250fd2a876293e8c350cc60cd68641caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12294d4392c41c366e4dbd081b6db91250fd2a876293e8c350cc60cd68641caf->enter($__internal_12294d4392c41c366e4dbd081b6db91250fd2a876293e8c350cc60cd68641caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1324427ce108919382ce35f4908253d34a69253eeb87c4bf9c786c4b08b2b174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1324427ce108919382ce35f4908253d34a69253eeb87c4bf9c786c4b08b2b174->enter($__internal_1324427ce108919382ce35f4908253d34a69253eeb87c4bf9c786c4b08b2b174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_1324427ce108919382ce35f4908253d34a69253eeb87c4bf9c786c4b08b2b174->leave($__internal_1324427ce108919382ce35f4908253d34a69253eeb87c4bf9c786c4b08b2b174_prof);

        
        $__internal_12294d4392c41c366e4dbd081b6db91250fd2a876293e8c350cc60cd68641caf->leave($__internal_12294d4392c41c366e4dbd081b6db91250fd2a876293e8c350cc60cd68641caf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
