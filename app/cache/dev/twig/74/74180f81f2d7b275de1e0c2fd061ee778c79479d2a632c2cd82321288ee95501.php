<?php

/* digital_pilotCmsBundle:Default:index.html.twig */
class __TwigTemplate_c403937bb938534de4b5f9788752df361cf2e4dc10df63a546b4ff826e435419 extends Twig_Template
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
        $__internal_4502a5abb364060ec4330754f13cebb5bc0928d19e610eb11921536691f7918a = $this->env->getExtension("native_profiler");
        $__internal_4502a5abb364060ec4330754f13cebb5bc0928d19e610eb11921536691f7918a->enter($__internal_4502a5abb364060ec4330754f13cebb5bc0928d19e610eb11921536691f7918a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "digital_pilotCmsBundle:Default:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Connexion</title>
    <!-- Boostrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/template/css/bootstrap.css"), "html", null, true);
        echo "\">
    <!-- Font awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/template/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Less -->
    <link rel=\"stylesheet/less\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/template/css/styles.less"), "html", null, true);
        echo "\" />
</head>

<body>
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
                <button type=\"button\" class=\"btn btn-primary btn-lg\"><a href=\"choiceApp.html\">Connexion</a></button>
            </div>
        </div>
    </div>
</body>

<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/template/less.js/dist/less.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

</html>";
        
        $__internal_4502a5abb364060ec4330754f13cebb5bc0928d19e610eb11921536691f7918a->leave($__internal_4502a5abb364060ec4330754f13cebb5bc0928d19e610eb11921536691f7918a_prof);

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
        return array (  77 => 45,  42 => 13,  37 => 11,  32 => 9,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="fr">*/
/* */
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     <title>Connexion</title>*/
/*     <!-- Boostrap -->*/
/*     <link rel="stylesheet" href="{{ asset('/template/css/bootstrap.css') }}">*/
/*     <!-- Font awesome -->*/
/*     <link rel="stylesheet" href="{{ asset('/template/font-awesome/css/font-awesome.min.css') }}">*/
/*     <!-- Less -->*/
/*     <link rel="stylesheet/less" type="text/css" href="{{ asset('/template/css/styles.less') }}" />*/
/* </head>*/
/* */
/* <body>*/
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
/*                 <button type="button" class="btn btn-primary btn-lg"><a href="choiceApp.html">Connexion</a></button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </body>*/
/* */
/* <script src="{{ asset('/template/less.js/dist/less.min.js') }}" type="text/javascript"></script>*/
/* */
/* </html>*/
