<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bb67f339617a371b4c0c93a2fd197512923376a360d31ba62e9e02ff2001512a extends Twig_Template
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
        $__internal_319ca1241ac9ce5387b5dc5af3e59a0fd307401077726c8920065738b4ef9bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_319ca1241ac9ce5387b5dc5af3e59a0fd307401077726c8920065738b4ef9bd5->enter($__internal_319ca1241ac9ce5387b5dc5af3e59a0fd307401077726c8920065738b4ef9bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_feebfc332ffd11e103704291cda4a8338a49b30bcae386cefaedd6ff374e7240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_feebfc332ffd11e103704291cda4a8338a49b30bcae386cefaedd6ff374e7240->enter($__internal_feebfc332ffd11e103704291cda4a8338a49b30bcae386cefaedd6ff374e7240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319ca1241ac9ce5387b5dc5af3e59a0fd307401077726c8920065738b4ef9bd5->leave($__internal_319ca1241ac9ce5387b5dc5af3e59a0fd307401077726c8920065738b4ef9bd5_prof);

        
        $__internal_feebfc332ffd11e103704291cda4a8338a49b30bcae386cefaedd6ff374e7240->leave($__internal_feebfc332ffd11e103704291cda4a8338a49b30bcae386cefaedd6ff374e7240_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_946e525899ed1b54fa0dc77b03c231f22187719db94997ca4c75c5691cbf3ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946e525899ed1b54fa0dc77b03c231f22187719db94997ca4c75c5691cbf3ed1->enter($__internal_946e525899ed1b54fa0dc77b03c231f22187719db94997ca4c75c5691cbf3ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8371fd6ab68a1da53d146cb322453606d192a129126fbce690ba24551730660c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8371fd6ab68a1da53d146cb322453606d192a129126fbce690ba24551730660c->enter($__internal_8371fd6ab68a1da53d146cb322453606d192a129126fbce690ba24551730660c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8371fd6ab68a1da53d146cb322453606d192a129126fbce690ba24551730660c->leave($__internal_8371fd6ab68a1da53d146cb322453606d192a129126fbce690ba24551730660c_prof);

        
        $__internal_946e525899ed1b54fa0dc77b03c231f22187719db94997ca4c75c5691cbf3ed1->leave($__internal_946e525899ed1b54fa0dc77b03c231f22187719db94997ca4c75c5691cbf3ed1_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_3be188a34ae032c5c1f1d8d4650f0f16fe70edba0f8e2d3d35bba7155743055b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3be188a34ae032c5c1f1d8d4650f0f16fe70edba0f8e2d3d35bba7155743055b->enter($__internal_3be188a34ae032c5c1f1d8d4650f0f16fe70edba0f8e2d3d35bba7155743055b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5997c6be367a8ee81401ce271d03dfe4018fda8e2035f54e10b28073803cfb65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5997c6be367a8ee81401ce271d03dfe4018fda8e2035f54e10b28073803cfb65->enter($__internal_5997c6be367a8ee81401ce271d03dfe4018fda8e2035f54e10b28073803cfb65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5997c6be367a8ee81401ce271d03dfe4018fda8e2035f54e10b28073803cfb65->leave($__internal_5997c6be367a8ee81401ce271d03dfe4018fda8e2035f54e10b28073803cfb65_prof);

        
        $__internal_3be188a34ae032c5c1f1d8d4650f0f16fe70edba0f8e2d3d35bba7155743055b->leave($__internal_3be188a34ae032c5c1f1d8d4650f0f16fe70edba0f8e2d3d35bba7155743055b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a051e2c9c5b6aaaa855bf0def3e8e293cf54c85e3868b051213c486a6883366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a051e2c9c5b6aaaa855bf0def3e8e293cf54c85e3868b051213c486a6883366->enter($__internal_9a051e2c9c5b6aaaa855bf0def3e8e293cf54c85e3868b051213c486a6883366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b1fb70ffc565c76777842d40ae1bb105d60e9a9408716720178398269d40d300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1fb70ffc565c76777842d40ae1bb105d60e9a9408716720178398269d40d300->enter($__internal_b1fb70ffc565c76777842d40ae1bb105d60e9a9408716720178398269d40d300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_b1fb70ffc565c76777842d40ae1bb105d60e9a9408716720178398269d40d300->leave($__internal_b1fb70ffc565c76777842d40ae1bb105d60e9a9408716720178398269d40d300_prof);

        
        $__internal_9a051e2c9c5b6aaaa855bf0def3e8e293cf54c85e3868b051213c486a6883366->leave($__internal_9a051e2c9c5b6aaaa855bf0def3e8e293cf54c85e3868b051213c486a6883366_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
