<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_031d7b1879dee1994d057889e2b439b8bd771c183c4c0ce3c2f6f3ee5e434c1a extends Twig_Template
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
        $__internal_ddeff43243b216e6b111f856a069ee4228b8240167d0012f0995e2664058e5ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddeff43243b216e6b111f856a069ee4228b8240167d0012f0995e2664058e5ae->enter($__internal_ddeff43243b216e6b111f856a069ee4228b8240167d0012f0995e2664058e5ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_3125acffd1ff7f1675fe68058efc15679dbec6a420bb14f66aef8354d2fdb987 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3125acffd1ff7f1675fe68058efc15679dbec6a420bb14f66aef8354d2fdb987->enter($__internal_3125acffd1ff7f1675fe68058efc15679dbec6a420bb14f66aef8354d2fdb987_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ddeff43243b216e6b111f856a069ee4228b8240167d0012f0995e2664058e5ae->leave($__internal_ddeff43243b216e6b111f856a069ee4228b8240167d0012f0995e2664058e5ae_prof);

        
        $__internal_3125acffd1ff7f1675fe68058efc15679dbec6a420bb14f66aef8354d2fdb987->leave($__internal_3125acffd1ff7f1675fe68058efc15679dbec6a420bb14f66aef8354d2fdb987_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
