<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_768171dc48e2d9828809a14f773bb42a38987dcb934b5d80a2f429f81be1315d extends Twig_Template
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
        $__internal_9ccd29e76f1df71d8fa033de4c6ca9dd2d44a46712d8e72899ec02cda0ecac64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ccd29e76f1df71d8fa033de4c6ca9dd2d44a46712d8e72899ec02cda0ecac64->enter($__internal_9ccd29e76f1df71d8fa033de4c6ca9dd2d44a46712d8e72899ec02cda0ecac64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_f6b7ff488033db2d0a6cc5fe0ae8f40467035e305f221121a559c9c3a1ea1e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6b7ff488033db2d0a6cc5fe0ae8f40467035e305f221121a559c9c3a1ea1e53->enter($__internal_f6b7ff488033db2d0a6cc5fe0ae8f40467035e305f221121a559c9c3a1ea1e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_9ccd29e76f1df71d8fa033de4c6ca9dd2d44a46712d8e72899ec02cda0ecac64->leave($__internal_9ccd29e76f1df71d8fa033de4c6ca9dd2d44a46712d8e72899ec02cda0ecac64_prof);

        
        $__internal_f6b7ff488033db2d0a6cc5fe0ae8f40467035e305f221121a559c9c3a1ea1e53->leave($__internal_f6b7ff488033db2d0a6cc5fe0ae8f40467035e305f221121a559c9c3a1ea1e53_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
