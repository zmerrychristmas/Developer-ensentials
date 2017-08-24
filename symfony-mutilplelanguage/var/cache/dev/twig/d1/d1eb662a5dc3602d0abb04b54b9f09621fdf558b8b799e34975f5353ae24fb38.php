<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_40bc516a5fa62333c44f5a9b218b6061a194371a9380388db3d5503a836cd349 extends Twig_Template
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
        $__internal_6e80995b9d2f0a1155f2acf56ab4862bcc99bec04ce1de2bd1b30aa5e61e88e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e80995b9d2f0a1155f2acf56ab4862bcc99bec04ce1de2bd1b30aa5e61e88e7->enter($__internal_6e80995b9d2f0a1155f2acf56ab4862bcc99bec04ce1de2bd1b30aa5e61e88e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_0bb5a014b9d1b2aebc37e8ae60ada17e8db00a81edb368ecb0731416e5735453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb5a014b9d1b2aebc37e8ae60ada17e8db00a81edb368ecb0731416e5735453->enter($__internal_0bb5a014b9d1b2aebc37e8ae60ada17e8db00a81edb368ecb0731416e5735453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6e80995b9d2f0a1155f2acf56ab4862bcc99bec04ce1de2bd1b30aa5e61e88e7->leave($__internal_6e80995b9d2f0a1155f2acf56ab4862bcc99bec04ce1de2bd1b30aa5e61e88e7_prof);

        
        $__internal_0bb5a014b9d1b2aebc37e8ae60ada17e8db00a81edb368ecb0731416e5735453->leave($__internal_0bb5a014b9d1b2aebc37e8ae60ada17e8db00a81edb368ecb0731416e5735453_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
