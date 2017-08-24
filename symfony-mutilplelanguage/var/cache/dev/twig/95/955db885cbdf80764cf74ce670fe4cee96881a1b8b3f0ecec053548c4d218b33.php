<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_1eec25b079a05787991f241f9ec132524debb47d43bae92c9371ea37a41cd434 extends Twig_Template
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
        $__internal_278d5773011b3b523831098e1337b0d00de67b85cc2560263e56345d8f5e8c23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_278d5773011b3b523831098e1337b0d00de67b85cc2560263e56345d8f5e8c23->enter($__internal_278d5773011b3b523831098e1337b0d00de67b85cc2560263e56345d8f5e8c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_0fa337ff936d58ad82fcc0833c5cc0e30d38c9854d9e9d19bd1d676aa4ae82b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa337ff936d58ad82fcc0833c5cc0e30d38c9854d9e9d19bd1d676aa4ae82b0->enter($__internal_0fa337ff936d58ad82fcc0833c5cc0e30d38c9854d9e9d19bd1d676aa4ae82b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_278d5773011b3b523831098e1337b0d00de67b85cc2560263e56345d8f5e8c23->leave($__internal_278d5773011b3b523831098e1337b0d00de67b85cc2560263e56345d8f5e8c23_prof);

        
        $__internal_0fa337ff936d58ad82fcc0833c5cc0e30d38c9854d9e9d19bd1d676aa4ae82b0->leave($__internal_0fa337ff936d58ad82fcc0833c5cc0e30d38c9854d9e9d19bd1d676aa4ae82b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
