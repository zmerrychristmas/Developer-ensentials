<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_813d4af6fdc4657ae1a2fec3ece4055a52cd5f31c2a356f7d6ad8c1fe924bc1f extends Twig_Template
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
        $__internal_499d1efb7b3ac1a07bf6fab1628e30ccc4b6b8881c6d294281bb770e1e7d7009 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_499d1efb7b3ac1a07bf6fab1628e30ccc4b6b8881c6d294281bb770e1e7d7009->enter($__internal_499d1efb7b3ac1a07bf6fab1628e30ccc4b6b8881c6d294281bb770e1e7d7009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_703ece29026b856ff1ea4872e0e22ba8dcc6f6acd26bec481b1824ff5af29970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_703ece29026b856ff1ea4872e0e22ba8dcc6f6acd26bec481b1824ff5af29970->enter($__internal_703ece29026b856ff1ea4872e0e22ba8dcc6f6acd26bec481b1824ff5af29970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_499d1efb7b3ac1a07bf6fab1628e30ccc4b6b8881c6d294281bb770e1e7d7009->leave($__internal_499d1efb7b3ac1a07bf6fab1628e30ccc4b6b8881c6d294281bb770e1e7d7009_prof);

        
        $__internal_703ece29026b856ff1ea4872e0e22ba8dcc6f6acd26bec481b1824ff5af29970->leave($__internal_703ece29026b856ff1ea4872e0e22ba8dcc6f6acd26bec481b1824ff5af29970_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
