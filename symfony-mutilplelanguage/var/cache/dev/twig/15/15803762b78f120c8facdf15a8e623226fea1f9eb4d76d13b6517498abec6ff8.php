<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_37954d791f212663cc8c9eb709d239e704c996105fc02b8db6cc8f4336933274 extends Twig_Template
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
        $__internal_bbcb5b8869a2f0bd8654455de9ab70cf40ea5a9ab933db57ad8515c06ab31ed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcb5b8869a2f0bd8654455de9ab70cf40ea5a9ab933db57ad8515c06ab31ed4->enter($__internal_bbcb5b8869a2f0bd8654455de9ab70cf40ea5a9ab933db57ad8515c06ab31ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_767d798a6cf88100593eef0e7ae7319d0427b25071d5ecdfa7caef4dd6600ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_767d798a6cf88100593eef0e7ae7319d0427b25071d5ecdfa7caef4dd6600ed7->enter($__internal_767d798a6cf88100593eef0e7ae7319d0427b25071d5ecdfa7caef4dd6600ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_bbcb5b8869a2f0bd8654455de9ab70cf40ea5a9ab933db57ad8515c06ab31ed4->leave($__internal_bbcb5b8869a2f0bd8654455de9ab70cf40ea5a9ab933db57ad8515c06ab31ed4_prof);

        
        $__internal_767d798a6cf88100593eef0e7ae7319d0427b25071d5ecdfa7caef4dd6600ed7->leave($__internal_767d798a6cf88100593eef0e7ae7319d0427b25071d5ecdfa7caef4dd6600ed7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
