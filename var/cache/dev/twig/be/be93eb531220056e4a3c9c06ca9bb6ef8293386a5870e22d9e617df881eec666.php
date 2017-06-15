<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_769cc6d2f704c155482f8604df1fec71e997fa1f9e5f73c13ff7020591694881 extends Twig_Template
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
        $__internal_84c205b3aaccae5dbc26b6c2a32fbbf6e682852dfb3599874409d653e992913f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84c205b3aaccae5dbc26b6c2a32fbbf6e682852dfb3599874409d653e992913f->enter($__internal_84c205b3aaccae5dbc26b6c2a32fbbf6e682852dfb3599874409d653e992913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_37f9408ab197f9c2e8ba3070ccf1bc0a112fd7351ebcc65a06bbfc781d5d67ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37f9408ab197f9c2e8ba3070ccf1bc0a112fd7351ebcc65a06bbfc781d5d67ba->enter($__internal_37f9408ab197f9c2e8ba3070ccf1bc0a112fd7351ebcc65a06bbfc781d5d67ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84c205b3aaccae5dbc26b6c2a32fbbf6e682852dfb3599874409d653e992913f->leave($__internal_84c205b3aaccae5dbc26b6c2a32fbbf6e682852dfb3599874409d653e992913f_prof);

        
        $__internal_37f9408ab197f9c2e8ba3070ccf1bc0a112fd7351ebcc65a06bbfc781d5d67ba->leave($__internal_37f9408ab197f9c2e8ba3070ccf1bc0a112fd7351ebcc65a06bbfc781d5d67ba_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_49e2e005220178784a4bf1938a621379e5209ca85bf91a37441bec330b68c391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e2e005220178784a4bf1938a621379e5209ca85bf91a37441bec330b68c391->enter($__internal_49e2e005220178784a4bf1938a621379e5209ca85bf91a37441bec330b68c391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_852f37038b18965d79d8ca62da527093d1bb6747ca746269d420213abff80076 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_852f37038b18965d79d8ca62da527093d1bb6747ca746269d420213abff80076->enter($__internal_852f37038b18965d79d8ca62da527093d1bb6747ca746269d420213abff80076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_852f37038b18965d79d8ca62da527093d1bb6747ca746269d420213abff80076->leave($__internal_852f37038b18965d79d8ca62da527093d1bb6747ca746269d420213abff80076_prof);

        
        $__internal_49e2e005220178784a4bf1938a621379e5209ca85bf91a37441bec330b68c391->leave($__internal_49e2e005220178784a4bf1938a621379e5209ca85bf91a37441bec330b68c391_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3b88a030b076c2b160cd4a5d1a392d960441ca1574de3183fef4f138e4cd60c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b88a030b076c2b160cd4a5d1a392d960441ca1574de3183fef4f138e4cd60c7->enter($__internal_3b88a030b076c2b160cd4a5d1a392d960441ca1574de3183fef4f138e4cd60c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_44d976374ac6441cb319b1e56e9129b27a30ec7f8d5b95601b63d64e1986d69e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d976374ac6441cb319b1e56e9129b27a30ec7f8d5b95601b63d64e1986d69e->enter($__internal_44d976374ac6441cb319b1e56e9129b27a30ec7f8d5b95601b63d64e1986d69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_44d976374ac6441cb319b1e56e9129b27a30ec7f8d5b95601b63d64e1986d69e->leave($__internal_44d976374ac6441cb319b1e56e9129b27a30ec7f8d5b95601b63d64e1986d69e_prof);

        
        $__internal_3b88a030b076c2b160cd4a5d1a392d960441ca1574de3183fef4f138e4cd60c7->leave($__internal_3b88a030b076c2b160cd4a5d1a392d960441ca1574de3183fef4f138e4cd60c7_prof);

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
