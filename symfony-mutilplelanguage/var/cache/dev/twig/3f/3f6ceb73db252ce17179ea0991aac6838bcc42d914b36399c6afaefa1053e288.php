<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e4355484f57b3dee029e3bad8e495b78644825105a5cf98ea3a4a261fb105bc1 extends Twig_Template
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
        $__internal_45d2d695dc5d637def665adf6d1d7020cc42858415ec0f18ae694b7741dc06e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45d2d695dc5d637def665adf6d1d7020cc42858415ec0f18ae694b7741dc06e6->enter($__internal_45d2d695dc5d637def665adf6d1d7020cc42858415ec0f18ae694b7741dc06e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_885a41c2b81e4972118acdb03bb780cad6bbee5ba34eff59aad34cd2dcafbd03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885a41c2b81e4972118acdb03bb780cad6bbee5ba34eff59aad34cd2dcafbd03->enter($__internal_885a41c2b81e4972118acdb03bb780cad6bbee5ba34eff59aad34cd2dcafbd03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_45d2d695dc5d637def665adf6d1d7020cc42858415ec0f18ae694b7741dc06e6->leave($__internal_45d2d695dc5d637def665adf6d1d7020cc42858415ec0f18ae694b7741dc06e6_prof);

        
        $__internal_885a41c2b81e4972118acdb03bb780cad6bbee5ba34eff59aad34cd2dcafbd03->leave($__internal_885a41c2b81e4972118acdb03bb780cad6bbee5ba34eff59aad34cd2dcafbd03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
