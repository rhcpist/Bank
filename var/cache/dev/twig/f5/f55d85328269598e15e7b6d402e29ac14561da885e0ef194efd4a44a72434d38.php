<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d092ff9aad89a625978458d67f831b6a107ab9f72c1f675f13c869fabca62bd9 extends Twig_Template
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
        $__internal_7f0b8c8d66860ceb5a4aade5088b22b4fb77fd130e61234922405916b946d15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0b8c8d66860ceb5a4aade5088b22b4fb77fd130e61234922405916b946d15d->enter($__internal_7f0b8c8d66860ceb5a4aade5088b22b4fb77fd130e61234922405916b946d15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d78bef71465cbce7e38399af1abdc4cd7bd291b1752a59e078bd8e896bd98e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d78bef71465cbce7e38399af1abdc4cd7bd291b1752a59e078bd8e896bd98e4c->enter($__internal_d78bef71465cbce7e38399af1abdc4cd7bd291b1752a59e078bd8e896bd98e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7f0b8c8d66860ceb5a4aade5088b22b4fb77fd130e61234922405916b946d15d->leave($__internal_7f0b8c8d66860ceb5a4aade5088b22b4fb77fd130e61234922405916b946d15d_prof);

        
        $__internal_d78bef71465cbce7e38399af1abdc4cd7bd291b1752a59e078bd8e896bd98e4c->leave($__internal_d78bef71465cbce7e38399af1abdc4cd7bd291b1752a59e078bd8e896bd98e4c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
