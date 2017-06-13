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
        $__internal_c433d78a73d53acd3c3d970091d18f60cbfd4c45a6d582bd5171aedff5ff2be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c433d78a73d53acd3c3d970091d18f60cbfd4c45a6d582bd5171aedff5ff2be5->enter($__internal_c433d78a73d53acd3c3d970091d18f60cbfd4c45a6d582bd5171aedff5ff2be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e13ffc23672a828c59c2106dfc0f9af3b3b4d466fe757b7b075bf3ca99853652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13ffc23672a828c59c2106dfc0f9af3b3b4d466fe757b7b075bf3ca99853652->enter($__internal_e13ffc23672a828c59c2106dfc0f9af3b3b4d466fe757b7b075bf3ca99853652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c433d78a73d53acd3c3d970091d18f60cbfd4c45a6d582bd5171aedff5ff2be5->leave($__internal_c433d78a73d53acd3c3d970091d18f60cbfd4c45a6d582bd5171aedff5ff2be5_prof);

        
        $__internal_e13ffc23672a828c59c2106dfc0f9af3b3b4d466fe757b7b075bf3ca99853652->leave($__internal_e13ffc23672a828c59c2106dfc0f9af3b3b4d466fe757b7b075bf3ca99853652_prof);

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
