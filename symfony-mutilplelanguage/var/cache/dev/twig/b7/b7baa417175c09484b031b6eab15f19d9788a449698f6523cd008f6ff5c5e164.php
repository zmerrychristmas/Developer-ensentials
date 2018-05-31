<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a5f4964b8dd2411fb4b93db10fd09e972e9a4fc40c61ab201c92f8f0befe5dec extends Twig_Template
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
        $__internal_d6ab71445e9aeb04e4ba82b2dcfb5ab6de9e882a85efc3323cd0422045c7a62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6ab71445e9aeb04e4ba82b2dcfb5ab6de9e882a85efc3323cd0422045c7a62d->enter($__internal_d6ab71445e9aeb04e4ba82b2dcfb5ab6de9e882a85efc3323cd0422045c7a62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_584e2c39d91a41e0ce5f168b22772421a21830bbe9c68c227dc3c5a02f33c923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_584e2c39d91a41e0ce5f168b22772421a21830bbe9c68c227dc3c5a02f33c923->enter($__internal_584e2c39d91a41e0ce5f168b22772421a21830bbe9c68c227dc3c5a02f33c923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_d6ab71445e9aeb04e4ba82b2dcfb5ab6de9e882a85efc3323cd0422045c7a62d->leave($__internal_d6ab71445e9aeb04e4ba82b2dcfb5ab6de9e882a85efc3323cd0422045c7a62d_prof);

        
        $__internal_584e2c39d91a41e0ce5f168b22772421a21830bbe9c68c227dc3c5a02f33c923->leave($__internal_584e2c39d91a41e0ce5f168b22772421a21830bbe9c68c227dc3c5a02f33c923_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
