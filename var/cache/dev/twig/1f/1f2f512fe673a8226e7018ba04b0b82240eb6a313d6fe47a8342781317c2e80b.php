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
        $__internal_4cafb73aa4e711510222422649820142c28aa1b00f45c771d10404e7df4f3e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cafb73aa4e711510222422649820142c28aa1b00f45c771d10404e7df4f3e42->enter($__internal_4cafb73aa4e711510222422649820142c28aa1b00f45c771d10404e7df4f3e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_205410c5444f5d382e829537cb0a1b5ac7a9d7dcefd31f60a20ba84b12947bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205410c5444f5d382e829537cb0a1b5ac7a9d7dcefd31f60a20ba84b12947bf3->enter($__internal_205410c5444f5d382e829537cb0a1b5ac7a9d7dcefd31f60a20ba84b12947bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_4cafb73aa4e711510222422649820142c28aa1b00f45c771d10404e7df4f3e42->leave($__internal_4cafb73aa4e711510222422649820142c28aa1b00f45c771d10404e7df4f3e42_prof);

        
        $__internal_205410c5444f5d382e829537cb0a1b5ac7a9d7dcefd31f60a20ba84b12947bf3->leave($__internal_205410c5444f5d382e829537cb0a1b5ac7a9d7dcefd31f60a20ba84b12947bf3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_66f0d9946e476a830f8d68108dbb2daa3d3f26077692534d795ed37b205e1c01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f0d9946e476a830f8d68108dbb2daa3d3f26077692534d795ed37b205e1c01->enter($__internal_66f0d9946e476a830f8d68108dbb2daa3d3f26077692534d795ed37b205e1c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f218e8d1d4afc50b7da3205b55c98500b891bcde23b3d1089e6970a90dfc38d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f218e8d1d4afc50b7da3205b55c98500b891bcde23b3d1089e6970a90dfc38d7->enter($__internal_f218e8d1d4afc50b7da3205b55c98500b891bcde23b3d1089e6970a90dfc38d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f218e8d1d4afc50b7da3205b55c98500b891bcde23b3d1089e6970a90dfc38d7->leave($__internal_f218e8d1d4afc50b7da3205b55c98500b891bcde23b3d1089e6970a90dfc38d7_prof);

        
        $__internal_66f0d9946e476a830f8d68108dbb2daa3d3f26077692534d795ed37b205e1c01->leave($__internal_66f0d9946e476a830f8d68108dbb2daa3d3f26077692534d795ed37b205e1c01_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_9625f145041f06b5d3e39e4e4a07fe21d9e247f412d968b7a19a36c962b81c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9625f145041f06b5d3e39e4e4a07fe21d9e247f412d968b7a19a36c962b81c70->enter($__internal_9625f145041f06b5d3e39e4e4a07fe21d9e247f412d968b7a19a36c962b81c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2550c507c3f086812ade99d72e0d46d428f860cf2f32d8af1eabf5ee3fdd2173 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2550c507c3f086812ade99d72e0d46d428f860cf2f32d8af1eabf5ee3fdd2173->enter($__internal_2550c507c3f086812ade99d72e0d46d428f860cf2f32d8af1eabf5ee3fdd2173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_2550c507c3f086812ade99d72e0d46d428f860cf2f32d8af1eabf5ee3fdd2173->leave($__internal_2550c507c3f086812ade99d72e0d46d428f860cf2f32d8af1eabf5ee3fdd2173_prof);

        
        $__internal_9625f145041f06b5d3e39e4e4a07fe21d9e247f412d968b7a19a36c962b81c70->leave($__internal_9625f145041f06b5d3e39e4e4a07fe21d9e247f412d968b7a19a36c962b81c70_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f92ffcdfd017bf3ab0e6a1356d6276e8e55dacac125b27fc0a8eef21c904cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f92ffcdfd017bf3ab0e6a1356d6276e8e55dacac125b27fc0a8eef21c904cc->enter($__internal_20f92ffcdfd017bf3ab0e6a1356d6276e8e55dacac125b27fc0a8eef21c904cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcebb657d5ed353dc7ca8416cadbc5583c3a46035467aa11f79a177a42874598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcebb657d5ed353dc7ca8416cadbc5583c3a46035467aa11f79a177a42874598->enter($__internal_fcebb657d5ed353dc7ca8416cadbc5583c3a46035467aa11f79a177a42874598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fcebb657d5ed353dc7ca8416cadbc5583c3a46035467aa11f79a177a42874598->leave($__internal_fcebb657d5ed353dc7ca8416cadbc5583c3a46035467aa11f79a177a42874598_prof);

        
        $__internal_20f92ffcdfd017bf3ab0e6a1356d6276e8e55dacac125b27fc0a8eef21c904cc->leave($__internal_20f92ffcdfd017bf3ab0e6a1356d6276e8e55dacac125b27fc0a8eef21c904cc_prof);

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
