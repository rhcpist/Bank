<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_99cc1db5e1038fa183aec6320123cbeea00dc81ce80fa610b5c421da3c9f0545 extends Twig_Template
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
        $__internal_7db312cf111a044235f0543b040b3ac170a366deb424b8a08c77c801a6feb5e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db312cf111a044235f0543b040b3ac170a366deb424b8a08c77c801a6feb5e2->enter($__internal_7db312cf111a044235f0543b040b3ac170a366deb424b8a08c77c801a6feb5e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_c12a4f360476940c878841639efd276a8c746a0fbcc1bb2e7edac45edb855968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12a4f360476940c878841639efd276a8c746a0fbcc1bb2e7edac45edb855968->enter($__internal_c12a4f360476940c878841639efd276a8c746a0fbcc1bb2e7edac45edb855968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_7db312cf111a044235f0543b040b3ac170a366deb424b8a08c77c801a6feb5e2->leave($__internal_7db312cf111a044235f0543b040b3ac170a366deb424b8a08c77c801a6feb5e2_prof);

        
        $__internal_c12a4f360476940c878841639efd276a8c746a0fbcc1bb2e7edac45edb855968->leave($__internal_c12a4f360476940c878841639efd276a8c746a0fbcc1bb2e7edac45edb855968_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
