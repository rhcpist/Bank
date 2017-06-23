<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_217f2b5c9faa11a52bf80b5f181547d50ae4cd6887b9454b97e0590874095768 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7203571831ce5d81947658a37a692d7364aa21a07cf6f3714b4f9a8bce88ae40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7203571831ce5d81947658a37a692d7364aa21a07cf6f3714b4f9a8bce88ae40->enter($__internal_7203571831ce5d81947658a37a692d7364aa21a07cf6f3714b4f9a8bce88ae40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e8dd4a6e74a626009398d99837ed8710e2d9b6aa7b32b914f654f838fe30868e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8dd4a6e74a626009398d99837ed8710e2d9b6aa7b32b914f654f838fe30868e->enter($__internal_e8dd4a6e74a626009398d99837ed8710e2d9b6aa7b32b914f654f838fe30868e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7203571831ce5d81947658a37a692d7364aa21a07cf6f3714b4f9a8bce88ae40->leave($__internal_7203571831ce5d81947658a37a692d7364aa21a07cf6f3714b4f9a8bce88ae40_prof);

        
        $__internal_e8dd4a6e74a626009398d99837ed8710e2d9b6aa7b32b914f654f838fe30868e->leave($__internal_e8dd4a6e74a626009398d99837ed8710e2d9b6aa7b32b914f654f838fe30868e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6e5f7046768a0e33da73a13922228d0f285991726f20f7208b7456fb29e9f80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6e5f7046768a0e33da73a13922228d0f285991726f20f7208b7456fb29e9f80->enter($__internal_a6e5f7046768a0e33da73a13922228d0f285991726f20f7208b7456fb29e9f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0d9e63148cda19e74c0ae298152171f26471292df1ff73b2923b9b1b8195401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d9e63148cda19e74c0ae298152171f26471292df1ff73b2923b9b1b8195401->enter($__internal_f0d9e63148cda19e74c0ae298152171f26471292df1ff73b2923b9b1b8195401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f0d9e63148cda19e74c0ae298152171f26471292df1ff73b2923b9b1b8195401->leave($__internal_f0d9e63148cda19e74c0ae298152171f26471292df1ff73b2923b9b1b8195401_prof);

        
        $__internal_a6e5f7046768a0e33da73a13922228d0f285991726f20f7208b7456fb29e9f80->leave($__internal_a6e5f7046768a0e33da73a13922228d0f285991726f20f7208b7456fb29e9f80_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b641f244fcad41bcfa1a70d6af43da21f5d886181f0aa8e5c788a07c950270da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b641f244fcad41bcfa1a70d6af43da21f5d886181f0aa8e5c788a07c950270da->enter($__internal_b641f244fcad41bcfa1a70d6af43da21f5d886181f0aa8e5c788a07c950270da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3511f4973871107e637b6d4ce2b74bf1aa30b72e846b54d21cb0a39f3d6f477a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3511f4973871107e637b6d4ce2b74bf1aa30b72e846b54d21cb0a39f3d6f477a->enter($__internal_3511f4973871107e637b6d4ce2b74bf1aa30b72e846b54d21cb0a39f3d6f477a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_3511f4973871107e637b6d4ce2b74bf1aa30b72e846b54d21cb0a39f3d6f477a->leave($__internal_3511f4973871107e637b6d4ce2b74bf1aa30b72e846b54d21cb0a39f3d6f477a_prof);

        
        $__internal_b641f244fcad41bcfa1a70d6af43da21f5d886181f0aa8e5c788a07c950270da->leave($__internal_b641f244fcad41bcfa1a70d6af43da21f5d886181f0aa8e5c788a07c950270da_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
