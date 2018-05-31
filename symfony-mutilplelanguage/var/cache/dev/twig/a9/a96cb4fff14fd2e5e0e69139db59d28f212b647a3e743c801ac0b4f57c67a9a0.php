<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_f341398b81a6f42d959041e03d09c0052bd35ef64ee33df207c5d995d3036f76 extends Twig_Template
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
        $__internal_ff16abe92721b1177de6cc69732e30baebe96ed7886249b7463ba94985852b75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff16abe92721b1177de6cc69732e30baebe96ed7886249b7463ba94985852b75->enter($__internal_ff16abe92721b1177de6cc69732e30baebe96ed7886249b7463ba94985852b75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_19839e9742c35d99da28033149d5a0d1a3af36914707aac3cd533c29af234e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19839e9742c35d99da28033149d5a0d1a3af36914707aac3cd533c29af234e00->enter($__internal_19839e9742c35d99da28033149d5a0d1a3af36914707aac3cd533c29af234e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_ff16abe92721b1177de6cc69732e30baebe96ed7886249b7463ba94985852b75->leave($__internal_ff16abe92721b1177de6cc69732e30baebe96ed7886249b7463ba94985852b75_prof);

        
        $__internal_19839e9742c35d99da28033149d5a0d1a3af36914707aac3cd533c29af234e00->leave($__internal_19839e9742c35d99da28033149d5a0d1a3af36914707aac3cd533c29af234e00_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
