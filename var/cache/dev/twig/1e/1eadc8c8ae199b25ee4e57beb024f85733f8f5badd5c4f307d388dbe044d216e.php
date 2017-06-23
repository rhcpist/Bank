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
        $__internal_a1eb5b2fb488fccacd8c7637877589a77b766e76762164e325643ed71fee03e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1eb5b2fb488fccacd8c7637877589a77b766e76762164e325643ed71fee03e1->enter($__internal_a1eb5b2fb488fccacd8c7637877589a77b766e76762164e325643ed71fee03e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_fa8c8b7f8a57b79b80540c433d2da5f09f54cd9c5daa65bf142316a37898f710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa8c8b7f8a57b79b80540c433d2da5f09f54cd9c5daa65bf142316a37898f710->enter($__internal_fa8c8b7f8a57b79b80540c433d2da5f09f54cd9c5daa65bf142316a37898f710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a1eb5b2fb488fccacd8c7637877589a77b766e76762164e325643ed71fee03e1->leave($__internal_a1eb5b2fb488fccacd8c7637877589a77b766e76762164e325643ed71fee03e1_prof);

        
        $__internal_fa8c8b7f8a57b79b80540c433d2da5f09f54cd9c5daa65bf142316a37898f710->leave($__internal_fa8c8b7f8a57b79b80540c433d2da5f09f54cd9c5daa65bf142316a37898f710_prof);

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
