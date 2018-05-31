<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_c575f7fb2255663e23e6e1816d182c5971957fe224247c11a41924491fc0fc66 extends Twig_Template
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
        $__internal_d6a25534e5fbe0149a93830974258f19500b689c1ae9d2cb403b0105b974378d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6a25534e5fbe0149a93830974258f19500b689c1ae9d2cb403b0105b974378d->enter($__internal_d6a25534e5fbe0149a93830974258f19500b689c1ae9d2cb403b0105b974378d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1c3a5c6fe03854d3d7a31ea88dd4203eef08fcd5a2a6c9bdd52846c81ae2d2b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c3a5c6fe03854d3d7a31ea88dd4203eef08fcd5a2a6c9bdd52846c81ae2d2b0->enter($__internal_1c3a5c6fe03854d3d7a31ea88dd4203eef08fcd5a2a6c9bdd52846c81ae2d2b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d6a25534e5fbe0149a93830974258f19500b689c1ae9d2cb403b0105b974378d->leave($__internal_d6a25534e5fbe0149a93830974258f19500b689c1ae9d2cb403b0105b974378d_prof);

        
        $__internal_1c3a5c6fe03854d3d7a31ea88dd4203eef08fcd5a2a6c9bdd52846c81ae2d2b0->leave($__internal_1c3a5c6fe03854d3d7a31ea88dd4203eef08fcd5a2a6c9bdd52846c81ae2d2b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
