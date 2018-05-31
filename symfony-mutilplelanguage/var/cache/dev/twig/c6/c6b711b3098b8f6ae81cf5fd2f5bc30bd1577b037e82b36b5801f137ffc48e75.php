<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_bb4249dc71239c0410b8b8cee29b4ca713f1cd099a70b93709c74f909653baf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea5db6c235e5913f4cd293bce9b6ee9cd0eecaef7065bfdc72c0485ffa420183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5db6c235e5913f4cd293bce9b6ee9cd0eecaef7065bfdc72c0485ffa420183->enter($__internal_ea5db6c235e5913f4cd293bce9b6ee9cd0eecaef7065bfdc72c0485ffa420183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_452beea45f5ef76b49766799e0fde2d6ff4d28e4d43d522092377bc4cc1f9ce3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_452beea45f5ef76b49766799e0fde2d6ff4d28e4d43d522092377bc4cc1f9ce3->enter($__internal_452beea45f5ef76b49766799e0fde2d6ff4d28e4d43d522092377bc4cc1f9ce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ea5db6c235e5913f4cd293bce9b6ee9cd0eecaef7065bfdc72c0485ffa420183->leave($__internal_ea5db6c235e5913f4cd293bce9b6ee9cd0eecaef7065bfdc72c0485ffa420183_prof);

        
        $__internal_452beea45f5ef76b49766799e0fde2d6ff4d28e4d43d522092377bc4cc1f9ce3->leave($__internal_452beea45f5ef76b49766799e0fde2d6ff4d28e4d43d522092377bc4cc1f9ce3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_af5e6f4e2f41004b98a8008735878ffe0f16211a6e1804632a318c431a93cc6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5e6f4e2f41004b98a8008735878ffe0f16211a6e1804632a318c431a93cc6b->enter($__internal_af5e6f4e2f41004b98a8008735878ffe0f16211a6e1804632a318c431a93cc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_93fdcf645c91df845cd7abf637f95c9727d522c790e6020468299890908f7d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93fdcf645c91df845cd7abf637f95c9727d522c790e6020468299890908f7d0b->enter($__internal_93fdcf645c91df845cd7abf637f95c9727d522c790e6020468299890908f7d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_93fdcf645c91df845cd7abf637f95c9727d522c790e6020468299890908f7d0b->leave($__internal_93fdcf645c91df845cd7abf637f95c9727d522c790e6020468299890908f7d0b_prof);

        
        $__internal_af5e6f4e2f41004b98a8008735878ffe0f16211a6e1804632a318c431a93cc6b->leave($__internal_af5e6f4e2f41004b98a8008735878ffe0f16211a6e1804632a318c431a93cc6b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
