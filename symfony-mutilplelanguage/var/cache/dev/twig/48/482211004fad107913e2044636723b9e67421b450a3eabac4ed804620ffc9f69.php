<?php

/* ::base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_823b60b95bfc3a76ffa98a1da81cb42d70b4bd7ecfe5603363555e445cb8ca7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_823b60b95bfc3a76ffa98a1da81cb42d70b4bd7ecfe5603363555e445cb8ca7b->enter($__internal_823b60b95bfc3a76ffa98a1da81cb42d70b4bd7ecfe5603363555e445cb8ca7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_dd2b48c49661db1da0ac177892a020adbd194528011427e9b2d020c545dbb3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2b48c49661db1da0ac177892a020adbd194528011427e9b2d020c545dbb3ec->enter($__internal_dd2b48c49661db1da0ac177892a020adbd194528011427e9b2d020c545dbb3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_823b60b95bfc3a76ffa98a1da81cb42d70b4bd7ecfe5603363555e445cb8ca7b->leave($__internal_823b60b95bfc3a76ffa98a1da81cb42d70b4bd7ecfe5603363555e445cb8ca7b_prof);

        
        $__internal_dd2b48c49661db1da0ac177892a020adbd194528011427e9b2d020c545dbb3ec->leave($__internal_dd2b48c49661db1da0ac177892a020adbd194528011427e9b2d020c545dbb3ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1f6c0c992b6a432eb2b460ed6c0f0967e961320b3210f759fe09d3c13ff1b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f6c0c992b6a432eb2b460ed6c0f0967e961320b3210f759fe09d3c13ff1b5f->enter($__internal_c1f6c0c992b6a432eb2b460ed6c0f0967e961320b3210f759fe09d3c13ff1b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_79164f33d377e200ad1aa934252e723882937e2c0fa6a073b555f96488bb95ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79164f33d377e200ad1aa934252e723882937e2c0fa6a073b555f96488bb95ad->enter($__internal_79164f33d377e200ad1aa934252e723882937e2c0fa6a073b555f96488bb95ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_79164f33d377e200ad1aa934252e723882937e2c0fa6a073b555f96488bb95ad->leave($__internal_79164f33d377e200ad1aa934252e723882937e2c0fa6a073b555f96488bb95ad_prof);

        
        $__internal_c1f6c0c992b6a432eb2b460ed6c0f0967e961320b3210f759fe09d3c13ff1b5f->leave($__internal_c1f6c0c992b6a432eb2b460ed6c0f0967e961320b3210f759fe09d3c13ff1b5f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b59818441fa670d32e67de5e4f3e0f9e8965b1148713fc827f81d00723a9b3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59818441fa670d32e67de5e4f3e0f9e8965b1148713fc827f81d00723a9b3d6->enter($__internal_b59818441fa670d32e67de5e4f3e0f9e8965b1148713fc827f81d00723a9b3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_48c0a84eb338280e380c79f3ac35d63beb3ef5440c69ea6b6c0aa9aa35402dc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c0a84eb338280e380c79f3ac35d63beb3ef5440c69ea6b6c0aa9aa35402dc7->enter($__internal_48c0a84eb338280e380c79f3ac35d63beb3ef5440c69ea6b6c0aa9aa35402dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_48c0a84eb338280e380c79f3ac35d63beb3ef5440c69ea6b6c0aa9aa35402dc7->leave($__internal_48c0a84eb338280e380c79f3ac35d63beb3ef5440c69ea6b6c0aa9aa35402dc7_prof);

        
        $__internal_b59818441fa670d32e67de5e4f3e0f9e8965b1148713fc827f81d00723a9b3d6->leave($__internal_b59818441fa670d32e67de5e4f3e0f9e8965b1148713fc827f81d00723a9b3d6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdd04460e416d6a6df26206a3db4e859d61455c6931b702d00b2ea9a411c854d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd04460e416d6a6df26206a3db4e859d61455c6931b702d00b2ea9a411c854d->enter($__internal_cdd04460e416d6a6df26206a3db4e859d61455c6931b702d00b2ea9a411c854d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2e1a35182ab24fb33d3b063d83f4517929bd616e22dfb8d14070a14b369d495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e1a35182ab24fb33d3b063d83f4517929bd616e22dfb8d14070a14b369d495->enter($__internal_b2e1a35182ab24fb33d3b063d83f4517929bd616e22dfb8d14070a14b369d495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2e1a35182ab24fb33d3b063d83f4517929bd616e22dfb8d14070a14b369d495->leave($__internal_b2e1a35182ab24fb33d3b063d83f4517929bd616e22dfb8d14070a14b369d495_prof);

        
        $__internal_cdd04460e416d6a6df26206a3db4e859d61455c6931b702d00b2ea9a411c854d->leave($__internal_cdd04460e416d6a6df26206a3db4e859d61455c6931b702d00b2ea9a411c854d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3418fd307a04a979fcbfe670775aa08891dfd74c344384d100cb4a9390056b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3418fd307a04a979fcbfe670775aa08891dfd74c344384d100cb4a9390056b80->enter($__internal_3418fd307a04a979fcbfe670775aa08891dfd74c344384d100cb4a9390056b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_14ea9c4ff587a510c5a390508965409c903d8dc8c9a289b56d910705a7e4830a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ea9c4ff587a510c5a390508965409c903d8dc8c9a289b56d910705a7e4830a->enter($__internal_14ea9c4ff587a510c5a390508965409c903d8dc8c9a289b56d910705a7e4830a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_14ea9c4ff587a510c5a390508965409c903d8dc8c9a289b56d910705a7e4830a->leave($__internal_14ea9c4ff587a510c5a390508965409c903d8dc8c9a289b56d910705a7e4830a_prof);

        
        $__internal_3418fd307a04a979fcbfe670775aa08891dfd74c344384d100cb4a9390056b80->leave($__internal_3418fd307a04a979fcbfe670775aa08891dfd74c344384d100cb4a9390056b80_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/huybinh/public_html/git/mookeen/app/Resources/views/base.html.twig");
    }
}
