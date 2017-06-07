<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_2a65176fd6ef9cbf2f70956b53448df03be6dc658100ccf67ff9c36c9550acfd extends Twig_Template
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
        $__internal_b1444a6ac24924b3b046de70bd252d2ec8d793990b4ddcb79a0e7b29d6a0df57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1444a6ac24924b3b046de70bd252d2ec8d793990b4ddcb79a0e7b29d6a0df57->enter($__internal_b1444a6ac24924b3b046de70bd252d2ec8d793990b4ddcb79a0e7b29d6a0df57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_641b801e941abff40b6d96ea856d09a90d9614a397653c44fbfa468204d7ef3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_641b801e941abff40b6d96ea856d09a90d9614a397653c44fbfa468204d7ef3f->enter($__internal_641b801e941abff40b6d96ea856d09a90d9614a397653c44fbfa468204d7ef3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b1444a6ac24924b3b046de70bd252d2ec8d793990b4ddcb79a0e7b29d6a0df57->leave($__internal_b1444a6ac24924b3b046de70bd252d2ec8d793990b4ddcb79a0e7b29d6a0df57_prof);

        
        $__internal_641b801e941abff40b6d96ea856d09a90d9614a397653c44fbfa468204d7ef3f->leave($__internal_641b801e941abff40b6d96ea856d09a90d9614a397653c44fbfa468204d7ef3f_prof);

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
