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
        $__internal_91acc8f1689045cadf04721c96dc6a6fe7e5788e7b1c6eba96e5663850d29b87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91acc8f1689045cadf04721c96dc6a6fe7e5788e7b1c6eba96e5663850d29b87->enter($__internal_91acc8f1689045cadf04721c96dc6a6fe7e5788e7b1c6eba96e5663850d29b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_d8c9c1c297987f216bdded711b2934290119f9e2410d8f44b93294bacdf322dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8c9c1c297987f216bdded711b2934290119f9e2410d8f44b93294bacdf322dc->enter($__internal_d8c9c1c297987f216bdded711b2934290119f9e2410d8f44b93294bacdf322dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_91acc8f1689045cadf04721c96dc6a6fe7e5788e7b1c6eba96e5663850d29b87->leave($__internal_91acc8f1689045cadf04721c96dc6a6fe7e5788e7b1c6eba96e5663850d29b87_prof);

        
        $__internal_d8c9c1c297987f216bdded711b2934290119f9e2410d8f44b93294bacdf322dc->leave($__internal_d8c9c1c297987f216bdded711b2934290119f9e2410d8f44b93294bacdf322dc_prof);

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
