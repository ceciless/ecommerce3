<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_d661d24855c51ede5c5c05462ac25e44e658193a741cb99613bde0c001dc4de4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_61e0085e78295c126ab17afd89684350063f6a4fc6625ba90bfda90e983fa3e0 = $this->env->getExtension("native_profiler");
        $__internal_61e0085e78295c126ab17afd89684350063f6a4fc6625ba90bfda90e983fa3e0->enter($__internal_61e0085e78295c126ab17afd89684350063f6a4fc6625ba90bfda90e983fa3e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_61e0085e78295c126ab17afd89684350063f6a4fc6625ba90bfda90e983fa3e0->leave($__internal_61e0085e78295c126ab17afd89684350063f6a4fc6625ba90bfda90e983fa3e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d2bb5dce2378dee5b8af4fab5136450d334973418ef6a4e1fa332acd84ffd7cb = $this->env->getExtension("native_profiler");
        $__internal_d2bb5dce2378dee5b8af4fab5136450d334973418ef6a4e1fa332acd84ffd7cb->enter($__internal_d2bb5dce2378dee5b8af4fab5136450d334973418ef6a4e1fa332acd84ffd7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo "

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
                        <br /><br />
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>
                        
                    </div>
                    
                    <div class=\"span4 offset2\">
                                    <h4>Connexion</h4>
                       \t    <form action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
\t\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

\t\t    <label for=\"username\">";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

\t\t    <label for=\"password\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
\t\t    
\t\t    <br/ >
\t\t    <input class=\"btn btn-primary\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
\t\t    </form>
                    </div>
                    <div class=\"span10\">
                        <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d2bb5dce2378dee5b8af4fab5136450d334973418ef6a4e1fa332acd84ffd7cb->leave($__internal_d2bb5dce2378dee5b8af4fab5136450d334973418ef6a4e1fa332acd84ffd7cb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 41,  98 => 37,  91 => 33,  86 => 31,  82 => 30,  77 => 28,  73 => 27,  64 => 21,  48 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/* */
/* */
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
/*                         <br /><br />*/
/*                         <a href="{{ path( 'fos_user_registration_register' ) }}" class="btn btn-primary">S'inscrire</a>*/
/*                         */
/*                     </div>*/
/*                     */
/*                     <div class="span4 offset2">*/
/*                                     <h4>Connexion</h4>*/
/*                        	    <form action="{{ path("fos_user_security_check") }}" method="post">*/
/* 		    <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/* 		    <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/* 		    <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/* 		    <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/* 		    <input type="password" id="password" name="_password" required="required" />*/
/* 		    */
/* 		    <br/ >*/
/* 		    <input class="btn btn-primary" type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle')  }}" />*/
/* 		    </form>*/
/*                     </div>*/
/*                     <div class="span10">*/
/*                         <a href="{{ path('fos_user_resetting_request') }}">Mot de passe perdu ?</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
