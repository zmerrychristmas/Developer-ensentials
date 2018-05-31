<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_e827bb8971dc3d4b214c13959c84b1fbe4c8f72214a0f4839affa378c6f137bf extends Twig_Template
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
        $__internal_bf76c0578272ccd4f2a135f65ea418d68572d1ce0477f3ee9d8bbb09dd673e2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf76c0578272ccd4f2a135f65ea418d68572d1ce0477f3ee9d8bbb09dd673e2d->enter($__internal_bf76c0578272ccd4f2a135f65ea418d68572d1ce0477f3ee9d8bbb09dd673e2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_32d2e9b312abcc09dc8ea41bc8b4ff019fe4b4e342c6946acbc543ef6cae4b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d2e9b312abcc09dc8ea41bc8b4ff019fe4b4e342c6946acbc543ef6cae4b09->enter($__internal_32d2e9b312abcc09dc8ea41bc8b4ff019fe4b4e342c6946acbc543ef6cae4b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_bf76c0578272ccd4f2a135f65ea418d68572d1ce0477f3ee9d8bbb09dd673e2d->leave($__internal_bf76c0578272ccd4f2a135f65ea418d68572d1ce0477f3ee9d8bbb09dd673e2d_prof);

        
        $__internal_32d2e9b312abcc09dc8ea41bc8b4ff019fe4b4e342c6946acbc543ef6cae4b09->leave($__internal_32d2e9b312abcc09dc8ea41bc8b4ff019fe4b4e342c6946acbc543ef6cae4b09_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
