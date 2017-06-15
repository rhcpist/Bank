<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_075b20d166e6f4197623b7ae2f3d3f2cec3124f70dfbfb657a58901b1bbb0c03 extends Twig_Template
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
        $__internal_98dd22ec0836b0f5008d7b8977862ff07f58d909d2ec203ae1c4af04fa20159d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98dd22ec0836b0f5008d7b8977862ff07f58d909d2ec203ae1c4af04fa20159d->enter($__internal_98dd22ec0836b0f5008d7b8977862ff07f58d909d2ec203ae1c4af04fa20159d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_96e90786d08ca1db1d71b4f8221777e1b2989c045a28828d2cbe2694381c2b88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e90786d08ca1db1d71b4f8221777e1b2989c045a28828d2cbe2694381c2b88->enter($__internal_96e90786d08ca1db1d71b4f8221777e1b2989c045a28828d2cbe2694381c2b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_98dd22ec0836b0f5008d7b8977862ff07f58d909d2ec203ae1c4af04fa20159d->leave($__internal_98dd22ec0836b0f5008d7b8977862ff07f58d909d2ec203ae1c4af04fa20159d_prof);

        
        $__internal_96e90786d08ca1db1d71b4f8221777e1b2989c045a28828d2cbe2694381c2b88->leave($__internal_96e90786d08ca1db1d71b4f8221777e1b2989c045a28828d2cbe2694381c2b88_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
