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
        $__internal_bc25dc5d303496c8e61f533f5c63221300b4001cc7c87c50b16fad4a1342323e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc25dc5d303496c8e61f533f5c63221300b4001cc7c87c50b16fad4a1342323e->enter($__internal_bc25dc5d303496c8e61f533f5c63221300b4001cc7c87c50b16fad4a1342323e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_c23925d1f5166c64486150149c841cfb9574040b58275d9f98b0ff8710355f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23925d1f5166c64486150149c841cfb9574040b58275d9f98b0ff8710355f29->enter($__internal_c23925d1f5166c64486150149c841cfb9574040b58275d9f98b0ff8710355f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_bc25dc5d303496c8e61f533f5c63221300b4001cc7c87c50b16fad4a1342323e->leave($__internal_bc25dc5d303496c8e61f533f5c63221300b4001cc7c87c50b16fad4a1342323e_prof);

        
        $__internal_c23925d1f5166c64486150149c841cfb9574040b58275d9f98b0ff8710355f29->leave($__internal_c23925d1f5166c64486150149c841cfb9574040b58275d9f98b0ff8710355f29_prof);

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
