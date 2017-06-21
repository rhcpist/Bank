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
        $__internal_2c8e0f85c79385cf90c3760b8991e4dfe70d54f763730e6d016ea77d6562f49b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8e0f85c79385cf90c3760b8991e4dfe70d54f763730e6d016ea77d6562f49b->enter($__internal_2c8e0f85c79385cf90c3760b8991e4dfe70d54f763730e6d016ea77d6562f49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_49dd8069c8b1d40d3bede825ee56bb032d74e363bdb9ab5f3c71bfb8efaa7713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49dd8069c8b1d40d3bede825ee56bb032d74e363bdb9ab5f3c71bfb8efaa7713->enter($__internal_49dd8069c8b1d40d3bede825ee56bb032d74e363bdb9ab5f3c71bfb8efaa7713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2c8e0f85c79385cf90c3760b8991e4dfe70d54f763730e6d016ea77d6562f49b->leave($__internal_2c8e0f85c79385cf90c3760b8991e4dfe70d54f763730e6d016ea77d6562f49b_prof);

        
        $__internal_49dd8069c8b1d40d3bede825ee56bb032d74e363bdb9ab5f3c71bfb8efaa7713->leave($__internal_49dd8069c8b1d40d3bede825ee56bb032d74e363bdb9ab5f3c71bfb8efaa7713_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_611f765896849008ddd83e16eb0f72a3b8c0cf5a4a7ecf71d734c100b7bb62bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_611f765896849008ddd83e16eb0f72a3b8c0cf5a4a7ecf71d734c100b7bb62bf->enter($__internal_611f765896849008ddd83e16eb0f72a3b8c0cf5a4a7ecf71d734c100b7bb62bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e3c494beee6ef502b56882ae9c32986c8d24b2a2cacc89f4d462c193ca22c28e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c494beee6ef502b56882ae9c32986c8d24b2a2cacc89f4d462c193ca22c28e->enter($__internal_e3c494beee6ef502b56882ae9c32986c8d24b2a2cacc89f4d462c193ca22c28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e3c494beee6ef502b56882ae9c32986c8d24b2a2cacc89f4d462c193ca22c28e->leave($__internal_e3c494beee6ef502b56882ae9c32986c8d24b2a2cacc89f4d462c193ca22c28e_prof);

        
        $__internal_611f765896849008ddd83e16eb0f72a3b8c0cf5a4a7ecf71d734c100b7bb62bf->leave($__internal_611f765896849008ddd83e16eb0f72a3b8c0cf5a4a7ecf71d734c100b7bb62bf_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_f08b9051cae3a3bd84e84bbacb72acef8926beb2e1d93f70053225503f234ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f08b9051cae3a3bd84e84bbacb72acef8926beb2e1d93f70053225503f234ef0->enter($__internal_f08b9051cae3a3bd84e84bbacb72acef8926beb2e1d93f70053225503f234ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ecd5bf9e30aa15149cf409da638623ccef936f7cc81bce96c1e3b949988850c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd5bf9e30aa15149cf409da638623ccef936f7cc81bce96c1e3b949988850c2->enter($__internal_ecd5bf9e30aa15149cf409da638623ccef936f7cc81bce96c1e3b949988850c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Something Clever Here!";
        
        $__internal_ecd5bf9e30aa15149cf409da638623ccef936f7cc81bce96c1e3b949988850c2->leave($__internal_ecd5bf9e30aa15149cf409da638623ccef936f7cc81bce96c1e3b949988850c2_prof);

        
        $__internal_f08b9051cae3a3bd84e84bbacb72acef8926beb2e1d93f70053225503f234ef0->leave($__internal_f08b9051cae3a3bd84e84bbacb72acef8926beb2e1d93f70053225503f234ef0_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_6807e0c23ac501999bdadb78415f9633807f401564f9bdfff10fb27ef94497d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6807e0c23ac501999bdadb78415f9633807f401564f9bdfff10fb27ef94497d8->enter($__internal_6807e0c23ac501999bdadb78415f9633807f401564f9bdfff10fb27ef94497d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_224caeb5977e93daf3bf456a04d5536aa540a29ffbe6c9e35f471f95ea6a67bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224caeb5977e93daf3bf456a04d5536aa540a29ffbe6c9e35f471f95ea6a67bd->enter($__internal_224caeb5977e93daf3bf456a04d5536aa540a29ffbe6c9e35f471f95ea6a67bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_224caeb5977e93daf3bf456a04d5536aa540a29ffbe6c9e35f471f95ea6a67bd->leave($__internal_224caeb5977e93daf3bf456a04d5536aa540a29ffbe6c9e35f471f95ea6a67bd_prof);

        
        $__internal_6807e0c23ac501999bdadb78415f9633807f401564f9bdfff10fb27ef94497d8->leave($__internal_6807e0c23ac501999bdadb78415f9633807f401564f9bdfff10fb27ef94497d8_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_102a22556eab8102b7b6281169bead71d622e878caab0cd8c3438b3a41ea500b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_102a22556eab8102b7b6281169bead71d622e878caab0cd8c3438b3a41ea500b->enter($__internal_102a22556eab8102b7b6281169bead71d622e878caab0cd8c3438b3a41ea500b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f833a4fa113d57811132b42cbfa3d5accc80b9091ad5dd06d8cca8c81504da0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f833a4fa113d57811132b42cbfa3d5accc80b9091ad5dd06d8cca8c81504da0a->enter($__internal_f833a4fa113d57811132b42cbfa3d5accc80b9091ad5dd06d8cca8c81504da0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f833a4fa113d57811132b42cbfa3d5accc80b9091ad5dd06d8cca8c81504da0a->leave($__internal_f833a4fa113d57811132b42cbfa3d5accc80b9091ad5dd06d8cca8c81504da0a_prof);

        
        $__internal_102a22556eab8102b7b6281169bead71d622e878caab0cd8c3438b3a41ea500b->leave($__internal_102a22556eab8102b7b6281169bead71d622e878caab0cd8c3438b3a41ea500b_prof);

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
