<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_4b3f262fc8be21973574807af7e2ba9163adf67298e2e824ad9d8ff162433505 extends Twig_Template
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
        $__internal_eb8ab09d91a2fedcdadf27102f46bec203bfdfb1669a9189fa204405bfc925bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb8ab09d91a2fedcdadf27102f46bec203bfdfb1669a9189fa204405bfc925bd->enter($__internal_eb8ab09d91a2fedcdadf27102f46bec203bfdfb1669a9189fa204405bfc925bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_7aeb4a988296e032b954529fbb0400016ca125f6d6db076e1f29e2fcf66b21fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aeb4a988296e032b954529fbb0400016ca125f6d6db076e1f29e2fcf66b21fe->enter($__internal_7aeb4a988296e032b954529fbb0400016ca125f6d6db076e1f29e2fcf66b21fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_eb8ab09d91a2fedcdadf27102f46bec203bfdfb1669a9189fa204405bfc925bd->leave($__internal_eb8ab09d91a2fedcdadf27102f46bec203bfdfb1669a9189fa204405bfc925bd_prof);

        
        $__internal_7aeb4a988296e032b954529fbb0400016ca125f6d6db076e1f29e2fcf66b21fe->leave($__internal_7aeb4a988296e032b954529fbb0400016ca125f6d6db076e1f29e2fcf66b21fe_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_101eb1bb3835335fc76d1b35471aee55e32deaa9307451301bcdd3a7ea1ceaec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_101eb1bb3835335fc76d1b35471aee55e32deaa9307451301bcdd3a7ea1ceaec->enter($__internal_101eb1bb3835335fc76d1b35471aee55e32deaa9307451301bcdd3a7ea1ceaec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_013125957783646d22eebc11ed4254eacce4ac55df0c7bb760293ca504f3c9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_013125957783646d22eebc11ed4254eacce4ac55df0c7bb760293ca504f3c9b6->enter($__internal_013125957783646d22eebc11ed4254eacce4ac55df0c7bb760293ca504f3c9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_013125957783646d22eebc11ed4254eacce4ac55df0c7bb760293ca504f3c9b6->leave($__internal_013125957783646d22eebc11ed4254eacce4ac55df0c7bb760293ca504f3c9b6_prof);

        
        $__internal_101eb1bb3835335fc76d1b35471aee55e32deaa9307451301bcdd3a7ea1ceaec->leave($__internal_101eb1bb3835335fc76d1b35471aee55e32deaa9307451301bcdd3a7ea1ceaec_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7fad4ec58b6ed40a92d9a53ac324df75b995b285ba91bf4286d091ecb1fcc97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fad4ec58b6ed40a92d9a53ac324df75b995b285ba91bf4286d091ecb1fcc97f->enter($__internal_7fad4ec58b6ed40a92d9a53ac324df75b995b285ba91bf4286d091ecb1fcc97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9f74917a0a405bfc0c6a685c749d8d0847c8f907a2e724646c93f929e1e10d84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f74917a0a405bfc0c6a685c749d8d0847c8f907a2e724646c93f929e1e10d84->enter($__internal_9f74917a0a405bfc0c6a685c749d8d0847c8f907a2e724646c93f929e1e10d84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9f74917a0a405bfc0c6a685c749d8d0847c8f907a2e724646c93f929e1e10d84->leave($__internal_9f74917a0a405bfc0c6a685c749d8d0847c8f907a2e724646c93f929e1e10d84_prof);

        
        $__internal_7fad4ec58b6ed40a92d9a53ac324df75b995b285ba91bf4286d091ecb1fcc97f->leave($__internal_7fad4ec58b6ed40a92d9a53ac324df75b995b285ba91bf4286d091ecb1fcc97f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e825e08c5a2f1b7f83983c330665f5ef82b7130ca55ee21916c661eb7c14c822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e825e08c5a2f1b7f83983c330665f5ef82b7130ca55ee21916c661eb7c14c822->enter($__internal_e825e08c5a2f1b7f83983c330665f5ef82b7130ca55ee21916c661eb7c14c822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d782839e42c91d60f4e5ec90a3396b46278a994c51cfa9893e2af32f5bd16dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d782839e42c91d60f4e5ec90a3396b46278a994c51cfa9893e2af32f5bd16dc7->enter($__internal_d782839e42c91d60f4e5ec90a3396b46278a994c51cfa9893e2af32f5bd16dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d782839e42c91d60f4e5ec90a3396b46278a994c51cfa9893e2af32f5bd16dc7->leave($__internal_d782839e42c91d60f4e5ec90a3396b46278a994c51cfa9893e2af32f5bd16dc7_prof);

        
        $__internal_e825e08c5a2f1b7f83983c330665f5ef82b7130ca55ee21916c661eb7c14c822->leave($__internal_e825e08c5a2f1b7f83983c330665f5ef82b7130ca55ee21916c661eb7c14c822_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
