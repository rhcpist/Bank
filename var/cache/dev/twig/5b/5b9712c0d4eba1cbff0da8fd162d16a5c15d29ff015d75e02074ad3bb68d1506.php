<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ed5d855a09224d411eef0d675735088f5cee71481f064463008dd95c1426e5b5 extends Twig_Template
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
        $__internal_d51b06a7d14481773f87253ffd1d16fbfdfaf804d6c455d87ce99bffd1b14040 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d51b06a7d14481773f87253ffd1d16fbfdfaf804d6c455d87ce99bffd1b14040->enter($__internal_d51b06a7d14481773f87253ffd1d16fbfdfaf804d6c455d87ce99bffd1b14040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_7013b8e60c29f0da71d680a79ce63548b82e5296bf1d44725a18fad59229d6d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7013b8e60c29f0da71d680a79ce63548b82e5296bf1d44725a18fad59229d6d0->enter($__internal_7013b8e60c29f0da71d680a79ce63548b82e5296bf1d44725a18fad59229d6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d51b06a7d14481773f87253ffd1d16fbfdfaf804d6c455d87ce99bffd1b14040->leave($__internal_d51b06a7d14481773f87253ffd1d16fbfdfaf804d6c455d87ce99bffd1b14040_prof);

        
        $__internal_7013b8e60c29f0da71d680a79ce63548b82e5296bf1d44725a18fad59229d6d0->leave($__internal_7013b8e60c29f0da71d680a79ce63548b82e5296bf1d44725a18fad59229d6d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
