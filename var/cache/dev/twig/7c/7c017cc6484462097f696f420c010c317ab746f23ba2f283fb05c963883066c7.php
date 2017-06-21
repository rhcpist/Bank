<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_426dc18677b5bdd1748c8fab0fec14ffdedc0c55f9ccd2c110c7b73b1639a2a6 extends Twig_Template
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
        $__internal_dea421026bba27c085ac5284fda9af17d42b5a27c8647f4241e80b1453c30a35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dea421026bba27c085ac5284fda9af17d42b5a27c8647f4241e80b1453c30a35->enter($__internal_dea421026bba27c085ac5284fda9af17d42b5a27c8647f4241e80b1453c30a35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_7e67f4a634e9dae7ce729783d1648659b1b15f5c07b0f9d4f30432d42584a02b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e67f4a634e9dae7ce729783d1648659b1b15f5c07b0f9d4f30432d42584a02b->enter($__internal_7e67f4a634e9dae7ce729783d1648659b1b15f5c07b0f9d4f30432d42584a02b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_dea421026bba27c085ac5284fda9af17d42b5a27c8647f4241e80b1453c30a35->leave($__internal_dea421026bba27c085ac5284fda9af17d42b5a27c8647f4241e80b1453c30a35_prof);

        
        $__internal_7e67f4a634e9dae7ce729783d1648659b1b15f5c07b0f9d4f30432d42584a02b->leave($__internal_7e67f4a634e9dae7ce729783d1648659b1b15f5c07b0f9d4f30432d42584a02b_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
