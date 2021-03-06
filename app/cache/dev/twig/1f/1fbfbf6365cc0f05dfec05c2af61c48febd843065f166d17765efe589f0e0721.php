<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_9a535842f0894a514c2db24c34a5d6057634c282be647572c6946271775df97d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98bf29a55c79c05592e6282e0bc6059364223cc29b5bc1d2fabc79debb6caa6f = $this->env->getExtension("native_profiler");
        $__internal_98bf29a55c79c05592e6282e0bc6059364223cc29b5bc1d2fabc79debb6caa6f->enter($__internal_98bf29a55c79c05592e6282e0bc6059364223cc29b5bc1d2fabc79debb6caa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
    <meta name=\"keywords\" content=\"";
        // line 6
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\" />
    <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            <button class=\"btn btn-navbar\" data-target=\".nav-collapse\" data-toggle=\"collapse\" type=\"button\">
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("velos");
        echo "\">veloCOmotion</a>
            <div class=\"nav-collapse collapse\">
                ";
        // line 26
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Velos:recherche"), array());
        // line 27
        echo "            </div>
        </div>
    </div>
</div>
";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "<hr />
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    ";
        // line 39
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menu"), array());
        // line 40
        echo "                </ul>
            </div>

            <div class=\"span4\">
                <h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                <p><i class=\"icon-print\"></i>&nbsp;Email: ";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</p>  
            </div>
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright ";
        // line 57
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - veloCOmotion</p>
            </div>
        </div>
    </div>
</footer>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 65
        echo "</body>
</html>
";
        
        $__internal_98bf29a55c79c05592e6282e0bc6059364223cc29b5bc1d2fabc79debb6caa6f->leave($__internal_98bf29a55c79c05592e6282e0bc6059364223cc29b5bc1d2fabc79debb6caa6f_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_fd1434eb0243a1f89a360dd2c8445851a334cde59cae98cecf1dee6844115c3a = $this->env->getExtension("native_profiler");
        $__internal_fd1434eb0243a1f89a360dd2c8445851a334cde59cae98cecf1dee6844115c3a->enter($__internal_fd1434eb0243a1f89a360dd2c8445851a334cde59cae98cecf1dee6844115c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "veloCOmotion";
        
        $__internal_fd1434eb0243a1f89a360dd2c8445851a334cde59cae98cecf1dee6844115c3a->leave($__internal_fd1434eb0243a1f89a360dd2c8445851a334cde59cae98cecf1dee6844115c3a_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_25df9971c9d72acea087d21542424931cd575ae618867d3da2fa68f063a8a337 = $this->env->getExtension("native_profiler");
        $__internal_25df9971c9d72acea087d21542424931cd575ae618867d3da2fa68f063a8a337->enter($__internal_25df9971c9d72acea087d21542424931cd575ae618867d3da2fa68f063a8a337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_25df9971c9d72acea087d21542424931cd575ae618867d3da2fa68f063a8a337->leave($__internal_25df9971c9d72acea087d21542424931cd575ae618867d3da2fa68f063a8a337_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_e52663b39c8893b71e5a224adb8034c6af601a7a80691dba22fbd2af9541191c = $this->env->getExtension("native_profiler");
        $__internal_e52663b39c8893b71e5a224adb8034c6af601a7a80691dba22fbd2af9541191c->enter($__internal_e52663b39c8893b71e5a224adb8034c6af601a7a80691dba22fbd2af9541191c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_e52663b39c8893b71e5a224adb8034c6af601a7a80691dba22fbd2af9541191c->leave($__internal_e52663b39c8893b71e5a224adb8034c6af601a7a80691dba22fbd2af9541191c_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4145620611b43e6da7758716397ca9e470cb9839eba876c5509df011461563eb = $this->env->getExtension("native_profiler");
        $__internal_4145620611b43e6da7758716397ca9e470cb9839eba876c5509df011461563eb->enter($__internal_4145620611b43e6da7758716397ca9e470cb9839eba876c5509df011461563eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4145620611b43e6da7758716397ca9e470cb9839eba876c5509df011461563eb->leave($__internal_4145620611b43e6da7758716397ca9e470cb9839eba876c5509df011461563eb_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_7da3a86e1f7309a706c802dbb4bb31c3173ed0368284d10e42fb979be23a0f8a = $this->env->getExtension("native_profiler");
        $__internal_7da3a86e1f7309a706c802dbb4bb31c3173ed0368284d10e42fb979be23a0f8a->enter($__internal_7da3a86e1f7309a706c802dbb4bb31c3173ed0368284d10e42fb979be23a0f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7da3a86e1f7309a706c802dbb4bb31c3173ed0368284d10e42fb979be23a0f8a->leave($__internal_7da3a86e1f7309a706c802dbb4bb31c3173ed0368284d10e42fb979be23a0f8a_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_12663f18135172610e728a1f24a8aa7dd16fddd895f29f23f5d0218234894632 = $this->env->getExtension("native_profiler");
        $__internal_12663f18135172610e728a1f24a8aa7dd16fddd895f29f23f5d0218234894632->enter($__internal_12663f18135172610e728a1f24a8aa7dd16fddd895f29f23f5d0218234894632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_12663f18135172610e728a1f24a8aa7dd16fddd895f29f23f5d0218234894632->leave($__internal_12663f18135172610e728a1f24a8aa7dd16fddd895f29f23f5d0218234894632_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 64,  205 => 31,  194 => 12,  183 => 7,  172 => 6,  160 => 5,  151 => 65,  149 => 64,  145 => 63,  141 => 62,  133 => 57,  124 => 51,  120 => 50,  112 => 45,  105 => 40,  103 => 39,  94 => 32,  92 => 31,  86 => 27,  84 => 26,  79 => 24,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block titre %}veloCOmotion{% endblock %}</title>*/
/*     <meta name="keywords" content="{% block motsCles %}{% endblock %}" />*/
/*     <meta name="description" content="{% block description %}{% endblock %}" />*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* <div class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="navbar-inner">*/
/*         <div class="container">*/
/*             <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="brand" href="{{ path('velos') }}">veloCOmotion</a>*/
/*             <div class="nav-collapse collapse">*/
/*                 {% render(controller('EcommerceBundle:Velos:recherche')) %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% block body %}{% endblock %}*/
/* <hr />*/
/* <footer id="footer" class="vspace20">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="span4 offset1">*/
/*                 <h4>Informations</h4>*/
/*                 <ul class="nav nav-stacked">*/
/*                     {% render (controller('PagesBundle:Pages:menu')) %}*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="span4">*/
/*                 <h4>Notre entrepôt</h4>*/
/*                 <p><i class="icon-map-marker"></i>&nbsp;{{ adresse }}</p>*/
/*             </div>*/
/* */
/*             <div class="span2">*/
/*                 <h4>Nous contacter</h4>*/
/*                 <p><i class="icon-phone"></i>&nbsp;Tel: {{ telephone }}</p>*/
/*                 <p><i class="icon-print"></i>&nbsp;Email: {{ email }}</p>  */
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="span4">*/
/*                 <p>&copy; Copyright {{ "now"|date('Y') }} - veloCOmotion</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </footer>*/
/* <script src="{{ asset('js/jquery-1.10.0.min.js') }}"></script>*/
/* <script src="{{ asset('js/bootstrap.js') }}"></script>*/
/* {% block javascripts %}{% endblock %}*/
/* </body>*/
/* </html>*/
/* */
