<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_3e6c948547dbe68f210a18a4f5fa6c707a31134f6491900f97eab29922edbb64 extends Twig_Template
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
        $__internal_507b730c00192105b201199b63aeabc2dec66fbc4e1a5cc2115dfd4f26777d75 = $this->env->getExtension("native_profiler");
        $__internal_507b730c00192105b201199b63aeabc2dec66fbc4e1a5cc2115dfd4f26777d75->enter($__internal_507b730c00192105b201199b63aeabc2dec66fbc4e1a5cc2115dfd4f26777d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

        // line 1
        echo "   
   ";
        // line 3
        echo "
    <div class=\"row\">
        <div class=\"span3\">
             ";
        // line 6
        $this->loadTemplate("UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig", "FOSUserBundle:Profile:edit_content.html.twig", 6)->display($context);
        // line 7
        echo "        </div>
        <div class=\"span9\">
            <h2>Modifier mes informations</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
                    <div class=\"span4\">
                        <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" >
  \t\t  ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <br />
                              <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_507b730c00192105b201199b63aeabc2dec66fbc4e1a5cc2115dfd4f26777d75->leave($__internal_507b730c00192105b201199b63aeabc2dec66fbc4e1a5cc2115dfd4f26777d75_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  47 => 15,  41 => 14,  32 => 7,  30 => 6,  25 => 3,  22 => 1,);
    }
}
/*    */
/*    {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     <div class="row">*/
/*         <div class="span3">*/
/*              {% include 'UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig' %}*/
/*         </div>*/
/*         <div class="span9">*/
/*             <h2>Modifier mes informations</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     */
/*                     <div class="span4">*/
/*                         <form action="{{ path('fos_user_profile_edit') }}" {{ form_enctype(form) }} method="POST" >*/
/*   		  {{ form_widget(form) }}*/
/*                             <br />*/
/*                               <input class="btn btn-primary" type="submit" value="{{ 'profile.edit.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
