<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_3d89c4191ac98f411cc2970513796e0df2d7487183baa7b27441312b77d02ec2 extends Twig_Template
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
        $__internal_81fc07254ccb5049bc3bf7748d8c97105bd09bbce255920d28be9cfd172b451b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81fc07254ccb5049bc3bf7748d8c97105bd09bbce255920d28be9cfd172b451b->enter($__internal_81fc07254ccb5049bc3bf7748d8c97105bd09bbce255920d28be9cfd172b451b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_f6c095d5d039f5d45910dee17e29673a9cc60bd8f0166750cdfd6a7556f92072 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c095d5d039f5d45910dee17e29673a9cc60bd8f0166750cdfd6a7556f92072->enter($__internal_f6c095d5d039f5d45910dee17e29673a9cc60bd8f0166750cdfd6a7556f92072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_81fc07254ccb5049bc3bf7748d8c97105bd09bbce255920d28be9cfd172b451b->leave($__internal_81fc07254ccb5049bc3bf7748d8c97105bd09bbce255920d28be9cfd172b451b_prof);

        
        $__internal_f6c095d5d039f5d45910dee17e29673a9cc60bd8f0166750cdfd6a7556f92072->leave($__internal_f6c095d5d039f5d45910dee17e29673a9cc60bd8f0166750cdfd6a7556f92072_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
