<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_bbfc536ab1487a87304267749f74a7f168e8b6d6d37f687f573e3cc5186955d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e863911ff06da213818fe31a7b46f4d4195dd818ea8c0711bcc264091c07286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e863911ff06da213818fe31a7b46f4d4195dd818ea8c0711bcc264091c07286->enter($__internal_5e863911ff06da213818fe31a7b46f4d4195dd818ea8c0711bcc264091c07286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_952cb005033012efe7cd4219fd706bf54c471b57fa5cfab108b08f7a4995d089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_952cb005033012efe7cd4219fd706bf54c471b57fa5cfab108b08f7a4995d089->enter($__internal_952cb005033012efe7cd4219fd706bf54c471b57fa5cfab108b08f7a4995d089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_5e863911ff06da213818fe31a7b46f4d4195dd818ea8c0711bcc264091c07286->leave($__internal_5e863911ff06da213818fe31a7b46f4d4195dd818ea8c0711bcc264091c07286_prof);

        
        $__internal_952cb005033012efe7cd4219fd706bf54c471b57fa5cfab108b08f7a4995d089->leave($__internal_952cb005033012efe7cd4219fd706bf54c471b57fa5cfab108b08f7a4995d089_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
