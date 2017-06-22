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
        $__internal_22736d736385404391e69c2bd63f908fbf7f4e3d2302dbf6a38b6e6fa1c8e85c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22736d736385404391e69c2bd63f908fbf7f4e3d2302dbf6a38b6e6fa1c8e85c->enter($__internal_22736d736385404391e69c2bd63f908fbf7f4e3d2302dbf6a38b6e6fa1c8e85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_b61887816e402efd58d70f748dab70a33fc807cde3e675e500797c65bb6ee6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b61887816e402efd58d70f748dab70a33fc807cde3e675e500797c65bb6ee6c2->enter($__internal_b61887816e402efd58d70f748dab70a33fc807cde3e675e500797c65bb6ee6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_22736d736385404391e69c2bd63f908fbf7f4e3d2302dbf6a38b6e6fa1c8e85c->leave($__internal_22736d736385404391e69c2bd63f908fbf7f4e3d2302dbf6a38b6e6fa1c8e85c_prof);

        
        $__internal_b61887816e402efd58d70f748dab70a33fc807cde3e675e500797c65bb6ee6c2->leave($__internal_b61887816e402efd58d70f748dab70a33fc807cde3e675e500797c65bb6ee6c2_prof);

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
