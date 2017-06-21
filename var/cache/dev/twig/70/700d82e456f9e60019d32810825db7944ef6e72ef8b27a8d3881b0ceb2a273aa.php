<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_2684d59811f1dc883a92cc366cab00860b44a089b5d793c4fd5863bd0cbc3e03 extends Twig_Template
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
        $__internal_2910e3f523c7368f0231a1e4391512ad2ec118a3720dbf3921b4e36bd7cb3365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2910e3f523c7368f0231a1e4391512ad2ec118a3720dbf3921b4e36bd7cb3365->enter($__internal_2910e3f523c7368f0231a1e4391512ad2ec118a3720dbf3921b4e36bd7cb3365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_04a78b1ea21b1bbe28d96055ac5daa8e973348ff09595c718612b2ee981180c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a78b1ea21b1bbe28d96055ac5daa8e973348ff09595c718612b2ee981180c9->enter($__internal_04a78b1ea21b1bbe28d96055ac5daa8e973348ff09595c718612b2ee981180c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
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
        
        $__internal_2910e3f523c7368f0231a1e4391512ad2ec118a3720dbf3921b4e36bd7cb3365->leave($__internal_2910e3f523c7368f0231a1e4391512ad2ec118a3720dbf3921b4e36bd7cb3365_prof);

        
        $__internal_04a78b1ea21b1bbe28d96055ac5daa8e973348ff09595c718612b2ee981180c9->leave($__internal_04a78b1ea21b1bbe28d96055ac5daa8e973348ff09595c718612b2ee981180c9_prof);

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
