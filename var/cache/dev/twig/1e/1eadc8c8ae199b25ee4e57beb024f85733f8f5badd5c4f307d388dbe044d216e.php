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
        $__internal_d04af0854b50475210a5a00ee326b34c4d4b2f60c065ec24083f9f7f90c68cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04af0854b50475210a5a00ee326b34c4d4b2f60c065ec24083f9f7f90c68cc2->enter($__internal_d04af0854b50475210a5a00ee326b34c4d4b2f60c065ec24083f9f7f90c68cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_c7b1e10903e272ce2b6e7fb3ef657b5c0d2179a58afbca0b16b326d1eb163b79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b1e10903e272ce2b6e7fb3ef657b5c0d2179a58afbca0b16b326d1eb163b79->enter($__internal_c7b1e10903e272ce2b6e7fb3ef657b5c0d2179a58afbca0b16b326d1eb163b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d04af0854b50475210a5a00ee326b34c4d4b2f60c065ec24083f9f7f90c68cc2->leave($__internal_d04af0854b50475210a5a00ee326b34c4d4b2f60c065ec24083f9f7f90c68cc2_prof);

        
        $__internal_c7b1e10903e272ce2b6e7fb3ef657b5c0d2179a58afbca0b16b326d1eb163b79->leave($__internal_c7b1e10903e272ce2b6e7fb3ef657b5c0d2179a58afbca0b16b326d1eb163b79_prof);

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
