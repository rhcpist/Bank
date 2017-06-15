<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_cf95b05c25c1a33110839a0d3c2e49d183694d81a8b5f2027db25b6a7c457861 extends Twig_Template
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
        $__internal_85e493dd99f2a2d681fe7208f04187eeee2aeefafecffe5f62debed14ced91c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e493dd99f2a2d681fe7208f04187eeee2aeefafecffe5f62debed14ced91c7->enter($__internal_85e493dd99f2a2d681fe7208f04187eeee2aeefafecffe5f62debed14ced91c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_818ee2e51a906a50cd02842f33bbe0f8373d0ac8d9ff8e7b2c1812577beb3875 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818ee2e51a906a50cd02842f33bbe0f8373d0ac8d9ff8e7b2c1812577beb3875->enter($__internal_818ee2e51a906a50cd02842f33bbe0f8373d0ac8d9ff8e7b2c1812577beb3875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_85e493dd99f2a2d681fe7208f04187eeee2aeefafecffe5f62debed14ced91c7->leave($__internal_85e493dd99f2a2d681fe7208f04187eeee2aeefafecffe5f62debed14ced91c7_prof);

        
        $__internal_818ee2e51a906a50cd02842f33bbe0f8373d0ac8d9ff8e7b2c1812577beb3875->leave($__internal_818ee2e51a906a50cd02842f33bbe0f8373d0ac8d9ff8e7b2c1812577beb3875_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
