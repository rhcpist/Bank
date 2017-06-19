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
        $__internal_44073a22b60d3e54b2970f9401bb52649c93847c0448d5b76bfec5db80cb99ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44073a22b60d3e54b2970f9401bb52649c93847c0448d5b76bfec5db80cb99ef->enter($__internal_44073a22b60d3e54b2970f9401bb52649c93847c0448d5b76bfec5db80cb99ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_784806ee4f3a5306452ae2d07a9f4f9bf2ea38a447eb3215c2f7c41ec20deee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_784806ee4f3a5306452ae2d07a9f4f9bf2ea38a447eb3215c2f7c41ec20deee3->enter($__internal_784806ee4f3a5306452ae2d07a9f4f9bf2ea38a447eb3215c2f7c41ec20deee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_44073a22b60d3e54b2970f9401bb52649c93847c0448d5b76bfec5db80cb99ef->leave($__internal_44073a22b60d3e54b2970f9401bb52649c93847c0448d5b76bfec5db80cb99ef_prof);

        
        $__internal_784806ee4f3a5306452ae2d07a9f4f9bf2ea38a447eb3215c2f7c41ec20deee3->leave($__internal_784806ee4f3a5306452ae2d07a9f4f9bf2ea38a447eb3215c2f7c41ec20deee3_prof);

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
