<?php

/* EcommerceBundle:Default:velos/layout/presentation.html.twig */
class __TwigTemplate_e7d5274829ae891ffa08ca7b68210b05e71ae00d71086c37d2c372eb5691d3c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:velos/layout/presentation.html.twig", 2);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6974271e50b6e733e3688f7b6c8d80e47b14acecb5d0ccd929f3f9aeb8167ee4 = $this->env->getExtension("native_profiler");
        $__internal_6974271e50b6e733e3688f7b6c8d80e47b14acecb5d0ccd929f3f9aeb8167ee4->enter($__internal_6974271e50b6e733e3688f7b6c8d80e47b14acecb5d0ccd929f3f9aeb8167ee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:velos/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6974271e50b6e733e3688f7b6c8d80e47b14acecb5d0ccd929f3f9aeb8167ee4->leave($__internal_6974271e50b6e733e3688f7b6c8d80e47b14acecb5d0ccd929f3f9aeb8167ee4_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_0c9967b483f737c61d23037e14b1f1a747f34e9685cbcef983fc6263c7aa0809 = $this->env->getExtension("native_profiler");
        $__internal_0c9967b483f737c61d23037e14b1f1a747f34e9685cbcef983fc6263c7aa0809->enter($__internal_0c9967b483f737c61d23037e14b1f1a747f34e9685cbcef983fc6263c7aa0809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "velonom", array()), "html", null, true);
        
        $__internal_0c9967b483f737c61d23037e14b1f1a747f34e9685cbcef983fc6263c7aa0809->leave($__internal_0c9967b483f737c61d23037e14b1f1a747f34e9685cbcef983fc6263c7aa0809_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_5670b46c0847be6bbf6ecaf8178827d191c99ec8a499b2fa66373e9552520e33 = $this->env->getExtension("native_profiler");
        $__internal_5670b46c0847be6bbf6ecaf8178827d191c99ec8a499b2fa66373e9552520e33->enter($__internal_5670b46c0847be6bbf6ecaf8178827d191c99ec8a499b2fa66373e9552520e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "description", array()), "html", null, true);
        
        $__internal_5670b46c0847be6bbf6ecaf8178827d191c99ec8a499b2fa66373e9552520e33->leave($__internal_5670b46c0847be6bbf6ecaf8178827d191c99ec8a499b2fa66373e9552520e33_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7870cc258aec27dde0212b59571570a17db47a2bd63cc391da9d7363250bc5ae = $this->env->getExtension("native_profiler");
        $__internal_7870cc258aec27dde0212b59571570a17db47a2bd63cc391da9d7363250bc5ae->enter($__internal_7870cc258aec27dde0212b59571570a17db47a2bd63cc391da9d7363250bc5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 10
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:velos/layout/presentation.html.twig", 10)->display($context);
        // line 11
        echo "        </div>

        <div class=\"span9\">
            <div class=\"row\">
                <div class=\"span5\">
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "image", array()), "path", array()), "html", null, true);
        echo "\"  width=\"470\" height=\"310\">
                </div>

                <div class=\"span4\">
                    <h4>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "velonom", array()), "html", null, true);
        echo "</h4>
                    <h5>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "categorie", array()), "catenom", array()), "html", null, true);
        echo "</h5>
                    <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "description", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "position", array()), "html", null, true);
        echo "</p>
                    <h4>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('tva_extension')->calculTva($this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "prix", array()), $this->getAttribute($this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "tva", array()), "multiplicate", array())), "html", null, true);
        echo "€/jour</h4>
                    <form action=\"panier.php\">

                        <select name=\"qte\" class=\"span1\">
                            <option>1jour</option>
                        </select>

                        <div>
                            <button class=\"btn btn-primary\">Réserver</button>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

";
        
        $__internal_7870cc258aec27dde0212b59571570a17db47a2bd63cc391da9d7363250bc5ae->leave($__internal_7870cc258aec27dde0212b59571570a17db47a2bd63cc391da9d7363250bc5ae_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:velos/layout/presentation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  81 => 16,  74 => 11,  72 => 10,  66 => 6,  60 => 5,  48 => 4,  36 => 3,  11 => 2,);
    }
}
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block titre %}{{ velo.velonom }}{% endblock %}*/
/* {% block description %}{{ velo.description }}{% endblock %}*/
/* {% block body %}*/
/* <div class="container">*/
/*     <div class="row">*/
/* */
/*         <div class="span3">*/
/*             {% include '::modulesUsed/navigation.html.twig' %}*/
/*         </div>*/
/* */
/*         <div class="span9">*/
/*             <div class="row">*/
/*                 <div class="span5">*/
/*                     <img src="{{ velo.image.path }}"  width="470" height="310">*/
/*                 </div>*/
/* */
/*                 <div class="span4">*/
/*                     <h4>{{ velo.velonom }}</h4>*/
/*                     <h5>{{ velo.categorie.catenom }}</h5>*/
/*                     <p>{{ velo.description }}</p>*/
/*                     <p>{{ velo.position }}</p>*/
/*                     <h4>{{ velo.prix | tva(velo.tva.multiplicate) }}€/jour</h4>*/
/*                     <form action="panier.php">*/
/* */
/*                         <select name="qte" class="span1">*/
/*                             <option>1jour</option>*/
/*                         </select>*/
/* */
/*                         <div>*/
/*                             <button class="btn btn-primary">Réserver</button>*/
/*                         </div>*/
/*                     </form>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
