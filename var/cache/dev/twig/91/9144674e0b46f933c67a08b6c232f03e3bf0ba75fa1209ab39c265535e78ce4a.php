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
        $__internal_875cd1174cdbeee9bbc9152a5283e9dff67eb6c4541b838cbbc1f4e6ade177e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_875cd1174cdbeee9bbc9152a5283e9dff67eb6c4541b838cbbc1f4e6ade177e0->enter($__internal_875cd1174cdbeee9bbc9152a5283e9dff67eb6c4541b838cbbc1f4e6ade177e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_4d29a47a757ebd514b3d6e9a0de9abaf36a51538cc879866284d464158d580b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d29a47a757ebd514b3d6e9a0de9abaf36a51538cc879866284d464158d580b4->enter($__internal_4d29a47a757ebd514b3d6e9a0de9abaf36a51538cc879866284d464158d580b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_875cd1174cdbeee9bbc9152a5283e9dff67eb6c4541b838cbbc1f4e6ade177e0->leave($__internal_875cd1174cdbeee9bbc9152a5283e9dff67eb6c4541b838cbbc1f4e6ade177e0_prof);

        
        $__internal_4d29a47a757ebd514b3d6e9a0de9abaf36a51538cc879866284d464158d580b4->leave($__internal_4d29a47a757ebd514b3d6e9a0de9abaf36a51538cc879866284d464158d580b4_prof);

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
