<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_38f9faa4e4993fdba8231b43a239e30d2d196573e1fafc75c94060dbbb4ef957 extends Twig_Template
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
        $__internal_fb74cce6745b8a4b59977709b47ef6c11ebc094547dbf31ca3c4d0d0dc88c1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb74cce6745b8a4b59977709b47ef6c11ebc094547dbf31ca3c4d0d0dc88c1f9->enter($__internal_fb74cce6745b8a4b59977709b47ef6c11ebc094547dbf31ca3c4d0d0dc88c1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_17be3ee81fc1d1dc1992220171a0af70c00546bfffcac94f70ba05738fa3ad06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17be3ee81fc1d1dc1992220171a0af70c00546bfffcac94f70ba05738fa3ad06->enter($__internal_17be3ee81fc1d1dc1992220171a0af70c00546bfffcac94f70ba05738fa3ad06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fb74cce6745b8a4b59977709b47ef6c11ebc094547dbf31ca3c4d0d0dc88c1f9->leave($__internal_fb74cce6745b8a4b59977709b47ef6c11ebc094547dbf31ca3c4d0d0dc88c1f9_prof);

        
        $__internal_17be3ee81fc1d1dc1992220171a0af70c00546bfffcac94f70ba05738fa3ad06->leave($__internal_17be3ee81fc1d1dc1992220171a0af70c00546bfffcac94f70ba05738fa3ad06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
