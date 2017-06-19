<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_5396aa4bf62a6c900fa5865929316384a706dc4d84791f4a4fa4bbded2cc9020 extends Twig_Template
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
        $__internal_3809f0b866b242faf9715b68c4f76d05919a833395eb50625fd7e1db7f885173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3809f0b866b242faf9715b68c4f76d05919a833395eb50625fd7e1db7f885173->enter($__internal_3809f0b866b242faf9715b68c4f76d05919a833395eb50625fd7e1db7f885173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_afa774f083e6fc927d207166c0e982948ac52c8f91ad30731f6855a59eadf7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa774f083e6fc927d207166c0e982948ac52c8f91ad30731f6855a59eadf7c1->enter($__internal_afa774f083e6fc927d207166c0e982948ac52c8f91ad30731f6855a59eadf7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_3809f0b866b242faf9715b68c4f76d05919a833395eb50625fd7e1db7f885173->leave($__internal_3809f0b866b242faf9715b68c4f76d05919a833395eb50625fd7e1db7f885173_prof);

        
        $__internal_afa774f083e6fc927d207166c0e982948ac52c8f91ad30731f6855a59eadf7c1->leave($__internal_afa774f083e6fc927d207166c0e982948ac52c8f91ad30731f6855a59eadf7c1_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
