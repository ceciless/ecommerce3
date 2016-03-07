<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_4c15c123463f86d4c809413a22f68b03ed5927de488e71cf44e5ca04fef62637 extends Twig_Template
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
        $__internal_f8a1921a9a669c1befb793ab3b92831cca59871f3a6469f3f43425e6d25a3cae = $this->env->getExtension("native_profiler");
        $__internal_f8a1921a9a669c1befb793ab3b92831cca59871f3a6469f3f43425e6d25a3cae->enter($__internal_f8a1921a9a669c1befb793ab3b92831cca59871f3a6469f3f43425e6d25a3cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
        
        $__internal_f8a1921a9a669c1befb793ab3b92831cca59871f3a6469f3f43425e6d25a3cae->leave($__internal_f8a1921a9a669c1befb793ab3b92831cca59871f3a6469f3f43425e6d25a3cae_prof);

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
