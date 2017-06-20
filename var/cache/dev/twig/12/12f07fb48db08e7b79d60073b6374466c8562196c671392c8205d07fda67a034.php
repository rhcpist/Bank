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
        $__internal_5c769d2d6dcbdec36e405fdf60a21d33442c3022ce545eef8a48456ac8fcae1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c769d2d6dcbdec36e405fdf60a21d33442c3022ce545eef8a48456ac8fcae1f->enter($__internal_5c769d2d6dcbdec36e405fdf60a21d33442c3022ce545eef8a48456ac8fcae1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_db043d20db6da25e8d165580e3ce0011504080b01eb4efc6c41d44bcc3c364d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db043d20db6da25e8d165580e3ce0011504080b01eb4efc6c41d44bcc3c364d0->enter($__internal_db043d20db6da25e8d165580e3ce0011504080b01eb4efc6c41d44bcc3c364d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_5c769d2d6dcbdec36e405fdf60a21d33442c3022ce545eef8a48456ac8fcae1f->leave($__internal_5c769d2d6dcbdec36e405fdf60a21d33442c3022ce545eef8a48456ac8fcae1f_prof);

        
        $__internal_db043d20db6da25e8d165580e3ce0011504080b01eb4efc6c41d44bcc3c364d0->leave($__internal_db043d20db6da25e8d165580e3ce0011504080b01eb4efc6c41d44bcc3c364d0_prof);

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
