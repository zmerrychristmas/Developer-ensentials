<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a894e203d64fc4f5781b4c7b71d89f1c4bae555e03d7135df0961babe42e81dd extends Twig_Template
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
        $__internal_97ffb4cc4275516f1062d40d4021d1a769a16e2fcd1a901f9fdf2d095feec5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97ffb4cc4275516f1062d40d4021d1a769a16e2fcd1a901f9fdf2d095feec5a6->enter($__internal_97ffb4cc4275516f1062d40d4021d1a769a16e2fcd1a901f9fdf2d095feec5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_b9cf172e7f881c18d4783dcdfee2dc4265b3e5b61140293f4c24e5de63dd259c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9cf172e7f881c18d4783dcdfee2dc4265b3e5b61140293f4c24e5de63dd259c->enter($__internal_b9cf172e7f881c18d4783dcdfee2dc4265b3e5b61140293f4c24e5de63dd259c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_97ffb4cc4275516f1062d40d4021d1a769a16e2fcd1a901f9fdf2d095feec5a6->leave($__internal_97ffb4cc4275516f1062d40d4021d1a769a16e2fcd1a901f9fdf2d095feec5a6_prof);

        
        $__internal_b9cf172e7f881c18d4783dcdfee2dc4265b3e5b61140293f4c24e5de63dd259c->leave($__internal_b9cf172e7f881c18d4783dcdfee2dc4265b3e5b61140293f4c24e5de63dd259c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
