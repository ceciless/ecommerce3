<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_78a4c472c1c89789cea552fb4fece9a33cd5d3498d48a6db182706fa48a7d052 extends Twig_Template
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
        $__internal_86c27b5388f8dcf436472f028bb67510a04beb1a18b604bab134fd12ea3be1c8 = $this->env->getExtension("native_profiler");
        $__internal_86c27b5388f8dcf436472f028bb67510a04beb1a18b604bab134fd12ea3be1c8->enter($__internal_86c27b5388f8dcf436472f028bb67510a04beb1a18b604bab134fd12ea3be1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
        
        $__internal_86c27b5388f8dcf436472f028bb67510a04beb1a18b604bab134fd12ea3be1c8->leave($__internal_86c27b5388f8dcf436472f028bb67510a04beb1a18b604bab134fd12ea3be1c8_prof);

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
