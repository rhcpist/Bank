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
        $__internal_3bdc1ec8700d2f5a6a848bb606684dab7eb8cc43d4cf545de97671c1a6d15fe1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bdc1ec8700d2f5a6a848bb606684dab7eb8cc43d4cf545de97671c1a6d15fe1->enter($__internal_3bdc1ec8700d2f5a6a848bb606684dab7eb8cc43d4cf545de97671c1a6d15fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        $__internal_aaff928fa64c18d2e605e25a48d00ddf79c7df542b099b539a4725eb8e1f7000 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaff928fa64c18d2e605e25a48d00ddf79c7df542b099b539a4725eb8e1f7000->enter($__internal_aaff928fa64c18d2e605e25a48d00ddf79c7df542b099b539a4725eb8e1f7000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

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
        
        $__internal_3bdc1ec8700d2f5a6a848bb606684dab7eb8cc43d4cf545de97671c1a6d15fe1->leave($__internal_3bdc1ec8700d2f5a6a848bb606684dab7eb8cc43d4cf545de97671c1a6d15fe1_prof);

        
        $__internal_aaff928fa64c18d2e605e25a48d00ddf79c7df542b099b539a4725eb8e1f7000->leave($__internal_aaff928fa64c18d2e605e25a48d00ddf79c7df542b099b539a4725eb8e1f7000_prof);

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
