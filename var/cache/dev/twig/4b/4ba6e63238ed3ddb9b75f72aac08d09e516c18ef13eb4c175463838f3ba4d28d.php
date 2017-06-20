<?php

/* NelmioApiDocBundle:Components:version.html.twig */
class __TwigTemplate_a2b6b6ef5a85103402df83ded152e8d134192630fc7f363f1543dfc8635ae840 extends Twig_Template
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
        $__internal_c483399d18c9c28843bb36e02114cbabbc78a1d5d261a8a982ad448b75cd5d29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c483399d18c9c28843bb36e02114cbabbc78a1d5d261a8a982ad448b75cd5d29->enter($__internal_c483399d18c9c28843bb36e02114cbabbc78a1d5d261a8a982ad448b75cd5d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        $__internal_edfcffd1053eed68a9e9170be3b7737a0fad7399cea623b5f405e252526d3ce1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfcffd1053eed68a9e9170be3b7737a0fad7399cea623b5f405e252526d3ce1->enter($__internal_edfcffd1053eed68a9e9170be3b7737a0fad7399cea623b5f405e252526d3ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        // line 1
        if ((twig_test_empty((isset($context["sinceVersion"]) || array_key_exists("sinceVersion", $context) ? $context["sinceVersion"] : (function () { throw new Twig_Error_Runtime('Variable "sinceVersion" does not exist.', 1, $this->getSourceContext()); })())) && twig_test_empty((isset($context["untilVersion"]) || array_key_exists("untilVersion", $context) ? $context["untilVersion"] : (function () { throw new Twig_Error_Runtime('Variable "untilVersion" does not exist.', 1, $this->getSourceContext()); })())))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ( !twig_test_empty((isset($context["sinceVersion"]) || array_key_exists("sinceVersion", $context) ? $context["sinceVersion"] : (function () { throw new Twig_Error_Runtime('Variable "sinceVersion" does not exist.', 4, $this->getSourceContext()); })()))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, (isset($context["sinceVersion"]) || array_key_exists("sinceVersion", $context) ? $context["sinceVersion"] : (function () { throw new Twig_Error_Runtime('Variable "sinceVersion" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
            }
            // line 5
            echo "    ";
            if ( !twig_test_empty((isset($context["untilVersion"]) || array_key_exists("untilVersion", $context) ? $context["untilVersion"] : (function () { throw new Twig_Error_Runtime('Variable "untilVersion" does not exist.', 5, $this->getSourceContext()); })()))) {
                // line 6
                echo "        ";
                if ( !twig_test_empty((isset($context["sinceVersion"]) || array_key_exists("sinceVersion", $context) ? $context["sinceVersion"] : (function () { throw new Twig_Error_Runtime('Variable "sinceVersion" does not exist.', 6, $this->getSourceContext()); })()))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, (isset($context["untilVersion"]) || array_key_exists("untilVersion", $context) ? $context["untilVersion"] : (function () { throw new Twig_Error_Runtime('Variable "untilVersion" does not exist.', 6, $this->getSourceContext()); })()), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_c483399d18c9c28843bb36e02114cbabbc78a1d5d261a8a982ad448b75cd5d29->leave($__internal_c483399d18c9c28843bb36e02114cbabbc78a1d5d261a8a982ad448b75cd5d29_prof);

        
        $__internal_edfcffd1053eed68a9e9170be3b7737a0fad7399cea623b5f405e252526d3ce1->leave($__internal_edfcffd1053eed68a9e9170be3b7737a0fad7399cea623b5f405e252526d3ce1_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sinceVersion is empty and untilVersion is empty %}
*
{% else %}
    {% if sinceVersion is not empty %}&gt;={{ sinceVersion }}{% endif %}
    {% if untilVersion is not empty %}
        {% if sinceVersion is not empty %},{% endif %}&lt;={{ untilVersion }}
    {% endif %}
{% endif %}
", "NelmioApiDocBundle:Components:version.html.twig", "/mnt/storage/private/public_html/bank/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/version.html.twig");
    }
}
