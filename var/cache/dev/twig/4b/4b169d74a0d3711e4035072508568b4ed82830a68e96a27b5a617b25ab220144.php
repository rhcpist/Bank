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
        $__internal_2ce97bde7273fa0208cfa40fd4da28e237f76f6f74c999d16671b7fcf46b3f01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce97bde7273fa0208cfa40fd4da28e237f76f6f74c999d16671b7fcf46b3f01->enter($__internal_2ce97bde7273fa0208cfa40fd4da28e237f76f6f74c999d16671b7fcf46b3f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_6479a74cf8eb6bb6f9e6c8af88d10bd0ad32389d693746d7bdc2645ba64df484 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6479a74cf8eb6bb6f9e6c8af88d10bd0ad32389d693746d7bdc2645ba64df484->enter($__internal_6479a74cf8eb6bb6f9e6c8af88d10bd0ad32389d693746d7bdc2645ba64df484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_2ce97bde7273fa0208cfa40fd4da28e237f76f6f74c999d16671b7fcf46b3f01->leave($__internal_2ce97bde7273fa0208cfa40fd4da28e237f76f6f74c999d16671b7fcf46b3f01_prof);

        
        $__internal_6479a74cf8eb6bb6f9e6c8af88d10bd0ad32389d693746d7bdc2645ba64df484->leave($__internal_6479a74cf8eb6bb6f9e6c8af88d10bd0ad32389d693746d7bdc2645ba64df484_prof);

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
