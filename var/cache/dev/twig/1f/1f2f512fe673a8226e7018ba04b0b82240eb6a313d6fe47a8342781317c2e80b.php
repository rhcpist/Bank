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
        $__internal_082d5e95c2fbe606f343bec6e1c51ab42a4eb5701b36e94a29d2de7ca170f796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082d5e95c2fbe606f343bec6e1c51ab42a4eb5701b36e94a29d2de7ca170f796->enter($__internal_082d5e95c2fbe606f343bec6e1c51ab42a4eb5701b36e94a29d2de7ca170f796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_12d3ac298277b7ed6c952571c26e0737735435217c956c439bea54fa88a365d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d3ac298277b7ed6c952571c26e0737735435217c956c439bea54fa88a365d1->enter($__internal_12d3ac298277b7ed6c952571c26e0737735435217c956c439bea54fa88a365d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_082d5e95c2fbe606f343bec6e1c51ab42a4eb5701b36e94a29d2de7ca170f796->leave($__internal_082d5e95c2fbe606f343bec6e1c51ab42a4eb5701b36e94a29d2de7ca170f796_prof);

        
        $__internal_12d3ac298277b7ed6c952571c26e0737735435217c956c439bea54fa88a365d1->leave($__internal_12d3ac298277b7ed6c952571c26e0737735435217c956c439bea54fa88a365d1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_34bdaea2ea56b729c9a06017d7dcfbba1e96e5df8b732a6e84f9101b39e65215 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34bdaea2ea56b729c9a06017d7dcfbba1e96e5df8b732a6e84f9101b39e65215->enter($__internal_34bdaea2ea56b729c9a06017d7dcfbba1e96e5df8b732a6e84f9101b39e65215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_11914a61598feecd7cabcf8a270c0962c78d2c1818ced1d19c598ed40c584d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11914a61598feecd7cabcf8a270c0962c78d2c1818ced1d19c598ed40c584d00->enter($__internal_11914a61598feecd7cabcf8a270c0962c78d2c1818ced1d19c598ed40c584d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_11914a61598feecd7cabcf8a270c0962c78d2c1818ced1d19c598ed40c584d00->leave($__internal_11914a61598feecd7cabcf8a270c0962c78d2c1818ced1d19c598ed40c584d00_prof);

        
        $__internal_34bdaea2ea56b729c9a06017d7dcfbba1e96e5df8b732a6e84f9101b39e65215->leave($__internal_34bdaea2ea56b729c9a06017d7dcfbba1e96e5df8b732a6e84f9101b39e65215_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_82e7ff05f9c23b9baf4994e2192ae94059db40e463b418dc0f80267414791bc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82e7ff05f9c23b9baf4994e2192ae94059db40e463b418dc0f80267414791bc2->enter($__internal_82e7ff05f9c23b9baf4994e2192ae94059db40e463b418dc0f80267414791bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8258fea01dfdad53d48b2cb940691b06bd84d98f5bc9d87583f9b662d809a1d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8258fea01dfdad53d48b2cb940691b06bd84d98f5bc9d87583f9b662d809a1d9->enter($__internal_8258fea01dfdad53d48b2cb940691b06bd84d98f5bc9d87583f9b662d809a1d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8258fea01dfdad53d48b2cb940691b06bd84d98f5bc9d87583f9b662d809a1d9->leave($__internal_8258fea01dfdad53d48b2cb940691b06bd84d98f5bc9d87583f9b662d809a1d9_prof);

        
        $__internal_82e7ff05f9c23b9baf4994e2192ae94059db40e463b418dc0f80267414791bc2->leave($__internal_82e7ff05f9c23b9baf4994e2192ae94059db40e463b418dc0f80267414791bc2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e805fed8e3870ae00ac919fc532345bf892d69ef2786e75ec58093820027965b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e805fed8e3870ae00ac919fc532345bf892d69ef2786e75ec58093820027965b->enter($__internal_e805fed8e3870ae00ac919fc532345bf892d69ef2786e75ec58093820027965b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8eeea94f5e5d984735717f9251278a7408153f61a464b3a98dd8982949ea4e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8eeea94f5e5d984735717f9251278a7408153f61a464b3a98dd8982949ea4e3->enter($__internal_d8eeea94f5e5d984735717f9251278a7408153f61a464b3a98dd8982949ea4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d8eeea94f5e5d984735717f9251278a7408153f61a464b3a98dd8982949ea4e3->leave($__internal_d8eeea94f5e5d984735717f9251278a7408153f61a464b3a98dd8982949ea4e3_prof);

        
        $__internal_e805fed8e3870ae00ac919fc532345bf892d69ef2786e75ec58093820027965b->leave($__internal_e805fed8e3870ae00ac919fc532345bf892d69ef2786e75ec58093820027965b_prof);

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
