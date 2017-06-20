<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_947ee5742f996992969c26e198a1fef3cba67edf0c816c9e759e90af77e52808 extends Twig_Template
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
        $__internal_7cc66ce1295db633c3c79887e65aacea19111b6d60fe63ca423c6f0193169b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cc66ce1295db633c3c79887e65aacea19111b6d60fe63ca423c6f0193169b8d->enter($__internal_7cc66ce1295db633c3c79887e65aacea19111b6d60fe63ca423c6f0193169b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_0bee0c5df2afb4e6feeb60557d425019fb9d24565707defc47c5055b97e47c50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bee0c5df2afb4e6feeb60557d425019fb9d24565707defc47c5055b97e47c50->enter($__internal_0bee0c5df2afb4e6feeb60557d425019fb9d24565707defc47c5055b97e47c50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_7cc66ce1295db633c3c79887e65aacea19111b6d60fe63ca423c6f0193169b8d->leave($__internal_7cc66ce1295db633c3c79887e65aacea19111b6d60fe63ca423c6f0193169b8d_prof);

        
        $__internal_0bee0c5df2afb4e6feeb60557d425019fb9d24565707defc47c5055b97e47c50->leave($__internal_0bee0c5df2afb4e6feeb60557d425019fb9d24565707defc47c5055b97e47c50_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
