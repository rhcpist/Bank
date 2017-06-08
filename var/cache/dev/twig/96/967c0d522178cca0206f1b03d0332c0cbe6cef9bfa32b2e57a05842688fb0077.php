<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5396aa4bf62a6c900fa5865929316384a706dc4d84791f4a4fa4bbded2cc9020 extends Twig_Template
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
        $__internal_dc2e0e30b980400cf5d46c6ee3f7bc602e3298d4a88b7de4621e59240007b661 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc2e0e30b980400cf5d46c6ee3f7bc602e3298d4a88b7de4621e59240007b661->enter($__internal_dc2e0e30b980400cf5d46c6ee3f7bc602e3298d4a88b7de4621e59240007b661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_026189b674848489291abfe19358394e9ec6f5691615118b5eacff49b28bc2f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_026189b674848489291abfe19358394e9ec6f5691615118b5eacff49b28bc2f2->enter($__internal_026189b674848489291abfe19358394e9ec6f5691615118b5eacff49b28bc2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_dc2e0e30b980400cf5d46c6ee3f7bc602e3298d4a88b7de4621e59240007b661->leave($__internal_dc2e0e30b980400cf5d46c6ee3f7bc602e3298d4a88b7de4621e59240007b661_prof);

        
        $__internal_026189b674848489291abfe19358394e9ec6f5691615118b5eacff49b28bc2f2->leave($__internal_026189b674848489291abfe19358394e9ec6f5691615118b5eacff49b28bc2f2_prof);

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
