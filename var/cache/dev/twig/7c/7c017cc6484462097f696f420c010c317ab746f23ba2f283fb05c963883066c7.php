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
        $__internal_3e10e2ec4e8b9f0be8f2a727ffb2c0b5ef1430fd24fc1fa417077cdc19801195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e10e2ec4e8b9f0be8f2a727ffb2c0b5ef1430fd24fc1fa417077cdc19801195->enter($__internal_3e10e2ec4e8b9f0be8f2a727ffb2c0b5ef1430fd24fc1fa417077cdc19801195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_8f4bfa1f8ce04e739f1a18e06a026584313d457b1c9fb38c73911bdcc8d1527b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4bfa1f8ce04e739f1a18e06a026584313d457b1c9fb38c73911bdcc8d1527b->enter($__internal_8f4bfa1f8ce04e739f1a18e06a026584313d457b1c9fb38c73911bdcc8d1527b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_3e10e2ec4e8b9f0be8f2a727ffb2c0b5ef1430fd24fc1fa417077cdc19801195->leave($__internal_3e10e2ec4e8b9f0be8f2a727ffb2c0b5ef1430fd24fc1fa417077cdc19801195_prof);

        
        $__internal_8f4bfa1f8ce04e739f1a18e06a026584313d457b1c9fb38c73911bdcc8d1527b->leave($__internal_8f4bfa1f8ce04e739f1a18e06a026584313d457b1c9fb38c73911bdcc8d1527b_prof);

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
