<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ca2f20669b4832dce5df790803d9599a7f66679e0e4a8108f7956475909ddbd5 extends Twig_Template
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
        $__internal_b61b02c862c7f3b25617f7b6fa3602d2ed9c08a2f1c47b5467d531d010017d58 = $this->env->getExtension("native_profiler");
        $__internal_b61b02c862c7f3b25617f7b6fa3602d2ed9c08a2f1c47b5467d531d010017d58->enter($__internal_b61b02c862c7f3b25617f7b6fa3602d2ed9c08a2f1c47b5467d531d010017d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b61b02c862c7f3b25617f7b6fa3602d2ed9c08a2f1c47b5467d531d010017d58->leave($__internal_b61b02c862c7f3b25617f7b6fa3602d2ed9c08a2f1c47b5467d531d010017d58_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63ec66e40ab2891312814f5e862e9d15fd0ad784ad0800f19943a55c864244ca = $this->env->getExtension("native_profiler");
        $__internal_63ec66e40ab2891312814f5e862e9d15fd0ad784ad0800f19943a55c864244ca->enter($__internal_63ec66e40ab2891312814f5e862e9d15fd0ad784ad0800f19943a55c864244ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_63ec66e40ab2891312814f5e862e9d15fd0ad784ad0800f19943a55c864244ca->leave($__internal_63ec66e40ab2891312814f5e862e9d15fd0ad784ad0800f19943a55c864244ca_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_28f4cb8dba2e2cb7f2dd3968d67b0b7512bf232bf78b4cae2f2d4713c65c9a09 = $this->env->getExtension("native_profiler");
        $__internal_28f4cb8dba2e2cb7f2dd3968d67b0b7512bf232bf78b4cae2f2d4713c65c9a09->enter($__internal_28f4cb8dba2e2cb7f2dd3968d67b0b7512bf232bf78b4cae2f2d4713c65c9a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_28f4cb8dba2e2cb7f2dd3968d67b0b7512bf232bf78b4cae2f2d4713c65c9a09->leave($__internal_28f4cb8dba2e2cb7f2dd3968d67b0b7512bf232bf78b4cae2f2d4713c65c9a09_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_45bf7e2a566d9150054716571df73bce5f8d06aa8d00f1987edfca8ee43f5a70 = $this->env->getExtension("native_profiler");
        $__internal_45bf7e2a566d9150054716571df73bce5f8d06aa8d00f1987edfca8ee43f5a70->enter($__internal_45bf7e2a566d9150054716571df73bce5f8d06aa8d00f1987edfca8ee43f5a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_45bf7e2a566d9150054716571df73bce5f8d06aa8d00f1987edfca8ee43f5a70->leave($__internal_45bf7e2a566d9150054716571df73bce5f8d06aa8d00f1987edfca8ee43f5a70_prof);

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
