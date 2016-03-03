<?php

/* digital_pilotCmsBundle::layout.html.twig */
class __TwigTemplate_26b152e4a8c68db14ba264c13f13cf2d2eb28bd4c6d55f5772384f1e1f74844d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "digital_pilotCmsBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1977741605304878ff9da22e948517e67983d772c1a0b393e2c7993743d6057b = $this->env->getExtension("native_profiler");
        $__internal_1977741605304878ff9da22e948517e67983d772c1a0b393e2c7993743d6057b->enter($__internal_1977741605304878ff9da22e948517e67983d772c1a0b393e2c7993743d6057b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "digital_pilotCmsBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1977741605304878ff9da22e948517e67983d772c1a0b393e2c7993743d6057b->leave($__internal_1977741605304878ff9da22e948517e67983d772c1a0b393e2c7993743d6057b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5b98097c67d76749a7f3e91bf1645fc49fb9d0cd95bf77cc588eed2d3069a63 = $this->env->getExtension("native_profiler");
        $__internal_a5b98097c67d76749a7f3e91bf1645fc49fb9d0cd95bf77cc588eed2d3069a63->enter($__internal_a5b98097c67d76749a7f3e91bf1645fc49fb9d0cd95bf77cc588eed2d3069a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
        ";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 7
        echo "       
";
        
        $__internal_a5b98097c67d76749a7f3e91bf1645fc49fb9d0cd95bf77cc588eed2d3069a63->leave($__internal_a5b98097c67d76749a7f3e91bf1645fc49fb9d0cd95bf77cc588eed2d3069a63_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_1ed671f9d898c72b212952d4638eb6c107373f03594d122ab136f3d241312f94 = $this->env->getExtension("native_profiler");
        $__internal_1ed671f9d898c72b212952d4638eb6c107373f03594d122ab136f3d241312f94->enter($__internal_1ed671f9d898c72b212952d4638eb6c107373f03594d122ab136f3d241312f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_1ed671f9d898c72b212952d4638eb6c107373f03594d122ab136f3d241312f94->leave($__internal_1ed671f9d898c72b212952d4638eb6c107373f03594d122ab136f3d241312f94_prof);

    }

    public function getTemplateName()
    {
        return "digital_pilotCmsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  46 => 7,  44 => 6,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends "::base.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/* */
/*         {% block content %}{% endblock %}*/
/*        */
/* {% endblock %}*/
