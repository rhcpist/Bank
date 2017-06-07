<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_ee12a3d3a5b917e7da4fc3f9eeb2eda8dc0ed2b27d9bfd376e8d9538327bc7d8 extends Twig_Template
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
        $__internal_e223571e9796fd7429afb2da3a4273dc99bf0627c9b6e0eac2224b6a956ec6b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e223571e9796fd7429afb2da3a4273dc99bf0627c9b6e0eac2224b6a956ec6b2->enter($__internal_e223571e9796fd7429afb2da3a4273dc99bf0627c9b6e0eac2224b6a956ec6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5df6a14503373d539c40d840b0a5fc8bbbbba1bd450e65c6a9c1e3815ba74990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df6a14503373d539c40d840b0a5fc8bbbbba1bd450e65c6a9c1e3815ba74990->enter($__internal_5df6a14503373d539c40d840b0a5fc8bbbbba1bd450e65c6a9c1e3815ba74990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_e223571e9796fd7429afb2da3a4273dc99bf0627c9b6e0eac2224b6a956ec6b2->leave($__internal_e223571e9796fd7429afb2da3a4273dc99bf0627c9b6e0eac2224b6a956ec6b2_prof);

        
        $__internal_5df6a14503373d539c40d840b0a5fc8bbbbba1bd450e65c6a9c1e3815ba74990->leave($__internal_5df6a14503373d539c40d840b0a5fc8bbbbba1bd450e65c6a9c1e3815ba74990_prof);

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
