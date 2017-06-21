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
        $__internal_b9d00babcc8256037d51decb1bf92c34048a3b1a56a199c706b0b2721533432c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9d00babcc8256037d51decb1bf92c34048a3b1a56a199c706b0b2721533432c->enter($__internal_b9d00babcc8256037d51decb1bf92c34048a3b1a56a199c706b0b2721533432c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_e9e8beb9c7c7e6aae6f4989bdbe1baa8aac4cf757289975ab63bd15fd74b88d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e8beb9c7c7e6aae6f4989bdbe1baa8aac4cf757289975ab63bd15fd74b88d0->enter($__internal_e9e8beb9c7c7e6aae6f4989bdbe1baa8aac4cf757289975ab63bd15fd74b88d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_b9d00babcc8256037d51decb1bf92c34048a3b1a56a199c706b0b2721533432c->leave($__internal_b9d00babcc8256037d51decb1bf92c34048a3b1a56a199c706b0b2721533432c_prof);

        
        $__internal_e9e8beb9c7c7e6aae6f4989bdbe1baa8aac4cf757289975ab63bd15fd74b88d0->leave($__internal_e9e8beb9c7c7e6aae6f4989bdbe1baa8aac4cf757289975ab63bd15fd74b88d0_prof);

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
