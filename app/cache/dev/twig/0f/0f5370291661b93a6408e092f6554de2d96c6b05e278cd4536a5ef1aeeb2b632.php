<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_a498d6ee9fea99822f00fb33a6ffd92788fd4fd6876e21671f395e2e6933710c extends Twig_Template
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
        $__internal_971c2b75c9d858ad40b11077c29e02c19fcc4f83298c11a3c8bbf36a4df7c58e = $this->env->getExtension("native_profiler");
        $__internal_971c2b75c9d858ad40b11077c29e02c19fcc4f83298c11a3c8bbf36a4df7c58e->enter($__internal_971c2b75c9d858ad40b11077c29e02c19fcc4f83298c11a3c8bbf36a4df7c58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

        // line 1
        echo "<div class=\"well\">
    <ul class=\"nav nav-list\">
        <li class=\"nav-header\">Vos velos</li>
         ";
        // line 4
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("EcommerceBundle:Categories:menu"), array());
        // line 5
        echo "    </ul>
</div>
";
        
        $__internal_971c2b75c9d858ad40b11077c29e02c19fcc4f83298c11a3c8bbf36a4df7c58e->leave($__internal_971c2b75c9d858ad40b11077c29e02c19fcc4f83298c11a3c8bbf36a4df7c58e_prof);

    }

    public function getTemplateName()
    {
        return "::modulesUsed/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div class="well">*/
/*     <ul class="nav nav-list">*/
/*         <li class="nav-header">Vos velos</li>*/
/*          {% render (controller('EcommerceBundle:Categories:menu')) %}*/
/*     </ul>*/
/* </div>*/
/* */
