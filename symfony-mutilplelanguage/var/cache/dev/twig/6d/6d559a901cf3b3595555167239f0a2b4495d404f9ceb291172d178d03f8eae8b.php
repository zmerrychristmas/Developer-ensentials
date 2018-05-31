<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b078ac8f66d1fd1caee51c16b76923fa7f2642c95db443468bafa87bd913e73 extends Twig_Template
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
        $__internal_a774c594a191dfcbed71333848dd1f2c988a482ee5a08f009e433df6ac94f970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a774c594a191dfcbed71333848dd1f2c988a482ee5a08f009e433df6ac94f970->enter($__internal_a774c594a191dfcbed71333848dd1f2c988a482ee5a08f009e433df6ac94f970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4c2ed5373bcef1880b880f2bce9cb0bb05d23966d7f3b8e52b31f883cd2f9791 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c2ed5373bcef1880b880f2bce9cb0bb05d23966d7f3b8e52b31f883cd2f9791->enter($__internal_4c2ed5373bcef1880b880f2bce9cb0bb05d23966d7f3b8e52b31f883cd2f9791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a774c594a191dfcbed71333848dd1f2c988a482ee5a08f009e433df6ac94f970->leave($__internal_a774c594a191dfcbed71333848dd1f2c988a482ee5a08f009e433df6ac94f970_prof);

        
        $__internal_4c2ed5373bcef1880b880f2bce9cb0bb05d23966d7f3b8e52b31f883cd2f9791->leave($__internal_4c2ed5373bcef1880b880f2bce9cb0bb05d23966d7f3b8e52b31f883cd2f9791_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
