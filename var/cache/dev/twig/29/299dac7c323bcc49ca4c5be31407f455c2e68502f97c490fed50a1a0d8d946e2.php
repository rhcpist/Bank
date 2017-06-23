<?php

/* ::base.html.twig */
class __TwigTemplate_ccb2d7a56728370a159a102cfa7cb71092bc94372cdeb05c34ae3ee63e79a9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f8a0366fb377a25f0f68fa2b4cc66a623dd0767939201a12a37874948779c17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f8a0366fb377a25f0f68fa2b4cc66a623dd0767939201a12a37874948779c17->enter($__internal_1f8a0366fb377a25f0f68fa2b4cc66a623dd0767939201a12a37874948779c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_700bec8eb1e99af9754e0278baa5a2b8d152c0ee88ee94207e615ac65e4013e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_700bec8eb1e99af9754e0278baa5a2b8d152c0ee88ee94207e615ac65e4013e0->enter($__internal_700bec8eb1e99af9754e0278baa5a2b8d152c0ee88ee94207e615ac65e4013e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dmitriy\">
    <link rel=\"icon\" href=\"favicon.ico\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\">
    <!-- Latest compiled and minified JavaScript -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
    <![endif]-->
</head>

<body>

<div class=\"container\">
    ";
        // line 32
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "</body>
</html>";
        
        $__internal_1f8a0366fb377a25f0f68fa2b4cc66a623dd0767939201a12a37874948779c17->leave($__internal_1f8a0366fb377a25f0f68fa2b4cc66a623dd0767939201a12a37874948779c17_prof);

        
        $__internal_700bec8eb1e99af9754e0278baa5a2b8d152c0ee88ee94207e615ac65e4013e0->leave($__internal_700bec8eb1e99af9754e0278baa5a2b8d152c0ee88ee94207e615ac65e4013e0_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eff293fd5cd44e624bf7b39da513cdda9d7771889c96ee725c5b481e13bb4b9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff293fd5cd44e624bf7b39da513cdda9d7771889c96ee725c5b481e13bb4b9d->enter($__internal_eff293fd5cd44e624bf7b39da513cdda9d7771889c96ee725c5b481e13bb4b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0ce44212332ab0e5a360948ad2ec76fea3dfe062a73e0eac193858f4c6a19129 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce44212332ab0e5a360948ad2ec76fea3dfe062a73e0eac193858f4c6a19129->enter($__internal_0ce44212332ab0e5a360948ad2ec76fea3dfe062a73e0eac193858f4c6a19129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0ce44212332ab0e5a360948ad2ec76fea3dfe062a73e0eac193858f4c6a19129->leave($__internal_0ce44212332ab0e5a360948ad2ec76fea3dfe062a73e0eac193858f4c6a19129_prof);

        
        $__internal_eff293fd5cd44e624bf7b39da513cdda9d7771889c96ee725c5b481e13bb4b9d->leave($__internal_eff293fd5cd44e624bf7b39da513cdda9d7771889c96ee725c5b481e13bb4b9d_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e38c8eaf3d89870fb8e5a8808d9ce38745cc1cedd6d1c80eeb752704a350f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e38c8eaf3d89870fb8e5a8808d9ce38745cc1cedd6d1c80eeb752704a350f7f->enter($__internal_3e38c8eaf3d89870fb8e5a8808d9ce38745cc1cedd6d1c80eeb752704a350f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e994b75893342bfbf66435cb207276da7271f678ed8befa48dff9b8cbcfe423 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e994b75893342bfbf66435cb207276da7271f678ed8befa48dff9b8cbcfe423->enter($__internal_6e994b75893342bfbf66435cb207276da7271f678ed8befa48dff9b8cbcfe423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bank info datatable";
        
        $__internal_6e994b75893342bfbf66435cb207276da7271f678ed8befa48dff9b8cbcfe423->leave($__internal_6e994b75893342bfbf66435cb207276da7271f678ed8befa48dff9b8cbcfe423_prof);

        
        $__internal_3e38c8eaf3d89870fb8e5a8808d9ce38745cc1cedd6d1c80eeb752704a350f7f->leave($__internal_3e38c8eaf3d89870fb8e5a8808d9ce38745cc1cedd6d1c80eeb752704a350f7f_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_472e70dddb986e2ece8d31625183b2be5c0378f2fba117d60284bce96cebaa05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472e70dddb986e2ece8d31625183b2be5c0378f2fba117d60284bce96cebaa05->enter($__internal_472e70dddb986e2ece8d31625183b2be5c0378f2fba117d60284bce96cebaa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_aca1dd12e0a7dcaf416b222b8d956a3f19981ab4dcc3c7e509bd19f2038e0c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca1dd12e0a7dcaf416b222b8d956a3f19981ab4dcc3c7e509bd19f2038e0c5e->enter($__internal_aca1dd12e0a7dcaf416b222b8d956a3f19981ab4dcc3c7e509bd19f2038e0c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_aca1dd12e0a7dcaf416b222b8d956a3f19981ab4dcc3c7e509bd19f2038e0c5e->leave($__internal_aca1dd12e0a7dcaf416b222b8d956a3f19981ab4dcc3c7e509bd19f2038e0c5e_prof);

        
        $__internal_472e70dddb986e2ece8d31625183b2be5c0378f2fba117d60284bce96cebaa05->leave($__internal_472e70dddb986e2ece8d31625183b2be5c0378f2fba117d60284bce96cebaa05_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec847f86e6c46fb8e59e703844796343a7f91160b15530dc712cbd570e60c915 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec847f86e6c46fb8e59e703844796343a7f91160b15530dc712cbd570e60c915->enter($__internal_ec847f86e6c46fb8e59e703844796343a7f91160b15530dc712cbd570e60c915_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2ad6b3a7a2d887a61c91fb4d2ef1cb801fb239c59593dd4526be999ddd5b7427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad6b3a7a2d887a61c91fb4d2ef1cb801fb239c59593dd4526be999ddd5b7427->enter($__internal_2ad6b3a7a2d887a61c91fb4d2ef1cb801fb239c59593dd4526be999ddd5b7427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2ad6b3a7a2d887a61c91fb4d2ef1cb801fb239c59593dd4526be999ddd5b7427->leave($__internal_2ad6b3a7a2d887a61c91fb4d2ef1cb801fb239c59593dd4526be999ddd5b7427_prof);

        
        $__internal_ec847f86e6c46fb8e59e703844796343a7f91160b15530dc712cbd570e60c915->leave($__internal_ec847f86e6c46fb8e59e703844796343a7f91160b15530dc712cbd570e60c915_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  129 => 32,  111 => 13,  94 => 11,  83 => 43,  81 => 42,  70 => 33,  68 => 32,  46 => 13,  43 => 12,  41 => 11,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Dmitriy\">
    <link rel=\"icon\" href=\"favicon.ico\">
    {% block stylesheets %}{% endblock %}

    <title>{% block title %}Bank info datatable{% endblock %}</title>


    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css\">
    <!-- Latest compiled and minified JavaScript -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
    <![endif]-->
</head>

<body>

<div class=\"container\">
    {% block content %}{% endblock %}
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
<script src=\"https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js\"></script>
{% block javascripts %}{% endblock %}
</body>
</html>", "::base.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/base.html.twig");
    }
}
