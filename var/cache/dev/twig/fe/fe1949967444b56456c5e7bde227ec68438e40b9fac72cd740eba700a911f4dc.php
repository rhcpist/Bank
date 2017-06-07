<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_69d9181bfa841d4d042d3769fe00887e8f6f6dea6a6bff0165567843c18de579 extends Twig_Template
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
        $__internal_9ff235258525fd50fc3eaff7bbe83105fd4dbba782e381eb3a104cc54b99a0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ff235258525fd50fc3eaff7bbe83105fd4dbba782e381eb3a104cc54b99a0ce->enter($__internal_9ff235258525fd50fc3eaff7bbe83105fd4dbba782e381eb3a104cc54b99a0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6f5cfb51b0728a170669b11fc142bab2347356ec078bff353493a3ebd192c8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f5cfb51b0728a170669b11fc142bab2347356ec078bff353493a3ebd192c8c7->enter($__internal_6f5cfb51b0728a170669b11fc142bab2347356ec078bff353493a3ebd192c8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_9ff235258525fd50fc3eaff7bbe83105fd4dbba782e381eb3a104cc54b99a0ce->leave($__internal_9ff235258525fd50fc3eaff7bbe83105fd4dbba782e381eb3a104cc54b99a0ce_prof);

        
        $__internal_6f5cfb51b0728a170669b11fc142bab2347356ec078bff353493a3ebd192c8c7->leave($__internal_6f5cfb51b0728a170669b11fc142bab2347356ec078bff353493a3ebd192c8c7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
