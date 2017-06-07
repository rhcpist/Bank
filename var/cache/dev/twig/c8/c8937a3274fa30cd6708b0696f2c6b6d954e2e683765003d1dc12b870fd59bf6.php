<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_e33601823f4e57dd3a5e27c634cce4e72827fcc6ba2d7ff96aa8490040e6411f extends Twig_Template
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
        $__internal_caeb78098bf7fc6b03fb699c150b6c73b538e1f77a09283aab3fce6db583f0ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caeb78098bf7fc6b03fb699c150b6c73b538e1f77a09283aab3fce6db583f0ba->enter($__internal_caeb78098bf7fc6b03fb699c150b6c73b538e1f77a09283aab3fce6db583f0ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_e61b8821c30251c38dd66f60b959c4751520e94c7d87807ae08f30c07e7a1c61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61b8821c30251c38dd66f60b959c4751520e94c7d87807ae08f30c07e7a1c61->enter($__internal_e61b8821c30251c38dd66f60b959c4751520e94c7d87807ae08f30c07e7a1c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caeb78098bf7fc6b03fb699c150b6c73b538e1f77a09283aab3fce6db583f0ba->leave($__internal_caeb78098bf7fc6b03fb699c150b6c73b538e1f77a09283aab3fce6db583f0ba_prof);

        
        $__internal_e61b8821c30251c38dd66f60b959c4751520e94c7d87807ae08f30c07e7a1c61->leave($__internal_e61b8821c30251c38dd66f60b959c4751520e94c7d87807ae08f30c07e7a1c61_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_213bf6a5226ca8ddc02efa9d6bba6e0547711df15f2a525c2c7b044cfc249ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_213bf6a5226ca8ddc02efa9d6bba6e0547711df15f2a525c2c7b044cfc249ed8->enter($__internal_213bf6a5226ca8ddc02efa9d6bba6e0547711df15f2a525c2c7b044cfc249ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c780728fa58572b9d578f168608f783105a7265ec95285cf304cc13ffe23f907 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c780728fa58572b9d578f168608f783105a7265ec95285cf304cc13ffe23f907->enter($__internal_c780728fa58572b9d578f168608f783105a7265ec95285cf304cc13ffe23f907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c780728fa58572b9d578f168608f783105a7265ec95285cf304cc13ffe23f907->leave($__internal_c780728fa58572b9d578f168608f783105a7265ec95285cf304cc13ffe23f907_prof);

        
        $__internal_213bf6a5226ca8ddc02efa9d6bba6e0547711df15f2a525c2c7b044cfc249ed8->leave($__internal_213bf6a5226ca8ddc02efa9d6bba6e0547711df15f2a525c2c7b044cfc249ed8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0b258c2c6189c3d0e3601a4a5c2a61034be669efd24fb09d886d4ca1a9802d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b258c2c6189c3d0e3601a4a5c2a61034be669efd24fb09d886d4ca1a9802d1->enter($__internal_b0b258c2c6189c3d0e3601a4a5c2a61034be669efd24fb09d886d4ca1a9802d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_20bb6c2878f50c95202086ac0a1df72a9852507bdafcb785c6788610cb653b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20bb6c2878f50c95202086ac0a1df72a9852507bdafcb785c6788610cb653b13->enter($__internal_20bb6c2878f50c95202086ac0a1df72a9852507bdafcb785c6788610cb653b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
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
        
        $__internal_20bb6c2878f50c95202086ac0a1df72a9852507bdafcb785c6788610cb653b13->leave($__internal_20bb6c2878f50c95202086ac0a1df72a9852507bdafcb785c6788610cb653b13_prof);

        
        $__internal_b0b258c2c6189c3d0e3601a4a5c2a61034be669efd24fb09d886d4ca1a9802d1->leave($__internal_b0b258c2c6189c3d0e3601a4a5c2a61034be669efd24fb09d886d4ca1a9802d1_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
