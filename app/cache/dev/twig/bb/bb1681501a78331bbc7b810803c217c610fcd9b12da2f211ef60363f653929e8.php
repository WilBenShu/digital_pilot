<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_8bb146cba03c43d30c647fcbcd3d5d65c29202d9d74b15ddc8c0d876fc4ac061 extends Twig_Template
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
        $__internal_12c738e2446980bcc50cf38544a344079dec66f768bd6640d21399c1f6b1579a = $this->env->getExtension("native_profiler");
        $__internal_12c738e2446980bcc50cf38544a344079dec66f768bd6640d21399c1f6b1579a->enter($__internal_12c738e2446980bcc50cf38544a344079dec66f768bd6640d21399c1f6b1579a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12c738e2446980bcc50cf38544a344079dec66f768bd6640d21399c1f6b1579a->leave($__internal_12c738e2446980bcc50cf38544a344079dec66f768bd6640d21399c1f6b1579a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7dc00a814fb9e235057e6e44a198afa823a5408f1494b13d90a6852c724552ee = $this->env->getExtension("native_profiler");
        $__internal_7dc00a814fb9e235057e6e44a198afa823a5408f1494b13d90a6852c724552ee->enter($__internal_7dc00a814fb9e235057e6e44a198afa823a5408f1494b13d90a6852c724552ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7dc00a814fb9e235057e6e44a198afa823a5408f1494b13d90a6852c724552ee->leave($__internal_7dc00a814fb9e235057e6e44a198afa823a5408f1494b13d90a6852c724552ee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_db2aef93ce5fb2c8b9a0b27706d745bc413b51d47de29fc59b4f8c15c4588455 = $this->env->getExtension("native_profiler");
        $__internal_db2aef93ce5fb2c8b9a0b27706d745bc413b51d47de29fc59b4f8c15c4588455->enter($__internal_db2aef93ce5fb2c8b9a0b27706d745bc413b51d47de29fc59b4f8c15c4588455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_db2aef93ce5fb2c8b9a0b27706d745bc413b51d47de29fc59b4f8c15c4588455->leave($__internal_db2aef93ce5fb2c8b9a0b27706d745bc413b51d47de29fc59b4f8c15c4588455_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ad5916a334db6e6f6eebabc4c475b6fa97fbda628c962416e1bf6567362078f = $this->env->getExtension("native_profiler");
        $__internal_0ad5916a334db6e6f6eebabc4c475b6fa97fbda628c962416e1bf6567362078f->enter($__internal_0ad5916a334db6e6f6eebabc4c475b6fa97fbda628c962416e1bf6567362078f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ad5916a334db6e6f6eebabc4c475b6fa97fbda628c962416e1bf6567362078f->leave($__internal_0ad5916a334db6e6f6eebabc4c475b6fa97fbda628c962416e1bf6567362078f_prof);

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
