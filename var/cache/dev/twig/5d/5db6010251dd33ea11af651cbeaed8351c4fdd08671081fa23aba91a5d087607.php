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
        $__internal_bc2d6d5c5a550713fa6c9f58801133e7e77a64bc417dc5e8c09eca621ccab67c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc2d6d5c5a550713fa6c9f58801133e7e77a64bc417dc5e8c09eca621ccab67c->enter($__internal_bc2d6d5c5a550713fa6c9f58801133e7e77a64bc417dc5e8c09eca621ccab67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_f6cf5d3dbff0dc0b42defabae2e4041c2119b28e64647966fb70ba09ed11df69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6cf5d3dbff0dc0b42defabae2e4041c2119b28e64647966fb70ba09ed11df69->enter($__internal_f6cf5d3dbff0dc0b42defabae2e4041c2119b28e64647966fb70ba09ed11df69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc2d6d5c5a550713fa6c9f58801133e7e77a64bc417dc5e8c09eca621ccab67c->leave($__internal_bc2d6d5c5a550713fa6c9f58801133e7e77a64bc417dc5e8c09eca621ccab67c_prof);

        
        $__internal_f6cf5d3dbff0dc0b42defabae2e4041c2119b28e64647966fb70ba09ed11df69->leave($__internal_f6cf5d3dbff0dc0b42defabae2e4041c2119b28e64647966fb70ba09ed11df69_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ef9119acf5dfeae5cb4a21b9760a3635e7184cb5aa6a3a5957835bca8aa6944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef9119acf5dfeae5cb4a21b9760a3635e7184cb5aa6a3a5957835bca8aa6944->enter($__internal_3ef9119acf5dfeae5cb4a21b9760a3635e7184cb5aa6a3a5957835bca8aa6944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_829a34e2f8f633e6285c60574a3623c141c0cfd04cd52f3bbfc011d2503274b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829a34e2f8f633e6285c60574a3623c141c0cfd04cd52f3bbfc011d2503274b3->enter($__internal_829a34e2f8f633e6285c60574a3623c141c0cfd04cd52f3bbfc011d2503274b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_829a34e2f8f633e6285c60574a3623c141c0cfd04cd52f3bbfc011d2503274b3->leave($__internal_829a34e2f8f633e6285c60574a3623c141c0cfd04cd52f3bbfc011d2503274b3_prof);

        
        $__internal_3ef9119acf5dfeae5cb4a21b9760a3635e7184cb5aa6a3a5957835bca8aa6944->leave($__internal_3ef9119acf5dfeae5cb4a21b9760a3635e7184cb5aa6a3a5957835bca8aa6944_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_758131dc5f6ab12a688c29cf393fc363d919beedc78d1f42ffe9d6bcfb497d58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758131dc5f6ab12a688c29cf393fc363d919beedc78d1f42ffe9d6bcfb497d58->enter($__internal_758131dc5f6ab12a688c29cf393fc363d919beedc78d1f42ffe9d6bcfb497d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5d9e723df9d99e5d1c8820553ddab426c55f8620e65a9d46b4515f25c87fbd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9e723df9d99e5d1c8820553ddab426c55f8620e65a9d46b4515f25c87fbd6c->enter($__internal_5d9e723df9d99e5d1c8820553ddab426c55f8620e65a9d46b4515f25c87fbd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5d9e723df9d99e5d1c8820553ddab426c55f8620e65a9d46b4515f25c87fbd6c->leave($__internal_5d9e723df9d99e5d1c8820553ddab426c55f8620e65a9d46b4515f25c87fbd6c_prof);

        
        $__internal_758131dc5f6ab12a688c29cf393fc363d919beedc78d1f42ffe9d6bcfb497d58->leave($__internal_758131dc5f6ab12a688c29cf393fc363d919beedc78d1f42ffe9d6bcfb497d58_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_739298dc0d685d5a10f76f942d093abcc106c64572611a0284587fdb6f6b4822 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_739298dc0d685d5a10f76f942d093abcc106c64572611a0284587fdb6f6b4822->enter($__internal_739298dc0d685d5a10f76f942d093abcc106c64572611a0284587fdb6f6b4822_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_546fe2747295acf9350f27134416baddc22b046515f3b85aef97582a16e906df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546fe2747295acf9350f27134416baddc22b046515f3b85aef97582a16e906df->enter($__internal_546fe2747295acf9350f27134416baddc22b046515f3b85aef97582a16e906df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_546fe2747295acf9350f27134416baddc22b046515f3b85aef97582a16e906df->leave($__internal_546fe2747295acf9350f27134416baddc22b046515f3b85aef97582a16e906df_prof);

        
        $__internal_739298dc0d685d5a10f76f942d093abcc106c64572611a0284587fdb6f6b4822->leave($__internal_739298dc0d685d5a10f76f942d093abcc106c64572611a0284587fdb6f6b4822_prof);

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
