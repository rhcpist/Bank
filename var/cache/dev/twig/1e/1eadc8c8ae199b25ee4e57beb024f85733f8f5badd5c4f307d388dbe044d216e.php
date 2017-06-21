<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_bb33d0f4ef810b450eb36d3759f87b4e0d7199f40fa4a1563e47ea5b99fc1f3f extends Twig_Template
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
        $__internal_6e83373834e8eff0cc313420ae319aac876cd2ac2149667c20ef9652c1b96322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e83373834e8eff0cc313420ae319aac876cd2ac2149667c20ef9652c1b96322->enter($__internal_6e83373834e8eff0cc313420ae319aac876cd2ac2149667c20ef9652c1b96322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_5d6f1236b6e4c6373f03ddd51af88791d314ea0133131c5791c54c9851edafe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6f1236b6e4c6373f03ddd51af88791d314ea0133131c5791c54c9851edafe3->enter($__internal_5d6f1236b6e4c6373f03ddd51af88791d314ea0133131c5791c54c9851edafe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6e83373834e8eff0cc313420ae319aac876cd2ac2149667c20ef9652c1b96322->leave($__internal_6e83373834e8eff0cc313420ae319aac876cd2ac2149667c20ef9652c1b96322_prof);

        
        $__internal_5d6f1236b6e4c6373f03ddd51af88791d314ea0133131c5791c54c9851edafe3->leave($__internal_5d6f1236b6e4c6373f03ddd51af88791d314ea0133131c5791c54c9851edafe3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
