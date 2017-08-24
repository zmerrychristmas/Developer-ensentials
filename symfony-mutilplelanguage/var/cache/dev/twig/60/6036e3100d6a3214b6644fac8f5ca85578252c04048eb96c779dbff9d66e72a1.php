<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_090a497550a3d612f9916fc406230fcf0d812ebee7cdbc3338ec3eefb3137a41 extends Twig_Template
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
        $__internal_e65014f56d9121f533fad6b6a3cb7fb3aa35e8eb521a6dbb66d4bc01888b332a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65014f56d9121f533fad6b6a3cb7fb3aa35e8eb521a6dbb66d4bc01888b332a->enter($__internal_e65014f56d9121f533fad6b6a3cb7fb3aa35e8eb521a6dbb66d4bc01888b332a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_441a008de8c3b574bcf9548f90ef918044b53a4e3f27ccff58c2bd8b1e927c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_441a008de8c3b574bcf9548f90ef918044b53a4e3f27ccff58c2bd8b1e927c08->enter($__internal_441a008de8c3b574bcf9548f90ef918044b53a4e3f27ccff58c2bd8b1e927c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_e65014f56d9121f533fad6b6a3cb7fb3aa35e8eb521a6dbb66d4bc01888b332a->leave($__internal_e65014f56d9121f533fad6b6a3cb7fb3aa35e8eb521a6dbb66d4bc01888b332a_prof);

        
        $__internal_441a008de8c3b574bcf9548f90ef918044b53a4e3f27ccff58c2bd8b1e927c08->leave($__internal_441a008de8c3b574bcf9548f90ef918044b53a4e3f27ccff58c2bd8b1e927c08_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
