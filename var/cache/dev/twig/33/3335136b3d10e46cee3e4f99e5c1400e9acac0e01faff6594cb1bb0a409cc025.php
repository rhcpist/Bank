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
        $__internal_3257e7fe20e3de5cf9c6da12a705ae90e82842905953abf875e6f784dbe73a6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3257e7fe20e3de5cf9c6da12a705ae90e82842905953abf875e6f784dbe73a6d->enter($__internal_3257e7fe20e3de5cf9c6da12a705ae90e82842905953abf875e6f784dbe73a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b3ec239fc8b5766dbf9910108270643a973fe2125c7094383a93abbecc6230bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3ec239fc8b5766dbf9910108270643a973fe2125c7094383a93abbecc6230bc->enter($__internal_b3ec239fc8b5766dbf9910108270643a973fe2125c7094383a93abbecc6230bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3257e7fe20e3de5cf9c6da12a705ae90e82842905953abf875e6f784dbe73a6d->leave($__internal_3257e7fe20e3de5cf9c6da12a705ae90e82842905953abf875e6f784dbe73a6d_prof);

        
        $__internal_b3ec239fc8b5766dbf9910108270643a973fe2125c7094383a93abbecc6230bc->leave($__internal_b3ec239fc8b5766dbf9910108270643a973fe2125c7094383a93abbecc6230bc_prof);

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
