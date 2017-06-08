<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9a19505315c1bebd8ca011d89193e7f3c93082d9a8b223fa18c6eb9267bb2601 extends Twig_Template
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
        $__internal_192b839998d0920a4cd64511cb4babfe439ea91e3311b5b61a9c786df5849946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192b839998d0920a4cd64511cb4babfe439ea91e3311b5b61a9c786df5849946->enter($__internal_192b839998d0920a4cd64511cb4babfe439ea91e3311b5b61a9c786df5849946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_2e64bd30c9a63ad6ae6ec32d7ec17e7fa5b561f54b84d1a3e550a92ac8849293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e64bd30c9a63ad6ae6ec32d7ec17e7fa5b561f54b84d1a3e550a92ac8849293->enter($__internal_2e64bd30c9a63ad6ae6ec32d7ec17e7fa5b561f54b84d1a3e550a92ac8849293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_192b839998d0920a4cd64511cb4babfe439ea91e3311b5b61a9c786df5849946->leave($__internal_192b839998d0920a4cd64511cb4babfe439ea91e3311b5b61a9c786df5849946_prof);

        
        $__internal_2e64bd30c9a63ad6ae6ec32d7ec17e7fa5b561f54b84d1a3e550a92ac8849293->leave($__internal_2e64bd30c9a63ad6ae6ec32d7ec17e7fa5b561f54b84d1a3e550a92ac8849293_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
