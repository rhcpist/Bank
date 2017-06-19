<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_03857984079cc5009439857baccca5d11d7211aea1ff46bd712f4f9c592e87ab extends Twig_Template
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
        $__internal_f8bcf85b99ca2324a70f69b1a697096293c9276658d57a9e7d4bd48490fa7e8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8bcf85b99ca2324a70f69b1a697096293c9276658d57a9e7d4bd48490fa7e8e->enter($__internal_f8bcf85b99ca2324a70f69b1a697096293c9276658d57a9e7d4bd48490fa7e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_ad3e9f5703ead2184eeb9d2f462770d4d8b49911c0b1868440a0183a4f9eca50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad3e9f5703ead2184eeb9d2f462770d4d8b49911c0b1868440a0183a4f9eca50->enter($__internal_ad3e9f5703ead2184eeb9d2f462770d4d8b49911c0b1868440a0183a4f9eca50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_f8bcf85b99ca2324a70f69b1a697096293c9276658d57a9e7d4bd48490fa7e8e->leave($__internal_f8bcf85b99ca2324a70f69b1a697096293c9276658d57a9e7d4bd48490fa7e8e_prof);

        
        $__internal_ad3e9f5703ead2184eeb9d2f462770d4d8b49911c0b1868440a0183a4f9eca50->leave($__internal_ad3e9f5703ead2184eeb9d2f462770d4d8b49911c0b1868440a0183a4f9eca50_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
