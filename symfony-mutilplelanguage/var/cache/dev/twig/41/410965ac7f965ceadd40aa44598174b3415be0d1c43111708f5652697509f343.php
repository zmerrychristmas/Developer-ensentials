<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_5a9aed02b93250ded06bc5e9e0cdadf24e1c2e0dd054b82b300c2afdd1bc5186 extends Twig_Template
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
        $__internal_2107436b42f1e697cd2d096238c907aaf7127d9891f17055110b896348b71e4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2107436b42f1e697cd2d096238c907aaf7127d9891f17055110b896348b71e4c->enter($__internal_2107436b42f1e697cd2d096238c907aaf7127d9891f17055110b896348b71e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f76042a50e4776200b5769c04f414ba78f95b58735b07a8293f9471f3900a989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76042a50e4776200b5769c04f414ba78f95b58735b07a8293f9471f3900a989->enter($__internal_f76042a50e4776200b5769c04f414ba78f95b58735b07a8293f9471f3900a989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_2107436b42f1e697cd2d096238c907aaf7127d9891f17055110b896348b71e4c->leave($__internal_2107436b42f1e697cd2d096238c907aaf7127d9891f17055110b896348b71e4c_prof);

        
        $__internal_f76042a50e4776200b5769c04f414ba78f95b58735b07a8293f9471f3900a989->leave($__internal_f76042a50e4776200b5769c04f414ba78f95b58735b07a8293f9471f3900a989_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
