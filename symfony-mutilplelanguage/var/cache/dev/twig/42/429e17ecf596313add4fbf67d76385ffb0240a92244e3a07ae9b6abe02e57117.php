<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_aae31445689fc8ee557e24c1db5d7e13adda4833200a109b8c3c25fadf032fa3 extends Twig_Template
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
        $__internal_4a345bbd0416fb1c68424ec7d1aad7f1f2b9f7dd51ead013c549865763e9ed55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a345bbd0416fb1c68424ec7d1aad7f1f2b9f7dd51ead013c549865763e9ed55->enter($__internal_4a345bbd0416fb1c68424ec7d1aad7f1f2b9f7dd51ead013c549865763e9ed55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_0a539481d517fc5fc91b7514018d9c9d73a02a3cff6fee08aedc8c305c3cc1c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a539481d517fc5fc91b7514018d9c9d73a02a3cff6fee08aedc8c305c3cc1c7->enter($__internal_0a539481d517fc5fc91b7514018d9c9d73a02a3cff6fee08aedc8c305c3cc1c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4a345bbd0416fb1c68424ec7d1aad7f1f2b9f7dd51ead013c549865763e9ed55->leave($__internal_4a345bbd0416fb1c68424ec7d1aad7f1f2b9f7dd51ead013c549865763e9ed55_prof);

        
        $__internal_0a539481d517fc5fc91b7514018d9c9d73a02a3cff6fee08aedc8c305c3cc1c7->leave($__internal_0a539481d517fc5fc91b7514018d9c9d73a02a3cff6fee08aedc8c305c3cc1c7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
