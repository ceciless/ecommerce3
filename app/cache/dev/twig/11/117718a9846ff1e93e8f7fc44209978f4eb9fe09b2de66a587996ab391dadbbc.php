<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_28e6b4c5791eaf1317ae74f24b7947b58ad9f2922e98b004317ed334e67acd5e extends Twig_Template
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
        $__internal_999c0f8ceed78ecee7c3d20dcb512b9ca99c1a22680945d596f87852ff66fb24 = $this->env->getExtension("native_profiler");
        $__internal_999c0f8ceed78ecee7c3d20dcb512b9ca99c1a22680945d596f87852ff66fb24->enter($__internal_999c0f8ceed78ecee7c3d20dcb512b9ca99c1a22680945d596f87852ff66fb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "

    <div class=\"row\">
        <div class=\"span12\">
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Récupération du mot de passe ?</h4>
                        <em>
                            Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                            Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">                 
                        <form action=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
                              ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <br />
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



";
        
        $__internal_999c0f8ceed78ecee7c3d20dcb512b9ca99c1a22680945d596f87852ff66fb24->leave($__internal_999c0f8ceed78ecee7c3d20dcb512b9ca99c1a22680945d596f87852ff66fb24_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 21,  46 => 19,  40 => 18,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* */
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Mot de passe perdu</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     <div class="span4">*/
/*                         <h4>Récupération du mot de passe ?</h4>*/
/*                         <em>*/
/*                             Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />*/
/*                             Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.*/
/*                         </em>*/
/*                     </div>*/
/*                     */
/*                     <div class="span4 offset2">                 */
/*                         <form action="{{ path('fos_user_resetting_reset', {'token': token}) }}" {{ form_enctype(form) }} method="POST" class="fos_user_resetting_reset">*/
/*                               {{ form_widget(form) }}*/
/*                             <br />*/
/*                             <input class="btn btn-primary" type="submit" value="{{ 'resetting.reset.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/* */
/* */
