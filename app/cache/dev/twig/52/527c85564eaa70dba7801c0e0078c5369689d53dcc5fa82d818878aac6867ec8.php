<?php

/* ::layout/navigationAdmin.html.twig */
class __TwigTemplate_bbf8cc8cc75dbcf863e2deecb0868e1dc4dca65822c5040ab409e3ec6d08e0b8 extends Twig_Template
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
        $__internal_5183d721c4a03612391d406827fd5b136bccf3f539a4b667970d1d00b11e1eb2 = $this->env->getExtension("native_profiler");
        $__internal_5183d721c4a03612391d406827fd5b136bccf3f539a4b667970d1d00b11e1eb2->enter($__internal_5183d721c4a03612391d406827fd5b136bccf3f539a4b667970d1d00b11e1eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout/navigationAdmin.html.twig"));

        // line 1
        echo "<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("publierVelos_index");
        echo "\">Liste de mes velos</a> 
            </li>
            <li>
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("publierVelos_new");
        echo "\">Ajouter un nouveau velo</a>
            </li>
        </ul>
    </div>      
</div>";
        
        $__internal_5183d721c4a03612391d406827fd5b136bccf3f539a4b667970d1d00b11e1eb2->leave($__internal_5183d721c4a03612391d406827fd5b136bccf3f539a4b667970d1d00b11e1eb2_prof);

    }

    public function getTemplateName()
    {
        return "::layout/navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  29 => 6,  22 => 1,);
    }
}
/* <div class="span3">*/
/* */
/*     <div class="well">*/
/*         <ul class="nav nav-list">*/
/*             <li>*/
/*                 <a href="{{  path('publierVelos_index')  }}">Liste de mes velos</a> */
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('publierVelos_new') }}">Ajouter un nouveau velo</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>      */
/* </div>*/
