<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_3f05f4763cd28c55d22be1580e3f7be72060b2f74989aaa5826b2a4171e12ec2 extends Twig_Template
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
        $__internal_23fef31f14483c336d47acdb961c4e5cd44add1b729bfbb1a3741d8faf5f0d80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23fef31f14483c336d47acdb961c4e5cd44add1b729bfbb1a3741d8faf5f0d80->enter($__internal_23fef31f14483c336d47acdb961c4e5cd44add1b729bfbb1a3741d8faf5f0d80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_d32ca8674ba29ec17b54a3d09454a626cc08c3412ff1fcdd7f2df52de427337c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32ca8674ba29ec17b54a3d09454a626cc08c3412ff1fcdd7f2df52de427337c->enter($__internal_d32ca8674ba29ec17b54a3d09454a626cc08c3412ff1fcdd7f2df52de427337c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_23fef31f14483c336d47acdb961c4e5cd44add1b729bfbb1a3741d8faf5f0d80->leave($__internal_23fef31f14483c336d47acdb961c4e5cd44add1b729bfbb1a3741d8faf5f0d80_prof);

        
        $__internal_d32ca8674ba29ec17b54a3d09454a626cc08c3412ff1fcdd7f2df52de427337c->leave($__internal_d32ca8674ba29ec17b54a3d09454a626cc08c3412ff1fcdd7f2df52de427337c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec0f6de06138d3dfc746c038c434173a1042ebcb4427d839333aec46744fbc1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0f6de06138d3dfc746c038c434173a1042ebcb4427d839333aec46744fbc1f->enter($__internal_ec0f6de06138d3dfc746c038c434173a1042ebcb4427d839333aec46744fbc1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c8bb692a488b78b653841ea3d4b16eb05f590bce368cc44fa91a036f373c691f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bb692a488b78b653841ea3d4b16eb05f590bce368cc44fa91a036f373c691f->enter($__internal_c8bb692a488b78b653841ea3d4b16eb05f590bce368cc44fa91a036f373c691f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c8bb692a488b78b653841ea3d4b16eb05f590bce368cc44fa91a036f373c691f->leave($__internal_c8bb692a488b78b653841ea3d4b16eb05f590bce368cc44fa91a036f373c691f_prof);

        
        $__internal_ec0f6de06138d3dfc746c038c434173a1042ebcb4427d839333aec46744fbc1f->leave($__internal_ec0f6de06138d3dfc746c038c434173a1042ebcb4427d839333aec46744fbc1f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_a45eeb7f5435e4de9ab742b3c2b192c5f55cb7baed8ca9b227e155784dbc0513 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a45eeb7f5435e4de9ab742b3c2b192c5f55cb7baed8ca9b227e155784dbc0513->enter($__internal_a45eeb7f5435e4de9ab742b3c2b192c5f55cb7baed8ca9b227e155784dbc0513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_880621bda755ab77c4f8538b614487116b814b92272de5ce80e745bab8c816e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_880621bda755ab77c4f8538b614487116b814b92272de5ce80e745bab8c816e2->enter($__internal_880621bda755ab77c4f8538b614487116b814b92272de5ce80e745bab8c816e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_880621bda755ab77c4f8538b614487116b814b92272de5ce80e745bab8c816e2->leave($__internal_880621bda755ab77c4f8538b614487116b814b92272de5ce80e745bab8c816e2_prof);

        
        $__internal_a45eeb7f5435e4de9ab742b3c2b192c5f55cb7baed8ca9b227e155784dbc0513->leave($__internal_a45eeb7f5435e4de9ab742b3c2b192c5f55cb7baed8ca9b227e155784dbc0513_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd59d875488db6f9a8d433fea9e8a2a57a76f9a5441dbca4cc196b621b8c1ee8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd59d875488db6f9a8d433fea9e8a2a57a76f9a5441dbca4cc196b621b8c1ee8->enter($__internal_dd59d875488db6f9a8d433fea9e8a2a57a76f9a5441dbca4cc196b621b8c1ee8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b87288edfc01f40e47e0914587b6e6d9d6fc1870b5f70a1e084b0cd44c4eddda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87288edfc01f40e47e0914587b6e6d9d6fc1870b5f70a1e084b0cd44c4eddda->enter($__internal_b87288edfc01f40e47e0914587b6e6d9d6fc1870b5f70a1e084b0cd44c4eddda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b87288edfc01f40e47e0914587b6e6d9d6fc1870b5f70a1e084b0cd44c4eddda->leave($__internal_b87288edfc01f40e47e0914587b6e6d9d6fc1870b5f70a1e084b0cd44c4eddda_prof);

        
        $__internal_dd59d875488db6f9a8d433fea9e8a2a57a76f9a5441dbca4cc196b621b8c1ee8->leave($__internal_dd59d875488db6f9a8d433fea9e8a2a57a76f9a5441dbca4cc196b621b8c1ee8_prof);

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
