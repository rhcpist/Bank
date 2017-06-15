<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_768171dc48e2d9828809a14f773bb42a38987dcb934b5d80a2f429f81be1315d extends Twig_Template
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
        $__internal_86aa8211ac21638e2a072ae6ad1bdfcb471d2da2d09e6a41b88e406cda378596 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86aa8211ac21638e2a072ae6ad1bdfcb471d2da2d09e6a41b88e406cda378596->enter($__internal_86aa8211ac21638e2a072ae6ad1bdfcb471d2da2d09e6a41b88e406cda378596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_66282a20f7e154e2c230acf358f74afc4d8412d09d8f6ab645e644fb0de8d6b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66282a20f7e154e2c230acf358f74afc4d8412d09d8f6ab645e644fb0de8d6b8->enter($__internal_66282a20f7e154e2c230acf358f74afc4d8412d09d8f6ab645e644fb0de8d6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_86aa8211ac21638e2a072ae6ad1bdfcb471d2da2d09e6a41b88e406cda378596->leave($__internal_86aa8211ac21638e2a072ae6ad1bdfcb471d2da2d09e6a41b88e406cda378596_prof);

        
        $__internal_66282a20f7e154e2c230acf358f74afc4d8412d09d8f6ab645e644fb0de8d6b8->leave($__internal_66282a20f7e154e2c230acf358f74afc4d8412d09d8f6ab645e644fb0de8d6b8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
