<?php

/* mookeen.layout.html.twig */
class __TwigTemplate_1c2ca9c28939e681767deda8ab68de16e35c94f244eb97d9355a04f08224c4c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'js_header' => array($this, 'block_js_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bdde918bef2a9422f77cfe84998a9e49e29450d1dd8c6026e8377a2dec37d33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7bdde918bef2a9422f77cfe84998a9e49e29450d1dd8c6026e8377a2dec37d33->enter($__internal_7bdde918bef2a9422f77cfe84998a9e49e29450d1dd8c6026e8377a2dec37d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mookeen.layout.html.twig"));

        $__internal_a90c875c73f3d2333d482d0c6d2e93368a7fdee9dca7b295b4cd5a4e5ffb9daf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90c875c73f3d2333d482d0c6d2e93368a7fdee9dca7b295b4cd5a4e5ffb9daf->enter($__internal_a90c875c73f3d2333d482d0c6d2e93368a7fdee9dca7b295b4cd5a4e5ffb9daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "mookeen.layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- Bootstrap CSS -->
        <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,900\" rel=\"stylesheet\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" >
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/circle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <!-- js start here -->
        ";
        // line 19
        $this->displayBlock('js_header', $context, $blocks);
        // line 21
        echo "        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_7bdde918bef2a9422f77cfe84998a9e49e29450d1dd8c6026e8377a2dec37d33->leave($__internal_7bdde918bef2a9422f77cfe84998a9e49e29450d1dd8c6026e8377a2dec37d33_prof);

        
        $__internal_a90c875c73f3d2333d482d0c6d2e93368a7fdee9dca7b295b4cd5a4e5ffb9daf->leave($__internal_a90c875c73f3d2333d482d0c6d2e93368a7fdee9dca7b295b4cd5a4e5ffb9daf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ce2f3a7c4269e4823ed892e1f5fc4ee0b9941ddcb34b33a8f448e2c95154287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce2f3a7c4269e4823ed892e1f5fc4ee0b9941ddcb34b33a8f448e2c95154287->enter($__internal_7ce2f3a7c4269e4823ed892e1f5fc4ee0b9941ddcb34b33a8f448e2c95154287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be44b10dea7b08435f6b36d58b4c2f5cb08e14dbdfabe0d452177611db0da4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be44b10dea7b08435f6b36d58b4c2f5cb08e14dbdfabe0d452177611db0da4d2->enter($__internal_be44b10dea7b08435f6b36d58b4c2f5cb08e14dbdfabe0d452177611db0da4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mookeen";
        
        $__internal_be44b10dea7b08435f6b36d58b4c2f5cb08e14dbdfabe0d452177611db0da4d2->leave($__internal_be44b10dea7b08435f6b36d58b4c2f5cb08e14dbdfabe0d452177611db0da4d2_prof);

        
        $__internal_7ce2f3a7c4269e4823ed892e1f5fc4ee0b9941ddcb34b33a8f448e2c95154287->leave($__internal_7ce2f3a7c4269e4823ed892e1f5fc4ee0b9941ddcb34b33a8f448e2c95154287_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b6d6192001e0edc18cfbbb6f3cee46749c6465ce201571fcd8c3e6859dd849ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6d6192001e0edc18cfbbb6f3cee46749c6465ce201571fcd8c3e6859dd849ab->enter($__internal_b6d6192001e0edc18cfbbb6f3cee46749c6465ce201571fcd8c3e6859dd849ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2d0424903d5470de9c4e1ded0fb2e787b17d8d7ff98047c3ad19d74bdd78ef24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d0424903d5470de9c4e1ded0fb2e787b17d8d7ff98047c3ad19d74bdd78ef24->enter($__internal_2d0424903d5470de9c4e1ded0fb2e787b17d8d7ff98047c3ad19d74bdd78ef24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        ";
        
        $__internal_2d0424903d5470de9c4e1ded0fb2e787b17d8d7ff98047c3ad19d74bdd78ef24->leave($__internal_2d0424903d5470de9c4e1ded0fb2e787b17d8d7ff98047c3ad19d74bdd78ef24_prof);

        
        $__internal_b6d6192001e0edc18cfbbb6f3cee46749c6465ce201571fcd8c3e6859dd849ab->leave($__internal_b6d6192001e0edc18cfbbb6f3cee46749c6465ce201571fcd8c3e6859dd849ab_prof);

    }

    // line 19
    public function block_js_header($context, array $blocks = array())
    {
        $__internal_2d5719389b2f60ce1805403a60bff2610b6c56de387cffab2dbd7c19b3feaf7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5719389b2f60ce1805403a60bff2610b6c56de387cffab2dbd7c19b3feaf7d->enter($__internal_2d5719389b2f60ce1805403a60bff2610b6c56de387cffab2dbd7c19b3feaf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_header"));

        $__internal_cbf371bd9f47d8a3117e3936a08cdffa6cf5fa8103e22c72d2b3dcd7922f1e38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf371bd9f47d8a3117e3936a08cdffa6cf5fa8103e22c72d2b3dcd7922f1e38->enter($__internal_cbf371bd9f47d8a3117e3936a08cdffa6cf5fa8103e22c72d2b3dcd7922f1e38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_header"));

        // line 20
        echo "        ";
        
        $__internal_cbf371bd9f47d8a3117e3936a08cdffa6cf5fa8103e22c72d2b3dcd7922f1e38->leave($__internal_cbf371bd9f47d8a3117e3936a08cdffa6cf5fa8103e22c72d2b3dcd7922f1e38_prof);

        
        $__internal_2d5719389b2f60ce1805403a60bff2610b6c56de387cffab2dbd7c19b3feaf7d->leave($__internal_2d5719389b2f60ce1805403a60bff2610b6c56de387cffab2dbd7c19b3feaf7d_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fc86aeefec963771687140601c1f0bd779353c64171eea351c33c181332697f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc86aeefec963771687140601c1f0bd779353c64171eea351c33c181332697f->enter($__internal_5fc86aeefec963771687140601c1f0bd779353c64171eea351c33c181332697f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3559a116c7f7db9c1b28e95d84485568231fa8f63bcb7845e90174f3b054d572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3559a116c7f7db9c1b28e95d84485568231fa8f63bcb7845e90174f3b054d572->enter($__internal_3559a116c7f7db9c1b28e95d84485568231fa8f63bcb7845e90174f3b054d572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "            ";
        echo twig_include($this->env, $context, "header.html.twig");
        echo "
            ";
        // line 31
        echo twig_include($this->env, $context, "side_bar.html.twig");
        echo "
            ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "        ";
        
        $__internal_3559a116c7f7db9c1b28e95d84485568231fa8f63bcb7845e90174f3b054d572->leave($__internal_3559a116c7f7db9c1b28e95d84485568231fa8f63bcb7845e90174f3b054d572_prof);

        
        $__internal_5fc86aeefec963771687140601c1f0bd779353c64171eea351c33c181332697f->leave($__internal_5fc86aeefec963771687140601c1f0bd779353c64171eea351c33c181332697f_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd0f41961ad6d80cc70eb639d269bbd0ea67b2823e113681a5a86bf8de13b524 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd0f41961ad6d80cc70eb639d269bbd0ea67b2823e113681a5a86bf8de13b524->enter($__internal_bd0f41961ad6d80cc70eb639d269bbd0ea67b2823e113681a5a86bf8de13b524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c2c76dd0d274eb277d766cbe2cc132ed44461e09521d49c4b5689d974c36d988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2c76dd0d274eb277d766cbe2cc132ed44461e09521d49c4b5689d974c36d988->enter($__internal_c2c76dd0d274eb277d766cbe2cc132ed44461e09521d49c4b5689d974c36d988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "            ";
        
        $__internal_c2c76dd0d274eb277d766cbe2cc132ed44461e09521d49c4b5689d974c36d988->leave($__internal_c2c76dd0d274eb277d766cbe2cc132ed44461e09521d49c4b5689d974c36d988_prof);

        
        $__internal_bd0f41961ad6d80cc70eb639d269bbd0ea67b2823e113681a5a86bf8de13b524->leave($__internal_bd0f41961ad6d80cc70eb639d269bbd0ea67b2823e113681a5a86bf8de13b524_prof);

    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3805b2e3c5ffe28bdfabe73da2b69dc012ad0a1526846ee550bc945661aa1676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3805b2e3c5ffe28bdfabe73da2b69dc012ad0a1526846ee550bc945661aa1676->enter($__internal_3805b2e3c5ffe28bdfabe73da2b69dc012ad0a1526846ee550bc945661aa1676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bc3cae07d299f50c37466ebc055065a921b314b4ff7200e00da22eed438f8b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3cae07d299f50c37466ebc055065a921b314b4ff7200e00da22eed438f8b12->enter($__internal_bc3cae07d299f50c37466ebc055065a921b314b4ff7200e00da22eed438f8b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bc3cae07d299f50c37466ebc055065a921b314b4ff7200e00da22eed438f8b12->leave($__internal_bc3cae07d299f50c37466ebc055065a921b314b4ff7200e00da22eed438f8b12_prof);

        
        $__internal_3805b2e3c5ffe28bdfabe73da2b69dc012ad0a1526846ee550bc945661aa1676->leave($__internal_3805b2e3c5ffe28bdfabe73da2b69dc012ad0a1526846ee550bc945661aa1676_prof);

    }

    public function getTemplateName()
    {
        return "mookeen.layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 35,  195 => 33,  186 => 32,  176 => 34,  174 => 32,  170 => 31,  165 => 30,  156 => 29,  146 => 20,  137 => 19,  127 => 17,  118 => 16,  100 => 7,  88 => 36,  85 => 35,  83 => 29,  73 => 21,  71 => 19,  68 => 18,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  43 => 8,  39 => 7,  31 => 1,);
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
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}Mookeen{% endblock %}</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <!-- Bootstrap CSS -->
        <link href=\"https://fonts.googleapis.com/css?family=Raleway:300,400,500,700,900\" rel=\"stylesheet\">
        <link href=\"{{ asset('/assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('/assets/vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" >
        <link href=\"{{ asset('/assets/css/circle.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"{{ asset('/assets/css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
        {% block stylesheets %}
        {% endblock %}
        <!-- js start here -->
        {% block js_header %}
        {% endblock %}
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
          <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->
    </head>
    <body>
        {% block body %}
            {{ include('header.html.twig') }}
            {{ include('side_bar.html.twig') }}
            {% block content %}
            {% endblock content %}
        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "mookeen.layout.html.twig", "/home/huybinh/public_html/git/mookeen/app/Resources/views/mookeen.layout.html.twig");
    }
}
