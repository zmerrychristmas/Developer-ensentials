<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_beb21384708b7fce70142673076643bf4701a2536699ef3f1150a9b33abd0d29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e604e16acc0495a388b021219cc7985f7d9ca870492700c78ec6346d731a89e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e604e16acc0495a388b021219cc7985f7d9ca870492700c78ec6346d731a89e->enter($__internal_0e604e16acc0495a388b021219cc7985f7d9ca870492700c78ec6346d731a89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_17d289127582a945616629a6b710076e5b3af910b1592dba411fd7a7dee01eaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17d289127582a945616629a6b710076e5b3af910b1592dba411fd7a7dee01eaf->enter($__internal_17d289127582a945616629a6b710076e5b3af910b1592dba411fd7a7dee01eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_0e604e16acc0495a388b021219cc7985f7d9ca870492700c78ec6346d731a89e->leave($__internal_0e604e16acc0495a388b021219cc7985f7d9ca870492700c78ec6346d731a89e_prof);

        
        $__internal_17d289127582a945616629a6b710076e5b3af910b1592dba411fd7a7dee01eaf->leave($__internal_17d289127582a945616629a6b710076e5b3af910b1592dba411fd7a7dee01eaf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e2789012422a6f423c3335f67da159ad66cc629867048daa05f306237f0c7eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2789012422a6f423c3335f67da159ad66cc629867048daa05f306237f0c7eb1->enter($__internal_e2789012422a6f423c3335f67da159ad66cc629867048daa05f306237f0c7eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0336b93ab386e8aa885305c798384c53daf878e29cf73f9d4f0204a5963313ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0336b93ab386e8aa885305c798384c53daf878e29cf73f9d4f0204a5963313ca->enter($__internal_0336b93ab386e8aa885305c798384c53daf878e29cf73f9d4f0204a5963313ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0336b93ab386e8aa885305c798384c53daf878e29cf73f9d4f0204a5963313ca->leave($__internal_0336b93ab386e8aa885305c798384c53daf878e29cf73f9d4f0204a5963313ca_prof);

        
        $__internal_e2789012422a6f423c3335f67da159ad66cc629867048daa05f306237f0c7eb1->leave($__internal_e2789012422a6f423c3335f67da159ad66cc629867048daa05f306237f0c7eb1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b87e84d0abd65140b6f74a23891a9d64c9f7441f5012368a640760b3da42c354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b87e84d0abd65140b6f74a23891a9d64c9f7441f5012368a640760b3da42c354->enter($__internal_b87e84d0abd65140b6f74a23891a9d64c9f7441f5012368a640760b3da42c354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a635ce7ba7f50d08c60ce42de3381e8bb089f4032d2c3d9df2d4853f38eddf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a635ce7ba7f50d08c60ce42de3381e8bb089f4032d2c3d9df2d4853f38eddf73->enter($__internal_a635ce7ba7f50d08c60ce42de3381e8bb089f4032d2c3d9df2d4853f38eddf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a635ce7ba7f50d08c60ce42de3381e8bb089f4032d2c3d9df2d4853f38eddf73->leave($__internal_a635ce7ba7f50d08c60ce42de3381e8bb089f4032d2c3d9df2d4853f38eddf73_prof);

        
        $__internal_b87e84d0abd65140b6f74a23891a9d64c9f7441f5012368a640760b3da42c354->leave($__internal_b87e84d0abd65140b6f74a23891a9d64c9f7441f5012368a640760b3da42c354_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ea225d0683bb1f8e3a85559cc447ab622d81e6d17b8e0aedbf7b7b8a0016cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ea225d0683bb1f8e3a85559cc447ab622d81e6d17b8e0aedbf7b7b8a0016cf0->enter($__internal_6ea225d0683bb1f8e3a85559cc447ab622d81e6d17b8e0aedbf7b7b8a0016cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4991bf651f92d261938f3d2ad01298dfbb3a92f9e6a203ff2dbeb2d7ad7ee473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4991bf651f92d261938f3d2ad01298dfbb3a92f9e6a203ff2dbeb2d7ad7ee473->enter($__internal_4991bf651f92d261938f3d2ad01298dfbb3a92f9e6a203ff2dbeb2d7ad7ee473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4991bf651f92d261938f3d2ad01298dfbb3a92f9e6a203ff2dbeb2d7ad7ee473->leave($__internal_4991bf651f92d261938f3d2ad01298dfbb3a92f9e6a203ff2dbeb2d7ad7ee473_prof);

        
        $__internal_6ea225d0683bb1f8e3a85559cc447ab622d81e6d17b8e0aedbf7b7b8a0016cf0->leave($__internal_6ea225d0683bb1f8e3a85559cc447ab622d81e6d17b8e0aedbf7b7b8a0016cf0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/huybinh/public_html/git/mookeen/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
