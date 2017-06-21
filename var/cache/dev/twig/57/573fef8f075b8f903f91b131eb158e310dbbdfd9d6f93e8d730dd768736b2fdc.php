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
        $__internal_578eefdb42dcc6d20849bfc885de4739dc25e883e4f0849241f582d38f725432 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_578eefdb42dcc6d20849bfc885de4739dc25e883e4f0849241f582d38f725432->enter($__internal_578eefdb42dcc6d20849bfc885de4739dc25e883e4f0849241f582d38f725432_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0a0dd6e10c2c30a1487755c4604a4f646e532f77883ca6c6a10811baab3114f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a0dd6e10c2c30a1487755c4604a4f646e532f77883ca6c6a10811baab3114f9->enter($__internal_0a0dd6e10c2c30a1487755c4604a4f646e532f77883ca6c6a10811baab3114f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_578eefdb42dcc6d20849bfc885de4739dc25e883e4f0849241f582d38f725432->leave($__internal_578eefdb42dcc6d20849bfc885de4739dc25e883e4f0849241f582d38f725432_prof);

        
        $__internal_0a0dd6e10c2c30a1487755c4604a4f646e532f77883ca6c6a10811baab3114f9->leave($__internal_0a0dd6e10c2c30a1487755c4604a4f646e532f77883ca6c6a10811baab3114f9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e04cd8ab96826966eebfe85284b2ef4dd80ac3592dcb135058f54f16910b7bde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e04cd8ab96826966eebfe85284b2ef4dd80ac3592dcb135058f54f16910b7bde->enter($__internal_e04cd8ab96826966eebfe85284b2ef4dd80ac3592dcb135058f54f16910b7bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6c28098d10c15ee6904b34c68554dd9e5b508d9d5cf652cd0b95b854e9854da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c28098d10c15ee6904b34c68554dd9e5b508d9d5cf652cd0b95b854e9854da4->enter($__internal_6c28098d10c15ee6904b34c68554dd9e5b508d9d5cf652cd0b95b854e9854da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6c28098d10c15ee6904b34c68554dd9e5b508d9d5cf652cd0b95b854e9854da4->leave($__internal_6c28098d10c15ee6904b34c68554dd9e5b508d9d5cf652cd0b95b854e9854da4_prof);

        
        $__internal_e04cd8ab96826966eebfe85284b2ef4dd80ac3592dcb135058f54f16910b7bde->leave($__internal_e04cd8ab96826966eebfe85284b2ef4dd80ac3592dcb135058f54f16910b7bde_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6827027ac247b97d0662a9a97c62447386539481c82fc9d32a5ac20749d8ae1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6827027ac247b97d0662a9a97c62447386539481c82fc9d32a5ac20749d8ae1f->enter($__internal_6827027ac247b97d0662a9a97c62447386539481c82fc9d32a5ac20749d8ae1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ffa43faa0d9dcb8fd2094930941531288d00ae07265abd81a4705d4211f41e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa43faa0d9dcb8fd2094930941531288d00ae07265abd81a4705d4211f41e76->enter($__internal_ffa43faa0d9dcb8fd2094930941531288d00ae07265abd81a4705d4211f41e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ffa43faa0d9dcb8fd2094930941531288d00ae07265abd81a4705d4211f41e76->leave($__internal_ffa43faa0d9dcb8fd2094930941531288d00ae07265abd81a4705d4211f41e76_prof);

        
        $__internal_6827027ac247b97d0662a9a97c62447386539481c82fc9d32a5ac20749d8ae1f->leave($__internal_6827027ac247b97d0662a9a97c62447386539481c82fc9d32a5ac20749d8ae1f_prof);

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
