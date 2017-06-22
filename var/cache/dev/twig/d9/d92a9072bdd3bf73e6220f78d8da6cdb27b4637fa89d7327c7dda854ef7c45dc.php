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
        $__internal_697c8905a0ad00180ec27f3b333da1e1fbf3e9a15c6eba8cdf2cdc1dbe70996b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_697c8905a0ad00180ec27f3b333da1e1fbf3e9a15c6eba8cdf2cdc1dbe70996b->enter($__internal_697c8905a0ad00180ec27f3b333da1e1fbf3e9a15c6eba8cdf2cdc1dbe70996b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_839b0e9879fe2bb9502bf65405884c529951b0531855d97c5bfbfab9b5cc98d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_839b0e9879fe2bb9502bf65405884c529951b0531855d97c5bfbfab9b5cc98d9->enter($__internal_839b0e9879fe2bb9502bf65405884c529951b0531855d97c5bfbfab9b5cc98d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_697c8905a0ad00180ec27f3b333da1e1fbf3e9a15c6eba8cdf2cdc1dbe70996b->leave($__internal_697c8905a0ad00180ec27f3b333da1e1fbf3e9a15c6eba8cdf2cdc1dbe70996b_prof);

        
        $__internal_839b0e9879fe2bb9502bf65405884c529951b0531855d97c5bfbfab9b5cc98d9->leave($__internal_839b0e9879fe2bb9502bf65405884c529951b0531855d97c5bfbfab9b5cc98d9_prof);

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
