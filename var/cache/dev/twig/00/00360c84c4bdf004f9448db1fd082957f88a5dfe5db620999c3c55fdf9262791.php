<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_071dac66a9e0871bdd7675ae05324dc0e32740049a86a1d69d3fda6e262c3f12 extends Twig_Template
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
        $__internal_259afa9cbedb16131ffbad117224f81c2a1a2f2e8f65036a648914830c6f4f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_259afa9cbedb16131ffbad117224f81c2a1a2f2e8f65036a648914830c6f4f9e->enter($__internal_259afa9cbedb16131ffbad117224f81c2a1a2f2e8f65036a648914830c6f4f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_2f9cd0cfc6ad2bc1fa4bb2ff900a9deb88a093653f914be77b88561cc7faf2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f9cd0cfc6ad2bc1fa4bb2ff900a9deb88a093653f914be77b88561cc7faf2c5->enter($__internal_2f9cd0cfc6ad2bc1fa4bb2ff900a9deb88a093653f914be77b88561cc7faf2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_259afa9cbedb16131ffbad117224f81c2a1a2f2e8f65036a648914830c6f4f9e->leave($__internal_259afa9cbedb16131ffbad117224f81c2a1a2f2e8f65036a648914830c6f4f9e_prof);

        
        $__internal_2f9cd0cfc6ad2bc1fa4bb2ff900a9deb88a093653f914be77b88561cc7faf2c5->leave($__internal_2f9cd0cfc6ad2bc1fa4bb2ff900a9deb88a093653f914be77b88561cc7faf2c5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c13cc45254b7b4b5e454b8edeba4a428158addbd8b5109ca7a5cf949fd2c679c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c13cc45254b7b4b5e454b8edeba4a428158addbd8b5109ca7a5cf949fd2c679c->enter($__internal_c13cc45254b7b4b5e454b8edeba4a428158addbd8b5109ca7a5cf949fd2c679c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa309664435ac43881847662e3d26cfd398b351743a069ae923be733611dda41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa309664435ac43881847662e3d26cfd398b351743a069ae923be733611dda41->enter($__internal_fa309664435ac43881847662e3d26cfd398b351743a069ae923be733611dda41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fa309664435ac43881847662e3d26cfd398b351743a069ae923be733611dda41->leave($__internal_fa309664435ac43881847662e3d26cfd398b351743a069ae923be733611dda41_prof);

        
        $__internal_c13cc45254b7b4b5e454b8edeba4a428158addbd8b5109ca7a5cf949fd2c679c->leave($__internal_c13cc45254b7b4b5e454b8edeba4a428158addbd8b5109ca7a5cf949fd2c679c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_21070649438db8930040f7700bf35f5b6e3252ef429a690b9f9c10cd7b6add01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21070649438db8930040f7700bf35f5b6e3252ef429a690b9f9c10cd7b6add01->enter($__internal_21070649438db8930040f7700bf35f5b6e3252ef429a690b9f9c10cd7b6add01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ada24406585eb5b0329c0b079ba6eb1597271ee0761b3da6498d65d6d4488ce5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ada24406585eb5b0329c0b079ba6eb1597271ee0761b3da6498d65d6d4488ce5->enter($__internal_ada24406585eb5b0329c0b079ba6eb1597271ee0761b3da6498d65d6d4488ce5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ada24406585eb5b0329c0b079ba6eb1597271ee0761b3da6498d65d6d4488ce5->leave($__internal_ada24406585eb5b0329c0b079ba6eb1597271ee0761b3da6498d65d6d4488ce5_prof);

        
        $__internal_21070649438db8930040f7700bf35f5b6e3252ef429a690b9f9c10cd7b6add01->leave($__internal_21070649438db8930040f7700bf35f5b6e3252ef429a690b9f9c10cd7b6add01_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5784ae2cebcdc6df8e5ff3a695fc98a631e9c5f6c0339631bc650ffed708995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5784ae2cebcdc6df8e5ff3a695fc98a631e9c5f6c0339631bc650ffed708995->enter($__internal_c5784ae2cebcdc6df8e5ff3a695fc98a631e9c5f6c0339631bc650ffed708995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b66708fad3a96f942144a002148e9084be6ae1bc2e7156c760ff88e754460c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b66708fad3a96f942144a002148e9084be6ae1bc2e7156c760ff88e754460c2->enter($__internal_2b66708fad3a96f942144a002148e9084be6ae1bc2e7156c760ff88e754460c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_2b66708fad3a96f942144a002148e9084be6ae1bc2e7156c760ff88e754460c2->leave($__internal_2b66708fad3a96f942144a002148e9084be6ae1bc2e7156c760ff88e754460c2_prof);

        
        $__internal_c5784ae2cebcdc6df8e5ff3a695fc98a631e9c5f6c0339631bc650ffed708995->leave($__internal_c5784ae2cebcdc6df8e5ff3a695fc98a631e9c5f6c0339631bc650ffed708995_prof);

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
