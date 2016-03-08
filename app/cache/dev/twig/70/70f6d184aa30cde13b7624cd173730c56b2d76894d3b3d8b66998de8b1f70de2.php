<?php

/* EcommerceBundle:Default:velos/layout/presentation.html.twig */
class __TwigTemplate_5c32a5650f360b6b7382f387972c6266b5f90217816c3fc20505083200529b2d extends Twig_Template
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
        $__internal_365e26ab074da313956a0cf0e13dacb62f101eb462b5d2f5c68503715b842aee = $this->env->getExtension("native_profiler");
        $__internal_365e26ab074da313956a0cf0e13dacb62f101eb462b5d2f5c68503715b842aee->enter($__internal_365e26ab074da313956a0cf0e13dacb62f101eb462b5d2f5c68503715b842aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:velos/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_365e26ab074da313956a0cf0e13dacb62f101eb462b5d2f5c68503715b842aee->leave($__internal_365e26ab074da313956a0cf0e13dacb62f101eb462b5d2f5c68503715b842aee_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_5dd56450c6698b1aa45e6c683043c79dcfd8d7fd8b0e45be93154b1a7b7d9f4e = $this->env->getExtension("native_profiler");
        $__internal_5dd56450c6698b1aa45e6c683043c79dcfd8d7fd8b0e45be93154b1a7b7d9f4e->enter($__internal_5dd56450c6698b1aa45e6c683043c79dcfd8d7fd8b0e45be93154b1a7b7d9f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "velonom", array()), "html", null, true);
        
        $__internal_5dd56450c6698b1aa45e6c683043c79dcfd8d7fd8b0e45be93154b1a7b7d9f4e->leave($__internal_5dd56450c6698b1aa45e6c683043c79dcfd8d7fd8b0e45be93154b1a7b7d9f4e_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_a097be459188aeb3fdc6d752c3322516caaf9b7f1893d395293788b5b145dc17 = $this->env->getExtension("native_profiler");
        $__internal_a097be459188aeb3fdc6d752c3322516caaf9b7f1893d395293788b5b145dc17->enter($__internal_a097be459188aeb3fdc6d752c3322516caaf9b7f1893d395293788b5b145dc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "description", array()), "html", null, true);
        
        $__internal_a097be459188aeb3fdc6d752c3322516caaf9b7f1893d395293788b5b145dc17->leave($__internal_a097be459188aeb3fdc6d752c3322516caaf9b7f1893d395293788b5b145dc17_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f4db6c7e32fb997aa4470d06a26ee9eb80a72ed024632eefe25c21b9583bb62 = $this->env->getExtension("native_profiler");
        $__internal_8f4db6c7e32fb997aa4470d06a26ee9eb80a72ed024632eefe25c21b9583bb62->enter($__internal_8f4db6c7e32fb997aa4470d06a26ee9eb80a72ed024632eefe25c21b9583bb62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    ";
        // line 25
        if ( !$this->getAttribute((isset($context["panier"]) ? $context["panier"] : null), $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "id", array()), array(), "array", true, true)) {
            // line 26
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "id", array()))), "html", null, true);
            echo "\" method= \"get\">
                            <select name=\"qte\" class=\"span1\">
                                    ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 29
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo " </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "                            </select>
                            <td>jours</td>
                            <div>
                                <button class=\"btn btn-primary\">Réserver</button>
                            </div>
                        </form>
                    ";
        } else {
            // line 38
            echo "                         <div>
                            <a href= \" \" class=\"btn btn-primary\">Vous avez déja choisi ce vélo.</a>
                         </div>
                    ";
        }
        // line 42
        echo "
                </div>
            </div>

        </div>
    </div>
</div>

";
        
        $__internal_8f4db6c7e32fb997aa4470d06a26ee9eb80a72ed024632eefe25c21b9583bb62->leave($__internal_8f4db6c7e32fb997aa4470d06a26ee9eb80a72ed024632eefe25c21b9583bb62_prof);

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
        return array (  146 => 42,  140 => 38,  131 => 31,  120 => 29,  116 => 28,  110 => 26,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  81 => 16,  74 => 11,  72 => 10,  66 => 6,  60 => 5,  48 => 4,  36 => 3,  11 => 2,);
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
/*                     {% if panier[velo.id] is not defined %}*/
/*                         <form action="{{ path('ajouter', { 'id': velo.id })}}" method= "get">*/
/*                             <select name="qte" class="span1">*/
/*                                     {% for i in 1..15%}*/
/*                                         <option value="{{ i }}">{{ i }} </option>*/
/*                                     {% endfor %}*/
/*                             </select>*/
/*                             <td>jours</td>*/
/*                             <div>*/
/*                                 <button class="btn btn-primary">Réserver</button>*/
/*                             </div>*/
/*                         </form>*/
/*                     {% else %}*/
/*                          <div>*/
/*                             <a href= " " class="btn btn-primary">Vous avez déja choisi ce vélo.</a>*/
/*                          </div>*/
/*                     {% endif %}*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
