<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_ae57863d1fe511f26bb53a7c057dc21cc9570263c7097c474aaa6b85973b3dc7 extends Twig_Template
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
        $__internal_e844e4d8017b7df20b395646a0ad4b935d9bf155c05b028d06a81e2bfd684267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e844e4d8017b7df20b395646a0ad4b935d9bf155c05b028d06a81e2bfd684267->enter($__internal_e844e4d8017b7df20b395646a0ad4b935d9bf155c05b028d06a81e2bfd684267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_2b141ff3875498cfdd4ef89d1d33ed25a4c974d939325239c897fd3cf4e1edc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b141ff3875498cfdd4ef89d1d33ed25a4c974d939325239c897fd3cf4e1edc3->enter($__internal_2b141ff3875498cfdd4ef89d1d33ed25a4c974d939325239c897fd3cf4e1edc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e844e4d8017b7df20b395646a0ad4b935d9bf155c05b028d06a81e2bfd684267->leave($__internal_e844e4d8017b7df20b395646a0ad4b935d9bf155c05b028d06a81e2bfd684267_prof);

        
        $__internal_2b141ff3875498cfdd4ef89d1d33ed25a4c974d939325239c897fd3cf4e1edc3->leave($__internal_2b141ff3875498cfdd4ef89d1d33ed25a4c974d939325239c897fd3cf4e1edc3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
