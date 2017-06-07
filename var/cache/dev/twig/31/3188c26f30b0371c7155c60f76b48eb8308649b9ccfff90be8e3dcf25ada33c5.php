<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e524b9fa782e27d514b69480cc2f30b782fed2796991c5355e93011fc7df9fd1 extends Twig_Template
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
        $__internal_92af692c868af9df42a75d13d0185910ed41d00b96f83676111c9ddf2e7b5d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92af692c868af9df42a75d13d0185910ed41d00b96f83676111c9ddf2e7b5d10->enter($__internal_92af692c868af9df42a75d13d0185910ed41d00b96f83676111c9ddf2e7b5d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_206a1dbf8650320978ca0d6beba7b51014fe39326e232e42a933d3e4aac9e9ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206a1dbf8650320978ca0d6beba7b51014fe39326e232e42a933d3e4aac9e9ab->enter($__internal_206a1dbf8650320978ca0d6beba7b51014fe39326e232e42a933d3e4aac9e9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_92af692c868af9df42a75d13d0185910ed41d00b96f83676111c9ddf2e7b5d10->leave($__internal_92af692c868af9df42a75d13d0185910ed41d00b96f83676111c9ddf2e7b5d10_prof);

        
        $__internal_206a1dbf8650320978ca0d6beba7b51014fe39326e232e42a933d3e4aac9e9ab->leave($__internal_206a1dbf8650320978ca0d6beba7b51014fe39326e232e42a933d3e4aac9e9ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
