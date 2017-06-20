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
        $__internal_b334344406a211cc83464e4df70988a8bc84f8b79750d8d40be2ae8f5503a845 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b334344406a211cc83464e4df70988a8bc84f8b79750d8d40be2ae8f5503a845->enter($__internal_b334344406a211cc83464e4df70988a8bc84f8b79750d8d40be2ae8f5503a845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_e29c28125527daf522519025ac85cebe69df25a3ce5a2a95866186fe00f6fa2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e29c28125527daf522519025ac85cebe69df25a3ce5a2a95866186fe00f6fa2c->enter($__internal_e29c28125527daf522519025ac85cebe69df25a3ce5a2a95866186fe00f6fa2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b334344406a211cc83464e4df70988a8bc84f8b79750d8d40be2ae8f5503a845->leave($__internal_b334344406a211cc83464e4df70988a8bc84f8b79750d8d40be2ae8f5503a845_prof);

        
        $__internal_e29c28125527daf522519025ac85cebe69df25a3ce5a2a95866186fe00f6fa2c->leave($__internal_e29c28125527daf522519025ac85cebe69df25a3ce5a2a95866186fe00f6fa2c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5c3f95294a2819d277625e39c91d054cef18b1cba4d411da0b12e47e67376f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5c3f95294a2819d277625e39c91d054cef18b1cba4d411da0b12e47e67376f7->enter($__internal_c5c3f95294a2819d277625e39c91d054cef18b1cba4d411da0b12e47e67376f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7f6750e6cb215622da10b1f7b0a5930fde2bd82eaa62950926c2cb9e4d96f436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6750e6cb215622da10b1f7b0a5930fde2bd82eaa62950926c2cb9e4d96f436->enter($__internal_7f6750e6cb215622da10b1f7b0a5930fde2bd82eaa62950926c2cb9e4d96f436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_7f6750e6cb215622da10b1f7b0a5930fde2bd82eaa62950926c2cb9e4d96f436->leave($__internal_7f6750e6cb215622da10b1f7b0a5930fde2bd82eaa62950926c2cb9e4d96f436_prof);

        
        $__internal_c5c3f95294a2819d277625e39c91d054cef18b1cba4d411da0b12e47e67376f7->leave($__internal_c5c3f95294a2819d277625e39c91d054cef18b1cba4d411da0b12e47e67376f7_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_d64331a26a6b5a93ecfb6c86630e3708792de97c48f3b1030c1668b47d19b5ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64331a26a6b5a93ecfb6c86630e3708792de97c48f3b1030c1668b47d19b5ac->enter($__internal_d64331a26a6b5a93ecfb6c86630e3708792de97c48f3b1030c1668b47d19b5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24a73a467a44f27e8992b238fdd8ab8337245a45084060b410fcac4781a973ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24a73a467a44f27e8992b238fdd8ab8337245a45084060b410fcac4781a973ed->enter($__internal_24a73a467a44f27e8992b238fdd8ab8337245a45084060b410fcac4781a973ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_24a73a467a44f27e8992b238fdd8ab8337245a45084060b410fcac4781a973ed->leave($__internal_24a73a467a44f27e8992b238fdd8ab8337245a45084060b410fcac4781a973ed_prof);

        
        $__internal_d64331a26a6b5a93ecfb6c86630e3708792de97c48f3b1030c1668b47d19b5ac->leave($__internal_d64331a26a6b5a93ecfb6c86630e3708792de97c48f3b1030c1668b47d19b5ac_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_04daededfa055a41d1e52674ecd17807cb40a8cc49d6b5c0768490c64d752f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04daededfa055a41d1e52674ecd17807cb40a8cc49d6b5c0768490c64d752f3e->enter($__internal_04daededfa055a41d1e52674ecd17807cb40a8cc49d6b5c0768490c64d752f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3589eec0f94bd563893fd9b72c535deb259ff42d8933019d4c9207c59574eea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3589eec0f94bd563893fd9b72c535deb259ff42d8933019d4c9207c59574eea6->enter($__internal_3589eec0f94bd563893fd9b72c535deb259ff42d8933019d4c9207c59574eea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3589eec0f94bd563893fd9b72c535deb259ff42d8933019d4c9207c59574eea6->leave($__internal_3589eec0f94bd563893fd9b72c535deb259ff42d8933019d4c9207c59574eea6_prof);

        
        $__internal_04daededfa055a41d1e52674ecd17807cb40a8cc49d6b5c0768490c64d752f3e->leave($__internal_04daededfa055a41d1e52674ecd17807cb40a8cc49d6b5c0768490c64d752f3e_prof);

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
