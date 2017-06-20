<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bb33d0f4ef810b450eb36d3759f87b4e0d7199f40fa4a1563e47ea5b99fc1f3f extends Twig_Template
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
        $__internal_4284aa60cc0af53cc2afd7399b3301286773c0409dcef9f95b7e48fbd72f1a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4284aa60cc0af53cc2afd7399b3301286773c0409dcef9f95b7e48fbd72f1a6b->enter($__internal_4284aa60cc0af53cc2afd7399b3301286773c0409dcef9f95b7e48fbd72f1a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b8a7c6502062e6525ca88e9b7efdc6f313796a65cc817a6b42df425023765f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a7c6502062e6525ca88e9b7efdc6f313796a65cc817a6b42df425023765f38->enter($__internal_b8a7c6502062e6525ca88e9b7efdc6f313796a65cc817a6b42df425023765f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4284aa60cc0af53cc2afd7399b3301286773c0409dcef9f95b7e48fbd72f1a6b->leave($__internal_4284aa60cc0af53cc2afd7399b3301286773c0409dcef9f95b7e48fbd72f1a6b_prof);

        
        $__internal_b8a7c6502062e6525ca88e9b7efdc6f313796a65cc817a6b42df425023765f38->leave($__internal_b8a7c6502062e6525ca88e9b7efdc6f313796a65cc817a6b42df425023765f38_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
