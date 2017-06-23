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
        $__internal_502e206874921be3a37aa00d29f193b26e97e4caecd41b5cc7d9716d1a921706 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_502e206874921be3a37aa00d29f193b26e97e4caecd41b5cc7d9716d1a921706->enter($__internal_502e206874921be3a37aa00d29f193b26e97e4caecd41b5cc7d9716d1a921706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_42a316ba5972939df9b29769f643a1c6710726d59fe27467ab766194b0255a90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a316ba5972939df9b29769f643a1c6710726d59fe27467ab766194b0255a90->enter($__internal_42a316ba5972939df9b29769f643a1c6710726d59fe27467ab766194b0255a90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_502e206874921be3a37aa00d29f193b26e97e4caecd41b5cc7d9716d1a921706->leave($__internal_502e206874921be3a37aa00d29f193b26e97e4caecd41b5cc7d9716d1a921706_prof);

        
        $__internal_42a316ba5972939df9b29769f643a1c6710726d59fe27467ab766194b0255a90->leave($__internal_42a316ba5972939df9b29769f643a1c6710726d59fe27467ab766194b0255a90_prof);

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
