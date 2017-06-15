<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9a19505315c1bebd8ca011d89193e7f3c93082d9a8b223fa18c6eb9267bb2601 extends Twig_Template
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
        $__internal_c52669e284ff313de7c336567c13ab18159becef8697655b0abb8d3ca92fc14f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c52669e284ff313de7c336567c13ab18159becef8697655b0abb8d3ca92fc14f->enter($__internal_c52669e284ff313de7c336567c13ab18159becef8697655b0abb8d3ca92fc14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2d7fbc5e17dccf7c03530ac08339c7b3e49d7273f78fdc5d197025e004dc56e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7fbc5e17dccf7c03530ac08339c7b3e49d7273f78fdc5d197025e004dc56e2->enter($__internal_2d7fbc5e17dccf7c03530ac08339c7b3e49d7273f78fdc5d197025e004dc56e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c52669e284ff313de7c336567c13ab18159becef8697655b0abb8d3ca92fc14f->leave($__internal_c52669e284ff313de7c336567c13ab18159becef8697655b0abb8d3ca92fc14f_prof);

        
        $__internal_2d7fbc5e17dccf7c03530ac08339c7b3e49d7273f78fdc5d197025e004dc56e2->leave($__internal_2d7fbc5e17dccf7c03530ac08339c7b3e49d7273f78fdc5d197025e004dc56e2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
