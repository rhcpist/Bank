<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_1dadcb7306dc3fe285914a1baa27495fe813439c2100c2abe80182ae86d4434d extends Twig_Template
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
        $__internal_3150da1b7fe689232ae2276b6ac7207d2d16d59e2647e6b82c938999f0a02f35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3150da1b7fe689232ae2276b6ac7207d2d16d59e2647e6b82c938999f0a02f35->enter($__internal_3150da1b7fe689232ae2276b6ac7207d2d16d59e2647e6b82c938999f0a02f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_15294ba984111f73244786d1851ee76fe6b56fcc0f307b69e1e66c75e3bc2adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15294ba984111f73244786d1851ee76fe6b56fcc0f307b69e1e66c75e3bc2adf->enter($__internal_15294ba984111f73244786d1851ee76fe6b56fcc0f307b69e1e66c75e3bc2adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3150da1b7fe689232ae2276b6ac7207d2d16d59e2647e6b82c938999f0a02f35->leave($__internal_3150da1b7fe689232ae2276b6ac7207d2d16d59e2647e6b82c938999f0a02f35_prof);

        
        $__internal_15294ba984111f73244786d1851ee76fe6b56fcc0f307b69e1e66c75e3bc2adf->leave($__internal_15294ba984111f73244786d1851ee76fe6b56fcc0f307b69e1e66c75e3bc2adf_prof);

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
