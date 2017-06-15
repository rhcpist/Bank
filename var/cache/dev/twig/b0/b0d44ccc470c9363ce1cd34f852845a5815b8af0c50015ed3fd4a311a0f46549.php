<?php

/* NelmioApiDocBundle:Components:motd.html.twig */
class __TwigTemplate_637c7dd037886b229754996ce77bbd23d5ddc811b575936cbae17d168e3fe5c5 extends Twig_Template
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
        $__internal_231287456d60f33463235297744a24b2cf8ad493f4314d3ee5c1fc12c814bf21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_231287456d60f33463235297744a24b2cf8ad493f4314d3ee5c1fc12c814bf21->enter($__internal_231287456d60f33463235297744a24b2cf8ad493f4314d3ee5c1fc12c814bf21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        $__internal_8c0650c1857ff9b360631293c1d84f7eec0e4f03d84f1e99f1b66d27dac8f1fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c0650c1857ff9b360631293c1d84f7eec0e4f03d84f1e99f1b66d27dac8f1fa->enter($__internal_8c0650c1857ff9b360631293c1d84f7eec0e4f03d84f1e99f1b66d27dac8f1fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_231287456d60f33463235297744a24b2cf8ad493f4314d3ee5c1fc12c814bf21->leave($__internal_231287456d60f33463235297744a24b2cf8ad493f4314d3ee5c1fc12c814bf21_prof);

        
        $__internal_8c0650c1857ff9b360631293c1d84f7eec0e4f03d84f1e99f1b66d27dac8f1fa->leave($__internal_8c0650c1857ff9b360631293c1d84f7eec0e4f03d84f1e99f1b66d27dac8f1fa_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle:Components:motd.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"motd\"></div>
", "NelmioApiDocBundle:Components:motd.html.twig", "/mnt/storage/private/public_html/bank/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/Components/motd.html.twig");
    }
}
