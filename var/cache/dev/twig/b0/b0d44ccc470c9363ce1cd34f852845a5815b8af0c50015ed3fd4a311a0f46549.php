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
        $__internal_3cd68e82ee2b8e8a95bad183501efc942d60563dfcd1613fbf0a5abc7ebdcc17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cd68e82ee2b8e8a95bad183501efc942d60563dfcd1613fbf0a5abc7ebdcc17->enter($__internal_3cd68e82ee2b8e8a95bad183501efc942d60563dfcd1613fbf0a5abc7ebdcc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        $__internal_c30fe3390a656a068355d7eab5805fc8e0e066223c32d0671d5150147a080a61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c30fe3390a656a068355d7eab5805fc8e0e066223c32d0671d5150147a080a61->enter($__internal_c30fe3390a656a068355d7eab5805fc8e0e066223c32d0671d5150147a080a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle:Components:motd.html.twig"));

        // line 1
        echo "<div class=\"motd\"></div>
";
        
        $__internal_3cd68e82ee2b8e8a95bad183501efc942d60563dfcd1613fbf0a5abc7ebdcc17->leave($__internal_3cd68e82ee2b8e8a95bad183501efc942d60563dfcd1613fbf0a5abc7ebdcc17_prof);

        
        $__internal_c30fe3390a656a068355d7eab5805fc8e0e066223c32d0671d5150147a080a61->leave($__internal_c30fe3390a656a068355d7eab5805fc8e0e066223c32d0671d5150147a080a61_prof);

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
