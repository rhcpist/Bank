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
        $__internal_6e66564d482e366a1a5c7ccbce0dc274579db9a95fd5be2ffc379ccd61fd93c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e66564d482e366a1a5c7ccbce0dc274579db9a95fd5be2ffc379ccd61fd93c2->enter($__internal_6e66564d482e366a1a5c7ccbce0dc274579db9a95fd5be2ffc379ccd61fd93c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_f2953e9dd4bfd85a680879283ffd091cc8438dfbfe0450fd7b88b0d3e16b9d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2953e9dd4bfd85a680879283ffd091cc8438dfbfe0450fd7b88b0d3e16b9d43->enter($__internal_f2953e9dd4bfd85a680879283ffd091cc8438dfbfe0450fd7b88b0d3e16b9d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6e66564d482e366a1a5c7ccbce0dc274579db9a95fd5be2ffc379ccd61fd93c2->leave($__internal_6e66564d482e366a1a5c7ccbce0dc274579db9a95fd5be2ffc379ccd61fd93c2_prof);

        
        $__internal_f2953e9dd4bfd85a680879283ffd091cc8438dfbfe0450fd7b88b0d3e16b9d43->leave($__internal_f2953e9dd4bfd85a680879283ffd091cc8438dfbfe0450fd7b88b0d3e16b9d43_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56c781a09a79030d0eee3a140560851edfef56b2e71b56e865cad457558d26ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56c781a09a79030d0eee3a140560851edfef56b2e71b56e865cad457558d26ee->enter($__internal_56c781a09a79030d0eee3a140560851edfef56b2e71b56e865cad457558d26ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9a1d1caf7038a793fd4dde7144a9e0736bcb014e9d9158b9bf7fae536cfbf1b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1d1caf7038a793fd4dde7144a9e0736bcb014e9d9158b9bf7fae536cfbf1b5->enter($__internal_9a1d1caf7038a793fd4dde7144a9e0736bcb014e9d9158b9bf7fae536cfbf1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9a1d1caf7038a793fd4dde7144a9e0736bcb014e9d9158b9bf7fae536cfbf1b5->leave($__internal_9a1d1caf7038a793fd4dde7144a9e0736bcb014e9d9158b9bf7fae536cfbf1b5_prof);

        
        $__internal_56c781a09a79030d0eee3a140560851edfef56b2e71b56e865cad457558d26ee->leave($__internal_56c781a09a79030d0eee3a140560851edfef56b2e71b56e865cad457558d26ee_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_646424fb7ca8c7a44778fa822b6dbe4190ed7888e0a40ca299e7500fca97395d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646424fb7ca8c7a44778fa822b6dbe4190ed7888e0a40ca299e7500fca97395d->enter($__internal_646424fb7ca8c7a44778fa822b6dbe4190ed7888e0a40ca299e7500fca97395d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c9656281b61262a42476b530fced4531271a2cf41093dda172f8031c973a20e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9656281b61262a42476b530fced4531271a2cf41093dda172f8031c973a20e9->enter($__internal_c9656281b61262a42476b530fced4531271a2cf41093dda172f8031c973a20e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bank info datatable";
        
        $__internal_c9656281b61262a42476b530fced4531271a2cf41093dda172f8031c973a20e9->leave($__internal_c9656281b61262a42476b530fced4531271a2cf41093dda172f8031c973a20e9_prof);

        
        $__internal_646424fb7ca8c7a44778fa822b6dbe4190ed7888e0a40ca299e7500fca97395d->leave($__internal_646424fb7ca8c7a44778fa822b6dbe4190ed7888e0a40ca299e7500fca97395d_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_8903b6d72408f92e7bb21fbfe71eaa211b0c92822bb0afbd87092fea51e0d367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8903b6d72408f92e7bb21fbfe71eaa211b0c92822bb0afbd87092fea51e0d367->enter($__internal_8903b6d72408f92e7bb21fbfe71eaa211b0c92822bb0afbd87092fea51e0d367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e7df097ef11ece0d892d06a1aa04d5f429b587ca4fdd3cf6fbe07a0007bdd229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7df097ef11ece0d892d06a1aa04d5f429b587ca4fdd3cf6fbe07a0007bdd229->enter($__internal_e7df097ef11ece0d892d06a1aa04d5f429b587ca4fdd3cf6fbe07a0007bdd229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_e7df097ef11ece0d892d06a1aa04d5f429b587ca4fdd3cf6fbe07a0007bdd229->leave($__internal_e7df097ef11ece0d892d06a1aa04d5f429b587ca4fdd3cf6fbe07a0007bdd229_prof);

        
        $__internal_8903b6d72408f92e7bb21fbfe71eaa211b0c92822bb0afbd87092fea51e0d367->leave($__internal_8903b6d72408f92e7bb21fbfe71eaa211b0c92822bb0afbd87092fea51e0d367_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7158f77921173fda6fc103ce35293a9a6ef6225d16cda8ef3644eff51e29f60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7158f77921173fda6fc103ce35293a9a6ef6225d16cda8ef3644eff51e29f60c->enter($__internal_7158f77921173fda6fc103ce35293a9a6ef6225d16cda8ef3644eff51e29f60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9e3fed886edb0985481faeec809f9a3e7268a4cc78c88a38735966ec07a7ddb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3fed886edb0985481faeec809f9a3e7268a4cc78c88a38735966ec07a7ddb0->enter($__internal_9e3fed886edb0985481faeec809f9a3e7268a4cc78c88a38735966ec07a7ddb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9e3fed886edb0985481faeec809f9a3e7268a4cc78c88a38735966ec07a7ddb0->leave($__internal_9e3fed886edb0985481faeec809f9a3e7268a4cc78c88a38735966ec07a7ddb0_prof);

        
        $__internal_7158f77921173fda6fc103ce35293a9a6ef6225d16cda8ef3644eff51e29f60c->leave($__internal_7158f77921173fda6fc103ce35293a9a6ef6225d16cda8ef3644eff51e29f60c_prof);

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
