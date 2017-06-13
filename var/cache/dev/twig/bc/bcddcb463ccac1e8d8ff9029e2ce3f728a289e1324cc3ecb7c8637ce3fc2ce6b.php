<?php

/* NelmioApiDocBundle::resource.html.twig */
class __TwigTemplate_4c912036898010e31f7467d64981c69669b6bbbed8e6f6655a8fdfbdf3be927e extends Twig_Template
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
        $__internal_6307761ee259039706e338d9106cfe6a3ef2bd1a33bc6c7c1174643d1310aa1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6307761ee259039706e338d9106cfe6a3ef2bd1a33bc6c7c1174643d1310aa1e->enter($__internal_6307761ee259039706e338d9106cfe6a3ef2bd1a33bc6c7c1174643d1310aa1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_e8878a87cfd11cd8f45f47a2fcb578f6ab49d88113fc8456b6fa4440ea100ebe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8878a87cfd11cd8f45f47a2fcb578f6ab49d88113fc8456b6fa4440ea100ebe->enter($__internal_e8878a87cfd11cd8f45f47a2fcb578f6ab49d88113fc8456b6fa4440ea100ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6307761ee259039706e338d9106cfe6a3ef2bd1a33bc6c7c1174643d1310aa1e->leave($__internal_6307761ee259039706e338d9106cfe6a3ef2bd1a33bc6c7c1174643d1310aa1e_prof);

        
        $__internal_e8878a87cfd11cd8f45f47a2fcb578f6ab49d88113fc8456b6fa4440ea100ebe->leave($__internal_e8878a87cfd11cd8f45f47a2fcb578f6ab49d88113fc8456b6fa4440ea100ebe_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a3b1d0e8d1244c2bf83bd6a5d729ceee48110ef3cb258e19a080bb7fc38583fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3b1d0e8d1244c2bf83bd6a5d729ceee48110ef3cb258e19a080bb7fc38583fa->enter($__internal_a3b1d0e8d1244c2bf83bd6a5d729ceee48110ef3cb258e19a080bb7fc38583fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_473db17d39408b602bad5ecd9672e1f099652eb24d6744be9cab30d4437b8ae6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_473db17d39408b602bad5ecd9672e1f099652eb24d6744be9cab30d4437b8ae6->enter($__internal_473db17d39408b602bad5ecd9672e1f099652eb24d6744be9cab30d4437b8ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_473db17d39408b602bad5ecd9672e1f099652eb24d6744be9cab30d4437b8ae6->leave($__internal_473db17d39408b602bad5ecd9672e1f099652eb24d6744be9cab30d4437b8ae6_prof);

        
        $__internal_a3b1d0e8d1244c2bf83bd6a5d729ceee48110ef3cb258e19a080bb7fc38583fa->leave($__internal_a3b1d0e8d1244c2bf83bd6a5d729ceee48110ef3cb258e19a080bb7fc38583fa_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
