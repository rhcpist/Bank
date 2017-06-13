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
        $__internal_4c27ba8353009fa9fd63c3152fdc4846191891b9715ebc31d7185e7735bfefe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c27ba8353009fa9fd63c3152fdc4846191891b9715ebc31d7185e7735bfefe2->enter($__internal_4c27ba8353009fa9fd63c3152fdc4846191891b9715ebc31d7185e7735bfefe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_2ba8224ca1d8be4b33fd05de1b1e7e830a11c67b4f82aa433290e18810cd0e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba8224ca1d8be4b33fd05de1b1e7e830a11c67b4f82aa433290e18810cd0e4c->enter($__internal_2ba8224ca1d8be4b33fd05de1b1e7e830a11c67b4f82aa433290e18810cd0e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_4c27ba8353009fa9fd63c3152fdc4846191891b9715ebc31d7185e7735bfefe2->leave($__internal_4c27ba8353009fa9fd63c3152fdc4846191891b9715ebc31d7185e7735bfefe2_prof);

        
        $__internal_2ba8224ca1d8be4b33fd05de1b1e7e830a11c67b4f82aa433290e18810cd0e4c->leave($__internal_2ba8224ca1d8be4b33fd05de1b1e7e830a11c67b4f82aa433290e18810cd0e4c_prof);

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
