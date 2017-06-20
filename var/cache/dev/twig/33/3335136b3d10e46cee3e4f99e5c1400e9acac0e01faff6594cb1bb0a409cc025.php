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
        $__internal_529ab32c03c64b453ce7ce1c5ebe4186144bf18a60e3ea7ab9f2e0dac08face4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529ab32c03c64b453ce7ce1c5ebe4186144bf18a60e3ea7ab9f2e0dac08face4->enter($__internal_529ab32c03c64b453ce7ce1c5ebe4186144bf18a60e3ea7ab9f2e0dac08face4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_741c7c0da7e0f33cd23d067a46d9c32a2c1e8db84af6692886ae4d63998a4047 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_741c7c0da7e0f33cd23d067a46d9c32a2c1e8db84af6692886ae4d63998a4047->enter($__internal_741c7c0da7e0f33cd23d067a46d9c32a2c1e8db84af6692886ae4d63998a4047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_529ab32c03c64b453ce7ce1c5ebe4186144bf18a60e3ea7ab9f2e0dac08face4->leave($__internal_529ab32c03c64b453ce7ce1c5ebe4186144bf18a60e3ea7ab9f2e0dac08face4_prof);

        
        $__internal_741c7c0da7e0f33cd23d067a46d9c32a2c1e8db84af6692886ae4d63998a4047->leave($__internal_741c7c0da7e0f33cd23d067a46d9c32a2c1e8db84af6692886ae4d63998a4047_prof);

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
