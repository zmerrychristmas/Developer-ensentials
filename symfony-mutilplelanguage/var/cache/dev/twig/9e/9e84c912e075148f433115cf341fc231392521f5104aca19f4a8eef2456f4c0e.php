<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_6eacc0aae9acfac5a48013bcc1b1b67ef20e84fbda1fe446bf5e155a5b07145d extends Twig_Template
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
        $__internal_19f034780b32e2bf9f37b7e05f35529438e9fdba4739f9390c9e7b5ee081e685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f034780b32e2bf9f37b7e05f35529438e9fdba4739f9390c9e7b5ee081e685->enter($__internal_19f034780b32e2bf9f37b7e05f35529438e9fdba4739f9390c9e7b5ee081e685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_bab36e296711072bc0342b7bde2735d33e10d3e740a828b30b05ed164d55bb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab36e296711072bc0342b7bde2735d33e10d3e740a828b30b05ed164d55bb03->enter($__internal_bab36e296711072bc0342b7bde2735d33e10d3e740a828b30b05ed164d55bb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_19f034780b32e2bf9f37b7e05f35529438e9fdba4739f9390c9e7b5ee081e685->leave($__internal_19f034780b32e2bf9f37b7e05f35529438e9fdba4739f9390c9e7b5ee081e685_prof);

        
        $__internal_bab36e296711072bc0342b7bde2735d33e10d3e740a828b30b05ed164d55bb03->leave($__internal_bab36e296711072bc0342b7bde2735d33e10d3e740a828b30b05ed164d55bb03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
