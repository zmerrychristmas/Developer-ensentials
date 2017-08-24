<?php

/* default/module.html.twig */
class __TwigTemplate_4ae184dbb122f86223361cb773ff700c41a5213ad2e9059f045506fbb35251e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("mookeen.layout.html.twig", "default/module.html.twig", 1);
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
        $__internal_a314a1c6280cf11f46e826c44d00c524ebc29521ebe9ee0856b6caf97afc0a2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a314a1c6280cf11f46e826c44d00c524ebc29521ebe9ee0856b6caf97afc0a2c->enter($__internal_a314a1c6280cf11f46e826c44d00c524ebc29521ebe9ee0856b6caf97afc0a2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/module.html.twig"));

        $__internal_02d14fbcc1247908d6c06dd46978d394f7e4afa8de360c47d79a6b2cdfd08ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02d14fbcc1247908d6c06dd46978d394f7e4afa8de360c47d79a6b2cdfd08ca1->enter($__internal_02d14fbcc1247908d6c06dd46978d394f7e4afa8de360c47d79a6b2cdfd08ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/module.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a314a1c6280cf11f46e826c44d00c524ebc29521ebe9ee0856b6caf97afc0a2c->leave($__internal_a314a1c6280cf11f46e826c44d00c524ebc29521ebe9ee0856b6caf97afc0a2c_prof);

        
        $__internal_02d14fbcc1247908d6c06dd46978d394f7e4afa8de360c47d79a6b2cdfd08ca1->leave($__internal_02d14fbcc1247908d6c06dd46978d394f7e4afa8de360c47d79a6b2cdfd08ca1_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60c5ff7797c6db6c5511f5109b8c3837ceb5795b59028926f61d99eb722e05f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c5ff7797c6db6c5511f5109b8c3837ceb5795b59028926f61d99eb722e05f5->enter($__internal_60c5ff7797c6db6c5511f5109b8c3837ceb5795b59028926f61d99eb722e05f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_33589c46161f8c6cef45a7f4d8cc28510529ef197366412d7075899b2fe793eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33589c46161f8c6cef45a7f4d8cc28510529ef197366412d7075899b2fe793eb->enter($__internal_33589c46161f8c6cef45a7f4d8cc28510529ef197366412d7075899b2fe793eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/css/module.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_33589c46161f8c6cef45a7f4d8cc28510529ef197366412d7075899b2fe793eb->leave($__internal_33589c46161f8c6cef45a7f4d8cc28510529ef197366412d7075899b2fe793eb_prof);

        
        $__internal_60c5ff7797c6db6c5511f5109b8c3837ceb5795b59028926f61d99eb722e05f5->leave($__internal_60c5ff7797c6db6c5511f5109b8c3837ceb5795b59028926f61d99eb722e05f5_prof);

    }

    // line 6
    public function block_js_headers($context, array $blocks = array())
    {
        $__internal_614e690acf09a3fa9d26d92b9b7cc4ee6edc7c34e5bec6997dff670214e07b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_614e690acf09a3fa9d26d92b9b7cc4ee6edc7c34e5bec6997dff670214e07b04->enter($__internal_614e690acf09a3fa9d26d92b9b7cc4ee6edc7c34e5bec6997dff670214e07b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_headers"));

        $__internal_e90b901055dfc497841f8b695bf9248784c69795025a817a70df924aaea0776f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e90b901055dfc497841f8b695bf9248784c69795025a817a70df924aaea0776f->enter($__internal_e90b901055dfc497841f8b695bf9248784c69795025a817a70df924aaea0776f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js_headers"));

        
        $__internal_e90b901055dfc497841f8b695bf9248784c69795025a817a70df924aaea0776f->leave($__internal_e90b901055dfc497841f8b695bf9248784c69795025a817a70df924aaea0776f_prof);

        
        $__internal_614e690acf09a3fa9d26d92b9b7cc4ee6edc7c34e5bec6997dff670214e07b04->leave($__internal_614e690acf09a3fa9d26d92b9b7cc4ee6edc7c34e5bec6997dff670214e07b04_prof);

    }

    // line 9
    public function block_content($context, array $blocks = array())
    {
        $__internal_7f32a5c4997c55bff18f87e2ec583e6d996b3d38b58a85c1e2fda8408bc8c47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f32a5c4997c55bff18f87e2ec583e6d996b3d38b58a85c1e2fda8408bc8c47e->enter($__internal_7f32a5c4997c55bff18f87e2ec583e6d996b3d38b58a85c1e2fda8408bc8c47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_998396b00dbaa739afe7f308025ba71c2e7769e4d6da5d9070f8ea066d0072f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_998396b00dbaa739afe7f308025ba71c2e7769e4d6da5d9070f8ea066d0072f3->enter($__internal_998396b00dbaa739afe7f308025ba71c2e7769e4d6da5d9070f8ea066d0072f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 10
        echo "    ";
        $context["url"] = "";
        // line 11
        echo "    ";
        if ((twig_in_filter("http://", $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "url", array())) || twig_in_filter("https://", $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "url", array())))) {
            // line 12
            echo "    ";
            $context["url"] = $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "url", array());
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["url"] = ("http://" . $this->getAttribute((isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")), "url", array()));
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <section id=\"homePage\" class=\"main-container\">
      <!-- Container header -->
      <iframe src=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\" id=\"iframeModule\"></iframe>
    </section>

    <footer class=\"footer\">
      <div class=\"text-center\">
        <p>&copy; MooKeen by EM Normandie</p>
      </div>
    </footer>
    <div id=\"fb-root\"></div>
";
        
        $__internal_998396b00dbaa739afe7f308025ba71c2e7769e4d6da5d9070f8ea066d0072f3->leave($__internal_998396b00dbaa739afe7f308025ba71c2e7769e4d6da5d9070f8ea066d0072f3_prof);

        
        $__internal_7f32a5c4997c55bff18f87e2ec583e6d996b3d38b58a85c1e2fda8408bc8c47e->leave($__internal_7f32a5c4997c55bff18f87e2ec583e6d996b3d38b58a85c1e2fda8408bc8c47e_prof);

    }

    // line 28
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fcfce6367b6bb76bcc6e44e7bd179b0bbddd09961784b9a7bfaf2d37bace26ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcfce6367b6bb76bcc6e44e7bd179b0bbddd09961784b9a7bfaf2d37bace26ed->enter($__internal_fcfce6367b6bb76bcc6e44e7bd179b0bbddd09961784b9a7bfaf2d37bace26ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_457dfa18ec1e0b91c91c34fb65fcf0579ab41eb36bdc2bc7810c743085203aae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_457dfa18ec1e0b91c91c34fb65fcf0579ab41eb36bdc2bc7810c743085203aae->enter($__internal_457dfa18ec1e0b91c91c34fb65fcf0579ab41eb36bdc2bc7810c743085203aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 29
        echo "    <!-- jQuery -->
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/js/jquery.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap JavaScript -->
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/vendor/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
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
    \$(document).ready(function() {

    });
    </script>
";
        
        $__internal_457dfa18ec1e0b91c91c34fb65fcf0579ab41eb36bdc2bc7810c743085203aae->leave($__internal_457dfa18ec1e0b91c91c34fb65fcf0579ab41eb36bdc2bc7810c743085203aae_prof);

        
        $__internal_fcfce6367b6bb76bcc6e44e7bd179b0bbddd09961784b9a7bfaf2d37bace26ed->leave($__internal_fcfce6367b6bb76bcc6e44e7bd179b0bbddd09961784b9a7bfaf2d37bace26ed_prof);

    }

    public function getTemplateName()
    {
        return "default/module.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 33,  150 => 32,  145 => 30,  142 => 29,  133 => 28,  113 => 18,  109 => 16,  106 => 15,  103 => 14,  100 => 13,  97 => 12,  94 => 11,  91 => 10,  82 => 9,  65 => 6,  52 => 4,  43 => 3,  11 => 1,);
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
  <link href=\"{{ asset('/assets/css/module.css') }}\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock stylesheets %}
{% block js_headers %}
{% endblock js_headers %}

{% block content %}
    {% set url = '' %}
    {% if 'http://' in module.url or 'https://' in module.url %}
    {% set url = module.url %}
    {% else %}
      {% set url = \"http://#{module.url}\" %}
    {% endif %}
    <section id=\"homePage\" class=\"main-container\">
      <!-- Container header -->
      <iframe src=\"{{ url }}\" width=\"100%\" height=\"100%\" id=\"iframeModule\"></iframe>
    </section>

    <footer class=\"footer\">
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
    \$(document).ready(function() {

    });
    </script>
{% endblock javascripts %}", "default/module.html.twig", "/home/huybinh/public_html/git/mookeen/app/Resources/views/default/module.html.twig");
    }
}
