<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_545e2dd62ee92147a5916793c7db55f109f25b27a361641db80fd982cb5e5d3b extends Twig_Template
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
        $__internal_9d776a572db647036bb1d95f40e58640c99391b5b72239186595eeccda29d1f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d776a572db647036bb1d95f40e58640c99391b5b72239186595eeccda29d1f7->enter($__internal_9d776a572db647036bb1d95f40e58640c99391b5b72239186595eeccda29d1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_88db0c3e6803924e4f2b9c46520a610145d342bdcd29fe0980a4c96daace994b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88db0c3e6803924e4f2b9c46520a610145d342bdcd29fe0980a4c96daace994b->enter($__internal_88db0c3e6803924e4f2b9c46520a610145d342bdcd29fe0980a4c96daace994b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9d776a572db647036bb1d95f40e58640c99391b5b72239186595eeccda29d1f7->leave($__internal_9d776a572db647036bb1d95f40e58640c99391b5b72239186595eeccda29d1f7_prof);

        
        $__internal_88db0c3e6803924e4f2b9c46520a610145d342bdcd29fe0980a4c96daace994b->leave($__internal_88db0c3e6803924e4f2b9c46520a610145d342bdcd29fe0980a4c96daace994b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_860ae27f93bbf8d26355a2c3d17cab61ee15f2818bd44e5aa62256c30cce60d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_860ae27f93bbf8d26355a2c3d17cab61ee15f2818bd44e5aa62256c30cce60d2->enter($__internal_860ae27f93bbf8d26355a2c3d17cab61ee15f2818bd44e5aa62256c30cce60d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d7a2953150b968ea571451ae44e78b6212348cb8ade53cca1b435f4d60b0e76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d7a2953150b968ea571451ae44e78b6212348cb8ade53cca1b435f4d60b0e76->enter($__internal_4d7a2953150b968ea571451ae44e78b6212348cb8ade53cca1b435f4d60b0e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4d7a2953150b968ea571451ae44e78b6212348cb8ade53cca1b435f4d60b0e76->leave($__internal_4d7a2953150b968ea571451ae44e78b6212348cb8ade53cca1b435f4d60b0e76_prof);

        
        $__internal_860ae27f93bbf8d26355a2c3d17cab61ee15f2818bd44e5aa62256c30cce60d2->leave($__internal_860ae27f93bbf8d26355a2c3d17cab61ee15f2818bd44e5aa62256c30cce60d2_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3e6b5f6426164d09c07d011d9c4e5f8a1fd1af66cc40ebd81f4fc207aca05436 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6b5f6426164d09c07d011d9c4e5f8a1fd1af66cc40ebd81f4fc207aca05436->enter($__internal_3e6b5f6426164d09c07d011d9c4e5f8a1fd1af66cc40ebd81f4fc207aca05436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_70b4891ab86748878b8402465debe1a751204197ab8544e26f9bb945ab455ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b4891ab86748878b8402465debe1a751204197ab8544e26f9bb945ab455ee0->enter($__internal_70b4891ab86748878b8402465debe1a751204197ab8544e26f9bb945ab455ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_70b4891ab86748878b8402465debe1a751204197ab8544e26f9bb945ab455ee0->leave($__internal_70b4891ab86748878b8402465debe1a751204197ab8544e26f9bb945ab455ee0_prof);

        
        $__internal_3e6b5f6426164d09c07d011d9c4e5f8a1fd1af66cc40ebd81f4fc207aca05436->leave($__internal_3e6b5f6426164d09c07d011d9c4e5f8a1fd1af66cc40ebd81f4fc207aca05436_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d60c50fb236ea0a67e8cd131a0db4de80cda6906baf663c802d30e1b563c04b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d60c50fb236ea0a67e8cd131a0db4de80cda6906baf663c802d30e1b563c04b->enter($__internal_7d60c50fb236ea0a67e8cd131a0db4de80cda6906baf663c802d30e1b563c04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5a93862d1f52a7f6713dc6cd4e9aa9ec52cd405d710889222ff980e5baf5b984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a93862d1f52a7f6713dc6cd4e9aa9ec52cd405d710889222ff980e5baf5b984->enter($__internal_5a93862d1f52a7f6713dc6cd4e9aa9ec52cd405d710889222ff980e5baf5b984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5a93862d1f52a7f6713dc6cd4e9aa9ec52cd405d710889222ff980e5baf5b984->leave($__internal_5a93862d1f52a7f6713dc6cd4e9aa9ec52cd405d710889222ff980e5baf5b984_prof);

        
        $__internal_7d60c50fb236ea0a67e8cd131a0db4de80cda6906baf663c802d30e1b563c04b->leave($__internal_7d60c50fb236ea0a67e8cd131a0db4de80cda6906baf663c802d30e1b563c04b_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
