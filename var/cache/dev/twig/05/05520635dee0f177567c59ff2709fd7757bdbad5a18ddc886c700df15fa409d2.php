<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6f4dca15e836d968b7ff3a8d6ca6293a118be23ad41f06d376031dd8ff527601 extends Twig_Template
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
        $__internal_91239a794936f2930374cc1b67e51df1c799cdc201f27a93712902ff14b20301 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91239a794936f2930374cc1b67e51df1c799cdc201f27a93712902ff14b20301->enter($__internal_91239a794936f2930374cc1b67e51df1c799cdc201f27a93712902ff14b20301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b8041d931352838cfc93d1b19fd9b462b8003587a775b3a0715be155fa53dc56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8041d931352838cfc93d1b19fd9b462b8003587a775b3a0715be155fa53dc56->enter($__internal_b8041d931352838cfc93d1b19fd9b462b8003587a775b3a0715be155fa53dc56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_91239a794936f2930374cc1b67e51df1c799cdc201f27a93712902ff14b20301->leave($__internal_91239a794936f2930374cc1b67e51df1c799cdc201f27a93712902ff14b20301_prof);

        
        $__internal_b8041d931352838cfc93d1b19fd9b462b8003587a775b3a0715be155fa53dc56->leave($__internal_b8041d931352838cfc93d1b19fd9b462b8003587a775b3a0715be155fa53dc56_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
