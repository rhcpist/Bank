<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_67e969b7b7bc27f848533f3d1d4848007db29918b002fd9cc6e26ce464f12d32 extends Twig_Template
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
        $__internal_83b532f828f91ee5e953d7f3fb07ed8763e62c52d804d754c80dcda3bcbcb1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b532f828f91ee5e953d7f3fb07ed8763e62c52d804d754c80dcda3bcbcb1fb->enter($__internal_83b532f828f91ee5e953d7f3fb07ed8763e62c52d804d754c80dcda3bcbcb1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_66f38d239498c7f358d5f84ade2fac9c2d94560274ef2bb31f9ddad181b85ffb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66f38d239498c7f358d5f84ade2fac9c2d94560274ef2bb31f9ddad181b85ffb->enter($__internal_66f38d239498c7f358d5f84ade2fac9c2d94560274ef2bb31f9ddad181b85ffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 9, $this->getSourceContext()); })()), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_83b532f828f91ee5e953d7f3fb07ed8763e62c52d804d754c80dcda3bcbcb1fb->leave($__internal_83b532f828f91ee5e953d7f3fb07ed8763e62c52d804d754c80dcda3bcbcb1fb_prof);

        
        $__internal_66f38d239498c7f358d5f84ade2fac9c2d94560274ef2bb31f9ddad181b85ffb->leave($__internal_66f38d239498c7f358d5f84ade2fac9c2d94560274ef2bb31f9ddad181b85ffb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "TwigBundle:Exception:error.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.html.twig");
    }
}
