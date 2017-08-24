<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_608d077a45db74815e9cfe15a07f61cee5cc96ff34105f8115b0417467fdebad extends Twig_Template
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
        $__internal_800753a3cdd5932bc031f68f224246c72cf1ad5f75baf1b76bd61025e534ccc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_800753a3cdd5932bc031f68f224246c72cf1ad5f75baf1b76bd61025e534ccc5->enter($__internal_800753a3cdd5932bc031f68f224246c72cf1ad5f75baf1b76bd61025e534ccc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6d01e77179f027158fbd6d23d9aa9f8f83720379698fee90a58e52652f5c8949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d01e77179f027158fbd6d23d9aa9f8f83720379698fee90a58e52652f5c8949->enter($__internal_6d01e77179f027158fbd6d23d9aa9f8f83720379698fee90a58e52652f5c8949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_800753a3cdd5932bc031f68f224246c72cf1ad5f75baf1b76bd61025e534ccc5->leave($__internal_800753a3cdd5932bc031f68f224246c72cf1ad5f75baf1b76bd61025e534ccc5_prof);

        
        $__internal_6d01e77179f027158fbd6d23d9aa9f8f83720379698fee90a58e52652f5c8949->leave($__internal_6d01e77179f027158fbd6d23d9aa9f8f83720379698fee90a58e52652f5c8949_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
