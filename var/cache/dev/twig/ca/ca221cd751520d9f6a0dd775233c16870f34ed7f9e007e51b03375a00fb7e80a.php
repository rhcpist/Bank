<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_7ed406b742bb3807309f57a227ab393a8f98b83d4f04c0f850c271ddd25d37fa extends Twig_Template
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
        $__internal_799bc738f7d211c907e0ce7d3d17ef2deb2d6a3990685f9dd42ba056361062c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799bc738f7d211c907e0ce7d3d17ef2deb2d6a3990685f9dd42ba056361062c0->enter($__internal_799bc738f7d211c907e0ce7d3d17ef2deb2d6a3990685f9dd42ba056361062c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_0ee84bbbc4244c28f20e6dfeeb746de1a5d37a12522f8986e40f5b1769ccdedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ee84bbbc4244c28f20e6dfeeb746de1a5d37a12522f8986e40f5b1769ccdedb->enter($__internal_0ee84bbbc4244c28f20e6dfeeb746de1a5d37a12522f8986e40f5b1769ccdedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_799bc738f7d211c907e0ce7d3d17ef2deb2d6a3990685f9dd42ba056361062c0->leave($__internal_799bc738f7d211c907e0ce7d3d17ef2deb2d6a3990685f9dd42ba056361062c0_prof);

        
        $__internal_0ee84bbbc4244c28f20e6dfeeb746de1a5d37a12522f8986e40f5b1769ccdedb->leave($__internal_0ee84bbbc4244c28f20e6dfeeb746de1a5d37a12522f8986e40f5b1769ccdedb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
