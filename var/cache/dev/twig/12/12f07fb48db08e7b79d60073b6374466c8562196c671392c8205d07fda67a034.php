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
        $__internal_f2c853a6dc28e06e6b63c4682defe98f85db99780cc9f14aceedafc243d6f6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c853a6dc28e06e6b63c4682defe98f85db99780cc9f14aceedafc243d6f6a5->enter($__internal_f2c853a6dc28e06e6b63c4682defe98f85db99780cc9f14aceedafc243d6f6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_6d51c866976e62402e9b49c2f080b0c9618b88aa5d4f62544076e4ffa0a2df18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d51c866976e62402e9b49c2f080b0c9618b88aa5d4f62544076e4ffa0a2df18->enter($__internal_6d51c866976e62402e9b49c2f080b0c9618b88aa5d4f62544076e4ffa0a2df18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_f2c853a6dc28e06e6b63c4682defe98f85db99780cc9f14aceedafc243d6f6a5->leave($__internal_f2c853a6dc28e06e6b63c4682defe98f85db99780cc9f14aceedafc243d6f6a5_prof);

        
        $__internal_6d51c866976e62402e9b49c2f080b0c9618b88aa5d4f62544076e4ffa0a2df18->leave($__internal_6d51c866976e62402e9b49c2f080b0c9618b88aa5d4f62544076e4ffa0a2df18_prof);

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
