<?php

/* side_bar.html.twig */
class __TwigTemplate_57c7d7dccccaba61cd997e8cfd0127a814adb11ce6a6edf6eacb96785bf30332 extends Twig_Template
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
        $__internal_8227a58db42c6c5dbf08fc58e875610996d491b6742877d8d82cc8e887fe36b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8227a58db42c6c5dbf08fc58e875610996d491b6742877d8d82cc8e887fe36b8->enter($__internal_8227a58db42c6c5dbf08fc58e875610996d491b6742877d8d82cc8e887fe36b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "side_bar.html.twig"));

        $__internal_ed1fc2f515bfe06c26b72ac94f2b6eaeab55f02b224d4dd12aea5eca8ce1c869 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed1fc2f515bfe06c26b72ac94f2b6eaeab55f02b224d4dd12aea5eca8ce1c869->enter($__internal_ed1fc2f515bfe06c26b72ac94f2b6eaeab55f02b224d4dd12aea5eca8ce1c869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "side_bar.html.twig"));

        // line 1
        echo "<div class=\"menu-bar menu-collapsed\">
  <div class=\"menu-header\">
    <a class=\"menu-logo\" href=\"#\">
      <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/aic-logo.png"), "html", null, true);
        echo "\" alt=\"AIC-Group\"/>
    </a>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row main-menu\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 10
            echo "        ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "vi")) {
                // line 11
                echo "          ";
                $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vi__RG__app_module", array("name" => $this->getAttribute($context["module"], "name", array())));
                // line 12
                echo "        ";
            } elseif (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "fr")) {
                // line 13
                echo "          ";
                $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fr__RG__app_module", array("name" => $this->getAttribute($context["module"], "name", array())));
                // line 14
                echo "        ";
            } else {
                // line 15
                echo "          ";
                $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("en__RG__app_module", array("name" => $this->getAttribute($context["module"], "name", array())));
                // line 16
                echo "        ";
            }
            // line 17
            echo "        ";
            if ((($this->getAttribute($context["module"], "languageKey", array()) == "module.e-portfolio") || ($this->getAttribute($context["module"], "languageKey", array()) == "module.learningplatform"))) {
                // line 18
                echo "          ";
                $context["url"] = $this->getAttribute($context["module"], "url", array());
                // line 19
                echo "          ";
                if ((!twig_in_filter("http://", (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) && !twig_in_filter("https://", (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))))) {
                    // line 20
                    echo "            ";
                    $context["url"] = ("http://" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
                    // line 21
                    echo "          ";
                }
                // line 22
                echo "        ";
            }
            // line 23
            echo "        <div class=\"col-sm-3 col-xs-4\">
          <a class=\"menu-item\" href=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">
            <i class=\"fa ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "icon", array()), "html", null, true);
            echo " fa-2x\"></i>
            <span class=\"menu-label\">";
            // line 26
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["module"], "languageKey", array()))), "html", null, true);
            echo "</span>
          </a>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      <!-- Menu item -->
      <div class=\"col-sm-3 col-xs-4\">
          <a class=\"menu-item\" href=\"/\">
              <i class=\"fa fa-home fa-2x\"></i>
              <span class=\"menu-label\">";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("home"), "html", null, true);
        echo "</span>
          </a>
      </div>
    </div>
  </div>
</div>
<div class=\"bg-shadow hide\"></div>";
        
        $__internal_8227a58db42c6c5dbf08fc58e875610996d491b6742877d8d82cc8e887fe36b8->leave($__internal_8227a58db42c6c5dbf08fc58e875610996d491b6742877d8d82cc8e887fe36b8_prof);

        
        $__internal_ed1fc2f515bfe06c26b72ac94f2b6eaeab55f02b224d4dd12aea5eca8ce1c869->leave($__internal_ed1fc2f515bfe06c26b72ac94f2b6eaeab55f02b224d4dd12aea5eca8ce1c869_prof);

    }

    public function getTemplateName()
    {
        return "side_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  102 => 30,  92 => 26,  88 => 25,  84 => 24,  81 => 23,  78 => 22,  75 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  48 => 12,  45 => 11,  42 => 10,  38 => 9,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"menu-bar menu-collapsed\">
  <div class=\"menu-header\">
    <a class=\"menu-logo\" href=\"#\">
      <img src=\"{{ asset('assets/images/aic-logo.png') }}\" alt=\"AIC-Group\"/>
    </a>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row main-menu\">
      {% for module in modules %}
        {% if locale == 'vi' %}
          {% set url = path('vi__RG__app_module', {'name':module.name}) %}
        {% elseif locale == 'fr' %}
          {% set url = path('fr__RG__app_module', {'name':module.name}) %}
        {% else %}
          {% set url = path('en__RG__app_module', {'name':module.name}) %}
        {% endif %}
        {% if module.languageKey == 'module.e-portfolio' or module.languageKey == 'module.learningplatform' %}
          {% set url = module.url %}
          {% if 'http://' not in url and 'https://' not in url %}
            {% set  url = 'http://' ~ url %}
          {% endif %}
        {% endif %}
        <div class=\"col-sm-3 col-xs-4\">
          <a class=\"menu-item\" href=\"{{ url }}\">
            <i class=\"fa {{ module.icon }} fa-2x\"></i>
            <span class=\"menu-label\">{{ module.languageKey | trans | capitalize }}</span>
          </a>
        </div>
      {% endfor %}
      <!-- Menu item -->
      <div class=\"col-sm-3 col-xs-4\">
          <a class=\"menu-item\" href=\"/\">
              <i class=\"fa fa-home fa-2x\"></i>
              <span class=\"menu-label\">{{ 'home' | trans }}</span>
          </a>
      </div>
    </div>
  </div>
</div>
<div class=\"bg-shadow hide\"></div>", "side_bar.html.twig", "/home/huybinh/public_html/git/mookeen/app/Resources/views/side_bar.html.twig");
    }
}
