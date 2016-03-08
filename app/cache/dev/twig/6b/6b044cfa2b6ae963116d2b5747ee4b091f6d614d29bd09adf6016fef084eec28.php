<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig */
class __TwigTemplate_ec985fec9422393b57ee17569f9a79a6e54d526da229c64884a927260def5318 extends Twig_Template
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
        $__internal_2591ae61d1b8feb7d793cae1fc26936e5265714569270b88ef52226339450c0e = $this->env->getExtension("native_profiler");
        $__internal_2591ae61d1b8feb7d793cae1fc26936e5265714569270b88ef52226339450c0e->enter($__internal_2591ae61d1b8feb7d793cae1fc26936e5265714569270b88ef52226339450c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateurs.html.twig"));

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
        
        $__internal_2591ae61d1b8feb7d793cae1fc26936e5265714569270b88ef52226339450c0e->leave($__internal_2591ae61d1b8feb7d793cae1fc26936e5265714569270b88ef52226339450c0e_prof);

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
