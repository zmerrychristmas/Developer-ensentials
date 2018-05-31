<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_9cbbab7f9cf89fcd3b1eaf46719abe5916175b74d9498e75a3dcdc20bfde2155 extends Twig_Template
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
        $__internal_af475f380bb15f212a6e87bc24f1dd5aa13c9b0dcf696c87e4ede0a72a3f0344 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af475f380bb15f212a6e87bc24f1dd5aa13c9b0dcf696c87e4ede0a72a3f0344->enter($__internal_af475f380bb15f212a6e87bc24f1dd5aa13c9b0dcf696c87e4ede0a72a3f0344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_23acc4d43fb25808b4c867fd65cfbf219b5d29e7294783877493209dec5f404a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23acc4d43fb25808b4c867fd65cfbf219b5d29e7294783877493209dec5f404a->enter($__internal_23acc4d43fb25808b4c867fd65cfbf219b5d29e7294783877493209dec5f404a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_af475f380bb15f212a6e87bc24f1dd5aa13c9b0dcf696c87e4ede0a72a3f0344->leave($__internal_af475f380bb15f212a6e87bc24f1dd5aa13c9b0dcf696c87e4ede0a72a3f0344_prof);

        
        $__internal_23acc4d43fb25808b4c867fd65cfbf219b5d29e7294783877493209dec5f404a->leave($__internal_23acc4d43fb25808b4c867fd65cfbf219b5d29e7294783877493209dec5f404a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
