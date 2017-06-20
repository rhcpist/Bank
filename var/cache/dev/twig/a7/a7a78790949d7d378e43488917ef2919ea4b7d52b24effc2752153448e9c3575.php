<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f8747e644c2670234dbceb2f1672b5afb6a9d4b443927c00ba1d2b1dadbc3a7f extends Twig_Template
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
        $__internal_23b39c6673e37428a9559ff0603d5ddf6bb51bcc0a135ca13f2f128b1f59cfda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b39c6673e37428a9559ff0603d5ddf6bb51bcc0a135ca13f2f128b1f59cfda->enter($__internal_23b39c6673e37428a9559ff0603d5ddf6bb51bcc0a135ca13f2f128b1f59cfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_6527beb54da23fe0b1b48ac3dc4418124e651cc38953c7df79de6a6100293b4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6527beb54da23fe0b1b48ac3dc4418124e651cc38953c7df79de6a6100293b4d->enter($__internal_6527beb54da23fe0b1b48ac3dc4418124e651cc38953c7df79de6a6100293b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_23b39c6673e37428a9559ff0603d5ddf6bb51bcc0a135ca13f2f128b1f59cfda->leave($__internal_23b39c6673e37428a9559ff0603d5ddf6bb51bcc0a135ca13f2f128b1f59cfda_prof);

        
        $__internal_6527beb54da23fe0b1b48ac3dc4418124e651cc38953c7df79de6a6100293b4d->leave($__internal_6527beb54da23fe0b1b48ac3dc4418124e651cc38953c7df79de6a6100293b4d_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
