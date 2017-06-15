<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6f4dca15e836d968b7ff3a8d6ca6293a118be23ad41f06d376031dd8ff527601 extends Twig_Template
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
        $__internal_51d0cfd9bcff7fcee9578e6465f6f72f5276ebc891100d4146d1c97786e4826f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d0cfd9bcff7fcee9578e6465f6f72f5276ebc891100d4146d1c97786e4826f->enter($__internal_51d0cfd9bcff7fcee9578e6465f6f72f5276ebc891100d4146d1c97786e4826f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b142b6398201f8ef33786f100f215cccd08c367f23202b8015948e316e9f1360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b142b6398201f8ef33786f100f215cccd08c367f23202b8015948e316e9f1360->enter($__internal_b142b6398201f8ef33786f100f215cccd08c367f23202b8015948e316e9f1360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_51d0cfd9bcff7fcee9578e6465f6f72f5276ebc891100d4146d1c97786e4826f->leave($__internal_51d0cfd9bcff7fcee9578e6465f6f72f5276ebc891100d4146d1c97786e4826f_prof);

        
        $__internal_b142b6398201f8ef33786f100f215cccd08c367f23202b8015948e316e9f1360->leave($__internal_b142b6398201f8ef33786f100f215cccd08c367f23202b8015948e316e9f1360_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
