<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_4172787ee9b0292af8be48e9ef6f4e1e163ffc9d66aa7785c5e34d0e9e096195 extends Twig_Template
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
        $__internal_bce39ccdf1f8a5ec50ec1167c774575abdbafd170d4cf82a941de97c358619fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce39ccdf1f8a5ec50ec1167c774575abdbafd170d4cf82a941de97c358619fc->enter($__internal_bce39ccdf1f8a5ec50ec1167c774575abdbafd170d4cf82a941de97c358619fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_5ac7e25b0c6f43b5a2b182e4226d5bf3f4491a34979480ade6921c1639ba721c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac7e25b0c6f43b5a2b182e4226d5bf3f4491a34979480ade6921c1639ba721c->enter($__internal_5ac7e25b0c6f43b5a2b182e4226d5bf3f4491a34979480ade6921c1639ba721c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_bce39ccdf1f8a5ec50ec1167c774575abdbafd170d4cf82a941de97c358619fc->leave($__internal_bce39ccdf1f8a5ec50ec1167c774575abdbafd170d4cf82a941de97c358619fc_prof);

        
        $__internal_5ac7e25b0c6f43b5a2b182e4226d5bf3f4491a34979480ade6921c1639ba721c->leave($__internal_5ac7e25b0c6f43b5a2b182e4226d5bf3f4491a34979480ade6921c1639ba721c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
