<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_a09488a10a7bc1a88b2c433475c7f087b28db1ae414e4927aa017af1d36892f5 extends Twig_Template
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
        $__internal_c34e2fbb304e87995740b4b0ebc4b68e7fdf9e90104eee90ef6742a6bdda1387 = $this->env->getExtension("native_profiler");
        $__internal_c34e2fbb304e87995740b4b0ebc4b68e7fdf9e90104eee90ef6742a6bdda1387->enter($__internal_c34e2fbb304e87995740b4b0ebc4b68e7fdf9e90104eee90ef6742a6bdda1387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
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
        // line 22
        echo $this->env->getExtension('routing')->getPath("velos");
        echo "\">veloCOmotion</a>
            <div class=\"nav-collapse collapse\">
                ";
        // line 24
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Velos:recherche"), array());
        // line 25
        echo "            </div>
        </div>
    </div>
</div>
";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "<hr />
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    ";
        // line 37
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menu"), array());
        // line 38
        echo "                </ul>
            </div>

            <div class=\"span4\">
                <h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                <p><i class=\"icon-print\"></i>&nbsp;Email: ";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</p>  
            </div>
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright ";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - veloCOmotion</p>
            </div>
        </div>
    </div>
</footer>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "</body>
</html>
";
        
        $__internal_c34e2fbb304e87995740b4b0ebc4b68e7fdf9e90104eee90ef6742a6bdda1387->leave($__internal_c34e2fbb304e87995740b4b0ebc4b68e7fdf9e90104eee90ef6742a6bdda1387_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3df72e695611f2bf85e42411e6dabd0640c5846b816edd6c0a489484c6cd5517 = $this->env->getExtension("native_profiler");
        $__internal_3df72e695611f2bf85e42411e6dabd0640c5846b816edd6c0a489484c6cd5517->enter($__internal_3df72e695611f2bf85e42411e6dabd0640c5846b816edd6c0a489484c6cd5517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "veloCOmotion bienvenue!";
        
        $__internal_3df72e695611f2bf85e42411e6dabd0640c5846b816edd6c0a489484c6cd5517->leave($__internal_3df72e695611f2bf85e42411e6dabd0640c5846b816edd6c0a489484c6cd5517_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b4f64961f7afa6df9fa62956583eb149f4decd8b5c0be3817ad7bf130ab9d522 = $this->env->getExtension("native_profiler");
        $__internal_b4f64961f7afa6df9fa62956583eb149f4decd8b5c0be3817ad7bf130ab9d522->enter($__internal_b4f64961f7afa6df9fa62956583eb149f4decd8b5c0be3817ad7bf130ab9d522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b4f64961f7afa6df9fa62956583eb149f4decd8b5c0be3817ad7bf130ab9d522->leave($__internal_b4f64961f7afa6df9fa62956583eb149f4decd8b5c0be3817ad7bf130ab9d522_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_4607d38ddfed3698bb00495850009eff3c153b17939f433b794157cf831bb9d3 = $this->env->getExtension("native_profiler");
        $__internal_4607d38ddfed3698bb00495850009eff3c153b17939f433b794157cf831bb9d3->enter($__internal_4607d38ddfed3698bb00495850009eff3c153b17939f433b794157cf831bb9d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4607d38ddfed3698bb00495850009eff3c153b17939f433b794157cf831bb9d3->leave($__internal_4607d38ddfed3698bb00495850009eff3c153b17939f433b794157cf831bb9d3_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9bd0e1bff4f1a5b048146b3e806c60be5e005664bca08f3a3fac8a241b9f78d5 = $this->env->getExtension("native_profiler");
        $__internal_9bd0e1bff4f1a5b048146b3e806c60be5e005664bca08f3a3fac8a241b9f78d5->enter($__internal_9bd0e1bff4f1a5b048146b3e806c60be5e005664bca08f3a3fac8a241b9f78d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9bd0e1bff4f1a5b048146b3e806c60be5e005664bca08f3a3fac8a241b9f78d5->leave($__internal_9bd0e1bff4f1a5b048146b3e806c60be5e005664bca08f3a3fac8a241b9f78d5_prof);

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
        return array (  184 => 62,  173 => 29,  162 => 10,  150 => 5,  141 => 63,  139 => 62,  135 => 61,  131 => 60,  123 => 55,  114 => 49,  110 => 48,  102 => 43,  95 => 38,  93 => 37,  84 => 30,  82 => 29,  76 => 25,  74 => 24,  69 => 22,  54 => 11,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="UTF-8" />*/
/*     <title>{% block title %}veloCOmotion bienvenue!{% endblock %}</title>*/
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
