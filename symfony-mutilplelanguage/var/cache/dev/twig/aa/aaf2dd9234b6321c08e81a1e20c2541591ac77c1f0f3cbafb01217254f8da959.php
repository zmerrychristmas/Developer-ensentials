<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a1d264c351596849d6761ebfa1b0363bd8a548da0f70fd593f321874c5770a81 extends Twig_Template
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
        $__internal_708a991045605494dd746a353ea71469de8dbe488325cd8bdb7b9b19a1772c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_708a991045605494dd746a353ea71469de8dbe488325cd8bdb7b9b19a1772c08->enter($__internal_708a991045605494dd746a353ea71469de8dbe488325cd8bdb7b9b19a1772c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_75890f761a73c1a50330ce2973eae63d7df22dccd01207124882aede228021bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75890f761a73c1a50330ce2973eae63d7df22dccd01207124882aede228021bd->enter($__internal_75890f761a73c1a50330ce2973eae63d7df22dccd01207124882aede228021bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_708a991045605494dd746a353ea71469de8dbe488325cd8bdb7b9b19a1772c08->leave($__internal_708a991045605494dd746a353ea71469de8dbe488325cd8bdb7b9b19a1772c08_prof);

        
        $__internal_75890f761a73c1a50330ce2973eae63d7df22dccd01207124882aede228021bd->leave($__internal_75890f761a73c1a50330ce2973eae63d7df22dccd01207124882aede228021bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
