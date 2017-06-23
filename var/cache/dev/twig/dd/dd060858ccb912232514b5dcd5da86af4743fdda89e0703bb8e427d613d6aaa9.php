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
        $__internal_69c833e39b65b8e94abaf990fd781b7596c49015419742969a3dcc02ec73963a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69c833e39b65b8e94abaf990fd781b7596c49015419742969a3dcc02ec73963a->enter($__internal_69c833e39b65b8e94abaf990fd781b7596c49015419742969a3dcc02ec73963a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cd5683805b9bb29ec6b88b5275848e749e09ad0d5d241f129aaafed409a17848 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5683805b9bb29ec6b88b5275848e749e09ad0d5d241f129aaafed409a17848->enter($__internal_cd5683805b9bb29ec6b88b5275848e749e09ad0d5d241f129aaafed409a17848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_69c833e39b65b8e94abaf990fd781b7596c49015419742969a3dcc02ec73963a->leave($__internal_69c833e39b65b8e94abaf990fd781b7596c49015419742969a3dcc02ec73963a_prof);

        
        $__internal_cd5683805b9bb29ec6b88b5275848e749e09ad0d5d241f129aaafed409a17848->leave($__internal_cd5683805b9bb29ec6b88b5275848e749e09ad0d5d241f129aaafed409a17848_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_265c3fa5b5f2e2d9df4bde05ec4855b84917d12a3fa5da542c5d62560c13c8dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265c3fa5b5f2e2d9df4bde05ec4855b84917d12a3fa5da542c5d62560c13c8dc->enter($__internal_265c3fa5b5f2e2d9df4bde05ec4855b84917d12a3fa5da542c5d62560c13c8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b111388b1723c6268ce1719d10932af4dd1dbdb0c1bed3a7ef1585616e7f4403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b111388b1723c6268ce1719d10932af4dd1dbdb0c1bed3a7ef1585616e7f4403->enter($__internal_b111388b1723c6268ce1719d10932af4dd1dbdb0c1bed3a7ef1585616e7f4403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b111388b1723c6268ce1719d10932af4dd1dbdb0c1bed3a7ef1585616e7f4403->leave($__internal_b111388b1723c6268ce1719d10932af4dd1dbdb0c1bed3a7ef1585616e7f4403_prof);

        
        $__internal_265c3fa5b5f2e2d9df4bde05ec4855b84917d12a3fa5da542c5d62560c13c8dc->leave($__internal_265c3fa5b5f2e2d9df4bde05ec4855b84917d12a3fa5da542c5d62560c13c8dc_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_46e739db08712fb29972165fc82d93038b375f6a196714d8b6cdd381e7da29a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46e739db08712fb29972165fc82d93038b375f6a196714d8b6cdd381e7da29a7->enter($__internal_46e739db08712fb29972165fc82d93038b375f6a196714d8b6cdd381e7da29a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a030dc8cbec8da000b9404e36332c69117eeab23fa50aebec6eec49d4dbe2208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a030dc8cbec8da000b9404e36332c69117eeab23fa50aebec6eec49d4dbe2208->enter($__internal_a030dc8cbec8da000b9404e36332c69117eeab23fa50aebec6eec49d4dbe2208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a030dc8cbec8da000b9404e36332c69117eeab23fa50aebec6eec49d4dbe2208->leave($__internal_a030dc8cbec8da000b9404e36332c69117eeab23fa50aebec6eec49d4dbe2208_prof);

        
        $__internal_46e739db08712fb29972165fc82d93038b375f6a196714d8b6cdd381e7da29a7->leave($__internal_46e739db08712fb29972165fc82d93038b375f6a196714d8b6cdd381e7da29a7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_56a2221671f2d82d10b12782f85c3f65af92e258a0dca28ceaed79fca039bbac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56a2221671f2d82d10b12782f85c3f65af92e258a0dca28ceaed79fca039bbac->enter($__internal_56a2221671f2d82d10b12782f85c3f65af92e258a0dca28ceaed79fca039bbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b54d7f19dce90f1804b5ba4062d2bd95ba9cd88140fa9aa060b19dc29c8a9af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54d7f19dce90f1804b5ba4062d2bd95ba9cd88140fa9aa060b19dc29c8a9af3->enter($__internal_b54d7f19dce90f1804b5ba4062d2bd95ba9cd88140fa9aa060b19dc29c8a9af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b54d7f19dce90f1804b5ba4062d2bd95ba9cd88140fa9aa060b19dc29c8a9af3->leave($__internal_b54d7f19dce90f1804b5ba4062d2bd95ba9cd88140fa9aa060b19dc29c8a9af3_prof);

        
        $__internal_56a2221671f2d82d10b12782f85c3f65af92e258a0dca28ceaed79fca039bbac->leave($__internal_56a2221671f2d82d10b12782f85c3f65af92e258a0dca28ceaed79fca039bbac_prof);

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
