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
        $__internal_23274d4daa7d7cc40cbd5187b8b9a7646b613dc56d26e2b6188b6819bc40b326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23274d4daa7d7cc40cbd5187b8b9a7646b613dc56d26e2b6188b6819bc40b326->enter($__internal_23274d4daa7d7cc40cbd5187b8b9a7646b613dc56d26e2b6188b6819bc40b326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_d79dec9ac9a598fd7b43a2379b0ce06f39ea5486d0d921985ec1e77d0c04a9b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d79dec9ac9a598fd7b43a2379b0ce06f39ea5486d0d921985ec1e77d0c04a9b6->enter($__internal_d79dec9ac9a598fd7b43a2379b0ce06f39ea5486d0d921985ec1e77d0c04a9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_23274d4daa7d7cc40cbd5187b8b9a7646b613dc56d26e2b6188b6819bc40b326->leave($__internal_23274d4daa7d7cc40cbd5187b8b9a7646b613dc56d26e2b6188b6819bc40b326_prof);

        
        $__internal_d79dec9ac9a598fd7b43a2379b0ce06f39ea5486d0d921985ec1e77d0c04a9b6->leave($__internal_d79dec9ac9a598fd7b43a2379b0ce06f39ea5486d0d921985ec1e77d0c04a9b6_prof);

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
