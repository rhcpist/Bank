<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_bb29291f9baeb8b1516216926fa651b9de51c8449dda861550431cbee1893f3c extends Twig_Template
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
        $__internal_472b29e93b6bca2bd04cfeeac516e26132bbece9e756fc32c6dbf489c17c215d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472b29e93b6bca2bd04cfeeac516e26132bbece9e756fc32c6dbf489c17c215d->enter($__internal_472b29e93b6bca2bd04cfeeac516e26132bbece9e756fc32c6dbf489c17c215d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_09188f700246948a76f2f35cc0429bae7fb4369485794a5a14b6cc3fc73c7e8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09188f700246948a76f2f35cc0429bae7fb4369485794a5a14b6cc3fc73c7e8a->enter($__internal_09188f700246948a76f2f35cc0429bae7fb4369485794a5a14b6cc3fc73c7e8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_472b29e93b6bca2bd04cfeeac516e26132bbece9e756fc32c6dbf489c17c215d->leave($__internal_472b29e93b6bca2bd04cfeeac516e26132bbece9e756fc32c6dbf489c17c215d_prof);

        
        $__internal_09188f700246948a76f2f35cc0429bae7fb4369485794a5a14b6cc3fc73c7e8a->leave($__internal_09188f700246948a76f2f35cc0429bae7fb4369485794a5a14b6cc3fc73c7e8a_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
