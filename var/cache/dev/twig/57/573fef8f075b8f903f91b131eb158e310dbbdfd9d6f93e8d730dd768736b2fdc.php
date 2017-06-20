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
        $__internal_bbec8b8280080a0e5f3c6a332144a9c083b2a2de732fbd11ec44203873928f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbec8b8280080a0e5f3c6a332144a9c083b2a2de732fbd11ec44203873928f75->enter($__internal_bbec8b8280080a0e5f3c6a332144a9c083b2a2de732fbd11ec44203873928f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_fc97825b7522888f98aa3cd3d064b0d49ddf6019b9bc857c1f68d4a09fe73a40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc97825b7522888f98aa3cd3d064b0d49ddf6019b9bc857c1f68d4a09fe73a40->enter($__internal_fc97825b7522888f98aa3cd3d064b0d49ddf6019b9bc857c1f68d4a09fe73a40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbec8b8280080a0e5f3c6a332144a9c083b2a2de732fbd11ec44203873928f75->leave($__internal_bbec8b8280080a0e5f3c6a332144a9c083b2a2de732fbd11ec44203873928f75_prof);

        
        $__internal_fc97825b7522888f98aa3cd3d064b0d49ddf6019b9bc857c1f68d4a09fe73a40->leave($__internal_fc97825b7522888f98aa3cd3d064b0d49ddf6019b9bc857c1f68d4a09fe73a40_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24344328f3b4576821e5b7a11f8701e10ae70f2950c33701530ddc6fa8986abd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24344328f3b4576821e5b7a11f8701e10ae70f2950c33701530ddc6fa8986abd->enter($__internal_24344328f3b4576821e5b7a11f8701e10ae70f2950c33701530ddc6fa8986abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc237b0ccc4e4fe2ae863643ce9d5dd04e38bc0604bd8a7a9fb148b92d073780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc237b0ccc4e4fe2ae863643ce9d5dd04e38bc0604bd8a7a9fb148b92d073780->enter($__internal_fc237b0ccc4e4fe2ae863643ce9d5dd04e38bc0604bd8a7a9fb148b92d073780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_fc237b0ccc4e4fe2ae863643ce9d5dd04e38bc0604bd8a7a9fb148b92d073780->leave($__internal_fc237b0ccc4e4fe2ae863643ce9d5dd04e38bc0604bd8a7a9fb148b92d073780_prof);

        
        $__internal_24344328f3b4576821e5b7a11f8701e10ae70f2950c33701530ddc6fa8986abd->leave($__internal_24344328f3b4576821e5b7a11f8701e10ae70f2950c33701530ddc6fa8986abd_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_86c9bc26943970d2f409e86f341447bd04b30cba83aa88ed81844e4b3a9ddf3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c9bc26943970d2f409e86f341447bd04b30cba83aa88ed81844e4b3a9ddf3b->enter($__internal_86c9bc26943970d2f409e86f341447bd04b30cba83aa88ed81844e4b3a9ddf3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8de4c4ffc1209941e448090fcc5af93f00642162e826be63e5f74d0970bd4117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de4c4ffc1209941e448090fcc5af93f00642162e826be63e5f74d0970bd4117->enter($__internal_8de4c4ffc1209941e448090fcc5af93f00642162e826be63e5f74d0970bd4117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8de4c4ffc1209941e448090fcc5af93f00642162e826be63e5f74d0970bd4117->leave($__internal_8de4c4ffc1209941e448090fcc5af93f00642162e826be63e5f74d0970bd4117_prof);

        
        $__internal_86c9bc26943970d2f409e86f341447bd04b30cba83aa88ed81844e4b3a9ddf3b->leave($__internal_86c9bc26943970d2f409e86f341447bd04b30cba83aa88ed81844e4b3a9ddf3b_prof);

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
