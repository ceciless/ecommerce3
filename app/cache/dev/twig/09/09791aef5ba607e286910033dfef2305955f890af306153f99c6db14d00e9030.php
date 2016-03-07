<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_18b3f3d62e0591ac5303960b30e5c859c00e4f9e7934fa551ad155248250bad5 extends Twig_Template
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
        $__internal_dd9f9e5151eb3f28a2fd97cf826402b256069d48a3871543ae4459887f866afa = $this->env->getExtension("native_profiler");
        $__internal_dd9f9e5151eb3f28a2fd97cf826402b256069d48a3871543ae4459887f866afa->enter($__internal_dd9f9e5151eb3f28a2fd97cf826402b256069d48a3871543ae4459887f866afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Pas encore inscrit ?</h4>
                        <em>
                            nous vous invitons à vous inscrire<br />
                            afin de passer votre commande et de manger équilibré.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <h4>Inscription</h4>
                        <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                            <br />
                            <input class=\"btn btn-primary\" type=\"submit\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_dd9f9e5151eb3f28a2fd97cf826402b256069d48a3871543ae4459887f866afa->leave($__internal_dd9f9e5151eb3f28a2fd97cf826402b256069d48a3871543ae4459887f866afa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 22,  47 => 20,  41 => 19,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Connexion</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/*                     <div class="span4">*/
/*                         <h4>Pas encore inscrit ?</h4>*/
/*                         <em>*/
/*                             nous vous invitons à vous inscrire<br />*/
/*                             afin de passer votre commande et de manger équilibré.*/
/*                         </em>*/
/*                     </div>*/
/*                     */
/*                     <div class="span4 offset2">*/
/*                         <h4>Inscription</h4>*/
/*                         <form action="{{ path('fos_user_registration_register') }}" {{ form_enctype(form) }} method="POST" class="fos_user_registration_register">*/
/*     {{ form_widget(form) }}*/
/*                             <br />*/
/*                             <input class="btn btn-primary" type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*                         </form>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
