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
        $__internal_0b353108c848c4b4b5f35bf324c21a7260234c9a9ac9d9bc3b3889deee09d5f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b353108c848c4b4b5f35bf324c21a7260234c9a9ac9d9bc3b3889deee09d5f2->enter($__internal_0b353108c848c4b4b5f35bf324c21a7260234c9a9ac9d9bc3b3889deee09d5f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_42655c19803473f41a7165e4fffa1f0af572fc790695596e1c644acf23cfa454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42655c19803473f41a7165e4fffa1f0af572fc790695596e1c644acf23cfa454->enter($__internal_42655c19803473f41a7165e4fffa1f0af572fc790695596e1c644acf23cfa454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b353108c848c4b4b5f35bf324c21a7260234c9a9ac9d9bc3b3889deee09d5f2->leave($__internal_0b353108c848c4b4b5f35bf324c21a7260234c9a9ac9d9bc3b3889deee09d5f2_prof);

        
        $__internal_42655c19803473f41a7165e4fffa1f0af572fc790695596e1c644acf23cfa454->leave($__internal_42655c19803473f41a7165e4fffa1f0af572fc790695596e1c644acf23cfa454_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2a689a8d4a4ee0d716a460e8c23c3d97e87550400151a57049b05c9b6ec39805 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a689a8d4a4ee0d716a460e8c23c3d97e87550400151a57049b05c9b6ec39805->enter($__internal_2a689a8d4a4ee0d716a460e8c23c3d97e87550400151a57049b05c9b6ec39805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfdc9d967f72d47029421612d9e7b933550ff1956f54288f48f5c296548de03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfdc9d967f72d47029421612d9e7b933550ff1956f54288f48f5c296548de03c->enter($__internal_bfdc9d967f72d47029421612d9e7b933550ff1956f54288f48f5c296548de03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_bfdc9d967f72d47029421612d9e7b933550ff1956f54288f48f5c296548de03c->leave($__internal_bfdc9d967f72d47029421612d9e7b933550ff1956f54288f48f5c296548de03c_prof);

        
        $__internal_2a689a8d4a4ee0d716a460e8c23c3d97e87550400151a57049b05c9b6ec39805->leave($__internal_2a689a8d4a4ee0d716a460e8c23c3d97e87550400151a57049b05c9b6ec39805_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f93f6b0e554c72f5dffc1ad472a9601e188e176cc3c354b25f3eab9177638c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f93f6b0e554c72f5dffc1ad472a9601e188e176cc3c354b25f3eab9177638c19->enter($__internal_f93f6b0e554c72f5dffc1ad472a9601e188e176cc3c354b25f3eab9177638c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7469fd0f9bf75fd34784bc6ec4088b9637b072894051b17c1afc6df090d6ae5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7469fd0f9bf75fd34784bc6ec4088b9637b072894051b17c1afc6df090d6ae5d->enter($__internal_7469fd0f9bf75fd34784bc6ec4088b9637b072894051b17c1afc6df090d6ae5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_7469fd0f9bf75fd34784bc6ec4088b9637b072894051b17c1afc6df090d6ae5d->leave($__internal_7469fd0f9bf75fd34784bc6ec4088b9637b072894051b17c1afc6df090d6ae5d_prof);

        
        $__internal_f93f6b0e554c72f5dffc1ad472a9601e188e176cc3c354b25f3eab9177638c19->leave($__internal_f93f6b0e554c72f5dffc1ad472a9601e188e176cc3c354b25f3eab9177638c19_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f3156ff67d056ad3117208fa4075c2f3bd04afe2fe703181077d953c4381a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3156ff67d056ad3117208fa4075c2f3bd04afe2fe703181077d953c4381a9d->enter($__internal_7f3156ff67d056ad3117208fa4075c2f3bd04afe2fe703181077d953c4381a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f6c957f5c453a447cbd68bc524499aec8bf13a3a6fac8085bce53cac9da2fff2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c957f5c453a447cbd68bc524499aec8bf13a3a6fac8085bce53cac9da2fff2->enter($__internal_f6c957f5c453a447cbd68bc524499aec8bf13a3a6fac8085bce53cac9da2fff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_f6c957f5c453a447cbd68bc524499aec8bf13a3a6fac8085bce53cac9da2fff2->leave($__internal_f6c957f5c453a447cbd68bc524499aec8bf13a3a6fac8085bce53cac9da2fff2_prof);

        
        $__internal_7f3156ff67d056ad3117208fa4075c2f3bd04afe2fe703181077d953c4381a9d->leave($__internal_7f3156ff67d056ad3117208fa4075c2f3bd04afe2fe703181077d953c4381a9d_prof);

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
