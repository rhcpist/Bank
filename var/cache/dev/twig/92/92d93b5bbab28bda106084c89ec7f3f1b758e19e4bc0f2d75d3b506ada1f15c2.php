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
        $__internal_7ea1981f725cbb421e0ec093853bd5154d0f1fff5d182f35336e52422df3b3b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea1981f725cbb421e0ec093853bd5154d0f1fff5d182f35336e52422df3b3b4->enter($__internal_7ea1981f725cbb421e0ec093853bd5154d0f1fff5d182f35336e52422df3b3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_6312bebd7a6fc6e81a0ffa30694b831157023926578fec3ca4aa5c83812b37d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6312bebd7a6fc6e81a0ffa30694b831157023926578fec3ca4aa5c83812b37d6->enter($__internal_6312bebd7a6fc6e81a0ffa30694b831157023926578fec3ca4aa5c83812b37d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_7ea1981f725cbb421e0ec093853bd5154d0f1fff5d182f35336e52422df3b3b4->leave($__internal_7ea1981f725cbb421e0ec093853bd5154d0f1fff5d182f35336e52422df3b3b4_prof);

        
        $__internal_6312bebd7a6fc6e81a0ffa30694b831157023926578fec3ca4aa5c83812b37d6->leave($__internal_6312bebd7a6fc6e81a0ffa30694b831157023926578fec3ca4aa5c83812b37d6_prof);

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
