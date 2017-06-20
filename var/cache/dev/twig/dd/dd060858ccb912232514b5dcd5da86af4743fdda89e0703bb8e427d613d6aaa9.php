<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_fcb713a2b61933e863cbf4cbef8d5743dc039c7b240ba77fbddb7b9abb9ed7f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d5c43dd216c9fa65708d379e53e1126d3c31b5af0e7a1f2cde087d57ee9b2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d5c43dd216c9fa65708d379e53e1126d3c31b5af0e7a1f2cde087d57ee9b2a6->enter($__internal_9d5c43dd216c9fa65708d379e53e1126d3c31b5af0e7a1f2cde087d57ee9b2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_05a7fba6e433198e427a168017d752a97a83a6734aa12f0fcd09753c8c7714b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05a7fba6e433198e427a168017d752a97a83a6734aa12f0fcd09753c8c7714b2->enter($__internal_05a7fba6e433198e427a168017d752a97a83a6734aa12f0fcd09753c8c7714b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_9d5c43dd216c9fa65708d379e53e1126d3c31b5af0e7a1f2cde087d57ee9b2a6->leave($__internal_9d5c43dd216c9fa65708d379e53e1126d3c31b5af0e7a1f2cde087d57ee9b2a6_prof);

        
        $__internal_05a7fba6e433198e427a168017d752a97a83a6734aa12f0fcd09753c8c7714b2->leave($__internal_05a7fba6e433198e427a168017d752a97a83a6734aa12f0fcd09753c8c7714b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd93e4363a8aa97b9e642749121199b3bd3aa87e6b4d7f5da8494315e4d459d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd93e4363a8aa97b9e642749121199b3bd3aa87e6b4d7f5da8494315e4d459d5->enter($__internal_bd93e4363a8aa97b9e642749121199b3bd3aa87e6b4d7f5da8494315e4d459d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a523d84fdd01cb654ee91d24ec2ad4a2f229b341f2d56e5784a58bae66b0d4d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a523d84fdd01cb654ee91d24ec2ad4a2f229b341f2d56e5784a58bae66b0d4d3->enter($__internal_a523d84fdd01cb654ee91d24ec2ad4a2f229b341f2d56e5784a58bae66b0d4d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a523d84fdd01cb654ee91d24ec2ad4a2f229b341f2d56e5784a58bae66b0d4d3->leave($__internal_a523d84fdd01cb654ee91d24ec2ad4a2f229b341f2d56e5784a58bae66b0d4d3_prof);

        
        $__internal_bd93e4363a8aa97b9e642749121199b3bd3aa87e6b4d7f5da8494315e4d459d5->leave($__internal_bd93e4363a8aa97b9e642749121199b3bd3aa87e6b4d7f5da8494315e4d459d5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3baf14a6021bd8c754b547067eabbe10391d1a6d27664fca412800dac870912e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3baf14a6021bd8c754b547067eabbe10391d1a6d27664fca412800dac870912e->enter($__internal_3baf14a6021bd8c754b547067eabbe10391d1a6d27664fca412800dac870912e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03af87419fd917035dff6d5406e5733ab34f0a231f023bdaa0403ab725b1777d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03af87419fd917035dff6d5406e5733ab34f0a231f023bdaa0403ab725b1777d->enter($__internal_03af87419fd917035dff6d5406e5733ab34f0a231f023bdaa0403ab725b1777d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_03af87419fd917035dff6d5406e5733ab34f0a231f023bdaa0403ab725b1777d->leave($__internal_03af87419fd917035dff6d5406e5733ab34f0a231f023bdaa0403ab725b1777d_prof);

        
        $__internal_3baf14a6021bd8c754b547067eabbe10391d1a6d27664fca412800dac870912e->leave($__internal_3baf14a6021bd8c754b547067eabbe10391d1a6d27664fca412800dac870912e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b21f7aa1262616260eed3d3a9d097d7426dd45046b3cc472277ab097114306a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b21f7aa1262616260eed3d3a9d097d7426dd45046b3cc472277ab097114306a->enter($__internal_2b21f7aa1262616260eed3d3a9d097d7426dd45046b3cc472277ab097114306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04e08d5a3577dc41be547c0132b598489ad71d51adc3a23df89177ddaabbbd14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04e08d5a3577dc41be547c0132b598489ad71d51adc3a23df89177ddaabbbd14->enter($__internal_04e08d5a3577dc41be547c0132b598489ad71d51adc3a23df89177ddaabbbd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04e08d5a3577dc41be547c0132b598489ad71d51adc3a23df89177ddaabbbd14->leave($__internal_04e08d5a3577dc41be547c0132b598489ad71d51adc3a23df89177ddaabbbd14_prof);

        
        $__internal_2b21f7aa1262616260eed3d3a9d097d7426dd45046b3cc472277ab097114306a->leave($__internal_2b21f7aa1262616260eed3d3a9d097d7426dd45046b3cc472277ab097114306a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
