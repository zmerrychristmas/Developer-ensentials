<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_3d3c47cb40a2c4ccefe78d8fdeaa398b8e75971be1b59064e9d8e7b9cee61a13 extends Twig_Template
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
        $__internal_0072edcd98186780e1556a7c19216f3db1f6e6994e7d8f2b5e0e626a60761370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0072edcd98186780e1556a7c19216f3db1f6e6994e7d8f2b5e0e626a60761370->enter($__internal_0072edcd98186780e1556a7c19216f3db1f6e6994e7d8f2b5e0e626a60761370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_4654def67d5752d0822f6c2b48dc6ec3017583b708927ae23751df5eb5c1a7c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4654def67d5752d0822f6c2b48dc6ec3017583b708927ae23751df5eb5c1a7c8->enter($__internal_4654def67d5752d0822f6c2b48dc6ec3017583b708927ae23751df5eb5c1a7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0072edcd98186780e1556a7c19216f3db1f6e6994e7d8f2b5e0e626a60761370->leave($__internal_0072edcd98186780e1556a7c19216f3db1f6e6994e7d8f2b5e0e626a60761370_prof);

        
        $__internal_4654def67d5752d0822f6c2b48dc6ec3017583b708927ae23751df5eb5c1a7c8->leave($__internal_4654def67d5752d0822f6c2b48dc6ec3017583b708927ae23751df5eb5c1a7c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
