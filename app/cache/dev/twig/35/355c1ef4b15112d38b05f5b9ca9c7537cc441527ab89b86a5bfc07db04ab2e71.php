<?php

/* ::layout/layoutAdmin.html.twig */
class __TwigTemplate_10cbd9cf727f2bd04d26e4957559aba24994f8afa1dc3ba297b36500f76f199f extends Twig_Template
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
        $__internal_13b8e58ed203394b6e7870962fee0705acbe0c1f5c4e73850da6ba370cbe4d11 = $this->env->getExtension("native_profiler");
        $__internal_13b8e58ed203394b6e7870962fee0705acbe0c1f5c4e73850da6ba370cbe4d11->enter($__internal_13b8e58ed203394b6e7870962fee0705acbe0c1f5c4e73850da6ba370cbe4d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/layoutAdmin.html.twig"));

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
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
                </div>
            </div>
        </div>

        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 31
        $this->loadTemplate("::layout/navigationAdmin.html.twig", "::layout/layoutAdmin.html.twig", 31)->display($context);
        // line 32
        echo "                <div class=\"span9\">
                    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "                </div>
            </div>
        </div>
            
<hr />
<footer id=\"footer\" class=\"vspace20\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"span4 offset1\">
                <h4>Informations</h4>
                <ul class=\"nav nav-stacked\">
                    ";
        // line 45
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("PagesBundle:Pages:menu"), array());
        // line 46
        echo "                </ul>
            </div>

            <div class=\"span4\">
                <h4>Notre entrepôt</h4>
                <p><i class=\"icon-map-marker\"></i>&nbsp;";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["adresse"]) ? $context["adresse"] : $this->getContext($context, "adresse")), "html", null, true);
        echo "</p>
            </div>

            <div class=\"span2\">
                <h4>Nous contacter</h4>
                <p><i class=\"icon-phone\"></i>&nbsp;Tel: ";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["telephone"]) ? $context["telephone"] : $this->getContext($context, "telephone")), "html", null, true);
        echo "</p>
                <p><i class=\"icon-print\"></i>&nbsp;Email: ";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</p>  
            </div>
        </div>

        <div class=\"row\">
            <div class=\"span4\">
                <p>&copy; Copyright ";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - veloCOmotion</p>
            </div>
        </div>
    </div>
</footer>
<script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
";
        // line 70
        $this->displayBlock('javascripts', $context, $blocks);
        // line 71
        echo "</body>
</html>";
        
        $__internal_13b8e58ed203394b6e7870962fee0705acbe0c1f5c4e73850da6ba370cbe4d11->leave($__internal_13b8e58ed203394b6e7870962fee0705acbe0c1f5c4e73850da6ba370cbe4d11_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_a06619fa5c4902c52b97f0fc213a283872449ca2f7dd82a243273e6b465ff35a = $this->env->getExtension("native_profiler");
        $__internal_a06619fa5c4902c52b97f0fc213a283872449ca2f7dd82a243273e6b465ff35a->enter($__internal_a06619fa5c4902c52b97f0fc213a283872449ca2f7dd82a243273e6b465ff35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "veloCOmotion";
        
        $__internal_a06619fa5c4902c52b97f0fc213a283872449ca2f7dd82a243273e6b465ff35a->leave($__internal_a06619fa5c4902c52b97f0fc213a283872449ca2f7dd82a243273e6b465ff35a_prof);

    }

    // line 6
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_8c64c68f82baddc51b8331b61a9a9e2a16738bc78b1b00836ca858cdbb627dda = $this->env->getExtension("native_profiler");
        $__internal_8c64c68f82baddc51b8331b61a9a9e2a16738bc78b1b00836ca858cdbb627dda->enter($__internal_8c64c68f82baddc51b8331b61a9a9e2a16738bc78b1b00836ca858cdbb627dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_8c64c68f82baddc51b8331b61a9a9e2a16738bc78b1b00836ca858cdbb627dda->leave($__internal_8c64c68f82baddc51b8331b61a9a9e2a16738bc78b1b00836ca858cdbb627dda_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_41cce548c3c0241a171cb387db1c4a3822973be1fac1b975d23165fa5d270312 = $this->env->getExtension("native_profiler");
        $__internal_41cce548c3c0241a171cb387db1c4a3822973be1fac1b975d23165fa5d270312->enter($__internal_41cce548c3c0241a171cb387db1c4a3822973be1fac1b975d23165fa5d270312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
        $__internal_41cce548c3c0241a171cb387db1c4a3822973be1fac1b975d23165fa5d270312->leave($__internal_41cce548c3c0241a171cb387db1c4a3822973be1fac1b975d23165fa5d270312_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_509e587c17e5dcff9c799bafb04a4d82c62f9c28362a610e8f633eb60af00ab6 = $this->env->getExtension("native_profiler");
        $__internal_509e587c17e5dcff9c799bafb04a4d82c62f9c28362a610e8f633eb60af00ab6->enter($__internal_509e587c17e5dcff9c799bafb04a4d82c62f9c28362a610e8f633eb60af00ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_509e587c17e5dcff9c799bafb04a4d82c62f9c28362a610e8f633eb60af00ab6->leave($__internal_509e587c17e5dcff9c799bafb04a4d82c62f9c28362a610e8f633eb60af00ab6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_651a562bd28139e3341447534cf69310a5bc4ea3313524d5bec77ff092cdb8a6 = $this->env->getExtension("native_profiler");
        $__internal_651a562bd28139e3341447534cf69310a5bc4ea3313524d5bec77ff092cdb8a6->enter($__internal_651a562bd28139e3341447534cf69310a5bc4ea3313524d5bec77ff092cdb8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_651a562bd28139e3341447534cf69310a5bc4ea3313524d5bec77ff092cdb8a6->leave($__internal_651a562bd28139e3341447534cf69310a5bc4ea3313524d5bec77ff092cdb8a6_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f5681093ded2879116abe5125128097543dc7c545abf004838c1a8dcbf91cd5 = $this->env->getExtension("native_profiler");
        $__internal_0f5681093ded2879116abe5125128097543dc7c545abf004838c1a8dcbf91cd5->enter($__internal_0f5681093ded2879116abe5125128097543dc7c545abf004838c1a8dcbf91cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0f5681093ded2879116abe5125128097543dc7c545abf004838c1a8dcbf91cd5->leave($__internal_0f5681093ded2879116abe5125128097543dc7c545abf004838c1a8dcbf91cd5_prof);

    }

    public function getTemplateName()
    {
        return "::layout/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 70,  210 => 33,  199 => 12,  188 => 7,  177 => 6,  165 => 5,  157 => 71,  155 => 70,  151 => 69,  147 => 68,  139 => 63,  130 => 57,  126 => 56,  118 => 51,  111 => 46,  109 => 45,  96 => 34,  94 => 33,  91 => 32,  89 => 31,  79 => 24,  64 => 13,  62 => 12,  58 => 11,  54 => 10,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block titre %}veloCOmotion{% endblock %}</title>*/
/*         <meta name="keywords" content="{% block motsCles %}{% endblock %}" />*/
/*         <meta name="description" content="{% block description %}{% endblock %}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-responsive.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/style.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <div class="navbar navbar-inverse navbar-fixed-top">*/
/*             <div class="navbar-inner">*/
/*                 <div class="container">*/
/*                     <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="brand" href="{{  path('velos') }}">veloCOmotion</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 {% include '::layout/navigationAdmin.html.twig' %}*/
/*                 <div class="span9">*/
/*                     {% block body %}{% endblock %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*             */
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
