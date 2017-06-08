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
        $__internal_5cb7eb9c2656b708f1c025cd96162974316077c62a2da50f58f867d2cb83608e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb7eb9c2656b708f1c025cd96162974316077c62a2da50f58f867d2cb83608e->enter($__internal_5cb7eb9c2656b708f1c025cd96162974316077c62a2da50f58f867d2cb83608e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_b8afd358158364c09a81908a0c732e7622ef9565b05f8ea0388e416b675d96ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8afd358158364c09a81908a0c732e7622ef9565b05f8ea0388e416b675d96ed->enter($__internal_b8afd358158364c09a81908a0c732e7622ef9565b05f8ea0388e416b675d96ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_5cb7eb9c2656b708f1c025cd96162974316077c62a2da50f58f867d2cb83608e->leave($__internal_5cb7eb9c2656b708f1c025cd96162974316077c62a2da50f58f867d2cb83608e_prof);

        
        $__internal_b8afd358158364c09a81908a0c732e7622ef9565b05f8ea0388e416b675d96ed->leave($__internal_b8afd358158364c09a81908a0c732e7622ef9565b05f8ea0388e416b675d96ed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_234f7674ed9504f067a92839f953cc0f143700b3658c1d686be6195cbe41f7ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_234f7674ed9504f067a92839f953cc0f143700b3658c1d686be6195cbe41f7ca->enter($__internal_234f7674ed9504f067a92839f953cc0f143700b3658c1d686be6195cbe41f7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a978238a8da6b49a7ccb45dcd0f3dca6ca2bd8d099bbad618c90ed65cb442cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a978238a8da6b49a7ccb45dcd0f3dca6ca2bd8d099bbad618c90ed65cb442cfe->enter($__internal_a978238a8da6b49a7ccb45dcd0f3dca6ca2bd8d099bbad618c90ed65cb442cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a978238a8da6b49a7ccb45dcd0f3dca6ca2bd8d099bbad618c90ed65cb442cfe->leave($__internal_a978238a8da6b49a7ccb45dcd0f3dca6ca2bd8d099bbad618c90ed65cb442cfe_prof);

        
        $__internal_234f7674ed9504f067a92839f953cc0f143700b3658c1d686be6195cbe41f7ca->leave($__internal_234f7674ed9504f067a92839f953cc0f143700b3658c1d686be6195cbe41f7ca_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_92cfddef9023da86cb4e3742ca6dabccedeca97f8a78c8c374c796b1cf3272b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92cfddef9023da86cb4e3742ca6dabccedeca97f8a78c8c374c796b1cf3272b6->enter($__internal_92cfddef9023da86cb4e3742ca6dabccedeca97f8a78c8c374c796b1cf3272b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_57c18da3384c94a3707c6981e3797aff10bcad2d3c1f171232251df4c775850e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c18da3384c94a3707c6981e3797aff10bcad2d3c1f171232251df4c775850e->enter($__internal_57c18da3384c94a3707c6981e3797aff10bcad2d3c1f171232251df4c775850e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_57c18da3384c94a3707c6981e3797aff10bcad2d3c1f171232251df4c775850e->leave($__internal_57c18da3384c94a3707c6981e3797aff10bcad2d3c1f171232251df4c775850e_prof);

        
        $__internal_92cfddef9023da86cb4e3742ca6dabccedeca97f8a78c8c374c796b1cf3272b6->leave($__internal_92cfddef9023da86cb4e3742ca6dabccedeca97f8a78c8c374c796b1cf3272b6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f0d2824072db0248e3ae90f8de22944061144158823e975a5936eb2d72ed548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f0d2824072db0248e3ae90f8de22944061144158823e975a5936eb2d72ed548->enter($__internal_3f0d2824072db0248e3ae90f8de22944061144158823e975a5936eb2d72ed548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7929c9462845b0e48e4fabb01c688160954c47d81029b397125793a1eb2eb719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7929c9462845b0e48e4fabb01c688160954c47d81029b397125793a1eb2eb719->enter($__internal_7929c9462845b0e48e4fabb01c688160954c47d81029b397125793a1eb2eb719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7929c9462845b0e48e4fabb01c688160954c47d81029b397125793a1eb2eb719->leave($__internal_7929c9462845b0e48e4fabb01c688160954c47d81029b397125793a1eb2eb719_prof);

        
        $__internal_3f0d2824072db0248e3ae90f8de22944061144158823e975a5936eb2d72ed548->leave($__internal_3f0d2824072db0248e3ae90f8de22944061144158823e975a5936eb2d72ed548_prof);

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
