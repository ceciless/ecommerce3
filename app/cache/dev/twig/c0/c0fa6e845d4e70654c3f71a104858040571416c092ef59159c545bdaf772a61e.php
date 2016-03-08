<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_18e9899cae00cf9c2e7bc58521d67dad92b8ddc5b0f2c5842db238580cf9efa7 extends Twig_Template
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
        $__internal_bf2b07c5f0641dbc529ba5d0d9859dbb3d4379a2a485ab76cc72c0ce5a49112b = $this->env->getExtension("native_profiler");
        $__internal_bf2b07c5f0641dbc529ba5d0d9859dbb3d4379a2a485ab76cc72c0ce5a49112b->enter($__internal_bf2b07c5f0641dbc529ba5d0d9859dbb3d4379a2a485ab76cc72c0ce5a49112b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

        // line 1
        echo "    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Se connecter</a>
            </li>
            <li>
                <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
            </li>
        </ul>
    </div>";
        
        $__internal_bf2b07c5f0641dbc529ba5d0d9859dbb3d4379a2a485ab76cc72c0ce5a49112b->leave($__internal_bf2b07c5f0641dbc529ba5d0d9859dbb3d4379a2a485ab76cc72c0ce5a49112b_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  27 => 4,  22 => 1,);
    }
}
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_registration_register')  }}">S'inscrire</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
