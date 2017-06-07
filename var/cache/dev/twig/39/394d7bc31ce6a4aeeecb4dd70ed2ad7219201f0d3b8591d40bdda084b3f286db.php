<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_ea5978942486249baeac87cdfb43bbc69db34efc351145a0076ad137b1597b5d extends Twig_Template
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
        $__internal_bb1431fd7ec67c8effa128d2ffa813de8dba58ada426250c5c5403a8567e937c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb1431fd7ec67c8effa128d2ffa813de8dba58ada426250c5c5403a8567e937c->enter($__internal_bb1431fd7ec67c8effa128d2ffa813de8dba58ada426250c5c5403a8567e937c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_f7d831c5bc98731d1869e27fdddd0b400f77d9e46e47f456d0e6288c89a06362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d831c5bc98731d1869e27fdddd0b400f77d9e46e47f456d0e6288c89a06362->enter($__internal_f7d831c5bc98731d1869e27fdddd0b400f77d9e46e47f456d0e6288c89a06362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

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
        
        $__internal_bb1431fd7ec67c8effa128d2ffa813de8dba58ada426250c5c5403a8567e937c->leave($__internal_bb1431fd7ec67c8effa128d2ffa813de8dba58ada426250c5c5403a8567e937c_prof);

        
        $__internal_f7d831c5bc98731d1869e27fdddd0b400f77d9e46e47f456d0e6288c89a06362->leave($__internal_f7d831c5bc98731d1869e27fdddd0b400f77d9e46e47f456d0e6288c89a06362_prof);

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
