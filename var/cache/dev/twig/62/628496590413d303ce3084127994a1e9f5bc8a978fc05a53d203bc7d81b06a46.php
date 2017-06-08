<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_0915a6577f78dbd3415f52abb45828171fadb9eb50ffe97e9a5cfc1bb7799114 extends Twig_Template
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
        $__internal_bc84a0047e0a3d89ba873f5f237b506e23cff5399440e546cb3f716475f4848a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc84a0047e0a3d89ba873f5f237b506e23cff5399440e546cb3f716475f4848a->enter($__internal_bc84a0047e0a3d89ba873f5f237b506e23cff5399440e546cb3f716475f4848a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_cf75e888d163792108de15ce259119548a55cc2aaec6adf8c61955d5b43173f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf75e888d163792108de15ce259119548a55cc2aaec6adf8c61955d5b43173f1->enter($__internal_cf75e888d163792108de15ce259119548a55cc2aaec6adf8c61955d5b43173f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_bc84a0047e0a3d89ba873f5f237b506e23cff5399440e546cb3f716475f4848a->leave($__internal_bc84a0047e0a3d89ba873f5f237b506e23cff5399440e546cb3f716475f4848a_prof);

        
        $__internal_cf75e888d163792108de15ce259119548a55cc2aaec6adf8c61955d5b43173f1->leave($__internal_cf75e888d163792108de15ce259119548a55cc2aaec6adf8c61955d5b43173f1_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
