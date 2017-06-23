<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_aa3334ea39ca1541be2c57000d27e380a05d9982efe931ca9dc67e9b9787b2a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resource.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15f0c4122e3b780ffeba0fd6fe8b488a774ceb5d41e581a6553dfd727bb76124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f0c4122e3b780ffeba0fd6fe8b488a774ceb5d41e581a6553dfd727bb76124->enter($__internal_15f0c4122e3b780ffeba0fd6fe8b488a774ceb5d41e581a6553dfd727bb76124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_248de47e1a5a5d80aef8ba16e6c1b5350056b927db0018a318e2126008a47173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_248de47e1a5a5d80aef8ba16e6c1b5350056b927db0018a318e2126008a47173->enter($__internal_248de47e1a5a5d80aef8ba16e6c1b5350056b927db0018a318e2126008a47173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f0c4122e3b780ffeba0fd6fe8b488a774ceb5d41e581a6553dfd727bb76124->leave($__internal_15f0c4122e3b780ffeba0fd6fe8b488a774ceb5d41e581a6553dfd727bb76124_prof);

        
        $__internal_248de47e1a5a5d80aef8ba16e6c1b5350056b927db0018a318e2126008a47173->leave($__internal_248de47e1a5a5d80aef8ba16e6c1b5350056b927db0018a318e2126008a47173_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a813882ba7c79733977fea58d105f46fe66044479eaa77baab9e5017c5ea1ff0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a813882ba7c79733977fea58d105f46fe66044479eaa77baab9e5017c5ea1ff0->enter($__internal_a813882ba7c79733977fea58d105f46fe66044479eaa77baab9e5017c5ea1ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b3bc6a8e28d00cb2acd54463fdb957bfe5a9127eb14229489d2e092d5b6f919f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3bc6a8e28d00cb2acd54463fdb957bfe5a9127eb14229489d2e092d5b6f919f->enter($__internal_b3bc6a8e28d00cb2acd54463fdb957bfe5a9127eb14229489d2e092d5b6f919f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    ";
        // line 8
        $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resource.html.twig", 8)->display($context);
        // line 9
        echo "                </ul>
            </li>
        </ul>
    </li>
";
        
        $__internal_b3bc6a8e28d00cb2acd54463fdb957bfe5a9127eb14229489d2e092d5b6f919f->leave($__internal_b3bc6a8e28d00cb2acd54463fdb957bfe5a9127eb14229489d2e092d5b6f919f_prof);

        
        $__internal_a813882ba7c79733977fea58d105f46fe66044479eaa77baab9e5017c5ea1ff0->leave($__internal_a813882ba7c79733977fea58d105f46fe66044479eaa77baab9e5017c5ea1ff0_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resource.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <li class=\"resource\">
        <ul class=\"endpoints\">
            <li class=\"endpoint\">
                <ul class=\"operations\">
                    {% include 'NelmioApiDocBundle::method.html.twig' %}
                </ul>
            </li>
        </ul>
    </li>
{% endblock content %}
", "NelmioApiDocBundle::resource.html.twig", "/mnt/storage/private/public_html/bank/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resource.html.twig");
    }
}
