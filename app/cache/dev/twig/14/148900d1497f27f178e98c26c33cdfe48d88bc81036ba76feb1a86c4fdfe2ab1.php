<?php

/* UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig */
class __TwigTemplate_87f580daa4e4000f7e85e7125f1021be6361bcf580799ce7c109b80cadab9944 extends Twig_Template
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
        $__internal_1bc306c317d2fbedee509ce2fb7471c1c791d4fdbb524350edea6b84f2b1e1ae = $this->env->getExtension("native_profiler");
        $__internal_1bc306c317d2fbedee509ce2fb7471c1c791d4fdbb524350edea6b84f2b1e1ae->enter($__internal_1bc306c317d2fbedee509ce2fb7471c1c791d4fdbb524350edea6b84f2b1e1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UtilisateursBundle:Default:modulesUsed/utilisateursConnecte.html.twig"));

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
        
        $__internal_1bc306c317d2fbedee509ce2fb7471c1c791d4fdbb524350edea6b84f2b1e1ae->leave($__internal_1bc306c317d2fbedee509ce2fb7471c1c791d4fdbb524350edea6b84f2b1e1ae_prof);

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
