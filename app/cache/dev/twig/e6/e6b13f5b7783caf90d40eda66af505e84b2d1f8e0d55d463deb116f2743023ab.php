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
        $__internal_a97022297813dfe4a62cab3b163d5a90722cd5ca9c9d89647bfc0427682d81fe = $this->env->getExtension("native_profiler");
        $__internal_a97022297813dfe4a62cab3b163d5a90722cd5ca9c9d89647bfc0427682d81fe->enter($__internal_a97022297813dfe4a62cab3b163d5a90722cd5ca9c9d89647bfc0427682d81fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a97022297813dfe4a62cab3b163d5a90722cd5ca9c9d89647bfc0427682d81fe->leave($__internal_a97022297813dfe4a62cab3b163d5a90722cd5ca9c9d89647bfc0427682d81fe_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6740f5970d0a63d525b1119ec802319b760e394b863fa1f72000a371003ea15f = $this->env->getExtension("native_profiler");
        $__internal_6740f5970d0a63d525b1119ec802319b760e394b863fa1f72000a371003ea15f->enter($__internal_6740f5970d0a63d525b1119ec802319b760e394b863fa1f72000a371003ea15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6740f5970d0a63d525b1119ec802319b760e394b863fa1f72000a371003ea15f->leave($__internal_6740f5970d0a63d525b1119ec802319b760e394b863fa1f72000a371003ea15f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f6aff96bf36d2a159b9e4e9f2ba2f022eee3fae881f0008790a55abad31603b = $this->env->getExtension("native_profiler");
        $__internal_2f6aff96bf36d2a159b9e4e9f2ba2f022eee3fae881f0008790a55abad31603b->enter($__internal_2f6aff96bf36d2a159b9e4e9f2ba2f022eee3fae881f0008790a55abad31603b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2f6aff96bf36d2a159b9e4e9f2ba2f022eee3fae881f0008790a55abad31603b->leave($__internal_2f6aff96bf36d2a159b9e4e9f2ba2f022eee3fae881f0008790a55abad31603b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fb090c263c779daaac1446899537b2df75b95f21dc22eddee84dca983d6cc6c = $this->env->getExtension("native_profiler");
        $__internal_6fb090c263c779daaac1446899537b2df75b95f21dc22eddee84dca983d6cc6c->enter($__internal_6fb090c263c779daaac1446899537b2df75b95f21dc22eddee84dca983d6cc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6fb090c263c779daaac1446899537b2df75b95f21dc22eddee84dca983d6cc6c->leave($__internal_6fb090c263c779daaac1446899537b2df75b95f21dc22eddee84dca983d6cc6c_prof);

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
