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
        $__internal_ef8510142e25bdc8a3d8d06e2bc1bd4dfb47064d7e6c555d90497b9d0999bc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef8510142e25bdc8a3d8d06e2bc1bd4dfb47064d7e6c555d90497b9d0999bc86->enter($__internal_ef8510142e25bdc8a3d8d06e2bc1bd4dfb47064d7e6c555d90497b9d0999bc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_7ac9195f9636e91643ec3b25ce1961ffe00e685eb51807079f708f2abce1306e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac9195f9636e91643ec3b25ce1961ffe00e685eb51807079f708f2abce1306e->enter($__internal_7ac9195f9636e91643ec3b25ce1961ffe00e685eb51807079f708f2abce1306e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
    <!-- Latest compiled and minified JavaScript -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>

<body>

<div class=\"container\">
    ";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js\"></script>
";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "</body>
</html>";
        
        $__internal_ef8510142e25bdc8a3d8d06e2bc1bd4dfb47064d7e6c555d90497b9d0999bc86->leave($__internal_ef8510142e25bdc8a3d8d06e2bc1bd4dfb47064d7e6c555d90497b9d0999bc86_prof);

        
        $__internal_7ac9195f9636e91643ec3b25ce1961ffe00e685eb51807079f708f2abce1306e->leave($__internal_7ac9195f9636e91643ec3b25ce1961ffe00e685eb51807079f708f2abce1306e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f908b3a93909f89f48c9aaf84c792cbd0f1f0728a1cd558a561c89a20cd6616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f908b3a93909f89f48c9aaf84c792cbd0f1f0728a1cd558a561c89a20cd6616->enter($__internal_5f908b3a93909f89f48c9aaf84c792cbd0f1f0728a1cd558a561c89a20cd6616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d166e8127ba07805b3789279b8d1febf2a2ad7a7d7b4969fe7f1f16518c4ac81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d166e8127ba07805b3789279b8d1febf2a2ad7a7d7b4969fe7f1f16518c4ac81->enter($__internal_d166e8127ba07805b3789279b8d1febf2a2ad7a7d7b4969fe7f1f16518c4ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d166e8127ba07805b3789279b8d1febf2a2ad7a7d7b4969fe7f1f16518c4ac81->leave($__internal_d166e8127ba07805b3789279b8d1febf2a2ad7a7d7b4969fe7f1f16518c4ac81_prof);

        
        $__internal_5f908b3a93909f89f48c9aaf84c792cbd0f1f0728a1cd558a561c89a20cd6616->leave($__internal_5f908b3a93909f89f48c9aaf84c792cbd0f1f0728a1cd558a561c89a20cd6616_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_2589df61562d3b7ad4cee9dc556126f41af082eb65781f10b4909bcaf336bac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2589df61562d3b7ad4cee9dc556126f41af082eb65781f10b4909bcaf336bac1->enter($__internal_2589df61562d3b7ad4cee9dc556126f41af082eb65781f10b4909bcaf336bac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_695e6093c305e586297a70e7b5ba732bedc04f2a14051d31cd3242034b9536d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695e6093c305e586297a70e7b5ba732bedc04f2a14051d31cd3242034b9536d5->enter($__internal_695e6093c305e586297a70e7b5ba732bedc04f2a14051d31cd3242034b9536d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Something Clever Here!";
        
        $__internal_695e6093c305e586297a70e7b5ba732bedc04f2a14051d31cd3242034b9536d5->leave($__internal_695e6093c305e586297a70e7b5ba732bedc04f2a14051d31cd3242034b9536d5_prof);

        
        $__internal_2589df61562d3b7ad4cee9dc556126f41af082eb65781f10b4909bcaf336bac1->leave($__internal_2589df61562d3b7ad4cee9dc556126f41af082eb65781f10b4909bcaf336bac1_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_45a6bdfb814c515cce1f59db38bc58915de7f82a8564e14d6ebd1198a3f13a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a6bdfb814c515cce1f59db38bc58915de7f82a8564e14d6ebd1198a3f13a6d->enter($__internal_45a6bdfb814c515cce1f59db38bc58915de7f82a8564e14d6ebd1198a3f13a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_10b63f6a8cb6f6369288a45268fde413fd50d3b3c511a75d55c70bf461ed52cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10b63f6a8cb6f6369288a45268fde413fd50d3b3c511a75d55c70bf461ed52cd->enter($__internal_10b63f6a8cb6f6369288a45268fde413fd50d3b3c511a75d55c70bf461ed52cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_10b63f6a8cb6f6369288a45268fde413fd50d3b3c511a75d55c70bf461ed52cd->leave($__internal_10b63f6a8cb6f6369288a45268fde413fd50d3b3c511a75d55c70bf461ed52cd_prof);

        
        $__internal_45a6bdfb814c515cce1f59db38bc58915de7f82a8564e14d6ebd1198a3f13a6d->leave($__internal_45a6bdfb814c515cce1f59db38bc58915de7f82a8564e14d6ebd1198a3f13a6d_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_027d1eec96289f794a8630ac2a1532f882ed13a07e84e3ac451ee3d5cf313424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_027d1eec96289f794a8630ac2a1532f882ed13a07e84e3ac451ee3d5cf313424->enter($__internal_027d1eec96289f794a8630ac2a1532f882ed13a07e84e3ac451ee3d5cf313424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a64439356680cf881218dba772f703c9f4784d6ff49b0578ab404ea6aa7bb833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64439356680cf881218dba772f703c9f4784d6ff49b0578ab404ea6aa7bb833->enter($__internal_a64439356680cf881218dba772f703c9f4784d6ff49b0578ab404ea6aa7bb833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a64439356680cf881218dba772f703c9f4784d6ff49b0578ab404ea6aa7bb833->leave($__internal_a64439356680cf881218dba772f703c9f4784d6ff49b0578ab404ea6aa7bb833_prof);

        
        $__internal_027d1eec96289f794a8630ac2a1532f882ed13a07e84e3ac451ee3d5cf313424->leave($__internal_027d1eec96289f794a8630ac2a1532f882ed13a07e84e3ac451ee3d5cf313424_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  143 => 39,  126 => 30,  108 => 13,  91 => 11,  80 => 40,  78 => 39,  68 => 31,  66 => 30,  46 => 13,  43 => 12,  41 => 11,  29 => 1,);
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

    <title>{% block title %}Something Clever Here!{% endblock %}</title>


    <!-- Latest compiled and minified CSS -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css\">
    <!-- Latest compiled and minified JavaScript -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
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
{% block javascripts %}{% endblock %}
</body>
</html>", "::base.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/base.html.twig");
    }
}
