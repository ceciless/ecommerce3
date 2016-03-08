<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_5c8dc25eab6bb393509a311f2f8319820e47735940487a20f7f859a214674f55 extends Twig_Template
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
        $__internal_e4f56265d6c7dbdfad735baccedb3079d6e62f38a1620f90d52d40d956b85833 = $this->env->getExtension("native_profiler");
        $__internal_e4f56265d6c7dbdfad735baccedb3079d6e62f38a1620f90d52d40d956b85833->enter($__internal_e4f56265d6c7dbdfad735baccedb3079d6e62f38a1620f90d52d40d956b85833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "

<div class=\"row\">
    <div class=\"span12\">
        <h2>Mot de passe perdu</h2>
        <div id=\"collapseOne\" class=\"accordion-body collapse in\">
            <div class=\"accordion-inner\">
                <div class=\"span4\">
                    <h4>Vous avez perdu votre mot de passe ?</h4>
                    <em>
                        Compléter le formulaire, un email vous seras envoyé.<br />
                        Il contiendra la procèdure à suivre pour récupérer votre mot de passe.
                    </em>
                </div>
                
                <div class=\"span4 offset2\">
                    <form action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                        <label for=\"username\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                         <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                        <br />
                        <input class=\"btn btn-primary\"  type=\"submit\" value= \"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo " \" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



";
        
        $__internal_e4f56265d6c7dbdfad735baccedb3079d6e62f38a1620f90d52d40d956b85833->leave($__internal_e4f56265d6c7dbdfad735baccedb3079d6e62f38a1620f90d52d40d956b85833_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 22,  44 => 19,  40 => 18,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/* <div class="row">*/
/*     <div class="span12">*/
/*         <h2>Mot de passe perdu</h2>*/
/*         <div id="collapseOne" class="accordion-body collapse in">*/
/*             <div class="accordion-inner">*/
/*                 <div class="span4">*/
/*                     <h4>Vous avez perdu votre mot de passe ?</h4>*/
/*                     <em>*/
/*                         Compléter le formulaire, un email vous seras envoyé.<br />*/
/*                         Il contiendra la procèdure à suivre pour récupérer votre mot de passe.*/
/*                     </em>*/
/*                 </div>*/
/*                 */
/*                 <div class="span4 offset2">*/
/*                     <form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*                         <label for="username">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                          <input type="text" id="username" name="username" required="required" />*/
/*                         <br />*/
/*                         <input class="btn btn-primary"  type="submit" value= "{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }} " />*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* */
/* */
