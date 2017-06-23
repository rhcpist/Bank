<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_947ee5742f996992969c26e198a1fef3cba67edf0c816c9e759e90af77e52808 extends Twig_Template
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
        $__internal_21b1796d977f5e36fade1fd167ff7738209ba86879030eae7456e8e860f942de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b1796d977f5e36fade1fd167ff7738209ba86879030eae7456e8e860f942de->enter($__internal_21b1796d977f5e36fade1fd167ff7738209ba86879030eae7456e8e860f942de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_dd76930e844d70dea9b1b1aba7fd0da1a82aa18e21736b948a627da4191b476e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd76930e844d70dea9b1b1aba7fd0da1a82aa18e21736b948a627da4191b476e->enter($__internal_dd76930e844d70dea9b1b1aba7fd0da1a82aa18e21736b948a627da4191b476e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_21b1796d977f5e36fade1fd167ff7738209ba86879030eae7456e8e860f942de->leave($__internal_21b1796d977f5e36fade1fd167ff7738209ba86879030eae7456e8e860f942de_prof);

        
        $__internal_dd76930e844d70dea9b1b1aba7fd0da1a82aa18e21736b948a627da4191b476e->leave($__internal_dd76930e844d70dea9b1b1aba7fd0da1a82aa18e21736b948a627da4191b476e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
