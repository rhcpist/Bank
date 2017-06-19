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
        $__internal_bee3cbef24d31812e9ac267099cb0df1ec2eea7284b241366c6808c908469935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee3cbef24d31812e9ac267099cb0df1ec2eea7284b241366c6808c908469935->enter($__internal_bee3cbef24d31812e9ac267099cb0df1ec2eea7284b241366c6808c908469935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_1585bf0586616e23e2587d75379fd4e0538bd7bdc1647906e930f919d8778ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1585bf0586616e23e2587d75379fd4e0538bd7bdc1647906e930f919d8778ae1->enter($__internal_1585bf0586616e23e2587d75379fd4e0538bd7bdc1647906e930f919d8778ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_bee3cbef24d31812e9ac267099cb0df1ec2eea7284b241366c6808c908469935->leave($__internal_bee3cbef24d31812e9ac267099cb0df1ec2eea7284b241366c6808c908469935_prof);

        
        $__internal_1585bf0586616e23e2587d75379fd4e0538bd7bdc1647906e930f919d8778ae1->leave($__internal_1585bf0586616e23e2587d75379fd4e0538bd7bdc1647906e930f919d8778ae1_prof);

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
