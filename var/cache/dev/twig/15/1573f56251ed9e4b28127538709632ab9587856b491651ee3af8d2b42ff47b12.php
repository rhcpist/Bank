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
        $__internal_733e27f272e1fc514c6cb7a3c6160320df1932a5776a648bb5dbe7cda773e1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733e27f272e1fc514c6cb7a3c6160320df1932a5776a648bb5dbe7cda773e1f6->enter($__internal_733e27f272e1fc514c6cb7a3c6160320df1932a5776a648bb5dbe7cda773e1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_56b1608656269f163a402b638bbb00308bac822c59d57764e715c30e80d6653d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56b1608656269f163a402b638bbb00308bac822c59d57764e715c30e80d6653d->enter($__internal_56b1608656269f163a402b638bbb00308bac822c59d57764e715c30e80d6653d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_733e27f272e1fc514c6cb7a3c6160320df1932a5776a648bb5dbe7cda773e1f6->leave($__internal_733e27f272e1fc514c6cb7a3c6160320df1932a5776a648bb5dbe7cda773e1f6_prof);

        
        $__internal_56b1608656269f163a402b638bbb00308bac822c59d57764e715c30e80d6653d->leave($__internal_56b1608656269f163a402b638bbb00308bac822c59d57764e715c30e80d6653d_prof);

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
