<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_81f4f9786c986438eed02a815145f5888175182f7f378b27aa524f263d7b89f9 extends Twig_Template
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
        $__internal_e0ffb3e82f81bd2901fcd2b0d4e91830508d4280a98078e80f3b3f0de1cacb21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ffb3e82f81bd2901fcd2b0d4e91830508d4280a98078e80f3b3f0de1cacb21->enter($__internal_e0ffb3e82f81bd2901fcd2b0d4e91830508d4280a98078e80f3b3f0de1cacb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_faf614218a4c1a59788e091433b5e041ddb3142a9f0cd66a0ab524531158adda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faf614218a4c1a59788e091433b5e041ddb3142a9f0cd66a0ab524531158adda->enter($__internal_faf614218a4c1a59788e091433b5e041ddb3142a9f0cd66a0ab524531158adda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e0ffb3e82f81bd2901fcd2b0d4e91830508d4280a98078e80f3b3f0de1cacb21->leave($__internal_e0ffb3e82f81bd2901fcd2b0d4e91830508d4280a98078e80f3b3f0de1cacb21_prof);

        
        $__internal_faf614218a4c1a59788e091433b5e041ddb3142a9f0cd66a0ab524531158adda->leave($__internal_faf614218a4c1a59788e091433b5e041ddb3142a9f0cd66a0ab524531158adda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
