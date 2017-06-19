<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_768171dc48e2d9828809a14f773bb42a38987dcb934b5d80a2f429f81be1315d extends Twig_Template
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
        $__internal_cc2336d564cb1d249844e887d0e727ec984bcad18407d2bc83079f2ac429dd17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2336d564cb1d249844e887d0e727ec984bcad18407d2bc83079f2ac429dd17->enter($__internal_cc2336d564cb1d249844e887d0e727ec984bcad18407d2bc83079f2ac429dd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_b90c2d24f67e529ae390a9d48712cc4e2503a8bfee0665c577722ffc26b90237 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b90c2d24f67e529ae390a9d48712cc4e2503a8bfee0665c577722ffc26b90237->enter($__internal_b90c2d24f67e529ae390a9d48712cc4e2503a8bfee0665c577722ffc26b90237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_cc2336d564cb1d249844e887d0e727ec984bcad18407d2bc83079f2ac429dd17->leave($__internal_cc2336d564cb1d249844e887d0e727ec984bcad18407d2bc83079f2ac429dd17_prof);

        
        $__internal_b90c2d24f67e529ae390a9d48712cc4e2503a8bfee0665c577722ffc26b90237->leave($__internal_b90c2d24f67e529ae390a9d48712cc4e2503a8bfee0665c577722ffc26b90237_prof);

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
