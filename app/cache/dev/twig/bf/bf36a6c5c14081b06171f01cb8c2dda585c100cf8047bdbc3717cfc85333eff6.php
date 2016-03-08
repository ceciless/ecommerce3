<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_01d72c0ab9f4a9bf99214074f9a2dc45d1702a5fcab7d9603873e5d5945c5d22 extends Twig_Template
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
        $__internal_ca315e0f6f8c78a7c21fbb8b0ac19230e6975130f3de660f6260a2b9ca2f7bf1 = $this->env->getExtension("native_profiler");
        $__internal_ca315e0f6f8c78a7c21fbb8b0ac19230e6975130f3de660f6260a2b9ca2f7bf1->enter($__internal_ca315e0f6f8c78a7c21fbb8b0ac19230e6975130f3de660f6260a2b9ca2f7bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

        // line 1
        echo "   ";
        // line 2
        echo "
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a>
            </li>
            <li>
                <a href=\"facture.php\">Mes factures</a>
            </li>
            <li>
                <a href=\"adresses.php\">Mes adresses</a>
            </li>
            <li>
                <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">deconnexion</a>
            </li>
        </ul>
    </div>";
        
        $__internal_ca315e0f6f8c78a7c21fbb8b0ac19230e6975130f3de660f6260a2b9ca2f7bf1->leave($__internal_ca315e0f6f8c78a7c21fbb8b0ac19230e6975130f3de660f6260a2b9ca2f7bf1_prof);

    }

    public function getTemplateName()
    {
        return "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 21,  42 => 12,  36 => 9,  30 => 6,  24 => 2,  22 => 1,);
    }
}
/*    {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_profile_show') }}">Mes informations</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_profile_edit') }}">Editer mes informations</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_change_password') }}">Changer mon mot de passe</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="facture.php">Mes factures</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="adresses.php">Mes adresses</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('fos_user_security_logout') }}">deconnexion</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
