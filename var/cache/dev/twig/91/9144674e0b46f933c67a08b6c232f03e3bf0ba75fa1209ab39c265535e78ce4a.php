<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5a68e915d5ac712287d82b6e9caf12cc9ccd9a18f9fe1be0d344144318cab529 extends Twig_Template
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
        $__internal_0e5278dd0b55a8bc147319a40990e766db90035afe8114d531339a640831943c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e5278dd0b55a8bc147319a40990e766db90035afe8114d531339a640831943c->enter($__internal_0e5278dd0b55a8bc147319a40990e766db90035afe8114d531339a640831943c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_9b937a02c01695bd1d638c104ffce4fbaf147c73b3d2f44b4f63e6710f68e67c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b937a02c01695bd1d638c104ffce4fbaf147c73b3d2f44b4f63e6710f68e67c->enter($__internal_9b937a02c01695bd1d638c104ffce4fbaf147c73b3d2f44b4f63e6710f68e67c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0e5278dd0b55a8bc147319a40990e766db90035afe8114d531339a640831943c->leave($__internal_0e5278dd0b55a8bc147319a40990e766db90035afe8114d531339a640831943c_prof);

        
        $__internal_9b937a02c01695bd1d638c104ffce4fbaf147c73b3d2f44b4f63e6710f68e67c->leave($__internal_9b937a02c01695bd1d638c104ffce4fbaf147c73b3d2f44b4f63e6710f68e67c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
