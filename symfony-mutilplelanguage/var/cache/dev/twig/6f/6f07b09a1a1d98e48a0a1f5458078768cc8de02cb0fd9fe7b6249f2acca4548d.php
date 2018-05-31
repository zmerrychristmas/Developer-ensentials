<?php

/* default/index.html.twig */
class __TwigTemplate_dceb56a59c18c48718e8d29e4a25e98e5177db0f33ab183da65e3deae3ceaade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mookeen.layout.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'js_headers' => array($this, 'block_js_headers'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "mookeen.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b66b7b523fb6a1b18d27d61f11d7c77db56a0141284a5675142a998be981bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b66b7b523fb6a1b18d27d61f11d7c77db56a0141284a5675142a998be981bf1->enter($__internal_4b66b7b523fb6a1b18d27d61f11d7c77db56a0141284a5675142a998be981bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_38f0333306d079ab5b698a98e024de267eb56829d374d618e32b8f2f66846693 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f0333306d079ab5b698a98e024de267eb56829d374d618e32b8f2f66846693->enter($__internal_38f0333306d079ab5b698a98e024de267eb56829d374d618e32b8f2f66846693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b66b7b523fb6a1b18d27d61f11d7c77db56a0141284a5675142a998be981bf1->leave($__internal_4b66b7b523fb6a1b18d27d61f11d7c77db56a0141284a5675142a998be981bf1_prof);

        
        $__internal_38f0333306d079ab5b698a98e024de267eb56829d374d618e32b8f2f66846693->leave($__internal_38f0333306d079ab5b698a98e024de267eb56829d374d618e32b8f2f66846693_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa861739851f84a3c5d340b38bb4f127d8e3a568a5060ee50bd90ec922d6ea42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa861739851f84a3c5d340b38bb4f127d8e3a568a5060ee50bd90ec922d6ea42->enter($__internal_fa861739851f84a3c5d340b38bb4f127d8e3a568a5060ee50bd90ec922d6ea42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_5b7f9042e2c552f00e9bf2f24bc6a51ee54584760f4529d168f6349f946482a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b7f9042e2c552f00e9bf2f24bc6a51ee54584760f4529d168f6349f946482a4->enter($__internal_5b7f9042e2c552f00e9bf2f24bc6a51ee54584760f4529d168f6349f946482a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5b7f9042e2c552f00e9bf2f24bc6a51ee54584760f4529d168f6349f946482a4->leave($__internal_5b7f9042e2c552f00e9bf2f24bc6a51ee54584760f4529d168f6349f946482a4_prof);

        
        $__internal_fa861739851f84a3c5d340b38bb4f127d8e3a568a5060ee50bd90ec922d6ea42->leave($__internal_fa861739851f84a3c5d340b38bb4f127d8e3a568a5060ee50bd90ec922d6ea42_prof);

    }

    // line 5
    public function block_js_headers($context, array $blocks = array())
    {
        $__internal_2d2faa7e68eb49ad7c63a18e6c098f8e0ce69a4776ec881f11cc7c659b490721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2faa7e68eb49ad7c63a18e6c098f8e0ce69a4776ec881f11cc7c659b490721->enter($__internal_2d2faa7e68eb49ad7c63a18e6c098f8e0ce69a4776ec881f11cc7c659b490721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_headers"));

        $__internal_599866d2f85f69883399d5ce93603048b9afcf7dda3d7fc2504001175d27935a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599866d2f85f69883399d5ce93603048b9afcf7dda3d7fc2504001175d27935a->enter($__internal_599866d2f85f69883399d5ce93603048b9afcf7dda3d7fc2504001175d27935a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_headers"));

        
        $__internal_599866d2f85f69883399d5ce93603048b9afcf7dda3d7fc2504001175d27935a->leave($__internal_599866d2f85f69883399d5ce93603048b9afcf7dda3d7fc2504001175d27935a_prof);

        
        $__internal_2d2faa7e68eb49ad7c63a18e6c098f8e0ce69a4776ec881f11cc7c659b490721->leave($__internal_2d2faa7e68eb49ad7c63a18e6c098f8e0ce69a4776ec881f11cc7c659b490721_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_9aaf268283a7308ecf0f362b5d111691de15a594e68e81385adcdd2856a3743a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aaf268283a7308ecf0f362b5d111691de15a594e68e81385adcdd2856a3743a->enter($__internal_9aaf268283a7308ecf0f362b5d111691de15a594e68e81385adcdd2856a3743a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7f027609f40200d2490aecfedab718b9ae8f6c4a46fb4f2e903434c3153dac6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f027609f40200d2490aecfedab718b9ae8f6c4a46fb4f2e903434c3153dac6d->enter($__internal_7f027609f40200d2490aecfedab718b9ae8f6c4a46fb4f2e903434c3153dac6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "

    <section id=\"homePage\" class=\"main-container\">
      <!-- Container header -->
      <div class=\"home-header\">
        <div class=\"media\">
          <div class=\"media-left\">
            <a class=\"pull-left\" href=\"#\">
              <img class=\"media-object\" src=\"/assets/images/aic-logo.png\" alt=\"AIC-Group\"/>
            </a>
          </div>
          <div class=\"media-body\">
            <h4 class=\"media-heading\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("user.my_tools"), "html", null, true);
        echo "</h4>
          </div>
        </div>
      </div>
      <!-- Container body -->
      <div class=\"main-body container-fluid\">
        <div class=\"row main-menu\">
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["modules"]) ? $context["modules"] : $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 29
            echo "              ";
            if ($this->getAttribute($context["module"], "openIn", array())) {
                // line 30
                echo "                ";
                if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "vi")) {
                    // line 31
                    echo "                  ";
                    $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vi__RG__app_module", array("name" => $this->getAttribute($context["module"], "name", array())));
                    // line 32
                    echo "                ";
                } elseif (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "fr")) {
                    // line 33
                    echo "                  ";
                    $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fr__RG__app_module", array("name" => $this->getAttribute($context["module"], "name", array())));
                    // line 34
                    echo "                ";
                } else {
                    // line 35
                    echo "                  ";
                    $context["url"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("en__RG__app_module", array("name" => $this->getAttribute($context["module"], "name", array())));
                    // line 36
                    echo "                ";
                }
                // line 37
                echo "              ";
            } else {
                // line 38
                echo "                ";
                $context["url"] = $this->getAttribute($context["module"], "url", array());
                // line 39
                echo "                ";
                if ((!twig_in_filter("http://", (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))) && !twig_in_filter("https://", (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))))) {
                    // line 40
                    echo "                  ";
                    $context["url"] = ("http://" . (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
                    // line 41
                    echo "                ";
                }
                // line 42
                echo "              ";
            }
            // line 43
            echo "              <div class=\"col-md-2 col-sm-3 col-xs-4\">
                  <a class=\"menu-item\" href=\"";
            // line 44
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\" id=\"module-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\">
                    <i class=\"fa ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "icon", array()), "html", null, true);
            echo " fa-3x\"></i>
                    <span class=\"menu-label\">";
            // line 46
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["module"], "languageKey", array()))), "html", null, true);
            echo "</span>
                  </a>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </div>

        <!-- Social networks -->
        <div class=\"row social-networks\">
          <div class=\"col-md-4 col-sm-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                  <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-plagiarism-checker.htmlprimary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fa fa-bars\"></i>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li><a href=\"#\">Elgg</a></li>
                      <li><a href=\"#\">Youtube</a></li>
                      <li><a href=\"#\">Facebook</a></li>
                      <li><a href=\"#\">Twitter</a></li>
                      <li><a href=\"#\">Instagram</a></li>
                      <li><a href=\"#\">LinkedIn</a></li>
                    </ul>
                  </div>
                  <div>
                    <div class=\"fb-page\" data-href=\"https://www.facebook.com/EMNormandie/\" data-tabs=\"timeline\" data-width=\"500px\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"true\" data-show-facepile=\"false\">
                      <blockquote cite=\"https://www.facebook.com/EMNormandie/\" class=\"fb-xfbml-parse-ignore\">
                        <a href=\"https://www.facebook.com/EMNormandie/\">EM Normandie</a>
                      </blockquote>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                  <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fa fa-bars\"></i>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li><a href=\"#\">Elgg</a></li>
                      <li><a href=\"#\">Youtube</a></li>
                      <li><a href=\"#\">Facebook</a></li>
                      <li><a href=\"#\">Twitter</a></li>
                      <li><a href=\"#\">Instagram</a></li>
                      <li><a href=\"#\">LinkedIn</a></li>
                    </ul>
                  </div>
                  <div class=\"social-cover\">
                    <a class=\"twitter-timeline\" data-width=\"100%\" data-height=\"492\" href=\"https://twitter.com/EMNormandie\">Tweets by EMNormandie</a>
                  </div>
                </div>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                  <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fa fa-bars\"></i>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li><a href=\"#\">Elgg</a></li>
                      <li><a href=\"#\">Youtube</a></li>
                      <li><a href=\"#\">Facebook</a></li>
                      <li><a href=\"#\">Twitter</a></li>
                      <li><a href=\"#\">Instagram</a></li>
                      <li><a href=\"#\">LinkedIn</a></li>
                    </ul>
                  </div>
                  <div class=\"social-cover\">
                    <iframe src='https://www.displaysocialmedia.com/app/embed/index.php?embed_id=2341' frameborder='0' width='100%' height='495'></iframe>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class=\"text-center\">
        <p>&copy; MooKeen by EM Normandie</p>
      </div>
    </footer>
    <div id=\"fb-root\"></div>
";
        
        $__internal_7f027609f40200d2490aecfedab718b9ae8f6c4a46fb4f2e903434c3153dac6d->leave($__internal_7f027609f40200d2490aecfedab718b9ae8f6c4a46fb4f2e903434c3153dac6d_prof);

        
        $__internal_9aaf268283a7308ecf0f362b5d111691de15a594e68e81385adcdd2856a3743a->leave($__internal_9aaf268283a7308ecf0f362b5d111691de15a594e68e81385adcdd2856a3743a_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d7a5a43d2b3060484fe6abfbb7565c9fb9650bd038ed1104b04a2175905ef92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d7a5a43d2b3060484fe6abfbb7565c9fb9650bd038ed1104b04a2175905ef92->enter($__internal_2d7a5a43d2b3060484fe6abfbb7565c9fb9650bd038ed1104b04a2175905ef92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6aac3bd54a95bd3f7784a703efda56c356eef983ab15c9cc2d7e062f63251962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aac3bd54a95bd3f7784a703efda56c356eef983ab15c9cc2d7e062f63251962->enter($__internal_6aac3bd54a95bd3f7784a703efda56c356eef983ab15c9cc2d7e062f63251962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap JavaScript -->
    <script src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/main.js"), "html", null, true);
        echo "\"></script>
    <!-- Social networks -->
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = \"//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=290338634401427\";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
    <script>
    \$('#language-box').on('change', function(ev) {
      var value = \$('#language-box :selected').val();
      if (value != 'en') {
        location.href = '/' + value;
      } else {
        location.href = '/';
      }
    });
    </script>
";
        
        $__internal_6aac3bd54a95bd3f7784a703efda56c356eef983ab15c9cc2d7e062f63251962->leave($__internal_6aac3bd54a95bd3f7784a703efda56c356eef983ab15c9cc2d7e062f63251962_prof);

        
        $__internal_2d7a5a43d2b3060484fe6abfbb7565c9fb9650bd038ed1104b04a2175905ef92->leave($__internal_2d7a5a43d2b3060484fe6abfbb7565c9fb9650bd038ed1104b04a2175905ef92_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 140,  290 => 139,  285 => 137,  282 => 136,  273 => 135,  179 => 50,  169 => 46,  165 => 45,  159 => 44,  156 => 43,  153 => 42,  150 => 41,  147 => 40,  144 => 39,  141 => 38,  138 => 37,  135 => 36,  132 => 35,  129 => 34,  126 => 33,  123 => 32,  120 => 31,  117 => 30,  114 => 29,  110 => 28,  100 => 21,  86 => 9,  77 => 8,  60 => 5,  43 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'mookeen.layout.html.twig' %}

{% block stylesheets %}
{% endblock stylesheets %}
{% block js_headers %}
{% endblock js_headers %}

{% block content %}


    <section id=\"homePage\" class=\"main-container\">
      <!-- Container header -->
      <div class=\"home-header\">
        <div class=\"media\">
          <div class=\"media-left\">
            <a class=\"pull-left\" href=\"#\">
              <img class=\"media-object\" src=\"/assets/images/aic-logo.png\" alt=\"AIC-Group\"/>
            </a>
          </div>
          <div class=\"media-body\">
            <h4 class=\"media-heading\">{{ 'user.my_tools' | trans }}</h4>
          </div>
        </div>
      </div>
      <!-- Container body -->
      <div class=\"main-body container-fluid\">
        <div class=\"row main-menu\">
            {% for module in modules %}
              {% if module.openIn %}
                {% if locale == 'vi' %}
                  {% set url = path('vi__RG__app_module', {'name':module.name}) %}
                {% elseif locale == 'fr' %}
                  {% set url = path('fr__RG__app_module', {'name':module.name}) %}
                {% else  %}
                  {% set url = path('en__RG__app_module', {'name':module.name}) %}
                {% endif %}
              {% else %}
                {% set url = module.url %}
                {% if 'http://' not in url and 'https://' not in url %}
                  {% set  url = 'http://' ~ url %}
                {% endif %}
              {% endif %}
              <div class=\"col-md-2 col-sm-3 col-xs-4\">
                  <a class=\"menu-item\" href=\"{{ url }}\" id=\"module-{{ module.id }}\">
                    <i class=\"fa {{ module.icon }} fa-3x\"></i>
                    <span class=\"menu-label\">{{ module.languageKey | trans | capitalize }}</span>
                  </a>
              </div>
            {% endfor %}
        </div>

        <!-- Social networks -->
        <div class=\"row social-networks\">
          <div class=\"col-md-4 col-sm-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                  <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-plagiarism-checker.htmlprimary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fa fa-bars\"></i>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li><a href=\"#\">Elgg</a></li>
                      <li><a href=\"#\">Youtube</a></li>
                      <li><a href=\"#\">Facebook</a></li>
                      <li><a href=\"#\">Twitter</a></li>
                      <li><a href=\"#\">Instagram</a></li>
                      <li><a href=\"#\">LinkedIn</a></li>
                    </ul>
                  </div>
                  <div>
                    <div class=\"fb-page\" data-href=\"https://www.facebook.com/EMNormandie/\" data-tabs=\"timeline\" data-width=\"500px\" data-small-header=\"false\" data-adapt-container-width=\"true\" data-hide-cover=\"true\" data-show-facepile=\"false\">
                      <blockquote cite=\"https://www.facebook.com/EMNormandie/\" class=\"fb-xfbml-parse-ignore\">
                        <a href=\"https://www.facebook.com/EMNormandie/\">EM Normandie</a>
                      </blockquote>
                    </div>
                  </div>
                </div>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                  <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fa fa-bars\"></i>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li><a href=\"#\">Elgg</a></li>
                      <li><a href=\"#\">Youtube</a></li>
                      <li><a href=\"#\">Facebook</a></li>
                      <li><a href=\"#\">Twitter</a></li>
                      <li><a href=\"#\">Instagram</a></li>
                      <li><a href=\"#\">LinkedIn</a></li>
                    </ul>
                  </div>
                  <div class=\"social-cover\">
                    <a class=\"twitter-timeline\" data-width=\"100%\" data-height=\"492\" href=\"https://twitter.com/EMNormandie\">Tweets by EMNormandie</a>
                  </div>
                </div>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-12\">
            <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                  <div class=\"btn-group\">
                    <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                      <i class=\"fa fa-bars\"></i>
                    </button>
                    <ul class=\"dropdown-menu dropdown-menu-right\">
                      <li><a href=\"#\">Elgg</a></li>
                      <li><a href=\"#\">Youtube</a></li>
                      <li><a href=\"#\">Facebook</a></li>
                      <li><a href=\"#\">Twitter</a></li>
                      <li><a href=\"#\">Instagram</a></li>
                      <li><a href=\"#\">LinkedIn</a></li>
                    </ul>
                  </div>
                  <div class=\"social-cover\">
                    <iframe src='https://www.displaysocialmedia.com/app/embed/index.php?embed_id=2341' frameborder='0' width='100%' height='495'></iframe>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer>
      <div class=\"text-center\">
        <p>&copy; MooKeen by EM Normandie</p>
      </div>
    </footer>
    <div id=\"fb-root\"></div>
{% endblock content %}
{% block javascripts %}
    <!-- jQuery -->
    <script src=\"{{ asset('/assets/js/jquery.js') }}\"></script>
    <!-- Bootstrap JavaScript -->
    <script src=\"{{ asset('/assets/vendor/bootstrap/js/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('/assets/js/main.js') }}\"></script>
    <!-- Social networks -->
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = \"//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=290338634401427\";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
    <script>
    \$('#language-box').on('change', function(ev) {
      var value = \$('#language-box :selected').val();
      if (value != 'en') {
        location.href = '/' + value;
      } else {
        location.href = '/';
      }
    });
    </script>
{% endblock javascripts %}", "default/index.html.twig", "/home/huybinh/public_html/git/mookeen/app/Resources/views/default/index.html.twig");
    }
}
