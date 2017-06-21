<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c6a5e94f44c7b09bbbe5518699c774d3e4df0cb9b3b8c9ba487f7940b050d59a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4c424d17f1ca89252df4778edaea57503a7990be9aa71c929093824a812197b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4c424d17f1ca89252df4778edaea57503a7990be9aa71c929093824a812197b->enter($__internal_a4c424d17f1ca89252df4778edaea57503a7990be9aa71c929093824a812197b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_84180787f421edcba5b2d7ec2bbd325b98a3bc56f053880ad64461474e1b931b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84180787f421edcba5b2d7ec2bbd325b98a3bc56f053880ad64461474e1b931b->enter($__internal_84180787f421edcba5b2d7ec2bbd325b98a3bc56f053880ad64461474e1b931b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4c424d17f1ca89252df4778edaea57503a7990be9aa71c929093824a812197b->leave($__internal_a4c424d17f1ca89252df4778edaea57503a7990be9aa71c929093824a812197b_prof);

        
        $__internal_84180787f421edcba5b2d7ec2bbd325b98a3bc56f053880ad64461474e1b931b->leave($__internal_84180787f421edcba5b2d7ec2bbd325b98a3bc56f053880ad64461474e1b931b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a6a1dd8ce27761a45c959a74840783b5cc33af313417ce3eb33e02b71ebac85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a6a1dd8ce27761a45c959a74840783b5cc33af313417ce3eb33e02b71ebac85->enter($__internal_0a6a1dd8ce27761a45c959a74840783b5cc33af313417ce3eb33e02b71ebac85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_277ac5dfa3ed7487a4175f7ee37aaa4d461082d45c3d44571e1facef06db2f56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_277ac5dfa3ed7487a4175f7ee37aaa4d461082d45c3d44571e1facef06db2f56->enter($__internal_277ac5dfa3ed7487a4175f7ee37aaa4d461082d45c3d44571e1facef06db2f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_277ac5dfa3ed7487a4175f7ee37aaa4d461082d45c3d44571e1facef06db2f56->leave($__internal_277ac5dfa3ed7487a4175f7ee37aaa4d461082d45c3d44571e1facef06db2f56_prof);

        
        $__internal_0a6a1dd8ce27761a45c959a74840783b5cc33af313417ce3eb33e02b71ebac85->leave($__internal_0a6a1dd8ce27761a45c959a74840783b5cc33af313417ce3eb33e02b71ebac85_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_8da2fa68f81b83ec9fc07c593d697f7233dcdd2c5b740201cfa6b5f71f4aecd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da2fa68f81b83ec9fc07c593d697f7233dcdd2c5b740201cfa6b5f71f4aecd9->enter($__internal_8da2fa68f81b83ec9fc07c593d697f7233dcdd2c5b740201cfa6b5f71f4aecd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_449cc5e27192bd19fcab147317a9cba69963d21b224124292993c4647c8c1fbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_449cc5e27192bd19fcab147317a9cba69963d21b224124292993c4647c8c1fbf->enter($__internal_449cc5e27192bd19fcab147317a9cba69963d21b224124292993c4647c8c1fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_449cc5e27192bd19fcab147317a9cba69963d21b224124292993c4647c8c1fbf->leave($__internal_449cc5e27192bd19fcab147317a9cba69963d21b224124292993c4647c8c1fbf_prof);

        
        $__internal_8da2fa68f81b83ec9fc07c593d697f7233dcdd2c5b740201cfa6b5f71f4aecd9->leave($__internal_8da2fa68f81b83ec9fc07c593d697f7233dcdd2c5b740201cfa6b5f71f4aecd9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fae823807262058dc35741da0a32bf0da49eee06ed2ecbf2a7aab73504b44fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fae823807262058dc35741da0a32bf0da49eee06ed2ecbf2a7aab73504b44fd->enter($__internal_6fae823807262058dc35741da0a32bf0da49eee06ed2ecbf2a7aab73504b44fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e74e14d51b5987f8b9d2e096804de804339005c801ffa88d487b3aee4a1eea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e74e14d51b5987f8b9d2e096804de804339005c801ffa88d487b3aee4a1eea2->enter($__internal_8e74e14d51b5987f8b9d2e096804de804339005c801ffa88d487b3aee4a1eea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_8e74e14d51b5987f8b9d2e096804de804339005c801ffa88d487b3aee4a1eea2->leave($__internal_8e74e14d51b5987f8b9d2e096804de804339005c801ffa88d487b3aee4a1eea2_prof);

        
        $__internal_6fae823807262058dc35741da0a32bf0da49eee06ed2ecbf2a7aab73504b44fd->leave($__internal_6fae823807262058dc35741da0a32bf0da49eee06ed2ecbf2a7aab73504b44fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
