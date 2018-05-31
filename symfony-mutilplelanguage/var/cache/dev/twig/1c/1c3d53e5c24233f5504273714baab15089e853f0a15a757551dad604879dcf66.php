<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_75b97afc0416473d409ca87d7318fbfeed3913d650dd654d7e834b6feb312b07 extends Twig_Template
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
        $__internal_b113d13f3909442ec09b0fcd117fbd395732a312a34bb8ef40444cf299cb8c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b113d13f3909442ec09b0fcd117fbd395732a312a34bb8ef40444cf299cb8c96->enter($__internal_b113d13f3909442ec09b0fcd117fbd395732a312a34bb8ef40444cf299cb8c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_e34abebbee600b2f6df29f089a0c8f9b29b14e674cf04e86f2745ba304e25c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34abebbee600b2f6df29f089a0c8f9b29b14e674cf04e86f2745ba304e25c05->enter($__internal_e34abebbee600b2f6df29f089a0c8f9b29b14e674cf04e86f2745ba304e25c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_b113d13f3909442ec09b0fcd117fbd395732a312a34bb8ef40444cf299cb8c96->leave($__internal_b113d13f3909442ec09b0fcd117fbd395732a312a34bb8ef40444cf299cb8c96_prof);

        
        $__internal_e34abebbee600b2f6df29f089a0c8f9b29b14e674cf04e86f2745ba304e25c05->leave($__internal_e34abebbee600b2f6df29f089a0c8f9b29b14e674cf04e86f2745ba304e25c05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
