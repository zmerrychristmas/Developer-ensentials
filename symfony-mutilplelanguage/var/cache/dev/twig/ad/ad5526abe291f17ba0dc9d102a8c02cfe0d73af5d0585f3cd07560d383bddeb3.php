<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_a979395d400e22d50ef680b2077d70795445f94a943fb6e9fe6d9c90d6d797ab extends Twig_Template
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
        $__internal_5c0ebaf247b184f6e7dca0298d2bfbb095a61151ef6a5f335176ae381486c90e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c0ebaf247b184f6e7dca0298d2bfbb095a61151ef6a5f335176ae381486c90e->enter($__internal_5c0ebaf247b184f6e7dca0298d2bfbb095a61151ef6a5f335176ae381486c90e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_e2754f1ae7119571dafcea69c1bbf2ad5648c609078f3bddae082b92aac5ce59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2754f1ae7119571dafcea69c1bbf2ad5648c609078f3bddae082b92aac5ce59->enter($__internal_e2754f1ae7119571dafcea69c1bbf2ad5648c609078f3bddae082b92aac5ce59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_5c0ebaf247b184f6e7dca0298d2bfbb095a61151ef6a5f335176ae381486c90e->leave($__internal_5c0ebaf247b184f6e7dca0298d2bfbb095a61151ef6a5f335176ae381486c90e_prof);

        
        $__internal_e2754f1ae7119571dafcea69c1bbf2ad5648c609078f3bddae082b92aac5ce59->leave($__internal_e2754f1ae7119571dafcea69c1bbf2ad5648c609078f3bddae082b92aac5ce59_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
