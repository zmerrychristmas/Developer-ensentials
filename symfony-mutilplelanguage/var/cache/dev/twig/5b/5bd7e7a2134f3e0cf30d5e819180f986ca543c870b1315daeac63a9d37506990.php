<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_bc578be23cd80f135dfd4cc54eed7c0f2dcd1a36c5f1af8d58e55c0d88bdef11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a6e1cc49f58d57366ae46f9c1657a915d666babb0ac8a322477dfa5dc5daf51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a6e1cc49f58d57366ae46f9c1657a915d666babb0ac8a322477dfa5dc5daf51->enter($__internal_9a6e1cc49f58d57366ae46f9c1657a915d666babb0ac8a322477dfa5dc5daf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_c3fd4c5e808d6d7d25dd3aeae251e087e12fdde429a2c97a2d042043ff82c9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3fd4c5e808d6d7d25dd3aeae251e087e12fdde429a2c97a2d042043ff82c9b6->enter($__internal_c3fd4c5e808d6d7d25dd3aeae251e087e12fdde429a2c97a2d042043ff82c9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9a6e1cc49f58d57366ae46f9c1657a915d666babb0ac8a322477dfa5dc5daf51->leave($__internal_9a6e1cc49f58d57366ae46f9c1657a915d666babb0ac8a322477dfa5dc5daf51_prof);

        
        $__internal_c3fd4c5e808d6d7d25dd3aeae251e087e12fdde429a2c97a2d042043ff82c9b6->leave($__internal_c3fd4c5e808d6d7d25dd3aeae251e087e12fdde429a2c97a2d042043ff82c9b6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5ed83824c7f846663818a4f5fec0d66daac847fc8c38bd716385e267e66f6e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ed83824c7f846663818a4f5fec0d66daac847fc8c38bd716385e267e66f6e32->enter($__internal_5ed83824c7f846663818a4f5fec0d66daac847fc8c38bd716385e267e66f6e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_570c493d014ffaeb897eee88bb45364b74d5f0a1f65f8635e2d5c2a794bcafe2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_570c493d014ffaeb897eee88bb45364b74d5f0a1f65f8635e2d5c2a794bcafe2->enter($__internal_570c493d014ffaeb897eee88bb45364b74d5f0a1f65f8635e2d5c2a794bcafe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_570c493d014ffaeb897eee88bb45364b74d5f0a1f65f8635e2d5c2a794bcafe2->leave($__internal_570c493d014ffaeb897eee88bb45364b74d5f0a1f65f8635e2d5c2a794bcafe2_prof);

        
        $__internal_5ed83824c7f846663818a4f5fec0d66daac847fc8c38bd716385e267e66f6e32->leave($__internal_5ed83824c7f846663818a4f5fec0d66daac847fc8c38bd716385e267e66f6e32_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a8b326dffef12b1e4c8de6679896648fc359e0ee474486412ef0e63468d360c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b326dffef12b1e4c8de6679896648fc359e0ee474486412ef0e63468d360c8->enter($__internal_a8b326dffef12b1e4c8de6679896648fc359e0ee474486412ef0e63468d360c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_976b7ed3b208b3e73fdac953c1a47f5d8678b1cb25b9b920c8c1389338379f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976b7ed3b208b3e73fdac953c1a47f5d8678b1cb25b9b920c8c1389338379f48->enter($__internal_976b7ed3b208b3e73fdac953c1a47f5d8678b1cb25b9b920c8c1389338379f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_976b7ed3b208b3e73fdac953c1a47f5d8678b1cb25b9b920c8c1389338379f48->leave($__internal_976b7ed3b208b3e73fdac953c1a47f5d8678b1cb25b9b920c8c1389338379f48_prof);

        
        $__internal_a8b326dffef12b1e4c8de6679896648fc359e0ee474486412ef0e63468d360c8->leave($__internal_a8b326dffef12b1e4c8de6679896648fc359e0ee474486412ef0e63468d360c8_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f4de769eb5308e6849a003f20da0c0a5a826526969088b5348bd9e6e02e6aaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4de769eb5308e6849a003f20da0c0a5a826526969088b5348bd9e6e02e6aaa8->enter($__internal_f4de769eb5308e6849a003f20da0c0a5a826526969088b5348bd9e6e02e6aaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_4b94eec437a7a42ec470120e745a4b054abc7597a0009b66bb16a0aba9ba571b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b94eec437a7a42ec470120e745a4b054abc7597a0009b66bb16a0aba9ba571b->enter($__internal_4b94eec437a7a42ec470120e745a4b054abc7597a0009b66bb16a0aba9ba571b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4b94eec437a7a42ec470120e745a4b054abc7597a0009b66bb16a0aba9ba571b->leave($__internal_4b94eec437a7a42ec470120e745a4b054abc7597a0009b66bb16a0aba9ba571b_prof);

        
        $__internal_f4de769eb5308e6849a003f20da0c0a5a826526969088b5348bd9e6e02e6aaa8->leave($__internal_f4de769eb5308e6849a003f20da0c0a5a826526969088b5348bd9e6e02e6aaa8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
