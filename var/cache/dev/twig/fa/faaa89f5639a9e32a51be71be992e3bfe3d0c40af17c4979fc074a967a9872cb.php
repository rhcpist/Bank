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
        $__internal_6b28f27e8c3f98598af7f6a074aa240c4da7f8b139a06f9f5087b5bd40203f82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b28f27e8c3f98598af7f6a074aa240c4da7f8b139a06f9f5087b5bd40203f82->enter($__internal_6b28f27e8c3f98598af7f6a074aa240c4da7f8b139a06f9f5087b5bd40203f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_2a4cbf773b0dc145c7ff98c3c7ddcba16a0f03aa1b069dc69f55d7ef86904487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4cbf773b0dc145c7ff98c3c7ddcba16a0f03aa1b069dc69f55d7ef86904487->enter($__internal_2a4cbf773b0dc145c7ff98c3c7ddcba16a0f03aa1b069dc69f55d7ef86904487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_6b28f27e8c3f98598af7f6a074aa240c4da7f8b139a06f9f5087b5bd40203f82->leave($__internal_6b28f27e8c3f98598af7f6a074aa240c4da7f8b139a06f9f5087b5bd40203f82_prof);

        
        $__internal_2a4cbf773b0dc145c7ff98c3c7ddcba16a0f03aa1b069dc69f55d7ef86904487->leave($__internal_2a4cbf773b0dc145c7ff98c3c7ddcba16a0f03aa1b069dc69f55d7ef86904487_prof);

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
