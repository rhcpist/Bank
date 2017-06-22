<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_880e024ad36eb19144b941a1f613872236d59db28d28bc89f02b418af3cee210 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_498ca92c284e6cdc26db5e08f0eb15eebd7082713db991af135288f01803f4df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498ca92c284e6cdc26db5e08f0eb15eebd7082713db991af135288f01803f4df->enter($__internal_498ca92c284e6cdc26db5e08f0eb15eebd7082713db991af135288f01803f4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_020f9ff30baa041d8822cd9fbcfd77b7d1e6784ed2be3d8ee9c81ddd3324344f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_020f9ff30baa041d8822cd9fbcfd77b7d1e6784ed2be3d8ee9c81ddd3324344f->enter($__internal_020f9ff30baa041d8822cd9fbcfd77b7d1e6784ed2be3d8ee9c81ddd3324344f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_498ca92c284e6cdc26db5e08f0eb15eebd7082713db991af135288f01803f4df->leave($__internal_498ca92c284e6cdc26db5e08f0eb15eebd7082713db991af135288f01803f4df_prof);

        
        $__internal_020f9ff30baa041d8822cd9fbcfd77b7d1e6784ed2be3d8ee9c81ddd3324344f->leave($__internal_020f9ff30baa041d8822cd9fbcfd77b7d1e6784ed2be3d8ee9c81ddd3324344f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d74bec2e8c9ea3364806c86799fe1f796b988d0e9dbfdee957233a29dcaea287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d74bec2e8c9ea3364806c86799fe1f796b988d0e9dbfdee957233a29dcaea287->enter($__internal_d74bec2e8c9ea3364806c86799fe1f796b988d0e9dbfdee957233a29dcaea287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e4b4124aaeecf994e1dfc96116fae60d0f050e19ab7a66c5d6302aaaebdfc20f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4b4124aaeecf994e1dfc96116fae60d0f050e19ab7a66c5d6302aaaebdfc20f->enter($__internal_e4b4124aaeecf994e1dfc96116fae60d0f050e19ab7a66c5d6302aaaebdfc20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_e4b4124aaeecf994e1dfc96116fae60d0f050e19ab7a66c5d6302aaaebdfc20f->leave($__internal_e4b4124aaeecf994e1dfc96116fae60d0f050e19ab7a66c5d6302aaaebdfc20f_prof);

        
        $__internal_d74bec2e8c9ea3364806c86799fe1f796b988d0e9dbfdee957233a29dcaea287->leave($__internal_d74bec2e8c9ea3364806c86799fe1f796b988d0e9dbfdee957233a29dcaea287_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
