<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_f6994792f5da256b86e70fb07fa3b273380c4bd40a55e50633e17b179f4add04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d7b2c9b81dc6f22dd12178f20cc95cde14c3677355ec57a7aabedf1c16d5277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d7b2c9b81dc6f22dd12178f20cc95cde14c3677355ec57a7aabedf1c16d5277->enter($__internal_9d7b2c9b81dc6f22dd12178f20cc95cde14c3677355ec57a7aabedf1c16d5277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        $__internal_6a8e07bc1d63ab2d7612c6f309d86f9465fa86109847d0320368f03675553704 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8e07bc1d63ab2d7612c6f309d86f9465fa86109847d0320368f03675553704->enter($__internal_6a8e07bc1d63ab2d7612c6f309d86f9465fa86109847d0320368f03675553704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) ? $context["group_name"] : $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_9d7b2c9b81dc6f22dd12178f20cc95cde14c3677355ec57a7aabedf1c16d5277->leave($__internal_9d7b2c9b81dc6f22dd12178f20cc95cde14c3677355ec57a7aabedf1c16d5277_prof);

        
        $__internal_6a8e07bc1d63ab2d7612c6f309d86f9465fa86109847d0320368f03675553704->leave($__internal_6a8e07bc1d63ab2d7612c6f309d86f9465fa86109847d0320368f03675553704_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:edit_content.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit_content.html.twig");
    }
}
