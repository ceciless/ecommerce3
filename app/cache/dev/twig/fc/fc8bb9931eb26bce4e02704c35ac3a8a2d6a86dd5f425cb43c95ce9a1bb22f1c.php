<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_0594a1f19106accb8f8a4c7009eaf28370d3c90d2ba0e0ed60c54d474f19af38 extends Twig_Template
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
        $__internal_350e8cc39d2638a911df6da79ba3b6f4439ebf8597d669298c64cca054d11304 = $this->env->getExtension("native_profiler");
        $__internal_350e8cc39d2638a911df6da79ba3b6f4439ebf8597d669298c64cca054d11304->enter($__internal_350e8cc39d2638a911df6da79ba3b6f4439ebf8597d669298c64cca054d11304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

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
                ";
        // line 8
        echo "                <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a>
            </li>
        </ul>
    </div>";
        
        $__internal_350e8cc39d2638a911df6da79ba3b6f4439ebf8597d669298c64cca054d11304->leave($__internal_350e8cc39d2638a911df6da79ba3b6f4439ebf8597d669298c64cca054d11304_prof);

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
        return array (  33 => 8,  27 => 4,  22 => 1,);
    }
}
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_security_login') }}">Se connecter</a>*/
/*             </li>*/
/*             <li>*/
/*                 {# <a href="inscription.php">S'inscrire</a>  #}*/
/*                 <a href="{{ path('fos_user_registration_register')  }}">S'inscrire</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
