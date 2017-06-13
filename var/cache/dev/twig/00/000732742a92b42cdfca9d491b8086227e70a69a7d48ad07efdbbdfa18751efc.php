<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_71641aa399033baac5c2dbbbe1b43789bfd0f4054ac802a633ac158984b37676 extends Twig_Template
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
        $__internal_9e2c7a30089d878edbb26e51ae01564e75eba49dbd9b7accc7138f672870b30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2c7a30089d878edbb26e51ae01564e75eba49dbd9b7accc7138f672870b30f->enter($__internal_9e2c7a30089d878edbb26e51ae01564e75eba49dbd9b7accc7138f672870b30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1af5b3e6044e7a98667afaf755e92ce72be0671d5e949a8c24d600f24ce2a738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1af5b3e6044e7a98667afaf755e92ce72be0671d5e949a8c24d600f24ce2a738->enter($__internal_1af5b3e6044e7a98667afaf755e92ce72be0671d5e949a8c24d600f24ce2a738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_9e2c7a30089d878edbb26e51ae01564e75eba49dbd9b7accc7138f672870b30f->leave($__internal_9e2c7a30089d878edbb26e51ae01564e75eba49dbd9b7accc7138f672870b30f_prof);

        
        $__internal_1af5b3e6044e7a98667afaf755e92ce72be0671d5e949a8c24d600f24ce2a738->leave($__internal_1af5b3e6044e7a98667afaf755e92ce72be0671d5e949a8c24d600f24ce2a738_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
