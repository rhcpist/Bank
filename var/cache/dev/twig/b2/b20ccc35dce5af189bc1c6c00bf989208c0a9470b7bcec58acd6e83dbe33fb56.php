<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_44c9641ece6a62d5a3f1f804ce50e55ee8a89406ce929a9f7ff5e11788f0c862 extends Twig_Template
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
        $__internal_6a686139fba52df923a35e5090d48ff6ba4090967660a6f0a0e974593b33ccd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a686139fba52df923a35e5090d48ff6ba4090967660a6f0a0e974593b33ccd1->enter($__internal_6a686139fba52df923a35e5090d48ff6ba4090967660a6f0a0e974593b33ccd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_54c66f15a56e2e12dc6e44b400a4bcd331073664dc02037508bcbe841ef40595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c66f15a56e2e12dc6e44b400a4bcd331073664dc02037508bcbe841ef40595->enter($__internal_54c66f15a56e2e12dc6e44b400a4bcd331073664dc02037508bcbe841ef40595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_6a686139fba52df923a35e5090d48ff6ba4090967660a6f0a0e974593b33ccd1->leave($__internal_6a686139fba52df923a35e5090d48ff6ba4090967660a6f0a0e974593b33ccd1_prof);

        
        $__internal_54c66f15a56e2e12dc6e44b400a4bcd331073664dc02037508bcbe841ef40595->leave($__internal_54c66f15a56e2e12dc6e44b400a4bcd331073664dc02037508bcbe841ef40595_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
