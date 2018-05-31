<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_24a37b672924dc81e8ec3deaa819ff63d6098425765879650caa073f54a28a3a extends Twig_Template
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
        $__internal_d19c3ae3c3336a45e20cff1bb389c76d56460b27d15ff11ceabd2d6eb27531bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d19c3ae3c3336a45e20cff1bb389c76d56460b27d15ff11ceabd2d6eb27531bc->enter($__internal_d19c3ae3c3336a45e20cff1bb389c76d56460b27d15ff11ceabd2d6eb27531bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_cabbd4f3870e56396619d1124c73451099abfc5bfa649b732bea2b72d2bd5b2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cabbd4f3870e56396619d1124c73451099abfc5bfa649b732bea2b72d2bd5b2d->enter($__internal_cabbd4f3870e56396619d1124c73451099abfc5bfa649b732bea2b72d2bd5b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_d19c3ae3c3336a45e20cff1bb389c76d56460b27d15ff11ceabd2d6eb27531bc->leave($__internal_d19c3ae3c3336a45e20cff1bb389c76d56460b27d15ff11ceabd2d6eb27531bc_prof);

        
        $__internal_cabbd4f3870e56396619d1124c73451099abfc5bfa649b732bea2b72d2bd5b2d->leave($__internal_cabbd4f3870e56396619d1124c73451099abfc5bfa649b732bea2b72d2bd5b2d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
