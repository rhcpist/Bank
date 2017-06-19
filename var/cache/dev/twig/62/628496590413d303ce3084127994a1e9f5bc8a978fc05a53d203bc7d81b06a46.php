<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0915a6577f78dbd3415f52abb45828171fadb9eb50ffe97e9a5cfc1bb7799114 extends Twig_Template
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
        $__internal_10a41fbc0df7d4cb3656e08e94ea341ab6e845b5e590f8f229ba6d0e72019634 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10a41fbc0df7d4cb3656e08e94ea341ab6e845b5e590f8f229ba6d0e72019634->enter($__internal_10a41fbc0df7d4cb3656e08e94ea341ab6e845b5e590f8f229ba6d0e72019634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c09ac0146335c1acc211c6bdedce6dd156901841200f188a95edd7903a9043b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c09ac0146335c1acc211c6bdedce6dd156901841200f188a95edd7903a9043b7->enter($__internal_c09ac0146335c1acc211c6bdedce6dd156901841200f188a95edd7903a9043b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_10a41fbc0df7d4cb3656e08e94ea341ab6e845b5e590f8f229ba6d0e72019634->leave($__internal_10a41fbc0df7d4cb3656e08e94ea341ab6e845b5e590f8f229ba6d0e72019634_prof);

        
        $__internal_c09ac0146335c1acc211c6bdedce6dd156901841200f188a95edd7903a9043b7->leave($__internal_c09ac0146335c1acc211c6bdedce6dd156901841200f188a95edd7903a9043b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
