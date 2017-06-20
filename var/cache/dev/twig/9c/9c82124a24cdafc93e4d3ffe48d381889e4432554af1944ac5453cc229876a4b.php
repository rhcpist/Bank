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
        $__internal_20976a8e5518df4381dde0eed82046776d59840e5220e59f80521c0e28a4a55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20976a8e5518df4381dde0eed82046776d59840e5220e59f80521c0e28a4a55b->enter($__internal_20976a8e5518df4381dde0eed82046776d59840e5220e59f80521c0e28a4a55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_4735d52ed59c2e0002d3b356df4364d8f0360c2966345563be53b94ff24ec394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4735d52ed59c2e0002d3b356df4364d8f0360c2966345563be53b94ff24ec394->enter($__internal_4735d52ed59c2e0002d3b356df4364d8f0360c2966345563be53b94ff24ec394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_20976a8e5518df4381dde0eed82046776d59840e5220e59f80521c0e28a4a55b->leave($__internal_20976a8e5518df4381dde0eed82046776d59840e5220e59f80521c0e28a4a55b_prof);

        
        $__internal_4735d52ed59c2e0002d3b356df4364d8f0360c2966345563be53b94ff24ec394->leave($__internal_4735d52ed59c2e0002d3b356df4364d8f0360c2966345563be53b94ff24ec394_prof);

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
