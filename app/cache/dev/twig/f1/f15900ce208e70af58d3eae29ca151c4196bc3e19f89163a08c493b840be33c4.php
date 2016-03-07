<?php

/* EcommerceBundle:Default:velos/layout/presentation.html.twig */
class __TwigTemplate_d2cdaf1ab0d901de886fa6a8b93abcb48a7ded91ff2cf316cec9bbce2eef0177 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:velos/layout/presentation.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5585d3e06e4eb8505b0c9f38837064e525b01779e33c48c8592d1079f39aaf96 = $this->env->getExtension("native_profiler");
        $__internal_5585d3e06e4eb8505b0c9f38837064e525b01779e33c48c8592d1079f39aaf96->enter($__internal_5585d3e06e4eb8505b0c9f38837064e525b01779e33c48c8592d1079f39aaf96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:velos/layout/presentation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5585d3e06e4eb8505b0c9f38837064e525b01779e33c48c8592d1079f39aaf96->leave($__internal_5585d3e06e4eb8505b0c9f38837064e525b01779e33c48c8592d1079f39aaf96_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d49842f91665810aaa153063932932dcffefb0c488d9828f51dbe7af562bfe0 = $this->env->getExtension("native_profiler");
        $__internal_0d49842f91665810aaa153063932932dcffefb0c488d9828f51dbe7af562bfe0->enter($__internal_0d49842f91665810aaa153063932932dcffefb0c488d9828f51dbe7af562bfe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"container\">
    <div class=\"row\">

        <div class=\"span3\">
            ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:velos/layout/presentation.html.twig", 9)->display($context);
        // line 10
        echo "        </div>

        <div class=\"span9\">
            <div class=\"row\">
                <div class=\"span5\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "image", array()), "path", array()), "html", null, true);
        echo "\"  width=\"470\" height=\"310\">
                </div>

                <div class=\"span4\">
                    <h4>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "velonom", array()), "html", null, true);
        echo "</h4>
                    <h5>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "categorie", array()), "catenom", array()), "html", null, true);
        echo "</h5>
                    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "description", array()), "html", null, true);
        echo "</p>
                    <p>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "position", array()), "html", null, true);
        echo "</p>
                    <h4>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["velo"]) ? $context["velo"] : $this->getContext($context, "velo")), "prix", array()), "html", null, true);
        echo "€/jour</h4>
                    <form action=\"panier.php\">

                        <select name=\"qte\" class=\"span1\">
                            <option>1</option>
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
        
        $__internal_0d49842f91665810aaa153063932932dcffefb0c488d9828f51dbe7af562bfe0->leave($__internal_0d49842f91665810aaa153063932932dcffefb0c488d9828f51dbe7af562bfe0_prof);

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
        return array (  78 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  55 => 15,  48 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
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
/*                     <h4>{{ velo.prix }}€/jour</h4>*/
/*                     <form action="panier.php">*/
/* */
/*                         <select name="qte" class="span1">*/
/*                             <option>1</option>*/
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
