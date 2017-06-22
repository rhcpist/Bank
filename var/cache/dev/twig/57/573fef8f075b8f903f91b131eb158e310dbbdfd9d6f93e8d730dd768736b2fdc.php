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
        $__internal_7d632036554fd3a4782d13b2918c6fbad3bb4fee8a70d32bb260dae54242b057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d632036554fd3a4782d13b2918c6fbad3bb4fee8a70d32bb260dae54242b057->enter($__internal_7d632036554fd3a4782d13b2918c6fbad3bb4fee8a70d32bb260dae54242b057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_68e28c3664bd0588abc8eee604e4878c93c4716ca1b93ce83bb58f853834127f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68e28c3664bd0588abc8eee604e4878c93c4716ca1b93ce83bb58f853834127f->enter($__internal_68e28c3664bd0588abc8eee604e4878c93c4716ca1b93ce83bb58f853834127f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d632036554fd3a4782d13b2918c6fbad3bb4fee8a70d32bb260dae54242b057->leave($__internal_7d632036554fd3a4782d13b2918c6fbad3bb4fee8a70d32bb260dae54242b057_prof);

        
        $__internal_68e28c3664bd0588abc8eee604e4878c93c4716ca1b93ce83bb58f853834127f->leave($__internal_68e28c3664bd0588abc8eee604e4878c93c4716ca1b93ce83bb58f853834127f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85621fe491ee1603b370458f3ae02cca8f75c50abc5a7a75e421a2163fa5aafc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85621fe491ee1603b370458f3ae02cca8f75c50abc5a7a75e421a2163fa5aafc->enter($__internal_85621fe491ee1603b370458f3ae02cca8f75c50abc5a7a75e421a2163fa5aafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_132285a50a4671ac61c3012e3b57f757658518a204d3add0ee2e71f23fd5efa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132285a50a4671ac61c3012e3b57f757658518a204d3add0ee2e71f23fd5efa7->enter($__internal_132285a50a4671ac61c3012e3b57f757658518a204d3add0ee2e71f23fd5efa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_132285a50a4671ac61c3012e3b57f757658518a204d3add0ee2e71f23fd5efa7->leave($__internal_132285a50a4671ac61c3012e3b57f757658518a204d3add0ee2e71f23fd5efa7_prof);

        
        $__internal_85621fe491ee1603b370458f3ae02cca8f75c50abc5a7a75e421a2163fa5aafc->leave($__internal_85621fe491ee1603b370458f3ae02cca8f75c50abc5a7a75e421a2163fa5aafc_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4e5b31b5a1331929357f4eb7b4fc56335caf6c3a43c3926cec6de32f95b9ed47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5b31b5a1331929357f4eb7b4fc56335caf6c3a43c3926cec6de32f95b9ed47->enter($__internal_4e5b31b5a1331929357f4eb7b4fc56335caf6c3a43c3926cec6de32f95b9ed47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e7ea1e0f116161f10427eb84a94d4386affa4d270ef716504b995b22e337a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7ea1e0f116161f10427eb84a94d4386affa4d270ef716504b995b22e337a30->enter($__internal_5e7ea1e0f116161f10427eb84a94d4386affa4d270ef716504b995b22e337a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e7ea1e0f116161f10427eb84a94d4386affa4d270ef716504b995b22e337a30->leave($__internal_5e7ea1e0f116161f10427eb84a94d4386affa4d270ef716504b995b22e337a30_prof);

        
        $__internal_4e5b31b5a1331929357f4eb7b4fc56335caf6c3a43c3926cec6de32f95b9ed47->leave($__internal_4e5b31b5a1331929357f4eb7b4fc56335caf6c3a43c3926cec6de32f95b9ed47_prof);

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
