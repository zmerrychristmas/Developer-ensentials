<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6b38662d66d1ce4c34acea89e6af9ad6f67f97b7be7103dee6eabbe5dcb97a49 extends Twig_Template
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
        $__internal_0eeeb82d310e9fd80208701517db64101769b99f4e2ff7d7961a45c784c1bd17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eeeb82d310e9fd80208701517db64101769b99f4e2ff7d7961a45c784c1bd17->enter($__internal_0eeeb82d310e9fd80208701517db64101769b99f4e2ff7d7961a45c784c1bd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_477a7511f9462928a424e74a895d7cd396a9b9208e500ad7953774292d67718f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477a7511f9462928a424e74a895d7cd396a9b9208e500ad7953774292d67718f->enter($__internal_477a7511f9462928a424e74a895d7cd396a9b9208e500ad7953774292d67718f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_0eeeb82d310e9fd80208701517db64101769b99f4e2ff7d7961a45c784c1bd17->leave($__internal_0eeeb82d310e9fd80208701517db64101769b99f4e2ff7d7961a45c784c1bd17_prof);

        
        $__internal_477a7511f9462928a424e74a895d7cd396a9b9208e500ad7953774292d67718f->leave($__internal_477a7511f9462928a424e74a895d7cd396a9b9208e500ad7953774292d67718f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
