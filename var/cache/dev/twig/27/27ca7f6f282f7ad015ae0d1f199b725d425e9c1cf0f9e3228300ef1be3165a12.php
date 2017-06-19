<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_596c9191f72b7514dab47d4e61e54d55a373479fbf53d48fda9a4098c8587586 extends Twig_Template
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
        $__internal_74c46c26cb97cdb23aa4dddab4e606291a53835fa1f0ccc5fe9afc1e14f5d06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74c46c26cb97cdb23aa4dddab4e606291a53835fa1f0ccc5fe9afc1e14f5d06f->enter($__internal_74c46c26cb97cdb23aa4dddab4e606291a53835fa1f0ccc5fe9afc1e14f5d06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_b2c8e594fa0523e2cd0602049e9e4723c8549e3e2954b67abeae99724b56e4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2c8e594fa0523e2cd0602049e9e4723c8549e3e2954b67abeae99724b56e4d0->enter($__internal_b2c8e594fa0523e2cd0602049e9e4723c8549e3e2954b67abeae99724b56e4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_74c46c26cb97cdb23aa4dddab4e606291a53835fa1f0ccc5fe9afc1e14f5d06f->leave($__internal_74c46c26cb97cdb23aa4dddab4e606291a53835fa1f0ccc5fe9afc1e14f5d06f_prof);

        
        $__internal_b2c8e594fa0523e2cd0602049e9e4723c8549e3e2954b67abeae99724b56e4d0->leave($__internal_b2c8e594fa0523e2cd0602049e9e4723c8549e3e2954b67abeae99724b56e4d0_prof);

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
", "TwigBundle:Exception:exception.css.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
