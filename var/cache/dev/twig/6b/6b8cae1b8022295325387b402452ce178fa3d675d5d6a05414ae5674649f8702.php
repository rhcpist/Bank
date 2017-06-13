<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9a19505315c1bebd8ca011d89193e7f3c93082d9a8b223fa18c6eb9267bb2601 extends Twig_Template
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
        $__internal_fd31394db89059fb575e67dced967e3880d1eb2bf5db0df8829cd1fc7aeb2a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd31394db89059fb575e67dced967e3880d1eb2bf5db0df8829cd1fc7aeb2a1d->enter($__internal_fd31394db89059fb575e67dced967e3880d1eb2bf5db0df8829cd1fc7aeb2a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_3339fb026eb23891bdaa5f0b8902c921732bc38ff08301cdeace6173ab1a2922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3339fb026eb23891bdaa5f0b8902c921732bc38ff08301cdeace6173ab1a2922->enter($__internal_3339fb026eb23891bdaa5f0b8902c921732bc38ff08301cdeace6173ab1a2922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_fd31394db89059fb575e67dced967e3880d1eb2bf5db0df8829cd1fc7aeb2a1d->leave($__internal_fd31394db89059fb575e67dced967e3880d1eb2bf5db0df8829cd1fc7aeb2a1d_prof);

        
        $__internal_3339fb026eb23891bdaa5f0b8902c921732bc38ff08301cdeace6173ab1a2922->leave($__internal_3339fb026eb23891bdaa5f0b8902c921732bc38ff08301cdeace6173ab1a2922_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
