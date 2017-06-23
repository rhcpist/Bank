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
        $__internal_84fb26aaa2e3df06ec2620638fc60d30efeedcc7060536e86535e9d8743cfe7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84fb26aaa2e3df06ec2620638fc60d30efeedcc7060536e86535e9d8743cfe7c->enter($__internal_84fb26aaa2e3df06ec2620638fc60d30efeedcc7060536e86535e9d8743cfe7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_9ae5ff6da65cab8ea7a7814a829c8fb1010b798628191a2687afa4c43a0d0682 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ae5ff6da65cab8ea7a7814a829c8fb1010b798628191a2687afa4c43a0d0682->enter($__internal_9ae5ff6da65cab8ea7a7814a829c8fb1010b798628191a2687afa4c43a0d0682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_84fb26aaa2e3df06ec2620638fc60d30efeedcc7060536e86535e9d8743cfe7c->leave($__internal_84fb26aaa2e3df06ec2620638fc60d30efeedcc7060536e86535e9d8743cfe7c_prof);

        
        $__internal_9ae5ff6da65cab8ea7a7814a829c8fb1010b798628191a2687afa4c43a0d0682->leave($__internal_9ae5ff6da65cab8ea7a7814a829c8fb1010b798628191a2687afa4c43a0d0682_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2fcfbd554683b842503e1c712f9f526eadcc224d357a5059387f2db461ea291f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fcfbd554683b842503e1c712f9f526eadcc224d357a5059387f2db461ea291f->enter($__internal_2fcfbd554683b842503e1c712f9f526eadcc224d357a5059387f2db461ea291f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e65bf00e82257704b3452600d3c616a245fb4b67857beec6b06dbb825827d08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e65bf00e82257704b3452600d3c616a245fb4b67857beec6b06dbb825827d08d->enter($__internal_e65bf00e82257704b3452600d3c616a245fb4b67857beec6b06dbb825827d08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e65bf00e82257704b3452600d3c616a245fb4b67857beec6b06dbb825827d08d->leave($__internal_e65bf00e82257704b3452600d3c616a245fb4b67857beec6b06dbb825827d08d_prof);

        
        $__internal_2fcfbd554683b842503e1c712f9f526eadcc224d357a5059387f2db461ea291f->leave($__internal_2fcfbd554683b842503e1c712f9f526eadcc224d357a5059387f2db461ea291f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_494839af8f0b5aba191cee2cd76e403127fa218519beb9026e00078882353abc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494839af8f0b5aba191cee2cd76e403127fa218519beb9026e00078882353abc->enter($__internal_494839af8f0b5aba191cee2cd76e403127fa218519beb9026e00078882353abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7182080fa5fbf185f71df5d9a93640c76dffa968248e78b929defa5de0961d4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7182080fa5fbf185f71df5d9a93640c76dffa968248e78b929defa5de0961d4e->enter($__internal_7182080fa5fbf185f71df5d9a93640c76dffa968248e78b929defa5de0961d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Bank info datatable";
        
        $__internal_7182080fa5fbf185f71df5d9a93640c76dffa968248e78b929defa5de0961d4e->leave($__internal_7182080fa5fbf185f71df5d9a93640c76dffa968248e78b929defa5de0961d4e_prof);

        
        $__internal_494839af8f0b5aba191cee2cd76e403127fa218519beb9026e00078882353abc->leave($__internal_494839af8f0b5aba191cee2cd76e403127fa218519beb9026e00078882353abc_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_b045caae272d0af98af43809707f04f5785e2dcdd458705287792699f5e60e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b045caae272d0af98af43809707f04f5785e2dcdd458705287792699f5e60e2a->enter($__internal_b045caae272d0af98af43809707f04f5785e2dcdd458705287792699f5e60e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_c354b2665ffa9b6292b157ca1a53b9fc79d72bd603210d682c52dc66fe76a302 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c354b2665ffa9b6292b157ca1a53b9fc79d72bd603210d682c52dc66fe76a302->enter($__internal_c354b2665ffa9b6292b157ca1a53b9fc79d72bd603210d682c52dc66fe76a302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_c354b2665ffa9b6292b157ca1a53b9fc79d72bd603210d682c52dc66fe76a302->leave($__internal_c354b2665ffa9b6292b157ca1a53b9fc79d72bd603210d682c52dc66fe76a302_prof);

        
        $__internal_b045caae272d0af98af43809707f04f5785e2dcdd458705287792699f5e60e2a->leave($__internal_b045caae272d0af98af43809707f04f5785e2dcdd458705287792699f5e60e2a_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b03c87332bcdf268adf837d2be4a0f4d36d140ebff1ca0e66715d96504c07e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b03c87332bcdf268adf837d2be4a0f4d36d140ebff1ca0e66715d96504c07e35->enter($__internal_b03c87332bcdf268adf837d2be4a0f4d36d140ebff1ca0e66715d96504c07e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3560cd005d0981524005ad2a47ea34a8206176f05943f26dbe8704b8c34e8e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3560cd005d0981524005ad2a47ea34a8206176f05943f26dbe8704b8c34e8e33->enter($__internal_3560cd005d0981524005ad2a47ea34a8206176f05943f26dbe8704b8c34e8e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3560cd005d0981524005ad2a47ea34a8206176f05943f26dbe8704b8c34e8e33->leave($__internal_3560cd005d0981524005ad2a47ea34a8206176f05943f26dbe8704b8c34e8e33_prof);

        
        $__internal_b03c87332bcdf268adf837d2be4a0f4d36d140ebff1ca0e66715d96504c07e35->leave($__internal_b03c87332bcdf268adf837d2be4a0f4d36d140ebff1ca0e66715d96504c07e35_prof);

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
