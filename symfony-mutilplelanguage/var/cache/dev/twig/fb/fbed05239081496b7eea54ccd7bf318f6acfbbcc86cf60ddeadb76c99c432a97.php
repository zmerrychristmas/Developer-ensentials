<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_72b5c0496cef93f83e4457239af06c8c3cea5c1c85bab53f652334986c2f437c extends Twig_Template
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
        $__internal_0ede5fef5f8609e710f8ae7d87a2a9786f3ebb538b02051a2e0a0a10311ef3b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ede5fef5f8609e710f8ae7d87a2a9786f3ebb538b02051a2e0a0a10311ef3b7->enter($__internal_0ede5fef5f8609e710f8ae7d87a2a9786f3ebb538b02051a2e0a0a10311ef3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_95de8201b44921dbb2f243315f73b6308bbeb645813f9a10e108bc101fd6f1a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95de8201b44921dbb2f243315f73b6308bbeb645813f9a10e108bc101fd6f1a7->enter($__internal_95de8201b44921dbb2f243315f73b6308bbeb645813f9a10e108bc101fd6f1a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "    <div class=\"bg-cover\">
      <div id=\"loginPage\" class=\"form-popup\">
        <div class=\"form-header\">
          <img class=\"logo\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/mookeen-logo.png"), "html", null, true);
        echo "\" />
        </div>
        <div class=\"form-body\">
          <form action=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            ";
        // line 9
        if ((isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token"))) {
            // line 10
            echo "                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
            ";
        }
        // line 12
        echo "            <div class=\"form-group\">
              <label for=\"username\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
              <input type=\"text\" class=\"form-control input-lg\" name=\"_username\" id=\"username\" placeholder=\"mookeen ID\">
            </div>
            <div class=\"form-group\">
              <label for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
              <input type=\"password\" class=\"form-control input-lg\" id=\"password\" name=\"_password\" placeholder=\"mookeen PASSWORD\">
            </div>
            <div class=\"buttons text-center\">
              <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"  class=\"btn btn-warning btn-lg btn-custom\">CONNEXION</button>
            </div>
          </form>
        </div>
        <div class=\"form-footer\">
            ";
        // line 26
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 27
            echo "                <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 29
        echo "          <p class=\"text-center\">
            <a href=\"#\">Vous avez oublié votre nom d’utilisateur et/ou votre mot de passe</a>

          </p>
        </div>
      </div>
    </div>";
        
        $__internal_0ede5fef5f8609e710f8ae7d87a2a9786f3ebb538b02051a2e0a0a10311ef3b7->leave($__internal_0ede5fef5f8609e710f8ae7d87a2a9786f3ebb538b02051a2e0a0a10311ef3b7_prof);

        
        $__internal_95de8201b44921dbb2f243315f73b6308bbeb645813f9a10e108bc101fd6f1a7->leave($__internal_95de8201b44921dbb2f243315f73b6308bbeb645813f9a10e108bc101fd6f1a7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  75 => 27,  73 => 26,  65 => 21,  58 => 17,  51 => 13,  48 => 12,  42 => 10,  40 => 9,  36 => 8,  30 => 5,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
    <div class=\"bg-cover\">
      <div id=\"loginPage\" class=\"form-popup\">
        <div class=\"form-header\">
          <img class=\"logo\" src=\"{{ asset('assets/images/mookeen-logo.png') }}\" />
        </div>
        <div class=\"form-body\">
          <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
            {% if csrf_token %}
                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
            {% endif %}
            <div class=\"form-group\">
              <label for=\"username\">{{ 'security.login.username'|trans }}</label>
              <input type=\"text\" class=\"form-control input-lg\" name=\"_username\" id=\"username\" placeholder=\"mookeen ID\">
            </div>
            <div class=\"form-group\">
              <label for=\"password\">{{ 'security.login.password'|trans }}</label>
              <input type=\"password\" class=\"form-control input-lg\" id=\"password\" name=\"_password\" placeholder=\"mookeen PASSWORD\">
            </div>
            <div class=\"buttons text-center\">
              <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\"  class=\"btn btn-warning btn-lg btn-custom\">CONNEXION</button>
            </div>
          </form>
        </div>
        <div class=\"form-footer\">
            {% if error %}
                <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}
          <p class=\"text-center\">
            <a href=\"#\">Vous avez oublié votre nom d’utilisateur et/ou votre mot de passe</a>

          </p>
        </div>
      </div>
    </div>", "@FOSUser/Security/login_content.html.twig", "/home/huybinh/public_html/git/mookeen/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
