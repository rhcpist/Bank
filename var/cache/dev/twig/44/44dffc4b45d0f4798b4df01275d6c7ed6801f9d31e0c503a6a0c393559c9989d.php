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
        $__internal_089ddd38ea4ecccead73e29c58ff81f7f3253e2ab644c465c8f859a073a5d8b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_089ddd38ea4ecccead73e29c58ff81f7f3253e2ab644c465c8f859a073a5d8b5->enter($__internal_089ddd38ea4ecccead73e29c58ff81f7f3253e2ab644c465c8f859a073a5d8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_50e7b5b0d53b364ee6366c81c3adbacfa2b16b8aec135263645b2174ab38d958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e7b5b0d53b364ee6366c81c3adbacfa2b16b8aec135263645b2174ab38d958->enter($__internal_50e7b5b0d53b364ee6366c81c3adbacfa2b16b8aec135263645b2174ab38d958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_089ddd38ea4ecccead73e29c58ff81f7f3253e2ab644c465c8f859a073a5d8b5->leave($__internal_089ddd38ea4ecccead73e29c58ff81f7f3253e2ab644c465c8f859a073a5d8b5_prof);

        
        $__internal_50e7b5b0d53b364ee6366c81c3adbacfa2b16b8aec135263645b2174ab38d958->leave($__internal_50e7b5b0d53b364ee6366c81c3adbacfa2b16b8aec135263645b2174ab38d958_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9e0ae117916cc8e74e101aa353182a2cba3b299f6fcc90c7e33dfe65885b819a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e0ae117916cc8e74e101aa353182a2cba3b299f6fcc90c7e33dfe65885b819a->enter($__internal_9e0ae117916cc8e74e101aa353182a2cba3b299f6fcc90c7e33dfe65885b819a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b737610bb75d5c623cfe180d51ba90401a56d0302ed610e1e61c4a685fc96056 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b737610bb75d5c623cfe180d51ba90401a56d0302ed610e1e61c4a685fc96056->enter($__internal_b737610bb75d5c623cfe180d51ba90401a56d0302ed610e1e61c4a685fc96056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b737610bb75d5c623cfe180d51ba90401a56d0302ed610e1e61c4a685fc96056->leave($__internal_b737610bb75d5c623cfe180d51ba90401a56d0302ed610e1e61c4a685fc96056_prof);

        
        $__internal_9e0ae117916cc8e74e101aa353182a2cba3b299f6fcc90c7e33dfe65885b819a->leave($__internal_9e0ae117916cc8e74e101aa353182a2cba3b299f6fcc90c7e33dfe65885b819a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57b44fc22731372e400ec2e483647845e775d5a1d94f81ecf35b07834ba89e3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b44fc22731372e400ec2e483647845e775d5a1d94f81ecf35b07834ba89e3a->enter($__internal_57b44fc22731372e400ec2e483647845e775d5a1d94f81ecf35b07834ba89e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7e5349110bb22173c4b448cac4f4b5bf8874add625e032e99a7471db1c635e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5349110bb22173c4b448cac4f4b5bf8874add625e032e99a7471db1c635e4a->enter($__internal_7e5349110bb22173c4b448cac4f4b5bf8874add625e032e99a7471db1c635e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e5349110bb22173c4b448cac4f4b5bf8874add625e032e99a7471db1c635e4a->leave($__internal_7e5349110bb22173c4b448cac4f4b5bf8874add625e032e99a7471db1c635e4a_prof);

        
        $__internal_57b44fc22731372e400ec2e483647845e775d5a1d94f81ecf35b07834ba89e3a->leave($__internal_57b44fc22731372e400ec2e483647845e775d5a1d94f81ecf35b07834ba89e3a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d17fcb59d5593637ae1b82cde384514311230987bd096305b3eadbe01e19eff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17fcb59d5593637ae1b82cde384514311230987bd096305b3eadbe01e19eff9->enter($__internal_d17fcb59d5593637ae1b82cde384514311230987bd096305b3eadbe01e19eff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_51276f3a0c750f74330cd97c9b9ab32c9592646fa3de8ebb3a4d4b0bda954094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51276f3a0c750f74330cd97c9b9ab32c9592646fa3de8ebb3a4d4b0bda954094->enter($__internal_51276f3a0c750f74330cd97c9b9ab32c9592646fa3de8ebb3a4d4b0bda954094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51276f3a0c750f74330cd97c9b9ab32c9592646fa3de8ebb3a4d4b0bda954094->leave($__internal_51276f3a0c750f74330cd97c9b9ab32c9592646fa3de8ebb3a4d4b0bda954094_prof);

        
        $__internal_d17fcb59d5593637ae1b82cde384514311230987bd096305b3eadbe01e19eff9->leave($__internal_d17fcb59d5593637ae1b82cde384514311230987bd096305b3eadbe01e19eff9_prof);

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
