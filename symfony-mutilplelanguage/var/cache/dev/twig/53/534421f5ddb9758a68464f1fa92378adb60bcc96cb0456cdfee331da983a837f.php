<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_9da11d6220d24485f559c5af8e9ac7f0efd88c63c83dac4dee9820379c40a776 extends Twig_Template
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
        $__internal_0cd7dbbc36a1bf2926aa10ef23f563016713eb864f7f25125b2d2142dbcc5fb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd7dbbc36a1bf2926aa10ef23f563016713eb864f7f25125b2d2142dbcc5fb0->enter($__internal_0cd7dbbc36a1bf2926aa10ef23f563016713eb864f7f25125b2d2142dbcc5fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_ecd84e2e4da8b1e8289c38e4f9d2071e12967c3853df4f830a036a9590fe7ad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd84e2e4da8b1e8289c38e4f9d2071e12967c3853df4f830a036a9590fe7ad1->enter($__internal_ecd84e2e4da8b1e8289c38e4f9d2071e12967c3853df4f830a036a9590fe7ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0cd7dbbc36a1bf2926aa10ef23f563016713eb864f7f25125b2d2142dbcc5fb0->leave($__internal_0cd7dbbc36a1bf2926aa10ef23f563016713eb864f7f25125b2d2142dbcc5fb0_prof);

        
        $__internal_ecd84e2e4da8b1e8289c38e4f9d2071e12967c3853df4f830a036a9590fe7ad1->leave($__internal_ecd84e2e4da8b1e8289c38e4f9d2071e12967c3853df4f830a036a9590fe7ad1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
