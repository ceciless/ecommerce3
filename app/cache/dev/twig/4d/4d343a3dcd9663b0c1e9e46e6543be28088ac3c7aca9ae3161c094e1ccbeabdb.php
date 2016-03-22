<?php

/* EcommerceBundle:Default:utilisateurprofile/layout/utilisateurprofile.html.twig */
class __TwigTemplate_08a6947771855e723a74665621ca48f2b53772c8e32e898807f54910e58be03f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:utilisateurprofile/layout/utilisateurprofile.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7bacfefaae9db4caeb0b634f48c76c1b28c270059752c794432c091d8b5b9fa4 = $this->env->getExtension("native_profiler");
        $__internal_7bacfefaae9db4caeb0b634f48c76c1b28c270059752c794432c091d8b5b9fa4->enter($__internal_7bacfefaae9db4caeb0b634f48c76c1b28c270059752c794432c091d8b5b9fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:utilisateurprofile/layout/utilisateurprofile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bacfefaae9db4caeb0b634f48c76c1b28c270059752c794432c091d8b5b9fa4->leave($__internal_7bacfefaae9db4caeb0b634f48c76c1b28c270059752c794432c091d8b5b9fa4_prof);

    }

    // line 2
    public function block_titre($context, array $blocks = array())
    {
        $__internal_43daf92f1282f33003c0d57602f465e015c4e19c34596c628ee7ca922719a664 = $this->env->getExtension("native_profiler");
        $__internal_43daf92f1282f33003c0d57602f465e015c4e19c34596c628ee7ca922719a664->enter($__internal_43daf92f1282f33003c0d57602f465e015c4e19c34596c628ee7ca922719a664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Complementation votre compte";
        
        $__internal_43daf92f1282f33003c0d57602f465e015c4e19c34596c628ee7ca922719a664->leave($__internal_43daf92f1282f33003c0d57602f465e015c4e19c34596c628ee7ca922719a664_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1078f0cb27ed9c4e9db59567d27ec5ce81666270aabe7e0a83b6ccb236df1563 = $this->env->getExtension("native_profiler");
        $__internal_1078f0cb27ed9c4e9db59567d27ec5ce81666270aabe7e0a83b6ccb236df1563->enter($__internal_1078f0cb27ed9c4e9db59567d27ec5ce81666270aabe7e0a83b6ccb236df1563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Complementation votre compte</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">

                    <div class=\"span4\">     
                         
                            <h4>Information deja ajoute</h4>
                            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["utilisateur"], "profiles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 16
            echo "                            <div class=\"span12\">
                                <div class=\"span4\">
                                    ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "utilisateur", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "cp", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "ville", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "pays", array()), "html", null, true);
            echo "
                                    <br>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["utilisateur"], "nom", array()), "html", null, true);
            echo "
                                    <a href = \"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profilesuppression", array("id" => $this->getAttribute($context["utilisateur"], "id", array()))), "html", null, true);
            echo "\"><i class=\"icon-trash\"></i></a>
                                    <br /><br />
                                </div>
                            </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    
        
                    </div>

                    <div class=\"span4 offset2\">
                    \t<h4>Ajouter du nouveau information</h4>
                    \t<form action = \"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("utilisateurprofile");
        echo "\" method= \"POST\" >
                    \t           ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    \t          <button class=\"btn btn-primary\" type= \"submit\">Ajouter</button>
                    \t</form>
                    </div>

                </div>
            </div>
    </div>
</div>
";
        
        $__internal_1078f0cb27ed9c4e9db59567d27ec5ce81666270aabe7e0a83b6ccb236df1563->leave($__internal_1078f0cb27ed9c4e9db59567d27ec5ce81666270aabe7e0a83b6ccb236df1563_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:utilisateurprofile/layout/utilisateurprofile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 31,  109 => 30,  101 => 24,  90 => 20,  84 => 19,  74 => 18,  70 => 16,  66 => 15,  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block titre %}Complementation votre compte{% endblock %}*/
/* {% block body %}*/
/* */
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="span12">*/
/*             <h2>Complementation votre compte</h2>*/
/*             <div id="collapseOne" class="accordion-body collapse in">*/
/*                 <div class="accordion-inner">*/
/* */
/*                     <div class="span4">     */
/*                          */
/*                             <h4>Information deja ajoute</h4>*/
/*                             {% for utilisateur in utilisateur.profiles %}*/
/*                             <div class="span12">*/
/*                                 <div class="span4">*/
/*                                     {{ utilisateur.utilisateur }}, {{ utilisateur.cp }} {{ utilisateur.ville }} - {{ utilisateur.pays }}*/
/*                                     <br>{{ utilisateur.prenom }} {{ utilisateur.nom }}*/
/*                                     <a href = "{{ path ('profilesuppression',{'id':utilisateur.id })}}"><i class="icon-trash"></i></a>*/
/*                                     <br /><br />*/
/*                                 </div>*/
/*                             </div>*/
/*                             {% endfor %}    */
/*         */
/*                     </div>*/
/* */
/*                     <div class="span4 offset2">*/
/*                     	<h4>Ajouter du nouveau information</h4>*/
/*                     	<form action = "{{ path( 'utilisateurprofile' )}}" method= "POST" >*/
/*                     	           {{ form_widget(form) }}*/
/*                     	          <button class="btn btn-primary" type= "submit">Ajouter</button>*/
/*                     	</form>*/
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
