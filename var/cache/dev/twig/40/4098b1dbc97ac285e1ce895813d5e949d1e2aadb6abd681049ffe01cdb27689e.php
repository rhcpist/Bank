<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_c603103e116097f546051a417aa9fdf426257644d83ca14aa6d2cc5d1909e9a3 extends Twig_Template
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
        $__internal_b855dcc0d14621b10887dafed74e3f18d4f1eb19d2e23e3c67e925cf819cae7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b855dcc0d14621b10887dafed74e3f18d4f1eb19d2e23e3c67e925cf819cae7a->enter($__internal_b855dcc0d14621b10887dafed74e3f18d4f1eb19d2e23e3c67e925cf819cae7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_85d75b2e6fd4091dd9542ea929b687f9809f8313a80646fce9777179df6d5225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d75b2e6fd4091dd9542ea929b687f9809f8313a80646fce9777179df6d5225->enter($__internal_85d75b2e6fd4091dd9542ea929b687f9809f8313a80646fce9777179df6d5225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_b855dcc0d14621b10887dafed74e3f18d4f1eb19d2e23e3c67e925cf819cae7a->leave($__internal_b855dcc0d14621b10887dafed74e3f18d4f1eb19d2e23e3c67e925cf819cae7a_prof);

        
        $__internal_85d75b2e6fd4091dd9542ea929b687f9809f8313a80646fce9777179df6d5225->leave($__internal_85d75b2e6fd4091dd9542ea929b687f9809f8313a80646fce9777179df6d5225_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
