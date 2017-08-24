<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_6c044566affe5f83db0708fd87ebed333f2c428ea9b96f9aaba808547d413e31 extends Twig_Template
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
        $__internal_630a27312ce7cf83d2ca14adaba1867c718ad16915ca3eb42384c94eec19f498 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_630a27312ce7cf83d2ca14adaba1867c718ad16915ca3eb42384c94eec19f498->enter($__internal_630a27312ce7cf83d2ca14adaba1867c718ad16915ca3eb42384c94eec19f498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_7e6639792b67f38e31cff6c65aa1a9d246fcd35889bab10c8b8a1a4039b0e047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6639792b67f38e31cff6c65aa1a9d246fcd35889bab10c8b8a1a4039b0e047->enter($__internal_7e6639792b67f38e31cff6c65aa1a9d246fcd35889bab10c8b8a1a4039b0e047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_630a27312ce7cf83d2ca14adaba1867c718ad16915ca3eb42384c94eec19f498->leave($__internal_630a27312ce7cf83d2ca14adaba1867c718ad16915ca3eb42384c94eec19f498_prof);

        
        $__internal_7e6639792b67f38e31cff6c65aa1a9d246fcd35889bab10c8b8a1a4039b0e047->leave($__internal_7e6639792b67f38e31cff6c65aa1a9d246fcd35889bab10c8b8a1a4039b0e047_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
