<?php

/* FOSUserBundle:Profile:edit_content.html.twig */
class __TwigTemplate_c829d4ca2323eafedbc7e7d54c9315aea47cf762ca0bd55f4a2bbd8bd88604af extends Twig_Template
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
        $__internal_0bcd2584d8144bd3fcdf477d9319c9d3e0182870e7804645f6f1b56e173e3316 = $this->env->getExtension("native_profiler");
        $__internal_0bcd2584d8144bd3fcdf477d9319c9d3e0182870e7804645f6f1b56e173e3316->enter($__internal_0bcd2584d8144bd3fcdf477d9319c9d3e0182870e7804645f6f1b56e173e3316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit_content.html.twig"));

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
        
        $__internal_0bcd2584d8144bd3fcdf477d9319c9d3e0182870e7804645f6f1b56e173e3316->leave($__internal_0bcd2584d8144bd3fcdf477d9319c9d3e0182870e7804645f6f1b56e173e3316_prof);

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
