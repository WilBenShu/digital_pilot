<?php

/* digital_pilotCmsBundle:Default:choiceApp.html.twig */
class __TwigTemplate_b591f1dad6789ab622637002af701fea20cb654b53f99a46fc245622e85d2792 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("digital_pilotCmsBundle::layout.html.twig", "digital_pilotCmsBundle:Default:choiceApp.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "digital_pilotCmsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47b0345fca307605ddda0cbd78b27380932f0a52ab1d1948ef49b02906b9ae1b = $this->env->getExtension("native_profiler");
        $__internal_47b0345fca307605ddda0cbd78b27380932f0a52ab1d1948ef49b02906b9ae1b->enter($__internal_47b0345fca307605ddda0cbd78b27380932f0a52ab1d1948ef49b02906b9ae1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "digital_pilotCmsBundle:Default:choiceApp.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47b0345fca307605ddda0cbd78b27380932f0a52ab1d1948ef49b02906b9ae1b->leave($__internal_47b0345fca307605ddda0cbd78b27380932f0a52ab1d1948ef49b02906b9ae1b_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_5aa44275b4fdc6cb4e591f69a328b2b41160ecae80523b5d9f2077914e3175f3 = $this->env->getExtension("native_profiler");
        $__internal_5aa44275b4fdc6cb4e591f69a328b2b41160ecae80523b5d9f2077914e3175f3->enter($__internal_5aa44275b4fdc6cb4e591f69a328b2b41160ecae80523b5d9f2077914e3175f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <!-- Less -->
    <link rel=\"stylesheet/less\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/template/css/choiceApp.less"), "html", null, true);
        echo "\" />
";
        
        $__internal_5aa44275b4fdc6cb4e591f69a328b2b41160ecae80523b5d9f2077914e3175f3->leave($__internal_5aa44275b4fdc6cb4e591f69a328b2b41160ecae80523b5d9f2077914e3175f3_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e821f21d483629c0288d0a2ceb24961c66ec5306fecc8f87690669a595571fa = $this->env->getExtension("native_profiler");
        $__internal_5e821f21d483629c0288d0a2ceb24961c66ec5306fecc8f87690669a595571fa->enter($__internal_5e821f21d483629c0288d0a2ceb24961c66ec5306fecc8f87690669a595571fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <h1 class=\"text-center\">Choix de l'application</h1>


            <div class=\"col-xs-2 col-md-3\">
                <a href=\"BoCommercant.html\" class=\"thumbnail\">
                   
                    <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/template/img/graph.png"), "html", null, true);
        echo "\" alt=\"Graph icon\">
                    <h3>Back Office</h3>
                </a>
            </div>


            <div class=\"col-xs-2 col-md-3\">
                <a href=\"gestionClient.html\" class=\"thumbnail\">
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/template/img/user.png"), "html", null, true);
        echo "\" alt=\"Graph icon\">
                    <h3>Gestion client</h3>
                </a>


            </div>
            <div class=\"col-xs-2 col-md-3\">
                <a href=\"slideshow.html\" class=\"thumbnail\">
                    <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/template/img/play.png"), "html", null, true);
        echo "\" alt=\"Graph icon\">
                    <h3>Slideshow</h3>
                </a>

            </div>
        </div>

";
        
        $__internal_5e821f21d483629c0288d0a2ceb24961c66ec5306fecc8f87690669a595571fa->leave($__internal_5e821f21d483629c0288d0a2ceb24961c66ec5306fecc8f87690669a595571fa_prof);

    }

    public function getTemplateName()
    {
        return "digital_pilotCmsBundle:Default:choiceApp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 34,  81 => 26,  70 => 18,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "digital_pilotCmsBundle::layout.html.twig" %}*/
/* */
/* {% block style %}*/
/*     <!-- Less -->*/
/*     <link rel="stylesheet/less" type="text/css" href="{{ asset('/template/css/choiceApp.less') }}" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <h1 class="text-center">Choix de l'application</h1>*/
/* */
/* */
/*             <div class="col-xs-2 col-md-3">*/
/*                 <a href="BoCommercant.html" class="thumbnail">*/
/*                    */
/*                     <img src="{{ asset('/template/img/graph.png') }}" alt="Graph icon">*/
/*                     <h3>Back Office</h3>*/
/*                 </a>*/
/*             </div>*/
/* */
/* */
/*             <div class="col-xs-2 col-md-3">*/
/*                 <a href="gestionClient.html" class="thumbnail">*/
/*                     <img src="{{ asset('/template/img/user.png') }}" alt="Graph icon">*/
/*                     <h3>Gestion client</h3>*/
/*                 </a>*/
/* */
/* */
/*             </div>*/
/*             <div class="col-xs-2 col-md-3">*/
/*                 <a href="slideshow.html" class="thumbnail">*/
/*                     <img src="{{ asset('/template/img/play.png') }}" alt="Graph icon">*/
/*                     <h3>Slideshow</h3>*/
/*                 </a>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
