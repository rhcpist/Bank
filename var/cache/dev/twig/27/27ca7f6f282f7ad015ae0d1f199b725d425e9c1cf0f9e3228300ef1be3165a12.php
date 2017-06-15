<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_596c9191f72b7514dab47d4e61e54d55a373479fbf53d48fda9a4098c8587586 extends Twig_Template
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
        $__internal_ed1b416078fbd07dd477c29643fe9231324a2ff719cfd046ebbb7c050942f121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1b416078fbd07dd477c29643fe9231324a2ff719cfd046ebbb7c050942f121->enter($__internal_ed1b416078fbd07dd477c29643fe9231324a2ff719cfd046ebbb7c050942f121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_67b1eb8b8d7b23b20c6e7f7d51e4acb732d6dc5f9cef6b69b3876633b1bd29ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b1eb8b8d7b23b20c6e7f7d51e4acb732d6dc5f9cef6b69b3876633b1bd29ad->enter($__internal_67b1eb8b8d7b23b20c6e7f7d51e4acb732d6dc5f9cef6b69b3876633b1bd29ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ed1b416078fbd07dd477c29643fe9231324a2ff719cfd046ebbb7c050942f121->leave($__internal_ed1b416078fbd07dd477c29643fe9231324a2ff719cfd046ebbb7c050942f121_prof);

        
        $__internal_67b1eb8b8d7b23b20c6e7f7d51e4acb732d6dc5f9cef6b69b3876633b1bd29ad->leave($__internal_67b1eb8b8d7b23b20c6e7f7d51e4acb732d6dc5f9cef6b69b3876633b1bd29ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
