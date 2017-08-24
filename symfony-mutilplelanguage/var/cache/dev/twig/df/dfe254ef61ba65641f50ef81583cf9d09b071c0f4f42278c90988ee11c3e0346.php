<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_8e0013d2a4051ad83f3d147841a24787daeca6c7fd47c8dc9023eb077fec0bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'style_sheet' => array($this, 'block_style_sheet'),
            'header_script' => array($this, 'block_header_script'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer_script' => array($this, 'block_footer_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8fb3c57a8eba7d4af6f12e7f1adaa59c75e7175f2e2b295b5b22d6db8c7ca8c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fb3c57a8eba7d4af6f12e7f1adaa59c75e7175f2e2b295b5b22d6db8c7ca8c1->enter($__internal_8fb3c57a8eba7d4af6f12e7f1adaa59c75e7175f2e2b295b5b22d6db8c7ca8c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_601319f55ea3f57b5734aa951a6ebc4f50910b6f440479f21c1044146dc6184c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_601319f55ea3f57b5734aa951a6ebc4f50910b6f440479f21c1044146dc6184c->enter($__internal_601319f55ea3f57b5734aa951a6ebc4f50910b6f440479f21c1044146dc6184c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 7
        $this->displayBlock('style_sheet', $context, $blocks);
        // line 9
        echo "        ";
        $this->displayBlock('header_script', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <div>
            ";
        // line 14
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 15
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 20
            echo "                <!-- <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a> -->
            ";
        }
        // line 22
        echo "        </div>

        ";
        // line 24
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 25
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 26
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 27
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 28
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        ";
        }
        // line 33
        echo "
        <div>
            ";
        // line 35
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 37
        echo "        </div>
            ";
        // line 38
        $this->displayBlock('footer_script', $context, $blocks);
        // line 40
        echo "    </body>
</html>
";
        
        $__internal_8fb3c57a8eba7d4af6f12e7f1adaa59c75e7175f2e2b295b5b22d6db8c7ca8c1->leave($__internal_8fb3c57a8eba7d4af6f12e7f1adaa59c75e7175f2e2b295b5b22d6db8c7ca8c1_prof);

        
        $__internal_601319f55ea3f57b5734aa951a6ebc4f50910b6f440479f21c1044146dc6184c->leave($__internal_601319f55ea3f57b5734aa951a6ebc4f50910b6f440479f21c1044146dc6184c_prof);

    }

    // line 7
    public function block_style_sheet($context, array $blocks = array())
    {
        $__internal_c28b2df0cc7af45cd9daeba38e2985547c9bb7e4b976bad3787faaa8501febf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c28b2df0cc7af45cd9daeba38e2985547c9bb7e4b976bad3787faaa8501febf6->enter($__internal_c28b2df0cc7af45cd9daeba38e2985547c9bb7e4b976bad3787faaa8501febf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style_sheet"));

        $__internal_29da176234a65f7c5230cd2319f8108045f0b51e193814d0b35d1d8fc006067a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29da176234a65f7c5230cd2319f8108045f0b51e193814d0b35d1d8fc006067a->enter($__internal_29da176234a65f7c5230cd2319f8108045f0b51e193814d0b35d1d8fc006067a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style_sheet"));

        // line 8
        echo "        ";
        
        $__internal_29da176234a65f7c5230cd2319f8108045f0b51e193814d0b35d1d8fc006067a->leave($__internal_29da176234a65f7c5230cd2319f8108045f0b51e193814d0b35d1d8fc006067a_prof);

        
        $__internal_c28b2df0cc7af45cd9daeba38e2985547c9bb7e4b976bad3787faaa8501febf6->leave($__internal_c28b2df0cc7af45cd9daeba38e2985547c9bb7e4b976bad3787faaa8501febf6_prof);

    }

    // line 9
    public function block_header_script($context, array $blocks = array())
    {
        $__internal_db3d6aa7d3fb67dae50c3b0c63590c703bfbe2a01c9d5c2e30473a1d5927f71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3d6aa7d3fb67dae50c3b0c63590c703bfbe2a01c9d5c2e30473a1d5927f71e->enter($__internal_db3d6aa7d3fb67dae50c3b0c63590c703bfbe2a01c9d5c2e30473a1d5927f71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_script"));

        $__internal_56aa0bee811e87d5e74c6fcee4205f415060d302058a42b220f35e6a7129df53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56aa0bee811e87d5e74c6fcee4205f415060d302058a42b220f35e6a7129df53->enter($__internal_56aa0bee811e87d5e74c6fcee4205f415060d302058a42b220f35e6a7129df53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_script"));

        // line 10
        echo "        ";
        
        $__internal_56aa0bee811e87d5e74c6fcee4205f415060d302058a42b220f35e6a7129df53->leave($__internal_56aa0bee811e87d5e74c6fcee4205f415060d302058a42b220f35e6a7129df53_prof);

        
        $__internal_db3d6aa7d3fb67dae50c3b0c63590c703bfbe2a01c9d5c2e30473a1d5927f71e->leave($__internal_db3d6aa7d3fb67dae50c3b0c63590c703bfbe2a01c9d5c2e30473a1d5927f71e_prof);

    }

    // line 35
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38f67ed843b05b7cb587fb969b5b2f947d2bd63d6b59056fddbecd8484a71c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f67ed843b05b7cb587fb969b5b2f947d2bd63d6b59056fddbecd8484a71c6a->enter($__internal_38f67ed843b05b7cb587fb969b5b2f947d2bd63d6b59056fddbecd8484a71c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_37b240410afbe5f2add0784988ec24fee904e65afb306e6363698ca51b12c75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b240410afbe5f2add0784988ec24fee904e65afb306e6363698ca51b12c75b->enter($__internal_37b240410afbe5f2add0784988ec24fee904e65afb306e6363698ca51b12c75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 36
        echo "            ";
        
        $__internal_37b240410afbe5f2add0784988ec24fee904e65afb306e6363698ca51b12c75b->leave($__internal_37b240410afbe5f2add0784988ec24fee904e65afb306e6363698ca51b12c75b_prof);

        
        $__internal_38f67ed843b05b7cb587fb969b5b2f947d2bd63d6b59056fddbecd8484a71c6a->leave($__internal_38f67ed843b05b7cb587fb969b5b2f947d2bd63d6b59056fddbecd8484a71c6a_prof);

    }

    // line 38
    public function block_footer_script($context, array $blocks = array())
    {
        $__internal_72adb8d841615d462786877fb929b0127fb18560935b95e27d10e2c57e4b6819 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72adb8d841615d462786877fb929b0127fb18560935b95e27d10e2c57e4b6819->enter($__internal_72adb8d841615d462786877fb929b0127fb18560935b95e27d10e2c57e4b6819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_script"));

        $__internal_a8e9fd65bccff1bc022d7357a19dfc5c64de8607204a0336ced52bdb1bfcf31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8e9fd65bccff1bc022d7357a19dfc5c64de8607204a0336ced52bdb1bfcf31f->enter($__internal_a8e9fd65bccff1bc022d7357a19dfc5c64de8607204a0336ced52bdb1bfcf31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_script"));

        // line 39
        echo "            ";
        
        $__internal_a8e9fd65bccff1bc022d7357a19dfc5c64de8607204a0336ced52bdb1bfcf31f->leave($__internal_a8e9fd65bccff1bc022d7357a19dfc5c64de8607204a0336ced52bdb1bfcf31f_prof);

        
        $__internal_72adb8d841615d462786877fb929b0127fb18560935b95e27d10e2c57e4b6819->leave($__internal_72adb8d841615d462786877fb929b0127fb18560935b95e27d10e2c57e4b6819_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 39,  191 => 38,  181 => 36,  172 => 35,  162 => 10,  153 => 9,  143 => 8,  134 => 7,  122 => 40,  120 => 38,  117 => 37,  115 => 35,  111 => 33,  108 => 32,  102 => 31,  93 => 28,  88 => 27,  83 => 26,  78 => 25,  76 => 24,  72 => 22,  64 => 20,  58 => 17,  54 => 16,  49 => 15,  47 => 14,  42 => 11,  39 => 9,  37 => 7,  29 => 1,);
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
        {% block style_sheet %}
        {% endblock style_sheet %}
        {% block header_script %}
        {% endblock header_script %}
    </head>
    <body>
        <div>
            {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
                <a href=\"{{ path('fos_user_security_logout') }}\">
                    {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
                </a>
            {% else %}
                <!-- <a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a> -->
            {% endif %}
        </div>

        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
            {% block footer_script %}
            {% endblock footer_script %}
    </body>
</html>
", "@FOSUser/layout.html.twig", "/home/huybinh/public_html/git/mookeen/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
