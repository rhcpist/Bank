<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5396aa4bf62a6c900fa5865929316384a706dc4d84791f4a4fa4bbded2cc9020 extends Twig_Template
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
        $__internal_144e5f5b2a4fc18206bdae7473ec53ce82d4704e05f3ae8bf4d32f7edc3e660e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144e5f5b2a4fc18206bdae7473ec53ce82d4704e05f3ae8bf4d32f7edc3e660e->enter($__internal_144e5f5b2a4fc18206bdae7473ec53ce82d4704e05f3ae8bf4d32f7edc3e660e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_343d19db9d68e40f100d3c44b0653d92178e12ec9ea50571045ce3fae68c7eb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343d19db9d68e40f100d3c44b0653d92178e12ec9ea50571045ce3fae68c7eb8->enter($__internal_343d19db9d68e40f100d3c44b0653d92178e12ec9ea50571045ce3fae68c7eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_144e5f5b2a4fc18206bdae7473ec53ce82d4704e05f3ae8bf4d32f7edc3e660e->leave($__internal_144e5f5b2a4fc18206bdae7473ec53ce82d4704e05f3ae8bf4d32f7edc3e660e_prof);

        
        $__internal_343d19db9d68e40f100d3c44b0653d92178e12ec9ea50571045ce3fae68c7eb8->leave($__internal_343d19db9d68e40f100d3c44b0653d92178e12ec9ea50571045ce3fae68c7eb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
