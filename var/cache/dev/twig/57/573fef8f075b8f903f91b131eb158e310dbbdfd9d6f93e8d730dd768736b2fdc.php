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
        $__internal_500f8862f90e339ac0e2364b6022edbd37157a296f643576662533c2a3ffb16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_500f8862f90e339ac0e2364b6022edbd37157a296f643576662533c2a3ffb16c->enter($__internal_500f8862f90e339ac0e2364b6022edbd37157a296f643576662533c2a3ffb16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f74e93669d9574119a2db5686a3e5d9476b1116bc79b7e5df8af1cadadf66a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f74e93669d9574119a2db5686a3e5d9476b1116bc79b7e5df8af1cadadf66a76->enter($__internal_f74e93669d9574119a2db5686a3e5d9476b1116bc79b7e5df8af1cadadf66a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500f8862f90e339ac0e2364b6022edbd37157a296f643576662533c2a3ffb16c->leave($__internal_500f8862f90e339ac0e2364b6022edbd37157a296f643576662533c2a3ffb16c_prof);

        
        $__internal_f74e93669d9574119a2db5686a3e5d9476b1116bc79b7e5df8af1cadadf66a76->leave($__internal_f74e93669d9574119a2db5686a3e5d9476b1116bc79b7e5df8af1cadadf66a76_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbf695bd1d1674c5a91a0fc2a08eda5605693c03df05b1a0e859b8b422287e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf695bd1d1674c5a91a0fc2a08eda5605693c03df05b1a0e859b8b422287e19->enter($__internal_fbf695bd1d1674c5a91a0fc2a08eda5605693c03df05b1a0e859b8b422287e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1546960382b0d04875ac460b863f31c43aa2eec9277b9fde2befcf6d6d2b8d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1546960382b0d04875ac460b863f31c43aa2eec9277b9fde2befcf6d6d2b8d5c->enter($__internal_1546960382b0d04875ac460b863f31c43aa2eec9277b9fde2befcf6d6d2b8d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1546960382b0d04875ac460b863f31c43aa2eec9277b9fde2befcf6d6d2b8d5c->leave($__internal_1546960382b0d04875ac460b863f31c43aa2eec9277b9fde2befcf6d6d2b8d5c_prof);

        
        $__internal_fbf695bd1d1674c5a91a0fc2a08eda5605693c03df05b1a0e859b8b422287e19->leave($__internal_fbf695bd1d1674c5a91a0fc2a08eda5605693c03df05b1a0e859b8b422287e19_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c729f31e03e683bf40c4f7c544464821a8c6b656205e57249b28928953b2f9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c729f31e03e683bf40c4f7c544464821a8c6b656205e57249b28928953b2f9d->enter($__internal_8c729f31e03e683bf40c4f7c544464821a8c6b656205e57249b28928953b2f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aff1510dcba76640b323a1e7cf4adfe2ff68b36f9cf3373ff562ba075154b8df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aff1510dcba76640b323a1e7cf4adfe2ff68b36f9cf3373ff562ba075154b8df->enter($__internal_aff1510dcba76640b323a1e7cf4adfe2ff68b36f9cf3373ff562ba075154b8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_aff1510dcba76640b323a1e7cf4adfe2ff68b36f9cf3373ff562ba075154b8df->leave($__internal_aff1510dcba76640b323a1e7cf4adfe2ff68b36f9cf3373ff562ba075154b8df_prof);

        
        $__internal_8c729f31e03e683bf40c4f7c544464821a8c6b656205e57249b28928953b2f9d->leave($__internal_8c729f31e03e683bf40c4f7c544464821a8c6b656205e57249b28928953b2f9d_prof);

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
