<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_947ee5742f996992969c26e198a1fef3cba67edf0c816c9e759e90af77e52808 extends Twig_Template
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
        $__internal_0c1cb90a2ebce1e133018e99a02a27c1b46568c74c42e34a8693df4290bcf3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c1cb90a2ebce1e133018e99a02a27c1b46568c74c42e34a8693df4290bcf3f5->enter($__internal_0c1cb90a2ebce1e133018e99a02a27c1b46568c74c42e34a8693df4290bcf3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_c71d37005a1d8f5ecdeb82559b1c9a3818f77257b383eb016363f8bdb79f7d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c71d37005a1d8f5ecdeb82559b1c9a3818f77257b383eb016363f8bdb79f7d43->enter($__internal_c71d37005a1d8f5ecdeb82559b1c9a3818f77257b383eb016363f8bdb79f7d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_0c1cb90a2ebce1e133018e99a02a27c1b46568c74c42e34a8693df4290bcf3f5->leave($__internal_0c1cb90a2ebce1e133018e99a02a27c1b46568c74c42e34a8693df4290bcf3f5_prof);

        
        $__internal_c71d37005a1d8f5ecdeb82559b1c9a3818f77257b383eb016363f8bdb79f7d43->leave($__internal_c71d37005a1d8f5ecdeb82559b1c9a3818f77257b383eb016363f8bdb79f7d43_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
