<?php

/* EcommerceBundle:Default:panier/layout/panier.html.twig */
class __TwigTemplate_feb2969f6b0b16204ccf331a52b73f66a6bddb8805c25cfb40c1d1911c21aef7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea4f7e36fb5d5f8829b60e8d5222ef900b903c1db6358cea4179ead988635c78 = $this->env->getExtension("native_profiler");
        $__internal_ea4f7e36fb5d5f8829b60e8d5222ef900b903c1db6358cea4179ead988635c78->enter($__internal_ea4f7e36fb5d5f8829b60e8d5222ef900b903c1db6358cea4179ead988635c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceBundle:Default:panier/layout/panier.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea4f7e36fb5d5f8829b60e8d5222ef900b903c1db6358cea4179ead988635c78->leave($__internal_ea4f7e36fb5d5f8829b60e8d5222ef900b903c1db6358cea4179ead988635c78_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_975a2f2a53de2bd59f3de5aad0cb548da6a3678dfe547228de9582c11785ff3d = $this->env->getExtension("native_profiler");
        $__internal_975a2f2a53de2bd59f3de5aad0cb548da6a3678dfe547228de9582c11785ff3d->enter($__internal_975a2f2a53de2bd59f3de5aad0cb548da6a3678dfe547228de9582c11785ff3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 9
        $this->loadTemplate("::modulesUsed/navigation.html.twig", "EcommerceBundle:Default:panier/layout/panier.html.twig", 9)->display($context);
        // line 10
        echo "            </div>

            <div class=\"span9\">
                <h2>Votre parnier</h2>
                <form>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>Références</th>
                            <th>Quantité</th>
                            <th>Prix unitaire</th>
                            <th>Total HT</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>AB29837</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>333,33€</td>
                            <td>333,33€</td>
                        </tr>
                        <tr>
                            <td>AC34423</td>
                            <td>
                                <select class=\"span1\"><option>1</option></select>&nbsp;
                                <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                <a href=\"#\"><i class=\"icon-trash\"></i></a>
                            </td>
                            <td>333,33€</td>
                            <td>666,66€</td>
                        </tr>
                        </tbody>
                    </table>
                </form>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt>
                    <dd>799,99€</dd>

                    <dt>TVA :</dt>
                    <dd>200€</dd>

                    <dt>Total:</dt>
                    <dd>999,99€</dd>
                </dl>
                <div class=\"clearfix\"></div>
                <a href=\"livraison.php\" class=\"btn btn-success pull-right\">Valider mon panier</a>
                <a href=\"index.php\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>

        </div>
    </div>

";
        
        $__internal_975a2f2a53de2bd59f3de5aad0cb548da6a3678dfe547228de9582c11785ff3d->leave($__internal_975a2f2a53de2bd59f3de5aad0cb548da6a3678dfe547228de9582c11785ff3d_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceBundle:Default:panier/layout/panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  46 => 9,  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/* */
/*             <div class="span3">*/
/*                 {% include '::modulesUsed/navigation.html.twig' %}*/
/*             </div>*/
/* */
/*             <div class="span9">*/
/*                 <h2>Votre parnier</h2>*/
/*                 <form>*/
/*                     <table class="table table-striped table-hover">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>Références</th>*/
/*                             <th>Quantité</th>*/
/*                             <th>Prix unitaire</th>*/
/*                             <th>Total HT</th>*/
/*                         </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                         <tr>*/
/*                             <td>AB29837</td>*/
/*                             <td>*/
/*                                 <select class="span1"><option>1</option></select>&nbsp;*/
/*                                 <a href="#"><i class="icon-refresh"></i></a>*/
/*                                 <a href="#"><i class="icon-trash"></i></a>*/
/*                             </td>*/
/*                             <td>333,33€</td>*/
/*                             <td>333,33€</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <td>AC34423</td>*/
/*                             <td>*/
/*                                 <select class="span1"><option>1</option></select>&nbsp;*/
/*                                 <a href="#"><i class="icon-refresh"></i></a>*/
/*                                 <a href="#"><i class="icon-trash"></i></a>*/
/*                             </td>*/
/*                             <td>333,33€</td>*/
/*                             <td>666,66€</td>*/
/*                         </tr>*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </form>*/
/* */
/*                 <dl class="dl-horizontal pull-right">*/
/*                     <dt>Total HT :</dt>*/
/*                     <dd>799,99€</dd>*/
/* */
/*                     <dt>TVA :</dt>*/
/*                     <dd>200€</dd>*/
/* */
/*                     <dt>Total:</dt>*/
/*                     <dd>999,99€</dd>*/
/*                 </dl>*/
/*                 <div class="clearfix"></div>*/
/*                 <a href="livraison.php" class="btn btn-success pull-right">Valider mon panier</a>*/
/*                 <a href="index.php" class="btn btn-primary">Continuer mes achats</a>*/
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
