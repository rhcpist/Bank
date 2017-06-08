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
        $__internal_8053dea22bdc26c69d2d74df2889c32dc3c86eeb5cf55c14b511aa373f1fd082 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8053dea22bdc26c69d2d74df2889c32dc3c86eeb5cf55c14b511aa373f1fd082->enter($__internal_8053dea22bdc26c69d2d74df2889c32dc3c86eeb5cf55c14b511aa373f1fd082_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        $__internal_1e84448c42664ebfca4be2888b63f7e1dd20fa628744063b5872c3bef1d9e244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e84448c42664ebfca4be2888b63f7e1dd20fa628744063b5872c3bef1d9e244->enter($__internal_1e84448c42664ebfca4be2888b63f7e1dd20fa628744063b5872c3bef1d9e244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_8053dea22bdc26c69d2d74df2889c32dc3c86eeb5cf55c14b511aa373f1fd082->leave($__internal_8053dea22bdc26c69d2d74df2889c32dc3c86eeb5cf55c14b511aa373f1fd082_prof);

        
        $__internal_1e84448c42664ebfca4be2888b63f7e1dd20fa628744063b5872c3bef1d9e244->leave($__internal_1e84448c42664ebfca4be2888b63f7e1dd20fa628744063b5872c3bef1d9e244_prof);

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
