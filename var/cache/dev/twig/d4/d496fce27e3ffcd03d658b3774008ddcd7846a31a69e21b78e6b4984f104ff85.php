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
        $__internal_c71c02a815f290f2a41abb08cf6b4b3a8b3d7ecd0507a71c509525082cbda2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71c02a815f290f2a41abb08cf6b4b3a8b3d7ecd0507a71c509525082cbda2fc->enter($__internal_c71c02a815f290f2a41abb08cf6b4b3a8b3d7ecd0507a71c509525082cbda2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_4516388b37bf247964661e7e2e3dba299528879a1b1a8c4bbd2408de8309194a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4516388b37bf247964661e7e2e3dba299528879a1b1a8c4bbd2408de8309194a->enter($__internal_4516388b37bf247964661e7e2e3dba299528879a1b1a8c4bbd2408de8309194a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c71c02a815f290f2a41abb08cf6b4b3a8b3d7ecd0507a71c509525082cbda2fc->leave($__internal_c71c02a815f290f2a41abb08cf6b4b3a8b3d7ecd0507a71c509525082cbda2fc_prof);

        
        $__internal_4516388b37bf247964661e7e2e3dba299528879a1b1a8c4bbd2408de8309194a->leave($__internal_4516388b37bf247964661e7e2e3dba299528879a1b1a8c4bbd2408de8309194a_prof);

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
