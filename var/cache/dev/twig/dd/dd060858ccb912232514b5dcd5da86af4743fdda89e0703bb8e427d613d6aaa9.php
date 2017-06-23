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
        $__internal_64d6cb3bd1e40acc8aec062db7ae7a225f6d8d43c50295a573ca64883902999f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64d6cb3bd1e40acc8aec062db7ae7a225f6d8d43c50295a573ca64883902999f->enter($__internal_64d6cb3bd1e40acc8aec062db7ae7a225f6d8d43c50295a573ca64883902999f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0b52198b5889aaf1acf19cd8d264c98f4b5f8476f2fc46c6b2d4ff40b3d9bfc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b52198b5889aaf1acf19cd8d264c98f4b5f8476f2fc46c6b2d4ff40b3d9bfc8->enter($__internal_0b52198b5889aaf1acf19cd8d264c98f4b5f8476f2fc46c6b2d4ff40b3d9bfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_64d6cb3bd1e40acc8aec062db7ae7a225f6d8d43c50295a573ca64883902999f->leave($__internal_64d6cb3bd1e40acc8aec062db7ae7a225f6d8d43c50295a573ca64883902999f_prof);

        
        $__internal_0b52198b5889aaf1acf19cd8d264c98f4b5f8476f2fc46c6b2d4ff40b3d9bfc8->leave($__internal_0b52198b5889aaf1acf19cd8d264c98f4b5f8476f2fc46c6b2d4ff40b3d9bfc8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5afa076ae286f6d1e7d50023278d4885809d0d95e374c22c28dd72c3e8b79ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5afa076ae286f6d1e7d50023278d4885809d0d95e374c22c28dd72c3e8b79ed->enter($__internal_f5afa076ae286f6d1e7d50023278d4885809d0d95e374c22c28dd72c3e8b79ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4bd795fb865c3e096ee5b48811bb83633059fa69ebec1f273a5033ff343913e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd795fb865c3e096ee5b48811bb83633059fa69ebec1f273a5033ff343913e7->enter($__internal_4bd795fb865c3e096ee5b48811bb83633059fa69ebec1f273a5033ff343913e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4bd795fb865c3e096ee5b48811bb83633059fa69ebec1f273a5033ff343913e7->leave($__internal_4bd795fb865c3e096ee5b48811bb83633059fa69ebec1f273a5033ff343913e7_prof);

        
        $__internal_f5afa076ae286f6d1e7d50023278d4885809d0d95e374c22c28dd72c3e8b79ed->leave($__internal_f5afa076ae286f6d1e7d50023278d4885809d0d95e374c22c28dd72c3e8b79ed_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_19963bc144eec25f0aabbb7f6508e4dad6fdca745fdb3e0090d3218ade4fcc13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19963bc144eec25f0aabbb7f6508e4dad6fdca745fdb3e0090d3218ade4fcc13->enter($__internal_19963bc144eec25f0aabbb7f6508e4dad6fdca745fdb3e0090d3218ade4fcc13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b13418cff1f5356b3e2c3b7249d9a6c88e204072ad4d99ed591e42a4ee654afc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13418cff1f5356b3e2c3b7249d9a6c88e204072ad4d99ed591e42a4ee654afc->enter($__internal_b13418cff1f5356b3e2c3b7249d9a6c88e204072ad4d99ed591e42a4ee654afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_b13418cff1f5356b3e2c3b7249d9a6c88e204072ad4d99ed591e42a4ee654afc->leave($__internal_b13418cff1f5356b3e2c3b7249d9a6c88e204072ad4d99ed591e42a4ee654afc_prof);

        
        $__internal_19963bc144eec25f0aabbb7f6508e4dad6fdca745fdb3e0090d3218ade4fcc13->leave($__internal_19963bc144eec25f0aabbb7f6508e4dad6fdca745fdb3e0090d3218ade4fcc13_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_19f60f39079cf899296233bff7b25c032b6e7d0aa9ec61d9bf69386274e77bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f60f39079cf899296233bff7b25c032b6e7d0aa9ec61d9bf69386274e77bc7->enter($__internal_19f60f39079cf899296233bff7b25c032b6e7d0aa9ec61d9bf69386274e77bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa75200c076b8384f3cbf159010f511d4805288c190627bbc7908a5eafd67ca3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa75200c076b8384f3cbf159010f511d4805288c190627bbc7908a5eafd67ca3->enter($__internal_fa75200c076b8384f3cbf159010f511d4805288c190627bbc7908a5eafd67ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa75200c076b8384f3cbf159010f511d4805288c190627bbc7908a5eafd67ca3->leave($__internal_fa75200c076b8384f3cbf159010f511d4805288c190627bbc7908a5eafd67ca3_prof);

        
        $__internal_19f60f39079cf899296233bff7b25c032b6e7d0aa9ec61d9bf69386274e77bc7->leave($__internal_19f60f39079cf899296233bff7b25c032b6e7d0aa9ec61d9bf69386274e77bc7_prof);

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
