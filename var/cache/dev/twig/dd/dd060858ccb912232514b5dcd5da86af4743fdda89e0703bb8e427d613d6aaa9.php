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
        $__internal_0ca8bb655d7a6fff3a86ec306f7b58dd05b79f68b93e9ad6660f933297366ba5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca8bb655d7a6fff3a86ec306f7b58dd05b79f68b93e9ad6660f933297366ba5->enter($__internal_0ca8bb655d7a6fff3a86ec306f7b58dd05b79f68b93e9ad6660f933297366ba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_acefde1620be7bb553388a8949bfb767ee19563e47998971e20aadbe8537e984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acefde1620be7bb553388a8949bfb767ee19563e47998971e20aadbe8537e984->enter($__internal_acefde1620be7bb553388a8949bfb767ee19563e47998971e20aadbe8537e984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0ca8bb655d7a6fff3a86ec306f7b58dd05b79f68b93e9ad6660f933297366ba5->leave($__internal_0ca8bb655d7a6fff3a86ec306f7b58dd05b79f68b93e9ad6660f933297366ba5_prof);

        
        $__internal_acefde1620be7bb553388a8949bfb767ee19563e47998971e20aadbe8537e984->leave($__internal_acefde1620be7bb553388a8949bfb767ee19563e47998971e20aadbe8537e984_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbd5b33b6a678e4c2f40085ea07ec9255b1433ef5933f181d7ba2eddb0044643 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbd5b33b6a678e4c2f40085ea07ec9255b1433ef5933f181d7ba2eddb0044643->enter($__internal_bbd5b33b6a678e4c2f40085ea07ec9255b1433ef5933f181d7ba2eddb0044643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_811e862a4b0dbb5ebb7453c580b4f187e3061a2ebbf6a80b9f6b149b259f5da7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_811e862a4b0dbb5ebb7453c580b4f187e3061a2ebbf6a80b9f6b149b259f5da7->enter($__internal_811e862a4b0dbb5ebb7453c580b4f187e3061a2ebbf6a80b9f6b149b259f5da7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_811e862a4b0dbb5ebb7453c580b4f187e3061a2ebbf6a80b9f6b149b259f5da7->leave($__internal_811e862a4b0dbb5ebb7453c580b4f187e3061a2ebbf6a80b9f6b149b259f5da7_prof);

        
        $__internal_bbd5b33b6a678e4c2f40085ea07ec9255b1433ef5933f181d7ba2eddb0044643->leave($__internal_bbd5b33b6a678e4c2f40085ea07ec9255b1433ef5933f181d7ba2eddb0044643_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b346467b5d773c227eab98679459241913115f21cf8fbab2483a076c186f8849 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b346467b5d773c227eab98679459241913115f21cf8fbab2483a076c186f8849->enter($__internal_b346467b5d773c227eab98679459241913115f21cf8fbab2483a076c186f8849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e58db871e6be09f41b51ca0e3fa56ee90a1ccb49bb0525fe66cc9e98a4aeea7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58db871e6be09f41b51ca0e3fa56ee90a1ccb49bb0525fe66cc9e98a4aeea7a->enter($__internal_e58db871e6be09f41b51ca0e3fa56ee90a1ccb49bb0525fe66cc9e98a4aeea7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e58db871e6be09f41b51ca0e3fa56ee90a1ccb49bb0525fe66cc9e98a4aeea7a->leave($__internal_e58db871e6be09f41b51ca0e3fa56ee90a1ccb49bb0525fe66cc9e98a4aeea7a_prof);

        
        $__internal_b346467b5d773c227eab98679459241913115f21cf8fbab2483a076c186f8849->leave($__internal_b346467b5d773c227eab98679459241913115f21cf8fbab2483a076c186f8849_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_9766db77fb0fc94eadffd253014cb425c53a1c0fee75fe6767f6062a1ff0ea12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9766db77fb0fc94eadffd253014cb425c53a1c0fee75fe6767f6062a1ff0ea12->enter($__internal_9766db77fb0fc94eadffd253014cb425c53a1c0fee75fe6767f6062a1ff0ea12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ece12272b773842af336e6954dd35277b6608694d5ff92c530bb8e2582a4e700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ece12272b773842af336e6954dd35277b6608694d5ff92c530bb8e2582a4e700->enter($__internal_ece12272b773842af336e6954dd35277b6608694d5ff92c530bb8e2582a4e700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ece12272b773842af336e6954dd35277b6608694d5ff92c530bb8e2582a4e700->leave($__internal_ece12272b773842af336e6954dd35277b6608694d5ff92c530bb8e2582a4e700_prof);

        
        $__internal_9766db77fb0fc94eadffd253014cb425c53a1c0fee75fe6767f6062a1ff0ea12->leave($__internal_9766db77fb0fc94eadffd253014cb425c53a1c0fee75fe6767f6062a1ff0ea12_prof);

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
