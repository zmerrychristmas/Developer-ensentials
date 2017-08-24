<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_31120c1833cf7490632a8a8ee3fde613ecc3e866a0da60c93ff2f05340a45e73 extends Twig_Template
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
        $__internal_aa830ae715c271d826b1e3c776add5d512560b13eb39846712fed37daa11a1c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa830ae715c271d826b1e3c776add5d512560b13eb39846712fed37daa11a1c5->enter($__internal_aa830ae715c271d826b1e3c776add5d512560b13eb39846712fed37daa11a1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_072b1f76434be37341f40580d7b9f77fb3e22be67eaadb7f55b6c7d9640dd7b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072b1f76434be37341f40580d7b9f77fb3e22be67eaadb7f55b6c7d9640dd7b7->enter($__internal_072b1f76434be37341f40580d7b9f77fb3e22be67eaadb7f55b6c7d9640dd7b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_aa830ae715c271d826b1e3c776add5d512560b13eb39846712fed37daa11a1c5->leave($__internal_aa830ae715c271d826b1e3c776add5d512560b13eb39846712fed37daa11a1c5_prof);

        
        $__internal_072b1f76434be37341f40580d7b9f77fb3e22be67eaadb7f55b6c7d9640dd7b7->leave($__internal_072b1f76434be37341f40580d7b9f77fb3e22be67eaadb7f55b6c7d9640dd7b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
