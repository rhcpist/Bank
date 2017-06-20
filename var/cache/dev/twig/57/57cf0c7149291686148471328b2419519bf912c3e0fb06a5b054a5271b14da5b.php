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
        $__internal_9c516ff0fbc335df78b61ae2dd746ac79f4dc86004839c6d474148710febc1c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c516ff0fbc335df78b61ae2dd746ac79f4dc86004839c6d474148710febc1c2->enter($__internal_9c516ff0fbc335df78b61ae2dd746ac79f4dc86004839c6d474148710febc1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f26d16b05fbeba1a373324222ac186483c38f2cc501418dc71a417e140de93b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f26d16b05fbeba1a373324222ac186483c38f2cc501418dc71a417e140de93b5->enter($__internal_f26d16b05fbeba1a373324222ac186483c38f2cc501418dc71a417e140de93b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_9c516ff0fbc335df78b61ae2dd746ac79f4dc86004839c6d474148710febc1c2->leave($__internal_9c516ff0fbc335df78b61ae2dd746ac79f4dc86004839c6d474148710febc1c2_prof);

        
        $__internal_f26d16b05fbeba1a373324222ac186483c38f2cc501418dc71a417e140de93b5->leave($__internal_f26d16b05fbeba1a373324222ac186483c38f2cc501418dc71a417e140de93b5_prof);

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
