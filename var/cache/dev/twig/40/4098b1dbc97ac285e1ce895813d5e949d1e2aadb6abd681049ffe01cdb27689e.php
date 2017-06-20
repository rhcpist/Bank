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
        $__internal_866d7f033abd2db763b138fbe530ff3d1b7f7f98c93460af635a199a06cbd683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_866d7f033abd2db763b138fbe530ff3d1b7f7f98c93460af635a199a06cbd683->enter($__internal_866d7f033abd2db763b138fbe530ff3d1b7f7f98c93460af635a199a06cbd683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_6a7aca469ad7703e17c45283e6e483b582c920eb39070f4997198282ba46e288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a7aca469ad7703e17c45283e6e483b582c920eb39070f4997198282ba46e288->enter($__internal_6a7aca469ad7703e17c45283e6e483b582c920eb39070f4997198282ba46e288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_866d7f033abd2db763b138fbe530ff3d1b7f7f98c93460af635a199a06cbd683->leave($__internal_866d7f033abd2db763b138fbe530ff3d1b7f7f98c93460af635a199a06cbd683_prof);

        
        $__internal_6a7aca469ad7703e17c45283e6e483b582c920eb39070f4997198282ba46e288->leave($__internal_6a7aca469ad7703e17c45283e6e483b582c920eb39070f4997198282ba46e288_prof);

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
