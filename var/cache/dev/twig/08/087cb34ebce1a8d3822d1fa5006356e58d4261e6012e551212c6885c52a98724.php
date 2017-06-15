<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_69f3e4c669d4a8ecb78cabb0606b54ce0af132cc55b7e71395c9c4359ea9b53f extends Twig_Template
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
        $__internal_629a6a96bae5fe890e02530e9d092159e4b844bf01a218b7017a563f2ffd86d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_629a6a96bae5fe890e02530e9d092159e4b844bf01a218b7017a563f2ffd86d5->enter($__internal_629a6a96bae5fe890e02530e9d092159e4b844bf01a218b7017a563f2ffd86d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_9f80baed9ec548268286e2596860eea168d4645e28dd06f49ea1caa082daf643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f80baed9ec548268286e2596860eea168d4645e28dd06f49ea1caa082daf643->enter($__internal_9f80baed9ec548268286e2596860eea168d4645e28dd06f49ea1caa082daf643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_629a6a96bae5fe890e02530e9d092159e4b844bf01a218b7017a563f2ffd86d5->leave($__internal_629a6a96bae5fe890e02530e9d092159e4b844bf01a218b7017a563f2ffd86d5_prof);

        
        $__internal_9f80baed9ec548268286e2596860eea168d4645e28dd06f49ea1caa082daf643->leave($__internal_9f80baed9ec548268286e2596860eea168d4645e28dd06f49ea1caa082daf643_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
