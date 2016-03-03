<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3ee2e3c8e21c3aca92e1ab5b8912e8a67048986ef7a3278f0fe24e9fede5ed45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a713e90f028b47a502680b442c3b5c20418695d33fd6b11e421498810108b6d = $this->env->getExtension("native_profiler");
        $__internal_1a713e90f028b47a502680b442c3b5c20418695d33fd6b11e421498810108b6d->enter($__internal_1a713e90f028b47a502680b442c3b5c20418695d33fd6b11e421498810108b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a713e90f028b47a502680b442c3b5c20418695d33fd6b11e421498810108b6d->leave($__internal_1a713e90f028b47a502680b442c3b5c20418695d33fd6b11e421498810108b6d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_517f894c09a0bb7e663f1817cae5e03e0d8c86c73078a2eb0a18166bcabd5fe7 = $this->env->getExtension("native_profiler");
        $__internal_517f894c09a0bb7e663f1817cae5e03e0d8c86c73078a2eb0a18166bcabd5fe7->enter($__internal_517f894c09a0bb7e663f1817cae5e03e0d8c86c73078a2eb0a18166bcabd5fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_517f894c09a0bb7e663f1817cae5e03e0d8c86c73078a2eb0a18166bcabd5fe7->leave($__internal_517f894c09a0bb7e663f1817cae5e03e0d8c86c73078a2eb0a18166bcabd5fe7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1894523f268e88df56460dc17de2928ffc57ddd2a59b63d94498bd2d78e345a = $this->env->getExtension("native_profiler");
        $__internal_b1894523f268e88df56460dc17de2928ffc57ddd2a59b63d94498bd2d78e345a->enter($__internal_b1894523f268e88df56460dc17de2928ffc57ddd2a59b63d94498bd2d78e345a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b1894523f268e88df56460dc17de2928ffc57ddd2a59b63d94498bd2d78e345a->leave($__internal_b1894523f268e88df56460dc17de2928ffc57ddd2a59b63d94498bd2d78e345a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f297d852a0180a1751894e916255bf06162a590376b38976ced2b9c29d9b4e3d = $this->env->getExtension("native_profiler");
        $__internal_f297d852a0180a1751894e916255bf06162a590376b38976ced2b9c29d9b4e3d->enter($__internal_f297d852a0180a1751894e916255bf06162a590376b38976ced2b9c29d9b4e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f297d852a0180a1751894e916255bf06162a590376b38976ced2b9c29d9b4e3d->leave($__internal_f297d852a0180a1751894e916255bf06162a590376b38976ced2b9c29d9b4e3d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
