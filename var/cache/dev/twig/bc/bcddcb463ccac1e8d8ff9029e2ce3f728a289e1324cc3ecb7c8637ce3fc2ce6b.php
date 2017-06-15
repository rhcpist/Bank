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
        $__internal_01e7c6b1defb130df3347af7643c92406115012702e77a46f21dbab4def1319c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e7c6b1defb130df3347af7643c92406115012702e77a46f21dbab4def1319c->enter($__internal_01e7c6b1defb130df3347af7643c92406115012702e77a46f21dbab4def1319c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $__internal_b7a974f8402a754ba1fd4a873e213ab3806e3b7706f4e89eb6a9ae3d87335989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a974f8402a754ba1fd4a873e213ab3806e3b7706f4e89eb6a9ae3d87335989->enter($__internal_b7a974f8402a754ba1fd4a873e213ab3806e3b7706f4e89eb6a9ae3d87335989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resource.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01e7c6b1defb130df3347af7643c92406115012702e77a46f21dbab4def1319c->leave($__internal_01e7c6b1defb130df3347af7643c92406115012702e77a46f21dbab4def1319c_prof);

        
        $__internal_b7a974f8402a754ba1fd4a873e213ab3806e3b7706f4e89eb6a9ae3d87335989->leave($__internal_b7a974f8402a754ba1fd4a873e213ab3806e3b7706f4e89eb6a9ae3d87335989_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_af82f5be7feeda2b0a142d2ecbf47d5f6fd062ae1b4397e2c0376e843eb8876e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af82f5be7feeda2b0a142d2ecbf47d5f6fd062ae1b4397e2c0376e843eb8876e->enter($__internal_af82f5be7feeda2b0a142d2ecbf47d5f6fd062ae1b4397e2c0376e843eb8876e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f3aa183f5a758f035d6377a7d25620b80aa7eeb794a4607219d3fc7520cd4281 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3aa183f5a758f035d6377a7d25620b80aa7eeb794a4607219d3fc7520cd4281->enter($__internal_f3aa183f5a758f035d6377a7d25620b80aa7eeb794a4607219d3fc7520cd4281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f3aa183f5a758f035d6377a7d25620b80aa7eeb794a4607219d3fc7520cd4281->leave($__internal_f3aa183f5a758f035d6377a7d25620b80aa7eeb794a4607219d3fc7520cd4281_prof);

        
        $__internal_af82f5be7feeda2b0a142d2ecbf47d5f6fd062ae1b4397e2c0376e843eb8876e->leave($__internal_af82f5be7feeda2b0a142d2ecbf47d5f6fd062ae1b4397e2c0376e843eb8876e_prof);

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
