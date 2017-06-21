<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c603103e116097f546051a417aa9fdf426257644d83ca14aa6d2cc5d1909e9a3 extends Twig_Template
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
        $__internal_0a7ae510fdcadf39e18a29a5c0c53d8761f6a8ef0c89dd51042fb4bd2d6cf394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a7ae510fdcadf39e18a29a5c0c53d8761f6a8ef0c89dd51042fb4bd2d6cf394->enter($__internal_0a7ae510fdcadf39e18a29a5c0c53d8761f6a8ef0c89dd51042fb4bd2d6cf394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_fad4e46a77a3f571d61ef0f649a6e0cbc397d2d1e68c188a1eb66ff5ec2aa901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fad4e46a77a3f571d61ef0f649a6e0cbc397d2d1e68c188a1eb66ff5ec2aa901->enter($__internal_fad4e46a77a3f571d61ef0f649a6e0cbc397d2d1e68c188a1eb66ff5ec2aa901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_0a7ae510fdcadf39e18a29a5c0c53d8761f6a8ef0c89dd51042fb4bd2d6cf394->leave($__internal_0a7ae510fdcadf39e18a29a5c0c53d8761f6a8ef0c89dd51042fb4bd2d6cf394_prof);

        
        $__internal_fad4e46a77a3f571d61ef0f649a6e0cbc397d2d1e68c188a1eb66ff5ec2aa901->leave($__internal_fad4e46a77a3f571d61ef0f649a6e0cbc397d2d1e68c188a1eb66ff5ec2aa901_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
