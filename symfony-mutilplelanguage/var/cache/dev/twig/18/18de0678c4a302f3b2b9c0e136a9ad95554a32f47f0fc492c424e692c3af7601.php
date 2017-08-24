<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_b7441d40556439ae44c86cf370b3fb71b670e2902210fe00f869841f173cba88 extends Twig_Template
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
        $__internal_daf3ef90e1c36ec6c19da6bba9946cb102809b3877cfdb0624ed34c421f9bd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_daf3ef90e1c36ec6c19da6bba9946cb102809b3877cfdb0624ed34c421f9bd02->enter($__internal_daf3ef90e1c36ec6c19da6bba9946cb102809b3877cfdb0624ed34c421f9bd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c372b6eb9f4ef57386803a471ecb20b837adb1a3618cd7ccf53855e2866bd13c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c372b6eb9f4ef57386803a471ecb20b837adb1a3618cd7ccf53855e2866bd13c->enter($__internal_c372b6eb9f4ef57386803a471ecb20b837adb1a3618cd7ccf53855e2866bd13c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_daf3ef90e1c36ec6c19da6bba9946cb102809b3877cfdb0624ed34c421f9bd02->leave($__internal_daf3ef90e1c36ec6c19da6bba9946cb102809b3877cfdb0624ed34c421f9bd02_prof);

        
        $__internal_c372b6eb9f4ef57386803a471ecb20b837adb1a3618cd7ccf53855e2866bd13c->leave($__internal_c372b6eb9f4ef57386803a471ecb20b837adb1a3618cd7ccf53855e2866bd13c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
