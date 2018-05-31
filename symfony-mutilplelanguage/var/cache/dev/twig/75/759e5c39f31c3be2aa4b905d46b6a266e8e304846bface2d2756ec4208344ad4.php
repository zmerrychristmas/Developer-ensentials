<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_769f276bb7afd08b63bcc8af134ac0870a98e1b1f137d458ec78bd3cc9e8fe7f extends Twig_Template
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
        $__internal_b40962de91e0e1eaa5c380f371a95f17678e2cdd3463cdcbe3275d06d3f7ef4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b40962de91e0e1eaa5c380f371a95f17678e2cdd3463cdcbe3275d06d3f7ef4d->enter($__internal_b40962de91e0e1eaa5c380f371a95f17678e2cdd3463cdcbe3275d06d3f7ef4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_b79621760a357d155c1c2e4cb62e4190f2f5fbf7fbc6fd0eebfc81717ac14dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79621760a357d155c1c2e4cb62e4190f2f5fbf7fbc6fd0eebfc81717ac14dbc->enter($__internal_b79621760a357d155c1c2e4cb62e4190f2f5fbf7fbc6fd0eebfc81717ac14dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_b40962de91e0e1eaa5c380f371a95f17678e2cdd3463cdcbe3275d06d3f7ef4d->leave($__internal_b40962de91e0e1eaa5c380f371a95f17678e2cdd3463cdcbe3275d06d3f7ef4d_prof);

        
        $__internal_b79621760a357d155c1c2e4cb62e4190f2f5fbf7fbc6fd0eebfc81717ac14dbc->leave($__internal_b79621760a357d155c1c2e4cb62e4190f2f5fbf7fbc6fd0eebfc81717ac14dbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
