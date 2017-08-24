<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_1c7f2f9e0ead445c50662a935a923e0dbec4afebc3937d2910b7782cfe913323 extends Twig_Template
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
        $__internal_7250ed9956d704f96803badd6184765e2d8fd219749c0eff25d60281c044c0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7250ed9956d704f96803badd6184765e2d8fd219749c0eff25d60281c044c0ec->enter($__internal_7250ed9956d704f96803badd6184765e2d8fd219749c0eff25d60281c044c0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2d3758c3ff810a84fbdc81b844ef54b7507479364d565721f6d847e3d91e468d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d3758c3ff810a84fbdc81b844ef54b7507479364d565721f6d847e3d91e468d->enter($__internal_2d3758c3ff810a84fbdc81b844ef54b7507479364d565721f6d847e3d91e468d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7250ed9956d704f96803badd6184765e2d8fd219749c0eff25d60281c044c0ec->leave($__internal_7250ed9956d704f96803badd6184765e2d8fd219749c0eff25d60281c044c0ec_prof);

        
        $__internal_2d3758c3ff810a84fbdc81b844ef54b7507479364d565721f6d847e3d91e468d->leave($__internal_2d3758c3ff810a84fbdc81b844ef54b7507479364d565721f6d847e3d91e468d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
