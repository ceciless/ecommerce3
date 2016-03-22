<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_f406dbc811c09176e804a02b03b89d34042c5db2e5ec3047a39c2cf8e309e041 extends Twig_Template
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
        $__internal_6ebd77745abf82d4daca2da111da617d4505d1e1c9ed9ee810b2dc5b49ab523c = $this->env->getExtension("native_profiler");
        $__internal_6ebd77745abf82d4daca2da111da617d4505d1e1c9ed9ee810b2dc5b49ab523c->enter($__internal_6ebd77745abf82d4daca2da111da617d4505d1e1c9ed9ee810b2dc5b49ab523c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

        // line 1
        echo "   ";
        // line 2
        echo "
<div class=\"row\">
        <div class=\"span3\">
             ";
        // line 5
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:ChangePassword:changePassword_content.html.twig", 5)->display($context);
        // line 6
        echo "        </div>
        <div class=\"span9\">
            <h2>Modifier mon mot de passe</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
                    <div class=\"span4\">
                       
                      <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
  \t\t  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <br />
                              <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6ebd77745abf82d4daca2da111da617d4505d1e1c9ed9ee810b2dc5b49ab523c->leave($__internal_6ebd77745abf82d4daca2da111da617d4505d1e1c9ed9ee810b2dc5b49ab523c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  47 => 15,  41 => 14,  31 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }
}
/*    {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="row">*/
/*         <div class="span3">*/
/*              {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*         </div>*/
/*         <div class="span9">*/
/*             <h2>Modifier mon mot de passe</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     */
/*                     <div class="span4">*/
/*                        */
/*                       <form action="{{ path('fos_user_change_password') }}" {{ form_enctype(form) }} method="POST">*/
/*   		  {{ form_widget(form) }}*/
/*                             <br />*/
/*                               <input class="btn btn-primary" type="submit" value="{{ 'change_password.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
