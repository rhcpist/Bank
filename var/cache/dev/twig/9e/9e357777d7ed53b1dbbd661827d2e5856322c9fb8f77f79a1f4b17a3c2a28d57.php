<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5cea889a9220d6b3bcaa76ba2deb9b655e9a498132e7bd296f9a45de86d3cc3f extends Twig_Template
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
        $__internal_164746162b10893094d729ce3b498f9945a298de8773ebf40ee8dd3520231fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_164746162b10893094d729ce3b498f9945a298de8773ebf40ee8dd3520231fe8->enter($__internal_164746162b10893094d729ce3b498f9945a298de8773ebf40ee8dd3520231fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f1c64dd45a822395d987f8ead9f235bec20f358ae65448944bd5ae0a53cb8592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c64dd45a822395d987f8ead9f235bec20f358ae65448944bd5ae0a53cb8592->enter($__internal_f1c64dd45a822395d987f8ead9f235bec20f358ae65448944bd5ae0a53cb8592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_164746162b10893094d729ce3b498f9945a298de8773ebf40ee8dd3520231fe8->leave($__internal_164746162b10893094d729ce3b498f9945a298de8773ebf40ee8dd3520231fe8_prof);

        
        $__internal_f1c64dd45a822395d987f8ead9f235bec20f358ae65448944bd5ae0a53cb8592->leave($__internal_f1c64dd45a822395d987f8ead9f235bec20f358ae65448944bd5ae0a53cb8592_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
