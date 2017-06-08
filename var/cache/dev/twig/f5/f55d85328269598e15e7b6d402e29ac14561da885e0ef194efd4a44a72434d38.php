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
        $__internal_ac93fd8d26a24474ae1b6f60225b7dd8c35ef019daabb7eacb33e6e9062a12bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac93fd8d26a24474ae1b6f60225b7dd8c35ef019daabb7eacb33e6e9062a12bc->enter($__internal_ac93fd8d26a24474ae1b6f60225b7dd8c35ef019daabb7eacb33e6e9062a12bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_3143573b39ad21f2b09dc8fc2e04ac8a5cbec2fb7db8c35274b59eb744447a03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3143573b39ad21f2b09dc8fc2e04ac8a5cbec2fb7db8c35274b59eb744447a03->enter($__internal_3143573b39ad21f2b09dc8fc2e04ac8a5cbec2fb7db8c35274b59eb744447a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_ac93fd8d26a24474ae1b6f60225b7dd8c35ef019daabb7eacb33e6e9062a12bc->leave($__internal_ac93fd8d26a24474ae1b6f60225b7dd8c35ef019daabb7eacb33e6e9062a12bc_prof);

        
        $__internal_3143573b39ad21f2b09dc8fc2e04ac8a5cbec2fb7db8c35274b59eb744447a03->leave($__internal_3143573b39ad21f2b09dc8fc2e04ac8a5cbec2fb7db8c35274b59eb744447a03_prof);

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
