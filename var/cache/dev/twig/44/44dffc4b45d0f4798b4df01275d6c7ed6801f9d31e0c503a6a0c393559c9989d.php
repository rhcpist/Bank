<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_0544399e3e26e2e4d59ac93c058d82523fe4e471881607d801ec7dd480b16322 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_f0938b7ba8f2c85a4d56a0c87ad43cc012f65a3c833da87fed3b13389ffba4f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0938b7ba8f2c85a4d56a0c87ad43cc012f65a3c833da87fed3b13389ffba4f3->enter($__internal_f0938b7ba8f2c85a4d56a0c87ad43cc012f65a3c833da87fed3b13389ffba4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_82d089f0df78fde5351fbe519beee558ed4a658d911df051f9ba0010968c5ab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82d089f0df78fde5351fbe519beee558ed4a658d911df051f9ba0010968c5ab2->enter($__internal_82d089f0df78fde5351fbe519beee558ed4a658d911df051f9ba0010968c5ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0938b7ba8f2c85a4d56a0c87ad43cc012f65a3c833da87fed3b13389ffba4f3->leave($__internal_f0938b7ba8f2c85a4d56a0c87ad43cc012f65a3c833da87fed3b13389ffba4f3_prof);

        
        $__internal_82d089f0df78fde5351fbe519beee558ed4a658d911df051f9ba0010968c5ab2->leave($__internal_82d089f0df78fde5351fbe519beee558ed4a658d911df051f9ba0010968c5ab2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7420a657de20e2821c16d50d4c04f4868f8294a12e8e62c4b544ac41901a2440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7420a657de20e2821c16d50d4c04f4868f8294a12e8e62c4b544ac41901a2440->enter($__internal_7420a657de20e2821c16d50d4c04f4868f8294a12e8e62c4b544ac41901a2440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_10348ac61c9e9c7d3125efd73418e86dd458e947bb935e355767bf67915c7549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10348ac61c9e9c7d3125efd73418e86dd458e947bb935e355767bf67915c7549->enter($__internal_10348ac61c9e9c7d3125efd73418e86dd458e947bb935e355767bf67915c7549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10348ac61c9e9c7d3125efd73418e86dd458e947bb935e355767bf67915c7549->leave($__internal_10348ac61c9e9c7d3125efd73418e86dd458e947bb935e355767bf67915c7549_prof);

        
        $__internal_7420a657de20e2821c16d50d4c04f4868f8294a12e8e62c4b544ac41901a2440->leave($__internal_7420a657de20e2821c16d50d4c04f4868f8294a12e8e62c4b544ac41901a2440_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ccb5493a25094ee5c1883ebf41f94b9c04f3b2029e98803ac9424f07a33ca605 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb5493a25094ee5c1883ebf41f94b9c04f3b2029e98803ac9424f07a33ca605->enter($__internal_ccb5493a25094ee5c1883ebf41f94b9c04f3b2029e98803ac9424f07a33ca605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dcb7c8a7cbe759778db8021ce1c00bcf0cc23647a93c2a8698dac4632f323db3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcb7c8a7cbe759778db8021ce1c00bcf0cc23647a93c2a8698dac4632f323db3->enter($__internal_dcb7c8a7cbe759778db8021ce1c00bcf0cc23647a93c2a8698dac4632f323db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dcb7c8a7cbe759778db8021ce1c00bcf0cc23647a93c2a8698dac4632f323db3->leave($__internal_dcb7c8a7cbe759778db8021ce1c00bcf0cc23647a93c2a8698dac4632f323db3_prof);

        
        $__internal_ccb5493a25094ee5c1883ebf41f94b9c04f3b2029e98803ac9424f07a33ca605->leave($__internal_ccb5493a25094ee5c1883ebf41f94b9c04f3b2029e98803ac9424f07a33ca605_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe63b61a6b7a904112801c3b3e295699f62c21af7a595f760d687c8216c7b53b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe63b61a6b7a904112801c3b3e295699f62c21af7a595f760d687c8216c7b53b->enter($__internal_fe63b61a6b7a904112801c3b3e295699f62c21af7a595f760d687c8216c7b53b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8d0dec7216b3531444ec83a31dcab7612d6ae4b30d45cca7ff7777ef2533a00c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0dec7216b3531444ec83a31dcab7612d6ae4b30d45cca7ff7777ef2533a00c->enter($__internal_8d0dec7216b3531444ec83a31dcab7612d6ae4b30d45cca7ff7777ef2533a00c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d0dec7216b3531444ec83a31dcab7612d6ae4b30d45cca7ff7777ef2533a00c->leave($__internal_8d0dec7216b3531444ec83a31dcab7612d6ae4b30d45cca7ff7777ef2533a00c_prof);

        
        $__internal_fe63b61a6b7a904112801c3b3e295699f62c21af7a595f760d687c8216c7b53b->leave($__internal_fe63b61a6b7a904112801c3b3e295699f62c21af7a595f760d687c8216c7b53b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
