<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_947ee5742f996992969c26e198a1fef3cba67edf0c816c9e759e90af77e52808 extends Twig_Template
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
        $__internal_a7d813fbebe01f9a6fe0d2c26140d066cdce7f415f6f2b1e475cf20a96feab67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7d813fbebe01f9a6fe0d2c26140d066cdce7f415f6f2b1e475cf20a96feab67->enter($__internal_a7d813fbebe01f9a6fe0d2c26140d066cdce7f415f6f2b1e475cf20a96feab67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f7e08c0ea6006f977254e52be25936c825618ca4360e49f54ce1b7398db397ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7e08c0ea6006f977254e52be25936c825618ca4360e49f54ce1b7398db397ab->enter($__internal_f7e08c0ea6006f977254e52be25936c825618ca4360e49f54ce1b7398db397ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_a7d813fbebe01f9a6fe0d2c26140d066cdce7f415f6f2b1e475cf20a96feab67->leave($__internal_a7d813fbebe01f9a6fe0d2c26140d066cdce7f415f6f2b1e475cf20a96feab67_prof);

        
        $__internal_f7e08c0ea6006f977254e52be25936c825618ca4360e49f54ce1b7398db397ab->leave($__internal_f7e08c0ea6006f977254e52be25936c825618ca4360e49f54ce1b7398db397ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
