<?php

/* header.html.twig */
class __TwigTemplate_c2a684a401e8557bbd519be3e6564b5a5c3f741a316888b3987565bccb0f30f2 extends Twig_Template
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
        $__internal_8a83235f98fa32e8aa99349c0c7e6c1245e27f1b32a8b18bbec3964fe9a7f7eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a83235f98fa32e8aa99349c0c7e6c1245e27f1b32a8b18bbec3964fe9a7f7eb->enter($__internal_8a83235f98fa32e8aa99349c0c7e6c1245e27f1b32a8b18bbec3964fe9a7f7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        $__internal_8cf03501d708cd2528b6fbbc4c5c5fad338ffb0ba855737564fbdcc8f600fd87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf03501d708cd2528b6fbbc4c5c5fad338ffb0ba855737564fbdcc8f600fd87->enter($__internal_8cf03501d708cd2528b6fbbc4c5c5fad338ffb0ba855737564fbdcc8f600fd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "header.html.twig"));

        // line 1
        if ( !array_key_exists("header", $context)) {
            // line 2
            echo "  ";
            $context["header"] = "home";
        }
        // line 4
        if ( !array_key_exists("user_name", $context)) {
            // line 5
            echo "  ";
            $context["user_name"] = "Guest";
        }
        // line 7
        if ( !array_key_exists("img_path", $context)) {
            // line 8
            echo "  ";
            $context["img_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/images/profile10.png");
        }
        // line 10
        echo "<header>
    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <a class=\"cursor-pointer\" id=\"btn-menu\">
            <i class=\"fa fa-bars\"></i>
        </a>
        <a class=\"logo\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\"/></a>
        <a class=\"m-breadcrumb\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["header"]) ? $context["header"] : $this->getContext($context, "header"))), "html", null, true);
        echo "</a>
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"language-box\">
                <select class=\"form-control\" id=\"language-box\">
                    <option value=\"en\" ";
        // line 20
        if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "en")) {
            echo "selected";
        }
        echo ">English</option>
                    <option value=\"fr\" ";
        // line 21
        if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "fr")) {
            echo "selected";
        }
        echo ">French</option>
                    <option value=\"vi\" ";
        // line 22
        if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "vi")) {
            echo "selected";
        }
        echo ">Tiếng Việt</option>
                </select>
            </li>
            <li class=\"dropdown user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"avatar-circle small\">
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["img_path"]) ? $context["img_path"] : $this->getContext($context, "img_path")), "html", null, true);
        echo "\" class=\"square\"/>
                </span>
                <span class=\"btn-label\">
                    ";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["user_name"]) ? $context["user_name"] : $this->getContext($context, "user_name")), "html", null, true);
        echo " <span class=\"caret\"></span>
                </span>
                </a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              <li><a href=\"#\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.profile"), "html", null, true);
        echo "</a></li>
              <li><a href=\"#\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.my_favourite"), "html", null, true);
        echo "</a></li>
              <li><a href=\"#\" ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.setting"), "html", null, true);
        echo "></a></li>
              <li role=\"separator\" class=\"divider\"></li>
              <li><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.sign_out"), "html", null, true);
        echo "</a></li>
            </ul>
          </li>
        </ul>
    </nav>
</header>";
        
        $__internal_8a83235f98fa32e8aa99349c0c7e6c1245e27f1b32a8b18bbec3964fe9a7f7eb->leave($__internal_8a83235f98fa32e8aa99349c0c7e6c1245e27f1b32a8b18bbec3964fe9a7f7eb_prof);

        
        $__internal_8cf03501d708cd2528b6fbbc4c5c5fad338ffb0ba855737564fbdcc8f600fd87->leave($__internal_8cf03501d708cd2528b6fbbc4c5c5fad338ffb0ba855737564fbdcc8f600fd87_prof);

    }

    public function getTemplateName()
    {
        return "header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 38,  106 => 36,  102 => 35,  98 => 34,  91 => 30,  85 => 27,  75 => 22,  69 => 21,  63 => 20,  56 => 16,  50 => 15,  43 => 10,  39 => 8,  37 => 7,  33 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if header is not defined %}
  {% set header = 'home' %}
{% endif %}
{% if user_name is not defined %}
  {% set user_name = 'Guest' %}
{% endif %}
{% if img_path is not defined %}
  {% set img_path = asset('/assets/images/profile10.png') %}
{% endif %}
<header>
    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <a class=\"cursor-pointer\" id=\"btn-menu\">
            <i class=\"fa fa-bars\"></i>
        </a>
        <a class=\"logo\" href=\"{{ path('homepage') }}\"><img src=\"{{ asset('assets/images/logo.png') }}\"/></a>
        <a class=\"m-breadcrumb\">{{ header | trans }}</a>
        <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"language-box\">
                <select class=\"form-control\" id=\"language-box\">
                    <option value=\"en\" {% if locale == \"en\" %}selected{% endif %}>English</option>
                    <option value=\"fr\" {% if locale == 'fr' %}selected{% endif %}>French</option>
                    <option value=\"vi\" {% if locale == 'vi' %}selected{% endif %}>Tiếng Việt</option>
                </select>
            </li>
            <li class=\"dropdown user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"avatar-circle small\">
                    <img src=\"{{ img_path }}\" class=\"square\"/>
                </span>
                <span class=\"btn-label\">
                    {{ user_name }} <span class=\"caret\"></span>
                </span>
                </a>
            <ul class=\"dropdown-menu dropdown-menu-right\">
              <li><a href=\"#\">{{ 'user.profile' | trans }}</a></li>
              <li><a href=\"#\">{{ 'user.my_favourite' | trans }}</a></li>
              <li><a href=\"#\" {{ 'user.setting' | trans }}></a></li>
              <li role=\"separator\" class=\"divider\"></li>
              <li><a href=\"{{ path('fos_user_security_logout') }}\">{{ 'user.sign_out' | trans }}</a></li>
            </ul>
          </li>
        </ul>
    </nav>
</header>", "header.html.twig", "/home/huybinh/public_html/git/mookeen/app/Resources/views/header.html.twig");
    }
}
