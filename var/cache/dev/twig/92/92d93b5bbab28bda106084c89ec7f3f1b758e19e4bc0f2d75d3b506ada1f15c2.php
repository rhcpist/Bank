<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_db9705d9d9209173f918f8c9af0f619a8c7b06e741b66331b883c949028bf867 extends Twig_Template
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
        $__internal_abe2549418e2935b232441113c0316e5a2e4f6f625b2d025ea47ee32fabaae06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abe2549418e2935b232441113c0316e5a2e4f6f625b2d025ea47ee32fabaae06->enter($__internal_abe2549418e2935b232441113c0316e5a2e4f6f625b2d025ea47ee32fabaae06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_21b66bbd77853bf7f2c1372c44ec8f284049b6f0fd7157873df26fc90e469ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21b66bbd77853bf7f2c1372c44ec8f284049b6f0fd7157873df26fc90e469ca7->enter($__internal_21b66bbd77853bf7f2c1372c44ec8f284049b6f0fd7157873df26fc90e469ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_abe2549418e2935b232441113c0316e5a2e4f6f625b2d025ea47ee32fabaae06->leave($__internal_abe2549418e2935b232441113c0316e5a2e4f6f625b2d025ea47ee32fabaae06_prof);

        
        $__internal_21b66bbd77853bf7f2c1372c44ec8f284049b6f0fd7157873df26fc90e469ca7->leave($__internal_21b66bbd77853bf7f2c1372c44ec8f284049b6f0fd7157873df26fc90e469ca7_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
