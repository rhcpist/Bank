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
        $__internal_2febf73d244e17c7a8b77f2b29ca4c745f08d5f680147ba690198e6fcc145f97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2febf73d244e17c7a8b77f2b29ca4c745f08d5f680147ba690198e6fcc145f97->enter($__internal_2febf73d244e17c7a8b77f2b29ca4c745f08d5f680147ba690198e6fcc145f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a3b7b5ab70d422dbf6c521b8cfb584d90415b4b1b7ffd8e628ffc1e4724ed3d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3b7b5ab70d422dbf6c521b8cfb584d90415b4b1b7ffd8e628ffc1e4724ed3d2->enter($__internal_a3b7b5ab70d422dbf6c521b8cfb584d90415b4b1b7ffd8e628ffc1e4724ed3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_2febf73d244e17c7a8b77f2b29ca4c745f08d5f680147ba690198e6fcc145f97->leave($__internal_2febf73d244e17c7a8b77f2b29ca4c745f08d5f680147ba690198e6fcc145f97_prof);

        
        $__internal_a3b7b5ab70d422dbf6c521b8cfb584d90415b4b1b7ffd8e628ffc1e4724ed3d2->leave($__internal_a3b7b5ab70d422dbf6c521b8cfb584d90415b4b1b7ffd8e628ffc1e4724ed3d2_prof);

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
