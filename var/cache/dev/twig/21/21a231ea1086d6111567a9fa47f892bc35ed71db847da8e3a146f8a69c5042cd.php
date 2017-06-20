<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_d30ab9ddc827030801d4de385c063d5e2e8c56e6deccf81680dd13666debf464 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6619721ad4067d4ac7c803eeaa0761ce15d1f299f3f703a1945ed341ebeb375a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6619721ad4067d4ac7c803eeaa0761ce15d1f299f3f703a1945ed341ebeb375a->enter($__internal_6619721ad4067d4ac7c803eeaa0761ce15d1f299f3f703a1945ed341ebeb375a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_c59ec6471dc24c1ae9bfaa48df8289994cd09907823691d4f9a7b750cd0c543f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c59ec6471dc24c1ae9bfaa48df8289994cd09907823691d4f9a7b750cd0c543f->enter($__internal_c59ec6471dc24c1ae9bfaa48df8289994cd09907823691d4f9a7b750cd0c543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6619721ad4067d4ac7c803eeaa0761ce15d1f299f3f703a1945ed341ebeb375a->leave($__internal_6619721ad4067d4ac7c803eeaa0761ce15d1f299f3f703a1945ed341ebeb375a_prof);

        
        $__internal_c59ec6471dc24c1ae9bfaa48df8289994cd09907823691d4f9a7b750cd0c543f->leave($__internal_c59ec6471dc24c1ae9bfaa48df8289994cd09907823691d4f9a7b750cd0c543f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0287be39b3634d017df94308aa1a9af34e33f13ef3c6da5c38e92efc41070386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0287be39b3634d017df94308aa1a9af34e33f13ef3c6da5c38e92efc41070386->enter($__internal_0287be39b3634d017df94308aa1a9af34e33f13ef3c6da5c38e92efc41070386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_378a3bd9b5bceb1e0a6f25ca2e32950fe775e75fe8311177e91771398083eacd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_378a3bd9b5bceb1e0a6f25ca2e32950fe775e75fe8311177e91771398083eacd->enter($__internal_378a3bd9b5bceb1e0a6f25ca2e32950fe775e75fe8311177e91771398083eacd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_378a3bd9b5bceb1e0a6f25ca2e32950fe775e75fe8311177e91771398083eacd->leave($__internal_378a3bd9b5bceb1e0a6f25ca2e32950fe775e75fe8311177e91771398083eacd_prof);

        
        $__internal_0287be39b3634d017df94308aa1a9af34e33f13ef3c6da5c38e92efc41070386->leave($__internal_0287be39b3634d017df94308aa1a9af34e33f13ef3c6da5c38e92efc41070386_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d651a005f2b140afb69d6a98ae45c845a391f71dbae01b2737e3a9887c79d2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d651a005f2b140afb69d6a98ae45c845a391f71dbae01b2737e3a9887c79d2d1->enter($__internal_d651a005f2b140afb69d6a98ae45c845a391f71dbae01b2737e3a9887c79d2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9eb99c210a3a675c77eac0d9856dbd2b11d19e4bae8ffda37af332d38d7a4d89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9eb99c210a3a675c77eac0d9856dbd2b11d19e4bae8ffda37af332d38d7a4d89->enter($__internal_9eb99c210a3a675c77eac0d9856dbd2b11d19e4bae8ffda37af332d38d7a4d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9eb99c210a3a675c77eac0d9856dbd2b11d19e4bae8ffda37af332d38d7a4d89->leave($__internal_9eb99c210a3a675c77eac0d9856dbd2b11d19e4bae8ffda37af332d38d7a4d89_prof);

        
        $__internal_d651a005f2b140afb69d6a98ae45c845a391f71dbae01b2737e3a9887c79d2d1->leave($__internal_d651a005f2b140afb69d6a98ae45c845a391f71dbae01b2737e3a9887c79d2d1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2b5d07f2504b1135afde9431b3e366df2d9a8432f163d6ad75b05f874f94035f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5d07f2504b1135afde9431b3e366df2d9a8432f163d6ad75b05f874f94035f->enter($__internal_2b5d07f2504b1135afde9431b3e366df2d9a8432f163d6ad75b05f874f94035f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c73e921ff6e2595e3a1c2898f72fbc318d2d0894ec01f55bec5a4e6ca118e9c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73e921ff6e2595e3a1c2898f72fbc318d2d0894ec01f55bec5a4e6ca118e9c7->enter($__internal_c73e921ff6e2595e3a1c2898f72fbc318d2d0894ec01f55bec5a4e6ca118e9c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_c73e921ff6e2595e3a1c2898f72fbc318d2d0894ec01f55bec5a4e6ca118e9c7->leave($__internal_c73e921ff6e2595e3a1c2898f72fbc318d2d0894ec01f55bec5a4e6ca118e9c7_prof);

        
        $__internal_2b5d07f2504b1135afde9431b3e366df2d9a8432f163d6ad75b05f874f94035f->leave($__internal_2b5d07f2504b1135afde9431b3e366df2d9a8432f163d6ad75b05f874f94035f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
