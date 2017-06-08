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
        $__internal_d4c566d5c37e29e606323ae3cea5ef88c52c5b9d0c8c9ed4fb5ca20b8ac2c76e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c566d5c37e29e606323ae3cea5ef88c52c5b9d0c8c9ed4fb5ca20b8ac2c76e->enter($__internal_d4c566d5c37e29e606323ae3cea5ef88c52c5b9d0c8c9ed4fb5ca20b8ac2c76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_b45278776810a98c8b5c12488607b1b54f9f6e52ec9427a93d58de33c75b7833 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b45278776810a98c8b5c12488607b1b54f9f6e52ec9427a93d58de33c75b7833->enter($__internal_b45278776810a98c8b5c12488607b1b54f9f6e52ec9427a93d58de33c75b7833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d4c566d5c37e29e606323ae3cea5ef88c52c5b9d0c8c9ed4fb5ca20b8ac2c76e->leave($__internal_d4c566d5c37e29e606323ae3cea5ef88c52c5b9d0c8c9ed4fb5ca20b8ac2c76e_prof);

        
        $__internal_b45278776810a98c8b5c12488607b1b54f9f6e52ec9427a93d58de33c75b7833->leave($__internal_b45278776810a98c8b5c12488607b1b54f9f6e52ec9427a93d58de33c75b7833_prof);

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
