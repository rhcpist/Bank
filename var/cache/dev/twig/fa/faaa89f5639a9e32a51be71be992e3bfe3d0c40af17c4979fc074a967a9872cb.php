<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_3ec46820619674da820d0b95ae880825a967167b7760d5e3f1f997ef9f63063a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2736705043d4aece78588801f7f2da7fd9bfc40e47d28bf5e18a29543d6ba0da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2736705043d4aece78588801f7f2da7fd9bfc40e47d28bf5e18a29543d6ba0da->enter($__internal_2736705043d4aece78588801f7f2da7fd9bfc40e47d28bf5e18a29543d6ba0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_96af748363de9982307331f7ea7789833c84af9e39a1f085063489f11cca8a23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96af748363de9982307331f7ea7789833c84af9e39a1f085063489f11cca8a23->enter($__internal_96af748363de9982307331f7ea7789833c84af9e39a1f085063489f11cca8a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_2736705043d4aece78588801f7f2da7fd9bfc40e47d28bf5e18a29543d6ba0da->leave($__internal_2736705043d4aece78588801f7f2da7fd9bfc40e47d28bf5e18a29543d6ba0da_prof);

        
        $__internal_96af748363de9982307331f7ea7789833c84af9e39a1f085063489f11cca8a23->leave($__internal_96af748363de9982307331f7ea7789833c84af9e39a1f085063489f11cca8a23_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
