<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_dc857ce0eb360e6badbc1c69e03716cfbc58bdbd2bd38a4e3a2f0541a83e84f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_464db852b77522e3a1df2ed1bd8789b9efb0530c9c58d610c9ade28be300143f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_464db852b77522e3a1df2ed1bd8789b9efb0530c9c58d610c9ade28be300143f->enter($__internal_464db852b77522e3a1df2ed1bd8789b9efb0530c9c58d610c9ade28be300143f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_9fe3906b948d5f319ca309fdb372ad0d8b847a492e4f9a6884948094b9d53291 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fe3906b948d5f319ca309fdb372ad0d8b847a492e4f9a6884948094b9d53291->enter($__internal_9fe3906b948d5f319ca309fdb372ad0d8b847a492e4f9a6884948094b9d53291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_464db852b77522e3a1df2ed1bd8789b9efb0530c9c58d610c9ade28be300143f->leave($__internal_464db852b77522e3a1df2ed1bd8789b9efb0530c9c58d610c9ade28be300143f_prof);

        
        $__internal_9fe3906b948d5f319ca309fdb372ad0d8b847a492e4f9a6884948094b9d53291->leave($__internal_9fe3906b948d5f319ca309fdb372ad0d8b847a492e4f9a6884948094b9d53291_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c1b808c2e4ec41f0a546aa1cedf8932f9c95b62604ab751816326645fad769f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b808c2e4ec41f0a546aa1cedf8932f9c95b62604ab751816326645fad769f5->enter($__internal_c1b808c2e4ec41f0a546aa1cedf8932f9c95b62604ab751816326645fad769f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_94018a1ca43ae42fbaba680dd62e88f7d0a535e95dfca0d1ed8a7bc71ffcc216 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94018a1ca43ae42fbaba680dd62e88f7d0a535e95dfca0d1ed8a7bc71ffcc216->enter($__internal_94018a1ca43ae42fbaba680dd62e88f7d0a535e95dfca0d1ed8a7bc71ffcc216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_94018a1ca43ae42fbaba680dd62e88f7d0a535e95dfca0d1ed8a7bc71ffcc216->leave($__internal_94018a1ca43ae42fbaba680dd62e88f7d0a535e95dfca0d1ed8a7bc71ffcc216_prof);

        
        $__internal_c1b808c2e4ec41f0a546aa1cedf8932f9c95b62604ab751816326645fad769f5->leave($__internal_c1b808c2e4ec41f0a546aa1cedf8932f9c95b62604ab751816326645fad769f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
