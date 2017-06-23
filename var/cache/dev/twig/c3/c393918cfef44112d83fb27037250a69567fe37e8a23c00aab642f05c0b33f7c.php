<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_88a5a3efe3c73b0f08ff0f7dd90514bb5508d1e70e4d4a57a0954df39ac6e879 extends Twig_Template
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
        $__internal_0b736ff46058b7ec7be875dc4ee8ba70eb30b9a0d8c69a6d90b13c31d2015093 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b736ff46058b7ec7be875dc4ee8ba70eb30b9a0d8c69a6d90b13c31d2015093->enter($__internal_0b736ff46058b7ec7be875dc4ee8ba70eb30b9a0d8c69a6d90b13c31d2015093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_4a89335dafb74a1fff13434f5cc431ab5888d8678105946bd6aa76b447b20506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a89335dafb74a1fff13434f5cc431ab5888d8678105946bd6aa76b447b20506->enter($__internal_4a89335dafb74a1fff13434f5cc431ab5888d8678105946bd6aa76b447b20506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_0b736ff46058b7ec7be875dc4ee8ba70eb30b9a0d8c69a6d90b13c31d2015093->leave($__internal_0b736ff46058b7ec7be875dc4ee8ba70eb30b9a0d8c69a6d90b13c31d2015093_prof);

        
        $__internal_4a89335dafb74a1fff13434f5cc431ab5888d8678105946bd6aa76b447b20506->leave($__internal_4a89335dafb74a1fff13434f5cc431ab5888d8678105946bd6aa76b447b20506_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
