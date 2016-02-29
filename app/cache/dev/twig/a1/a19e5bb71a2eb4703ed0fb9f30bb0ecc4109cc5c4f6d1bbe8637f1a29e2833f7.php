<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_21230948278ae8c8bf0a2396ccdabfd52e6cccc30509b20d2fb79e4050676951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0096df5bf9514c6ceebbee55988190463cb31ab998b3d80f99ca81169174afa2 = $this->env->getExtension("native_profiler");
        $__internal_0096df5bf9514c6ceebbee55988190463cb31ab998b3d80f99ca81169174afa2->enter($__internal_0096df5bf9514c6ceebbee55988190463cb31ab998b3d80f99ca81169174afa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0096df5bf9514c6ceebbee55988190463cb31ab998b3d80f99ca81169174afa2->leave($__internal_0096df5bf9514c6ceebbee55988190463cb31ab998b3d80f99ca81169174afa2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f8159324f3eede47338d31ce00fe18eabe0bf24f1c6463d847bd0d56b42e96d0 = $this->env->getExtension("native_profiler");
        $__internal_f8159324f3eede47338d31ce00fe18eabe0bf24f1c6463d847bd0d56b42e96d0->enter($__internal_f8159324f3eede47338d31ce00fe18eabe0bf24f1c6463d847bd0d56b42e96d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f8159324f3eede47338d31ce00fe18eabe0bf24f1c6463d847bd0d56b42e96d0->leave($__internal_f8159324f3eede47338d31ce00fe18eabe0bf24f1c6463d847bd0d56b42e96d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe1615779f671e894f907776c0c21488dde0419330736ceef0c044ba5cbbdc79 = $this->env->getExtension("native_profiler");
        $__internal_fe1615779f671e894f907776c0c21488dde0419330736ceef0c044ba5cbbdc79->enter($__internal_fe1615779f671e894f907776c0c21488dde0419330736ceef0c044ba5cbbdc79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fe1615779f671e894f907776c0c21488dde0419330736ceef0c044ba5cbbdc79->leave($__internal_fe1615779f671e894f907776c0c21488dde0419330736ceef0c044ba5cbbdc79_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5416e5fa44c376450f381c42dbd1dcd78feda5dd435d8f73e898747e8f4722ef = $this->env->getExtension("native_profiler");
        $__internal_5416e5fa44c376450f381c42dbd1dcd78feda5dd435d8f73e898747e8f4722ef->enter($__internal_5416e5fa44c376450f381c42dbd1dcd78feda5dd435d8f73e898747e8f4722ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5416e5fa44c376450f381c42dbd1dcd78feda5dd435d8f73e898747e8f4722ef->leave($__internal_5416e5fa44c376450f381c42dbd1dcd78feda5dd435d8f73e898747e8f4722ef_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
