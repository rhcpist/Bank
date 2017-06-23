<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8bc0bae595f8624d9253793b9c228448c145d6516bcd49f2bab362408a4a248b extends Twig_Template
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
        $__internal_2bf4eb57b7dc11fe4cedfd4c802b31090bac09b057f0522b862658383c3413e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf4eb57b7dc11fe4cedfd4c802b31090bac09b057f0522b862658383c3413e1->enter($__internal_2bf4eb57b7dc11fe4cedfd4c802b31090bac09b057f0522b862658383c3413e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_d9cdab3ca7e5b6c008b0513a35cdbe366a83745729f151602c38ff4f4f870f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9cdab3ca7e5b6c008b0513a35cdbe366a83745729f151602c38ff4f4f870f0d->enter($__internal_d9cdab3ca7e5b6c008b0513a35cdbe366a83745729f151602c38ff4f4f870f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_2bf4eb57b7dc11fe4cedfd4c802b31090bac09b057f0522b862658383c3413e1->leave($__internal_2bf4eb57b7dc11fe4cedfd4c802b31090bac09b057f0522b862658383c3413e1_prof);

        
        $__internal_d9cdab3ca7e5b6c008b0513a35cdbe366a83745729f151602c38ff4f4f870f0d->leave($__internal_d9cdab3ca7e5b6c008b0513a35cdbe366a83745729f151602c38ff4f4f870f0d_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
