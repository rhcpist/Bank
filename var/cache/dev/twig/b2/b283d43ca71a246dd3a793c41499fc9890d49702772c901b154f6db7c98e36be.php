<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_5058c3edbdf82af441452bc39e1e7d456482825710cb6c234cd3beb92d0cb722 extends Twig_Template
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
        $__internal_5e228c3c5f42e170c7dc56d238b5ab584213b3edbcf4dbdaf23d2703c28b21e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e228c3c5f42e170c7dc56d238b5ab584213b3edbcf4dbdaf23d2703c28b21e5->enter($__internal_5e228c3c5f42e170c7dc56d238b5ab584213b3edbcf4dbdaf23d2703c28b21e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_eb09fe521ba271c2868fa62084592e0be95429a09749191677ecaa6f5f2ed5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb09fe521ba271c2868fa62084592e0be95429a09749191677ecaa6f5f2ed5fe->enter($__internal_eb09fe521ba271c2868fa62084592e0be95429a09749191677ecaa6f5f2ed5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_5e228c3c5f42e170c7dc56d238b5ab584213b3edbcf4dbdaf23d2703c28b21e5->leave($__internal_5e228c3c5f42e170c7dc56d238b5ab584213b3edbcf4dbdaf23d2703c28b21e5_prof);

        
        $__internal_eb09fe521ba271c2868fa62084592e0be95429a09749191677ecaa6f5f2ed5fe->leave($__internal_eb09fe521ba271c2868fa62084592e0be95429a09749191677ecaa6f5f2ed5fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
