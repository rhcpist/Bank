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
        $__internal_6cc193ded8ec1219ea9633c552a9fc5022cb1c3def8cc76dff398599bc2b9149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc193ded8ec1219ea9633c552a9fc5022cb1c3def8cc76dff398599bc2b9149->enter($__internal_6cc193ded8ec1219ea9633c552a9fc5022cb1c3def8cc76dff398599bc2b9149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_aa12502d68533e2017fdaf753ef29a9b028bc2752d940f29e1f52926013c9522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa12502d68533e2017fdaf753ef29a9b028bc2752d940f29e1f52926013c9522->enter($__internal_aa12502d68533e2017fdaf753ef29a9b028bc2752d940f29e1f52926013c9522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cc193ded8ec1219ea9633c552a9fc5022cb1c3def8cc76dff398599bc2b9149->leave($__internal_6cc193ded8ec1219ea9633c552a9fc5022cb1c3def8cc76dff398599bc2b9149_prof);

        
        $__internal_aa12502d68533e2017fdaf753ef29a9b028bc2752d940f29e1f52926013c9522->leave($__internal_aa12502d68533e2017fdaf753ef29a9b028bc2752d940f29e1f52926013c9522_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_21f783dde98cdb37cb31a18074c8f8dbea3cf330c587cb5bdc699d8deb624626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21f783dde98cdb37cb31a18074c8f8dbea3cf330c587cb5bdc699d8deb624626->enter($__internal_21f783dde98cdb37cb31a18074c8f8dbea3cf330c587cb5bdc699d8deb624626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7c39f75d1a36ff6d3a5bfe88a8221700ef33c3e30875853caafacb642202747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c39f75d1a36ff6d3a5bfe88a8221700ef33c3e30875853caafacb642202747->enter($__internal_d7c39f75d1a36ff6d3a5bfe88a8221700ef33c3e30875853caafacb642202747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d7c39f75d1a36ff6d3a5bfe88a8221700ef33c3e30875853caafacb642202747->leave($__internal_d7c39f75d1a36ff6d3a5bfe88a8221700ef33c3e30875853caafacb642202747_prof);

        
        $__internal_21f783dde98cdb37cb31a18074c8f8dbea3cf330c587cb5bdc699d8deb624626->leave($__internal_21f783dde98cdb37cb31a18074c8f8dbea3cf330c587cb5bdc699d8deb624626_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_de9c1c5af115abcd8156fd1771210abccce9ef3924182c1ac21174be5613d2f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de9c1c5af115abcd8156fd1771210abccce9ef3924182c1ac21174be5613d2f9->enter($__internal_de9c1c5af115abcd8156fd1771210abccce9ef3924182c1ac21174be5613d2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_28224df647b918bc2974ee852124a32e6d0c4458fa22370f8f08de6367c21f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28224df647b918bc2974ee852124a32e6d0c4458fa22370f8f08de6367c21f22->enter($__internal_28224df647b918bc2974ee852124a32e6d0c4458fa22370f8f08de6367c21f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_28224df647b918bc2974ee852124a32e6d0c4458fa22370f8f08de6367c21f22->leave($__internal_28224df647b918bc2974ee852124a32e6d0c4458fa22370f8f08de6367c21f22_prof);

        
        $__internal_de9c1c5af115abcd8156fd1771210abccce9ef3924182c1ac21174be5613d2f9->leave($__internal_de9c1c5af115abcd8156fd1771210abccce9ef3924182c1ac21174be5613d2f9_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_0aadb17bd2fd0933e473c504bd6a4f3293efe219eec14b7ddaac5e3385754a87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aadb17bd2fd0933e473c504bd6a4f3293efe219eec14b7ddaac5e3385754a87->enter($__internal_0aadb17bd2fd0933e473c504bd6a4f3293efe219eec14b7ddaac5e3385754a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dad6b1b4b3cc359c0dc4a07fea0fc28129632b88b37b16b6cd008e7962f7de41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad6b1b4b3cc359c0dc4a07fea0fc28129632b88b37b16b6cd008e7962f7de41->enter($__internal_dad6b1b4b3cc359c0dc4a07fea0fc28129632b88b37b16b6cd008e7962f7de41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_dad6b1b4b3cc359c0dc4a07fea0fc28129632b88b37b16b6cd008e7962f7de41->leave($__internal_dad6b1b4b3cc359c0dc4a07fea0fc28129632b88b37b16b6cd008e7962f7de41_prof);

        
        $__internal_0aadb17bd2fd0933e473c504bd6a4f3293efe219eec14b7ddaac5e3385754a87->leave($__internal_0aadb17bd2fd0933e473c504bd6a4f3293efe219eec14b7ddaac5e3385754a87_prof);

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
