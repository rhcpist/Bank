<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_1f73de28c8555c314b4cd2cbb6a15068e3824302ce7c3d9f4cd8ddf86d2b7340 extends Twig_Template
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
        $__internal_0c75aca297a2127bc1d90612ccb0640ed64dbd6321b09977c9acd4cd1972c96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c75aca297a2127bc1d90612ccb0640ed64dbd6321b09977c9acd4cd1972c96c->enter($__internal_0c75aca297a2127bc1d90612ccb0640ed64dbd6321b09977c9acd4cd1972c96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_d49b0ce6c10aa358e734a0632e11296151b365f9814700d51df2d98736f3731d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49b0ce6c10aa358e734a0632e11296151b365f9814700d51df2d98736f3731d->enter($__internal_d49b0ce6c10aa358e734a0632e11296151b365f9814700d51df2d98736f3731d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_0c75aca297a2127bc1d90612ccb0640ed64dbd6321b09977c9acd4cd1972c96c->leave($__internal_0c75aca297a2127bc1d90612ccb0640ed64dbd6321b09977c9acd4cd1972c96c_prof);

        
        $__internal_d49b0ce6c10aa358e734a0632e11296151b365f9814700d51df2d98736f3731d->leave($__internal_d49b0ce6c10aa358e734a0632e11296151b365f9814700d51df2d98736f3731d_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
