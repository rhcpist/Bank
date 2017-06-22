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
        $__internal_ed96f2ee7b4ca8a2c4921f2ba3ab4af3314db14f009a919e374fa0dacd8b572f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed96f2ee7b4ca8a2c4921f2ba3ab4af3314db14f009a919e374fa0dacd8b572f->enter($__internal_ed96f2ee7b4ca8a2c4921f2ba3ab4af3314db14f009a919e374fa0dacd8b572f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_3443caba88e2a43830ee9534e4fa936cb3b0ae540de33d204daa08983561f1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3443caba88e2a43830ee9534e4fa936cb3b0ae540de33d204daa08983561f1e4->enter($__internal_3443caba88e2a43830ee9534e4fa936cb3b0ae540de33d204daa08983561f1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_ed96f2ee7b4ca8a2c4921f2ba3ab4af3314db14f009a919e374fa0dacd8b572f->leave($__internal_ed96f2ee7b4ca8a2c4921f2ba3ab4af3314db14f009a919e374fa0dacd8b572f_prof);

        
        $__internal_3443caba88e2a43830ee9534e4fa936cb3b0ae540de33d204daa08983561f1e4->leave($__internal_3443caba88e2a43830ee9534e4fa936cb3b0ae540de33d204daa08983561f1e4_prof);

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
