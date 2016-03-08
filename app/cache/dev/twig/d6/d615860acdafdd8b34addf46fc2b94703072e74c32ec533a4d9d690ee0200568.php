<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_5db98d54168345922491c85248f6513e3fab83596bc17cc8af14bb3fcb5f60bb extends Twig_Template
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
        $__internal_4f26f0d5153dfb78e8e7cadfe1f97357ab4e8c4ac0b5a3f869adc851f3f5f76b = $this->env->getExtension("native_profiler");
        $__internal_4f26f0d5153dfb78e8e7cadfe1f97357ab4e8c4ac0b5a3f869adc851f3f5f76b->enter($__internal_4f26f0d5153dfb78e8e7cadfe1f97357ab4e8c4ac0b5a3f869adc851f3f5f76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layout.html.twig"));

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
        
        $__internal_4f26f0d5153dfb78e8e7cadfe1f97357ab4e8c4ac0b5a3f869adc851f3f5f76b->leave($__internal_4f26f0d5153dfb78e8e7cadfe1f97357ab4e8c4ac0b5a3f869adc851f3f5f76b_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_12e9fc04eef08c38daf1875442930386f5f3f9d78c4d740cd013dc91f725b445 = $this->env->getExtension("native_profiler");
        $__internal_12e9fc04eef08c38daf1875442930386f5f3f9d78c4d740cd013dc91f725b445->enter($__internal_12e9fc04eef08c38daf1875442930386f5f3f9d78c4d740cd013dc91f725b445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "veloCOmotion";
        
        $__internal_12e9fc04eef08c38daf1875442930386f5f3f9d78c4d740cd013dc91f725b445->leave($__internal_12e9fc04eef08c38daf1875442930386f5f3f9d78c4d740cd013dc91f725b445_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_693d4aa0f78292a40a5b5a4dd4383b5e0da2f79498dbc6f8946441918b96dcba = $this->env->getExtension("native_profiler");
        $__internal_693d4aa0f78292a40a5b5a4dd4383b5e0da2f79498dbc6f8946441918b96dcba->enter($__internal_693d4aa0f78292a40a5b5a4dd4383b5e0da2f79498dbc6f8946441918b96dcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_693d4aa0f78292a40a5b5a4dd4383b5e0da2f79498dbc6f8946441918b96dcba->leave($__internal_693d4aa0f78292a40a5b5a4dd4383b5e0da2f79498dbc6f8946441918b96dcba_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_69ef7c45b9ef5b876d2fef9d442bab3e2190bb6bf3907c63b91b65c904c19180 = $this->env->getExtension("native_profiler");
        $__internal_69ef7c45b9ef5b876d2fef9d442bab3e2190bb6bf3907c63b91b65c904c19180->enter($__internal_69ef7c45b9ef5b876d2fef9d442bab3e2190bb6bf3907c63b91b65c904c19180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_69ef7c45b9ef5b876d2fef9d442bab3e2190bb6bf3907c63b91b65c904c19180->leave($__internal_69ef7c45b9ef5b876d2fef9d442bab3e2190bb6bf3907c63b91b65c904c19180_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d5603ba729d9a9ad6112e7fbef37c8678df0f5e37dca1a201c91ea2ff95cc157 = $this->env->getExtension("native_profiler");
        $__internal_d5603ba729d9a9ad6112e7fbef37c8678df0f5e37dca1a201c91ea2ff95cc157->enter($__internal_d5603ba729d9a9ad6112e7fbef37c8678df0f5e37dca1a201c91ea2ff95cc157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d5603ba729d9a9ad6112e7fbef37c8678df0f5e37dca1a201c91ea2ff95cc157->leave($__internal_d5603ba729d9a9ad6112e7fbef37c8678df0f5e37dca1a201c91ea2ff95cc157_prof);

    }

    // line 31
    public function block_body($context, array $blocks = array())
    {
        $__internal_2116dce8b8b3d74a79fa7744175e95eb65a48cd5358a909a834a07e75dad6983 = $this->env->getExtension("native_profiler");
        $__internal_2116dce8b8b3d74a79fa7744175e95eb65a48cd5358a909a834a07e75dad6983->enter($__internal_2116dce8b8b3d74a79fa7744175e95eb65a48cd5358a909a834a07e75dad6983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2116dce8b8b3d74a79fa7744175e95eb65a48cd5358a909a834a07e75dad6983->leave($__internal_2116dce8b8b3d74a79fa7744175e95eb65a48cd5358a909a834a07e75dad6983_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_49164881d71c8b7cd408087c27455dd25f5666b4f5f5209cc0c6b0e544efc7e8 = $this->env->getExtension("native_profiler");
        $__internal_49164881d71c8b7cd408087c27455dd25f5666b4f5f5209cc0c6b0e544efc7e8->enter($__internal_49164881d71c8b7cd408087c27455dd25f5666b4f5f5209cc0c6b0e544efc7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_49164881d71c8b7cd408087c27455dd25f5666b4f5f5209cc0c6b0e544efc7e8->leave($__internal_49164881d71c8b7cd408087c27455dd25f5666b4f5f5209cc0c6b0e544efc7e8_prof);

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
