<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_7394a095354d7a0af196a51e46d88f8211521825c44ed7f5719f9adda08824a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_6e1deff9d8d93d9a0ae41bc068fb1557d369f0df96012c45691b62289a9d32b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1deff9d8d93d9a0ae41bc068fb1557d369f0df96012c45691b62289a9d32b0->enter($__internal_6e1deff9d8d93d9a0ae41bc068fb1557d369f0df96012c45691b62289a9d32b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_3659b0ec2d036608813b1f1f0adc3cf77c6827f62378c0fbc3a84881f2afdac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3659b0ec2d036608813b1f1f0adc3cf77c6827f62378c0fbc3a84881f2afdac6->enter($__internal_3659b0ec2d036608813b1f1f0adc3cf77c6827f62378c0fbc3a84881f2afdac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e1deff9d8d93d9a0ae41bc068fb1557d369f0df96012c45691b62289a9d32b0->leave($__internal_6e1deff9d8d93d9a0ae41bc068fb1557d369f0df96012c45691b62289a9d32b0_prof);

        
        $__internal_3659b0ec2d036608813b1f1f0adc3cf77c6827f62378c0fbc3a84881f2afdac6->leave($__internal_3659b0ec2d036608813b1f1f0adc3cf77c6827f62378c0fbc3a84881f2afdac6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f13588ff75d8e050dab653d6bc856f5849f0f787862c0ab4251ae68cda0a66d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f13588ff75d8e050dab653d6bc856f5849f0f787862c0ab4251ae68cda0a66d->enter($__internal_0f13588ff75d8e050dab653d6bc856f5849f0f787862c0ab4251ae68cda0a66d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1ddf2307b34b50d51886a47fd6a88c0bc15ce2a4b3afd86e430b020afeac576d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddf2307b34b50d51886a47fd6a88c0bc15ce2a4b3afd86e430b020afeac576d->enter($__internal_1ddf2307b34b50d51886a47fd6a88c0bc15ce2a4b3afd86e430b020afeac576d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_1ddf2307b34b50d51886a47fd6a88c0bc15ce2a4b3afd86e430b020afeac576d->leave($__internal_1ddf2307b34b50d51886a47fd6a88c0bc15ce2a4b3afd86e430b020afeac576d_prof);

        
        $__internal_0f13588ff75d8e050dab653d6bc856f5849f0f787862c0ab4251ae68cda0a66d->leave($__internal_0f13588ff75d8e050dab653d6bc856f5849f0f787862c0ab4251ae68cda0a66d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
