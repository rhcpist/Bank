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
        $__internal_e9b4883e055c09b8fc818e8e27e5cfd7e787ff8ad473422e6ff8ed1d3f2332ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9b4883e055c09b8fc818e8e27e5cfd7e787ff8ad473422e6ff8ed1d3f2332ac->enter($__internal_e9b4883e055c09b8fc818e8e27e5cfd7e787ff8ad473422e6ff8ed1d3f2332ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_866dbae6a49fd06d4989f74993aac4f841718e8e15178c2d9da39cdba1fd7f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866dbae6a49fd06d4989f74993aac4f841718e8e15178c2d9da39cdba1fd7f48->enter($__internal_866dbae6a49fd06d4989f74993aac4f841718e8e15178c2d9da39cdba1fd7f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_e9b4883e055c09b8fc818e8e27e5cfd7e787ff8ad473422e6ff8ed1d3f2332ac->leave($__internal_e9b4883e055c09b8fc818e8e27e5cfd7e787ff8ad473422e6ff8ed1d3f2332ac_prof);

        
        $__internal_866dbae6a49fd06d4989f74993aac4f841718e8e15178c2d9da39cdba1fd7f48->leave($__internal_866dbae6a49fd06d4989f74993aac4f841718e8e15178c2d9da39cdba1fd7f48_prof);

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
