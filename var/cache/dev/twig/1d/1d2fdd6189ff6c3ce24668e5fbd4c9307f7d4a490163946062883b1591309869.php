<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6f68abc94c7d6d0b6cbb6e9c395a9b30dea73dd55bf56e67d13e6dfe6159b811 extends Twig_Template
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
        $__internal_df1dfcf258983c172c7c1c783c689f04b3e1820a52dc1ea104783b996b918918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1dfcf258983c172c7c1c783c689f04b3e1820a52dc1ea104783b996b918918->enter($__internal_df1dfcf258983c172c7c1c783c689f04b3e1820a52dc1ea104783b996b918918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_919a5bd189b3b93d533455380c5fac072a9656fc9cf255d2b095f2edfa43c39a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919a5bd189b3b93d533455380c5fac072a9656fc9cf255d2b095f2edfa43c39a->enter($__internal_919a5bd189b3b93d533455380c5fac072a9656fc9cf255d2b095f2edfa43c39a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_df1dfcf258983c172c7c1c783c689f04b3e1820a52dc1ea104783b996b918918->leave($__internal_df1dfcf258983c172c7c1c783c689f04b3e1820a52dc1ea104783b996b918918_prof);

        
        $__internal_919a5bd189b3b93d533455380c5fac072a9656fc9cf255d2b095f2edfa43c39a->leave($__internal_919a5bd189b3b93d533455380c5fac072a9656fc9cf255d2b095f2edfa43c39a_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
