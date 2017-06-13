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
        $__internal_90abd956954497809d2225803683e84f0a8585e1f72ec30a0210ae334f28676c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90abd956954497809d2225803683e84f0a8585e1f72ec30a0210ae334f28676c->enter($__internal_90abd956954497809d2225803683e84f0a8585e1f72ec30a0210ae334f28676c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        $__internal_a47572b89e78e2bda2d0cf811f21b143b29ff6b1030c573c2448fdc8c9cd920e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47572b89e78e2bda2d0cf811f21b143b29ff6b1030c573c2448fdc8c9cd920e->enter($__internal_a47572b89e78e2bda2d0cf811f21b143b29ff6b1030c573c2448fdc8c9cd920e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_90abd956954497809d2225803683e84f0a8585e1f72ec30a0210ae334f28676c->leave($__internal_90abd956954497809d2225803683e84f0a8585e1f72ec30a0210ae334f28676c_prof);

        
        $__internal_a47572b89e78e2bda2d0cf811f21b143b29ff6b1030c573c2448fdc8c9cd920e->leave($__internal_a47572b89e78e2bda2d0cf811f21b143b29ff6b1030c573c2448fdc8c9cd920e_prof);

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
