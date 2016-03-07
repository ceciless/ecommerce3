<?php

/* FOSUserBundle:ChangePassword:changePassword_content.html.twig */
class __TwigTemplate_ba21474d68d9e9c33de42448934788c93cfce38e532e52de3374c595ba457c5f extends Twig_Template
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
        $__internal_1f056f79c5627fd622a558099443fe54102addfc65659e8127f1d77a70102609 = $this->env->getExtension("native_profiler");
        $__internal_1f056f79c5627fd622a558099443fe54102addfc65659e8127f1d77a70102609->enter($__internal_1f056f79c5627fd622a558099443fe54102addfc65659e8127f1d77a70102609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword_content.html.twig"));

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
        
        $__internal_1f056f79c5627fd622a558099443fe54102addfc65659e8127f1d77a70102609->leave($__internal_1f056f79c5627fd622a558099443fe54102addfc65659e8127f1d77a70102609_prof);

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
