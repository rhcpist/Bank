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
        $__internal_4cb3d09e734e748c7f43b791c089efc98cdedb6c6677989d6fc16b9be8f5f960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cb3d09e734e748c7f43b791c089efc98cdedb6c6677989d6fc16b9be8f5f960->enter($__internal_4cb3d09e734e748c7f43b791c089efc98cdedb6c6677989d6fc16b9be8f5f960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ab67773edc3c0a1ee899b18b26c8ccb3d0eaf0267b494be14b373bdc59d67919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab67773edc3c0a1ee899b18b26c8ccb3d0eaf0267b494be14b373bdc59d67919->enter($__internal_ab67773edc3c0a1ee899b18b26c8ccb3d0eaf0267b494be14b373bdc59d67919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_4cb3d09e734e748c7f43b791c089efc98cdedb6c6677989d6fc16b9be8f5f960->leave($__internal_4cb3d09e734e748c7f43b791c089efc98cdedb6c6677989d6fc16b9be8f5f960_prof);

        
        $__internal_ab67773edc3c0a1ee899b18b26c8ccb3d0eaf0267b494be14b373bdc59d67919->leave($__internal_ab67773edc3c0a1ee899b18b26c8ccb3d0eaf0267b494be14b373bdc59d67919_prof);

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
