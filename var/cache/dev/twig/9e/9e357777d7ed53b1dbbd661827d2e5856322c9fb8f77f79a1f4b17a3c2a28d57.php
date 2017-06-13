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
        $__internal_268bcbbae42bf0a046d034fb3d75cd3a5f89d65745991a5294aaa32f3336d803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268bcbbae42bf0a046d034fb3d75cd3a5f89d65745991a5294aaa32f3336d803->enter($__internal_268bcbbae42bf0a046d034fb3d75cd3a5f89d65745991a5294aaa32f3336d803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_afc00fc6991c6fb6739a46bb2dabe6424647040d324ab372fa441ddb132036ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc00fc6991c6fb6739a46bb2dabe6424647040d324ab372fa441ddb132036ed->enter($__internal_afc00fc6991c6fb6739a46bb2dabe6424647040d324ab372fa441ddb132036ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_268bcbbae42bf0a046d034fb3d75cd3a5f89d65745991a5294aaa32f3336d803->leave($__internal_268bcbbae42bf0a046d034fb3d75cd3a5f89d65745991a5294aaa32f3336d803_prof);

        
        $__internal_afc00fc6991c6fb6739a46bb2dabe6424647040d324ab372fa441ddb132036ed->leave($__internal_afc00fc6991c6fb6739a46bb2dabe6424647040d324ab372fa441ddb132036ed_prof);

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
