<?php

/* EcommerceBundle:Default:velos/layout/presentation.html.twig */
class __TwigTemplate_1155b9863491bd032a252ef90333fb3141148ebe7219336a1c499bd98430a989 extends Twig_Template
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
        $__internal_f58e8ef44872e4b8860f8e037fca4340b0eb913f6b2d2bf24ccb882c36182e04 = $this->env->getExtension("native_profiler");
        $__internal_f58e8ef44872e4b8860f8e037fca4340b0eb913f6b2d2bf24ccb882c36182e04->enter($__internal_f58e8ef44872e4b8860f8e037fca4340b0eb913f6b2d2bf24ccb882c36182e04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:velos/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f58e8ef44872e4b8860f8e037fca4340b0eb913f6b2d2bf24ccb882c36182e04->leave($__internal_f58e8ef44872e4b8860f8e037fca4340b0eb913f6b2d2bf24ccb882c36182e04_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_10606063b44d87e05be9c66720bad3f5c41219d1cced648cdbca9dbab09d86c3 = $this->env->getExtension("native_profiler");
        $__internal_10606063b44d87e05be9c66720bad3f5c41219d1cced648cdbca9dbab09d86c3->enter($__internal_10606063b44d87e05be9c66720bad3f5c41219d1cced648cdbca9dbab09d86c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "velonom", array()), "html", null, true);
        
        $__internal_10606063b44d87e05be9c66720bad3f5c41219d1cced648cdbca9dbab09d86c3->leave($__internal_10606063b44d87e05be9c66720bad3f5c41219d1cced648cdbca9dbab09d86c3_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_54f73408da6adc7cb57d361064a71e79387b609d3ce65bb87d81c70782843bd1 = $this->env->getExtension("native_profiler");
        $__internal_54f73408da6adc7cb57d361064a71e79387b609d3ce65bb87d81c70782843bd1->enter($__internal_54f73408da6adc7cb57d361064a71e79387b609d3ce65bb87d81c70782843bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "description", array()), "html", null, true);
        
        $__internal_54f73408da6adc7cb57d361064a71e79387b609d3ce65bb87d81c70782843bd1->leave($__internal_54f73408da6adc7cb57d361064a71e79387b609d3ce65bb87d81c70782843bd1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c548ae1d60d7aa755f3119aa7d177b80f4c32bdaa4e4ceec2a5a888ee4ca3b34 = $this->env->getExtension("native_profiler");
        $__internal_c548ae1d60d7aa755f3119aa7d177b80f4c32bdaa4e4ceec2a5a888ee4ca3b34->enter($__internal_c548ae1d60d7aa755f3119aa7d177b80f4c32bdaa4e4ceec2a5a888ee4ca3b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <form action=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajouter", array("id" => $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "id", array()))), "html", null, true);
        echo "\" method= \"get\">
                        <select name=\"qte\" class=\"span1\">
                                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 28
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo " </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                        </select>
                    <td>jours</td>

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
        
        $__internal_c548ae1d60d7aa755f3119aa7d177b80f4c32bdaa4e4ceec2a5a888ee4ca3b34->leave($__internal_c548ae1d60d7aa755f3119aa7d177b80f4c32bdaa4e4ceec2a5a888ee4ca3b34_prof);

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
        return array (  128 => 30,  117 => 28,  113 => 27,  108 => 25,  104 => 24,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  81 => 16,  74 => 11,  72 => 10,  66 => 6,  60 => 5,  48 => 4,  36 => 3,  11 => 2,);
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
/*                     <form action="{{ path('ajouter', { 'id': velo.id })}}" method= "get">*/
/*                         <select name="qte" class="span1">*/
/*                                 {% for i in 1..15%}*/
/*                                     <option value="{{ i }}">{{ i }} </option>*/
/*                                 {% endfor %}*/
/*                         </select>*/
/*                     <td>jours</td>*/
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
