<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_a058ddd36d5bea341b4bfdadb7ed68e4fed77002676b1cce14f1ce77e4056a43 extends Twig_Template
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
        $__internal_8cc5003c128981ab87bcf144e91ab96d116bcebfb5aeed300db0f214130f1bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cc5003c128981ab87bcf144e91ab96d116bcebfb5aeed300db0f214130f1bd4->enter($__internal_8cc5003c128981ab87bcf144e91ab96d116bcebfb5aeed300db0f214130f1bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8d12428c4480dbd32e24b0e96bf0b819f2406bfb3c1a753d130151a23367b816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d12428c4480dbd32e24b0e96bf0b819f2406bfb3c1a753d130151a23367b816->enter($__internal_8d12428c4480dbd32e24b0e96bf0b819f2406bfb3c1a753d130151a23367b816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_8cc5003c128981ab87bcf144e91ab96d116bcebfb5aeed300db0f214130f1bd4->leave($__internal_8cc5003c128981ab87bcf144e91ab96d116bcebfb5aeed300db0f214130f1bd4_prof);

        
        $__internal_8d12428c4480dbd32e24b0e96bf0b819f2406bfb3c1a753d130151a23367b816->leave($__internal_8d12428c4480dbd32e24b0e96bf0b819f2406bfb3c1a753d130151a23367b816_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
