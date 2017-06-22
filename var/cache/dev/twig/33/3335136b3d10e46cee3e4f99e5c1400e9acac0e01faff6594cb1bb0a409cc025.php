<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8bc0bae595f8624d9253793b9c228448c145d6516bcd49f2bab362408a4a248b extends Twig_Template
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
        $__internal_ec32b7c35fa2b9893c08d6a5cdb361fce9e403b2a6997e6efa169e4c8b296a27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec32b7c35fa2b9893c08d6a5cdb361fce9e403b2a6997e6efa169e4c8b296a27->enter($__internal_ec32b7c35fa2b9893c08d6a5cdb361fce9e403b2a6997e6efa169e4c8b296a27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_bf6c2dc71fbfbe60beb4b0404c04fdea165ab4a9dc3dc1f0e5cf2914702c9516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6c2dc71fbfbe60beb4b0404c04fdea165ab4a9dc3dc1f0e5cf2914702c9516->enter($__internal_bf6c2dc71fbfbe60beb4b0404c04fdea165ab4a9dc3dc1f0e5cf2914702c9516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ec32b7c35fa2b9893c08d6a5cdb361fce9e403b2a6997e6efa169e4c8b296a27->leave($__internal_ec32b7c35fa2b9893c08d6a5cdb361fce9e403b2a6997e6efa169e4c8b296a27_prof);

        
        $__internal_bf6c2dc71fbfbe60beb4b0404c04fdea165ab4a9dc3dc1f0e5cf2914702c9516->leave($__internal_bf6c2dc71fbfbe60beb4b0404c04fdea165ab4a9dc3dc1f0e5cf2914702c9516_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
