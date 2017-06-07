<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_51b0f206eced04e2ccef7cc245f27ef1abd69ea32c42d08a5aa2827a8ee995c6 extends Twig_Template
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
        $__internal_68a9512e687f8cc0d0b9df600f7113fae0afcc600830fe3b03d23e0904bfc099 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a9512e687f8cc0d0b9df600f7113fae0afcc600830fe3b03d23e0904bfc099->enter($__internal_68a9512e687f8cc0d0b9df600f7113fae0afcc600830fe3b03d23e0904bfc099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_b801a67690864ea54bb093cd7be5c0c38f48936a18f2d2421b0ed4b9df1d348e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b801a67690864ea54bb093cd7be5c0c38f48936a18f2d2421b0ed4b9df1d348e->enter($__internal_b801a67690864ea54bb093cd7be5c0c38f48936a18f2d2421b0ed4b9df1d348e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

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
        
        $__internal_68a9512e687f8cc0d0b9df600f7113fae0afcc600830fe3b03d23e0904bfc099->leave($__internal_68a9512e687f8cc0d0b9df600f7113fae0afcc600830fe3b03d23e0904bfc099_prof);

        
        $__internal_b801a67690864ea54bb093cd7be5c0c38f48936a18f2d2421b0ed4b9df1d348e->leave($__internal_b801a67690864ea54bb093cd7be5c0c38f48936a18f2d2421b0ed4b9df1d348e_prof);

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
