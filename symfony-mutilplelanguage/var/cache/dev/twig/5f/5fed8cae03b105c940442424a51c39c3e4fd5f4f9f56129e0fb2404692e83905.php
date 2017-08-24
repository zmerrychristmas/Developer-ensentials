<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_2b672c2c84e269772b29e207fc5accf16e335f13e9f32527afd92dce0d34bca0 extends Twig_Template
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
        $__internal_21381fdb3bd930a17be3ee76a95b1a86851ff2cb1dad8ecc4134ec495e9d82a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21381fdb3bd930a17be3ee76a95b1a86851ff2cb1dad8ecc4134ec495e9d82a8->enter($__internal_21381fdb3bd930a17be3ee76a95b1a86851ff2cb1dad8ecc4134ec495e9d82a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_17cd942fcbb06d311a5b69e3bea35180fe0802b22f969158e8cb60cd8dace55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17cd942fcbb06d311a5b69e3bea35180fe0802b22f969158e8cb60cd8dace55c->enter($__internal_17cd942fcbb06d311a5b69e3bea35180fe0802b22f969158e8cb60cd8dace55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_21381fdb3bd930a17be3ee76a95b1a86851ff2cb1dad8ecc4134ec495e9d82a8->leave($__internal_21381fdb3bd930a17be3ee76a95b1a86851ff2cb1dad8ecc4134ec495e9d82a8_prof);

        
        $__internal_17cd942fcbb06d311a5b69e3bea35180fe0802b22f969158e8cb60cd8dace55c->leave($__internal_17cd942fcbb06d311a5b69e3bea35180fe0802b22f969158e8cb60cd8dace55c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
