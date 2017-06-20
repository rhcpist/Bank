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
        $__internal_43f686becc0ce126f3668b9f264164ecfabe88c61bd4877e1d79284f6bdc7edd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43f686becc0ce126f3668b9f264164ecfabe88c61bd4877e1d79284f6bdc7edd->enter($__internal_43f686becc0ce126f3668b9f264164ecfabe88c61bd4877e1d79284f6bdc7edd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_46059e72e4055a4dd4265a4094a2eb4fc3ca02e2599ba5d6d8a2d328bb04077d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46059e72e4055a4dd4265a4094a2eb4fc3ca02e2599ba5d6d8a2d328bb04077d->enter($__internal_46059e72e4055a4dd4265a4094a2eb4fc3ca02e2599ba5d6d8a2d328bb04077d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_43f686becc0ce126f3668b9f264164ecfabe88c61bd4877e1d79284f6bdc7edd->leave($__internal_43f686becc0ce126f3668b9f264164ecfabe88c61bd4877e1d79284f6bdc7edd_prof);

        
        $__internal_46059e72e4055a4dd4265a4094a2eb4fc3ca02e2599ba5d6d8a2d328bb04077d->leave($__internal_46059e72e4055a4dd4265a4094a2eb4fc3ca02e2599ba5d6d8a2d328bb04077d_prof);

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
