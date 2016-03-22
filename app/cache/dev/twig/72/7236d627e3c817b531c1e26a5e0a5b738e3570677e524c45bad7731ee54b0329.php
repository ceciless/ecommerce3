<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_70493412ba79fae3a9a419036727ccf9a6b8c42a238fe15d56a2803e56d876f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7ef87943b78921cef516936e355e815516ff8263a0ce55aabb66215e649aaea7 = $this->env->getExtension("native_profiler");
        $__internal_7ef87943b78921cef516936e355e815516ff8263a0ce55aabb66215e649aaea7->enter($__internal_7ef87943b78921cef516936e355e815516ff8263a0ce55aabb66215e649aaea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 1
        echo "   ";
        // line 2
        echo "
    <div class=\"row\">
        <div class=\"span3\">
             ";
        // line 5
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:Profile:show_content.html.twig", 5)->display($context);
        // line 6
        echo "        </div>
        <div class=\"span9\">
            <h2>Mes informations</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
                    <div class=\"span4\">
                        <h4>Mes informations</h4>
      \t        <p>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    \t        <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_7ef87943b78921cef516936e355e815516ff8263a0ce55aabb66215e649aaea7->leave($__internal_7ef87943b78921cef516936e355e815516ff8263a0ce55aabb66215e649aaea7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  41 => 14,  31 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }
}
/*    {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     <div class="row">*/
/*         <div class="span3">*/
/*              {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*         </div>*/
/*         <div class="span9">*/
/*             <h2>Mes informations</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     */
/*                     <div class="span4">*/
/*                         <h4>Mes informations</h4>*/
/*       	        <p>{{ 'profile.show.username'|trans({}, 'FOSUserBundle') }}: {{ user.username }}</p>*/
/*     	        <p>{{ 'profile.show.email'|trans({}, 'FOSUserBundle') }}: {{ user.email }}</p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
