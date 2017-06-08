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
        $__internal_8722c39fa6b2855e5409ee1d44a9472bc98198bce9b11aee70be01b230c116f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8722c39fa6b2855e5409ee1d44a9472bc98198bce9b11aee70be01b230c116f0->enter($__internal_8722c39fa6b2855e5409ee1d44a9472bc98198bce9b11aee70be01b230c116f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_04e0f716895b5ba7a214081ec1786e78a62f8f698ca05179ad582dc3e6209b37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e0f716895b5ba7a214081ec1786e78a62f8f698ca05179ad582dc3e6209b37->enter($__internal_04e0f716895b5ba7a214081ec1786e78a62f8f698ca05179ad582dc3e6209b37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_8722c39fa6b2855e5409ee1d44a9472bc98198bce9b11aee70be01b230c116f0->leave($__internal_8722c39fa6b2855e5409ee1d44a9472bc98198bce9b11aee70be01b230c116f0_prof);

        
        $__internal_04e0f716895b5ba7a214081ec1786e78a62f8f698ca05179ad582dc3e6209b37->leave($__internal_04e0f716895b5ba7a214081ec1786e78a62f8f698ca05179ad582dc3e6209b37_prof);

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
