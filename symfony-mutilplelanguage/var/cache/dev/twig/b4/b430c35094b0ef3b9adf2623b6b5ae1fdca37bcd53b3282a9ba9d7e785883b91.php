<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_207b7ef03fcc2ad20f6800f9d8566566c59b5353e3cc4511ea2d835d4a0bffba extends Twig_Template
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
        $__internal_b0f56e1997132a5d9fb10f9f0e0487917e8c6a6188c07f14605c977a6a439dc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0f56e1997132a5d9fb10f9f0e0487917e8c6a6188c07f14605c977a6a439dc8->enter($__internal_b0f56e1997132a5d9fb10f9f0e0487917e8c6a6188c07f14605c977a6a439dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_1e62f2c0c8635d3feaed301c0e5e8fffec65705eadfb203f2565dc568246d7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e62f2c0c8635d3feaed301c0e5e8fffec65705eadfb203f2565dc568246d7a1->enter($__internal_1e62f2c0c8635d3feaed301c0e5e8fffec65705eadfb203f2565dc568246d7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_b0f56e1997132a5d9fb10f9f0e0487917e8c6a6188c07f14605c977a6a439dc8->leave($__internal_b0f56e1997132a5d9fb10f9f0e0487917e8c6a6188c07f14605c977a6a439dc8_prof);

        
        $__internal_1e62f2c0c8635d3feaed301c0e5e8fffec65705eadfb203f2565dc568246d7a1->leave($__internal_1e62f2c0c8635d3feaed301c0e5e8fffec65705eadfb203f2565dc568246d7a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
