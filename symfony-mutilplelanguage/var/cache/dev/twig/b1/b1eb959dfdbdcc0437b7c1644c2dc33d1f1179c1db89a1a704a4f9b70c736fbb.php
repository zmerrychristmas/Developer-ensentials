<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_34f5c3177a7dbe50fe322725a58a85c4eb08b6e3060ed7a80d0314893240703d extends Twig_Template
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
        $__internal_caf4259e1d48bad5f102b9f2e85509097404c1e153cceadab976ba9e2f42e2f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caf4259e1d48bad5f102b9f2e85509097404c1e153cceadab976ba9e2f42e2f5->enter($__internal_caf4259e1d48bad5f102b9f2e85509097404c1e153cceadab976ba9e2f42e2f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_d336d35aa0fa7b9f5d388dc1cd4cd9a538734cee6f17f274bc395dcbb7bd1b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d336d35aa0fa7b9f5d388dc1cd4cd9a538734cee6f17f274bc395dcbb7bd1b59->enter($__internal_d336d35aa0fa7b9f5d388dc1cd4cd9a538734cee6f17f274bc395dcbb7bd1b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_caf4259e1d48bad5f102b9f2e85509097404c1e153cceadab976ba9e2f42e2f5->leave($__internal_caf4259e1d48bad5f102b9f2e85509097404c1e153cceadab976ba9e2f42e2f5_prof);

        
        $__internal_d336d35aa0fa7b9f5d388dc1cd4cd9a538734cee6f17f274bc395dcbb7bd1b59->leave($__internal_d336d35aa0fa7b9f5d388dc1cd4cd9a538734cee6f17f274bc395dcbb7bd1b59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
