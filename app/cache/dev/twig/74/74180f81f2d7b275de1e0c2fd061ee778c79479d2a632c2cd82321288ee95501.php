<?php

/* digital_pilotCmsBundle:Default:index.html.twig */
class __TwigTemplate_c403937bb938534de4b5f9788752df361cf2e4dc10df63a546b4ff826e435419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("digital_pilotCmsBundle::layout.html.twig", "digital_pilotCmsBundle:Default:index.html.twig", 1);
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
        $__internal_0d6c831983c8745f45b1ed88c2385406b41c2ac13e4454a00e7f27214c917a11 = $this->env->getExtension("native_profiler");
        $__internal_0d6c831983c8745f45b1ed88c2385406b41c2ac13e4454a00e7f27214c917a11->enter($__internal_0d6c831983c8745f45b1ed88c2385406b41c2ac13e4454a00e7f27214c917a11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "digital_pilotCmsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d6c831983c8745f45b1ed88c2385406b41c2ac13e4454a00e7f27214c917a11->leave($__internal_0d6c831983c8745f45b1ed88c2385406b41c2ac13e4454a00e7f27214c917a11_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_d6b5e8ad2c65c4e162517eec9b664dcdaa38e2cb23028c403710a39c38ba5dc0 = $this->env->getExtension("native_profiler");
        $__internal_d6b5e8ad2c65c4e162517eec9b664dcdaa38e2cb23028c403710a39c38ba5dc0->enter($__internal_d6b5e8ad2c65c4e162517eec9b664dcdaa38e2cb23028c403710a39c38ba5dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <!-- Less -->
    <link rel=\"stylesheet/less\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/template/css/styles.less"), "html", null, true);
        echo "\" />
";
        
        $__internal_d6b5e8ad2c65c4e162517eec9b664dcdaa38e2cb23028c403710a39c38ba5dc0->leave($__internal_d6b5e8ad2c65c4e162517eec9b664dcdaa38e2cb23028c403710a39c38ba5dc0_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_0216b2154e5f010d0abb0d796213edb04e9269c1660b84e70c5957b14cb4d428 = $this->env->getExtension("native_profiler");
        $__internal_0216b2154e5f010d0abb0d796213edb04e9269c1660b84e70c5957b14cb4d428->enter($__internal_0216b2154e5f010d0abb0d796213edb04e9269c1660b84e70c5957b14cb4d428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-10 col-sm-8 col-md-4\">
                <div class=\"titreConnexion\">
                    <h1>Connexion à l'application</h1>
                </div>
                <form class=\"form-inline\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\"><i class=\"fa fa-envelope-o\"></i></div>
                            <input type=\"text\" class=\"form-control\" id=\"email\" placeholder=\"E-mail\">
                        </div>
                    </div>
                </form>
                <form class=\"form-inline\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></div>
                            <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Mot de passe\">
                        </div>
                    </div>
                </form>
                <button type=\"button\" class=\"btn btn-primary btn-lg\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("digital_pilot_choiceApp");
        echo "\">Connexion</a></button>
            </div>
        </div>
    </div>

";
        
        $__internal_0216b2154e5f010d0abb0d796213edb04e9269c1660b84e70c5957b14cb4d428->leave($__internal_0216b2154e5f010d0abb0d796213edb04e9269c1660b84e70c5957b14cb4d428_prof);

    }

    public function getTemplateName()
    {
        return "digital_pilotCmsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  59 => 9,  53 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "digital_pilotCmsBundle::layout.html.twig" %}*/
/* */
/* {% block style %}*/
/*     <!-- Less -->*/
/*     <link rel="stylesheet/less" type="text/css" href="{{ asset('/template/css/styles.less') }}" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-xs-10 col-sm-8 col-md-4">*/
/*                 <div class="titreConnexion">*/
/*                     <h1>Connexion à l'application</h1>*/
/*                 </div>*/
/*                 <form class="form-inline">*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <div class="input-group-addon"><i class="fa fa-envelope-o"></i></div>*/
/*                             <input type="text" class="form-control" id="email" placeholder="E-mail">*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*                 <form class="form-inline">*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <div class="input-group-addon"><i class="fa fa-lock"></i></div>*/
/*                             <input type="password" class="form-control" id="password" placeholder="Mot de passe">*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*                 <button type="button" class="btn btn-primary btn-lg"><a href="{{ path('digital_pilot_choiceApp') }}">Connexion</a></button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
