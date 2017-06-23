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
        $__internal_534ec52c5821768bf125258b7511218d6a0b89aea005e0eb755795bf10092517 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534ec52c5821768bf125258b7511218d6a0b89aea005e0eb755795bf10092517->enter($__internal_534ec52c5821768bf125258b7511218d6a0b89aea005e0eb755795bf10092517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_6080ce53bfba0982d0bfd2617926ea8d1ce27e3f68817011754450836c074f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6080ce53bfba0982d0bfd2617926ea8d1ce27e3f68817011754450836c074f69->enter($__internal_6080ce53bfba0982d0bfd2617926ea8d1ce27e3f68817011754450836c074f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_534ec52c5821768bf125258b7511218d6a0b89aea005e0eb755795bf10092517->leave($__internal_534ec52c5821768bf125258b7511218d6a0b89aea005e0eb755795bf10092517_prof);

        
        $__internal_6080ce53bfba0982d0bfd2617926ea8d1ce27e3f68817011754450836c074f69->leave($__internal_6080ce53bfba0982d0bfd2617926ea8d1ce27e3f68817011754450836c074f69_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_61dad9d085a29fd8391d94c9b5ee2ecd82ceb257c63f319e75a7ba12d65cfa2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61dad9d085a29fd8391d94c9b5ee2ecd82ceb257c63f319e75a7ba12d65cfa2c->enter($__internal_61dad9d085a29fd8391d94c9b5ee2ecd82ceb257c63f319e75a7ba12d65cfa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a6cfd0214c3317fb15bf1153a6b962990f815620ee63e6325015cb1ee73f3547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cfd0214c3317fb15bf1153a6b962990f815620ee63e6325015cb1ee73f3547->enter($__internal_a6cfd0214c3317fb15bf1153a6b962990f815620ee63e6325015cb1ee73f3547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a6cfd0214c3317fb15bf1153a6b962990f815620ee63e6325015cb1ee73f3547->leave($__internal_a6cfd0214c3317fb15bf1153a6b962990f815620ee63e6325015cb1ee73f3547_prof);

        
        $__internal_61dad9d085a29fd8391d94c9b5ee2ecd82ceb257c63f319e75a7ba12d65cfa2c->leave($__internal_61dad9d085a29fd8391d94c9b5ee2ecd82ceb257c63f319e75a7ba12d65cfa2c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f278304df452de983f9385227ed4ecf10ffd3fb6f089208a0dbf1b08c5f21826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f278304df452de983f9385227ed4ecf10ffd3fb6f089208a0dbf1b08c5f21826->enter($__internal_f278304df452de983f9385227ed4ecf10ffd3fb6f089208a0dbf1b08c5f21826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca5461c2375ef6541e521151804170a1b548744d22059c1dc6933527792f4df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5461c2375ef6541e521151804170a1b548744d22059c1dc6933527792f4df6->enter($__internal_ca5461c2375ef6541e521151804170a1b548744d22059c1dc6933527792f4df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca5461c2375ef6541e521151804170a1b548744d22059c1dc6933527792f4df6->leave($__internal_ca5461c2375ef6541e521151804170a1b548744d22059c1dc6933527792f4df6_prof);

        
        $__internal_f278304df452de983f9385227ed4ecf10ffd3fb6f089208a0dbf1b08c5f21826->leave($__internal_f278304df452de983f9385227ed4ecf10ffd3fb6f089208a0dbf1b08c5f21826_prof);

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
