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
        $__internal_380f8eba5628ea17cb8142cb2e20052acaa507f418717651d809c4fbfa7f9a98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_380f8eba5628ea17cb8142cb2e20052acaa507f418717651d809c4fbfa7f9a98->enter($__internal_380f8eba5628ea17cb8142cb2e20052acaa507f418717651d809c4fbfa7f9a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0cfab2f3036b0ffd9c964bdcf1b138b45017b5641d3d104ff75782b8ec87244c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfab2f3036b0ffd9c964bdcf1b138b45017b5641d3d104ff75782b8ec87244c->enter($__internal_0cfab2f3036b0ffd9c964bdcf1b138b45017b5641d3d104ff75782b8ec87244c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_380f8eba5628ea17cb8142cb2e20052acaa507f418717651d809c4fbfa7f9a98->leave($__internal_380f8eba5628ea17cb8142cb2e20052acaa507f418717651d809c4fbfa7f9a98_prof);

        
        $__internal_0cfab2f3036b0ffd9c964bdcf1b138b45017b5641d3d104ff75782b8ec87244c->leave($__internal_0cfab2f3036b0ffd9c964bdcf1b138b45017b5641d3d104ff75782b8ec87244c_prof);

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
