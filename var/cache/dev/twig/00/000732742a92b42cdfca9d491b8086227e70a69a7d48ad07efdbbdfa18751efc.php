<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_71641aa399033baac5c2dbbbe1b43789bfd0f4054ac802a633ac158984b37676 extends Twig_Template
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
        $__internal_5c10a1ce1779ad959190f3ec111ef759d814d7144842bb3bfcf9452b7b402b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c10a1ce1779ad959190f3ec111ef759d814d7144842bb3bfcf9452b7b402b7c->enter($__internal_5c10a1ce1779ad959190f3ec111ef759d814d7144842bb3bfcf9452b7b402b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ac0a6cc619672275349b63f075b677a68e258a3cc88ab05e9e79c0e4cb3332b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac0a6cc619672275349b63f075b677a68e258a3cc88ab05e9e79c0e4cb3332b5->enter($__internal_ac0a6cc619672275349b63f075b677a68e258a3cc88ab05e9e79c0e4cb3332b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_5c10a1ce1779ad959190f3ec111ef759d814d7144842bb3bfcf9452b7b402b7c->leave($__internal_5c10a1ce1779ad959190f3ec111ef759d814d7144842bb3bfcf9452b7b402b7c_prof);

        
        $__internal_ac0a6cc619672275349b63f075b677a68e258a3cc88ab05e9e79c0e4cb3332b5->leave($__internal_ac0a6cc619672275349b63f075b677a68e258a3cc88ab05e9e79c0e4cb3332b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
