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
        $__internal_ceb8e2eb770fcf866a433283245468e57f6f0dc0d5fc2fba7c24b3295f73ac6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb8e2eb770fcf866a433283245468e57f6f0dc0d5fc2fba7c24b3295f73ac6a->enter($__internal_ceb8e2eb770fcf866a433283245468e57f6f0dc0d5fc2fba7c24b3295f73ac6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_34a1f82da4c1b95ee2679b7f1bfc1a904b1d1b1be3e5aaca8322f3ac6be05d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34a1f82da4c1b95ee2679b7f1bfc1a904b1d1b1be3e5aaca8322f3ac6be05d9b->enter($__internal_34a1f82da4c1b95ee2679b7f1bfc1a904b1d1b1be3e5aaca8322f3ac6be05d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_ceb8e2eb770fcf866a433283245468e57f6f0dc0d5fc2fba7c24b3295f73ac6a->leave($__internal_ceb8e2eb770fcf866a433283245468e57f6f0dc0d5fc2fba7c24b3295f73ac6a_prof);

        
        $__internal_34a1f82da4c1b95ee2679b7f1bfc1a904b1d1b1be3e5aaca8322f3ac6be05d9b->leave($__internal_34a1f82da4c1b95ee2679b7f1bfc1a904b1d1b1be3e5aaca8322f3ac6be05d9b_prof);

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
