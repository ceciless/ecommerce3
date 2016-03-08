<?php

/* ::modulesUsed/navigation.html.twig */
class __TwigTemplate_8dd9af8a97c3867c5b5b250cfb813fce5f34415c455757658b8bfd0ae9b394ba extends Twig_Template
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
        $__internal_8a414f3cb5c2013fdd66fb6a2bff14a1da8dd9b5f6b316442c30fd613aead28d = $this->env->getExtension("native_profiler");
        $__internal_8a414f3cb5c2013fdd66fb6a2bff14a1da8dd9b5f6b316442c30fd613aead28d->enter($__internal_8a414f3cb5c2013fdd66fb6a2bff14a1da8dd9b5f6b316442c30fd613aead28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::modulesUsed/navigation.html.twig"));

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
        
        $__internal_8a414f3cb5c2013fdd66fb6a2bff14a1da8dd9b5f6b316442c30fd613aead28d->leave($__internal_8a414f3cb5c2013fdd66fb6a2bff14a1da8dd9b5f6b316442c30fd613aead28d_prof);

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
