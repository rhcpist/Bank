<?php

/* NelmioApiDocBundle:Components:version.html.twig */
class __TwigTemplate_1b3ffdde251926f8b752739095e4ad3c5db8a276e38c6dd9761d2728f7a6d74f extends Twig_Template
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
        $__internal_93f2fd1557130704f004c6d669efa46179618be6e9f335a52723afd2096ff2f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f2fd1557130704f004c6d669efa46179618be6e9f335a52723afd2096ff2f3->enter($__internal_93f2fd1557130704f004c6d669efa46179618be6e9f335a52723afd2096ff2f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        $__internal_043bddef2eee6c15005416a0cc2ae99ca17f0a654542707255f27c657bf39b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043bddef2eee6c15005416a0cc2ae99ca17f0a654542707255f27c657bf39b27->enter($__internal_043bddef2eee6c15005416a0cc2ae99ca17f0a654542707255f27c657bf39b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:version.html.twig"));

        // line 1
        if ((twig_test_empty(($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion"))) && twig_test_empty(($context["untilVersion"] ?? $this->getContext($context, "untilVersion"))))) {
            // line 2
            echo "*
";
        } else {
            // line 4
            echo "    ";
            if ( !twig_test_empty(($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion")))) {
                echo "&gt;=";
                echo twig_escape_filter($this->env, ($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion")), "html", null, true);
            }
            // line 5
            echo "    ";
            if ( !twig_test_empty(($context["untilVersion"] ?? $this->getContext($context, "untilVersion")))) {
                // line 6
                echo "        ";
                if ( !twig_test_empty(($context["sinceVersion"] ?? $this->getContext($context, "sinceVersion")))) {
                    echo ",";
                }
                echo "&lt;=";
                echo twig_escape_filter($this->env, ($context["untilVersion"] ?? $this->getContext($context, "untilVersion")), "html", null, true);
                echo "
    ";
            }
        }
        
        $__internal_93f2fd1557130704f004c6d669efa46179618be6e9f335a52723afd2096ff2f3->leave($__internal_93f2fd1557130704f004c6d669efa46179618be6e9f335a52723afd2096ff2f3_prof);

        
        $__internal_043bddef2eee6c15005416a0cc2ae99ca17f0a654542707255f27c657bf39b27->leave($__internal_043bddef2eee6c15005416a0cc2ae99ca17f0a654542707255f27c657bf39b27_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  37 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if sinceVersion is empty and untilVersion is empty %}
*
{% else %}
    {% if sinceVersion is not empty %}&gt;={{ sinceVersion }}{% endif %}
    {% if untilVersion is not empty %}
        {% if sinceVersion is not empty %},{% endif %}&lt;={{ untilVersion }}
    {% endif %}
{% endif %}
", "NelmioApiDocBundle:Components:version.html.twig", "/mnt/storage/private/public_html/bank/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/version.html.twig");
    }
}