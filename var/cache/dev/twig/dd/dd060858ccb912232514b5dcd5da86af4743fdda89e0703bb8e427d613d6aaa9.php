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
        $__internal_a696d3f936ad32e31e63a5fd0a7b6171a8313ab7cd395ec4fdeba9f1db95e2ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a696d3f936ad32e31e63a5fd0a7b6171a8313ab7cd395ec4fdeba9f1db95e2ff->enter($__internal_a696d3f936ad32e31e63a5fd0a7b6171a8313ab7cd395ec4fdeba9f1db95e2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_98c1a633b76fe893a76dc77f8cb717130ce89e70a3e5358a0c64d4a84a6995b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c1a633b76fe893a76dc77f8cb717130ce89e70a3e5358a0c64d4a84a6995b8->enter($__internal_98c1a633b76fe893a76dc77f8cb717130ce89e70a3e5358a0c64d4a84a6995b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a696d3f936ad32e31e63a5fd0a7b6171a8313ab7cd395ec4fdeba9f1db95e2ff->leave($__internal_a696d3f936ad32e31e63a5fd0a7b6171a8313ab7cd395ec4fdeba9f1db95e2ff_prof);

        
        $__internal_98c1a633b76fe893a76dc77f8cb717130ce89e70a3e5358a0c64d4a84a6995b8->leave($__internal_98c1a633b76fe893a76dc77f8cb717130ce89e70a3e5358a0c64d4a84a6995b8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_eaf968920586e9f12a4fecc23e1f8dd8e3fa6b808d52e190374e93228973321d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaf968920586e9f12a4fecc23e1f8dd8e3fa6b808d52e190374e93228973321d->enter($__internal_eaf968920586e9f12a4fecc23e1f8dd8e3fa6b808d52e190374e93228973321d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_936ca5a2858f2dcf4b1deaad7294014bb43077834733dac9e6aa0401b1b339e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936ca5a2858f2dcf4b1deaad7294014bb43077834733dac9e6aa0401b1b339e5->enter($__internal_936ca5a2858f2dcf4b1deaad7294014bb43077834733dac9e6aa0401b1b339e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_936ca5a2858f2dcf4b1deaad7294014bb43077834733dac9e6aa0401b1b339e5->leave($__internal_936ca5a2858f2dcf4b1deaad7294014bb43077834733dac9e6aa0401b1b339e5_prof);

        
        $__internal_eaf968920586e9f12a4fecc23e1f8dd8e3fa6b808d52e190374e93228973321d->leave($__internal_eaf968920586e9f12a4fecc23e1f8dd8e3fa6b808d52e190374e93228973321d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_dad1fca7a6c213f201c5ecb7820cc630faec4acd78e7b66c830d1d2a5807e668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dad1fca7a6c213f201c5ecb7820cc630faec4acd78e7b66c830d1d2a5807e668->enter($__internal_dad1fca7a6c213f201c5ecb7820cc630faec4acd78e7b66c830d1d2a5807e668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91c38d151c7526c12faef79675db50a6acd57a609c4b305559df0c4d74483230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c38d151c7526c12faef79675db50a6acd57a609c4b305559df0c4d74483230->enter($__internal_91c38d151c7526c12faef79675db50a6acd57a609c4b305559df0c4d74483230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_91c38d151c7526c12faef79675db50a6acd57a609c4b305559df0c4d74483230->leave($__internal_91c38d151c7526c12faef79675db50a6acd57a609c4b305559df0c4d74483230_prof);

        
        $__internal_dad1fca7a6c213f201c5ecb7820cc630faec4acd78e7b66c830d1d2a5807e668->leave($__internal_dad1fca7a6c213f201c5ecb7820cc630faec4acd78e7b66c830d1d2a5807e668_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_949c1283241701bdc5253db4522c3c385be5957775c3e826ae0e908dd11a30aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949c1283241701bdc5253db4522c3c385be5957775c3e826ae0e908dd11a30aa->enter($__internal_949c1283241701bdc5253db4522c3c385be5957775c3e826ae0e908dd11a30aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7be6aa15c3a8ffea776961e9bb3f430e325f36cfcd6f410d8fac3c7d984b9fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be6aa15c3a8ffea776961e9bb3f430e325f36cfcd6f410d8fac3c7d984b9fe0->enter($__internal_7be6aa15c3a8ffea776961e9bb3f430e325f36cfcd6f410d8fac3c7d984b9fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7be6aa15c3a8ffea776961e9bb3f430e325f36cfcd6f410d8fac3c7d984b9fe0->leave($__internal_7be6aa15c3a8ffea776961e9bb3f430e325f36cfcd6f410d8fac3c7d984b9fe0_prof);

        
        $__internal_949c1283241701bdc5253db4522c3c385be5957775c3e826ae0e908dd11a30aa->leave($__internal_949c1283241701bdc5253db4522c3c385be5957775c3e826ae0e908dd11a30aa_prof);

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
