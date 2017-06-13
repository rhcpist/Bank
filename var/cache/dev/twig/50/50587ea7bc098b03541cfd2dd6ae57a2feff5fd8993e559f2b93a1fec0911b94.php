<?php

/* base.html.twig */
class __TwigTemplate_edbe3be9d4dc3618bede9aef6240e30e2e40cf8d3078397ea0f7b10a9a5a9da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4773b73ba3617291b32cd89dd939aa4c7d0dac609b54d8991ca48c2ef10d11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4773b73ba3617291b32cd89dd939aa4c7d0dac609b54d8991ca48c2ef10d11b->enter($__internal_c4773b73ba3617291b32cd89dd939aa4c7d0dac609b54d8991ca48c2ef10d11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_3c4cf55da3a881826a5d3d5811f1c85f3a5aca6cc041c50396b514bc441f61db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4cf55da3a881826a5d3d5811f1c85f3a5aca6cc041c50396b514bc441f61db->enter($__internal_3c4cf55da3a881826a5d3d5811f1c85f3a5aca6cc041c50396b514bc441f61db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c4773b73ba3617291b32cd89dd939aa4c7d0dac609b54d8991ca48c2ef10d11b->leave($__internal_c4773b73ba3617291b32cd89dd939aa4c7d0dac609b54d8991ca48c2ef10d11b_prof);

        
        $__internal_3c4cf55da3a881826a5d3d5811f1c85f3a5aca6cc041c50396b514bc441f61db->leave($__internal_3c4cf55da3a881826a5d3d5811f1c85f3a5aca6cc041c50396b514bc441f61db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_93f777894fcfd25784c6b92bb93c9dcca106c983573df542ea2d129a647ae1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f777894fcfd25784c6b92bb93c9dcca106c983573df542ea2d129a647ae1a1->enter($__internal_93f777894fcfd25784c6b92bb93c9dcca106c983573df542ea2d129a647ae1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c7162a5853b33074a90b082f7d3fa2408c30244d56d856facd3b9cddb045cc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7162a5853b33074a90b082f7d3fa2408c30244d56d856facd3b9cddb045cc6a->enter($__internal_c7162a5853b33074a90b082f7d3fa2408c30244d56d856facd3b9cddb045cc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c7162a5853b33074a90b082f7d3fa2408c30244d56d856facd3b9cddb045cc6a->leave($__internal_c7162a5853b33074a90b082f7d3fa2408c30244d56d856facd3b9cddb045cc6a_prof);

        
        $__internal_93f777894fcfd25784c6b92bb93c9dcca106c983573df542ea2d129a647ae1a1->leave($__internal_93f777894fcfd25784c6b92bb93c9dcca106c983573df542ea2d129a647ae1a1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa2bec6bab58fcf6f51a8e0f31ecf33b56c0cb5d2e17658f6037e58f255bd092 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa2bec6bab58fcf6f51a8e0f31ecf33b56c0cb5d2e17658f6037e58f255bd092->enter($__internal_fa2bec6bab58fcf6f51a8e0f31ecf33b56c0cb5d2e17658f6037e58f255bd092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f7bbc30bb6927327cb534d7bc8a48799302e8fe49a0fb0f7c72b645e521a5ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bbc30bb6927327cb534d7bc8a48799302e8fe49a0fb0f7c72b645e521a5ba0->enter($__internal_f7bbc30bb6927327cb534d7bc8a48799302e8fe49a0fb0f7c72b645e521a5ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f7bbc30bb6927327cb534d7bc8a48799302e8fe49a0fb0f7c72b645e521a5ba0->leave($__internal_f7bbc30bb6927327cb534d7bc8a48799302e8fe49a0fb0f7c72b645e521a5ba0_prof);

        
        $__internal_fa2bec6bab58fcf6f51a8e0f31ecf33b56c0cb5d2e17658f6037e58f255bd092->leave($__internal_fa2bec6bab58fcf6f51a8e0f31ecf33b56c0cb5d2e17658f6037e58f255bd092_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fb4429e2664fdb3b78c801cff4c5620c19ffe0825f3215026c24faaa6513556 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb4429e2664fdb3b78c801cff4c5620c19ffe0825f3215026c24faaa6513556->enter($__internal_7fb4429e2664fdb3b78c801cff4c5620c19ffe0825f3215026c24faaa6513556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7fe8beaac6856c948a30f7eba1981951a365879385ac99c0a014a79b83a4a9b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fe8beaac6856c948a30f7eba1981951a365879385ac99c0a014a79b83a4a9b5->enter($__internal_7fe8beaac6856c948a30f7eba1981951a365879385ac99c0a014a79b83a4a9b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7fe8beaac6856c948a30f7eba1981951a365879385ac99c0a014a79b83a4a9b5->leave($__internal_7fe8beaac6856c948a30f7eba1981951a365879385ac99c0a014a79b83a4a9b5_prof);

        
        $__internal_7fb4429e2664fdb3b78c801cff4c5620c19ffe0825f3215026c24faaa6513556->leave($__internal_7fb4429e2664fdb3b78c801cff4c5620c19ffe0825f3215026c24faaa6513556_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac85f676fc7d89ca3de0b0b8f507ca321e196e1cecd870f55d35e3cd92d2a2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac85f676fc7d89ca3de0b0b8f507ca321e196e1cecd870f55d35e3cd92d2a2fc->enter($__internal_ac85f676fc7d89ca3de0b0b8f507ca321e196e1cecd870f55d35e3cd92d2a2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6525e5cc75623b360633d26ff2b594c6e83d9dd801b9879a708ee014c0315c95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6525e5cc75623b360633d26ff2b594c6e83d9dd801b9879a708ee014c0315c95->enter($__internal_6525e5cc75623b360633d26ff2b594c6e83d9dd801b9879a708ee014c0315c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6525e5cc75623b360633d26ff2b594c6e83d9dd801b9879a708ee014c0315c95->leave($__internal_6525e5cc75623b360633d26ff2b594c6e83d9dd801b9879a708ee014c0315c95_prof);

        
        $__internal_ac85f676fc7d89ca3de0b0b8f507ca321e196e1cecd870f55d35e3cd92d2a2fc->leave($__internal_ac85f676fc7d89ca3de0b0b8f507ca321e196e1cecd870f55d35e3cd92d2a2fc_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/base.html.twig");
    }
}
