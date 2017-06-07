<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_33865d42139d9a7162e5793cf937911b6239d521b1bcf92fbbb2c034c4564bae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_725587316ba958a6041f49ed9193c83102387ccdb4a127d6dc64b27f56b939f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_725587316ba958a6041f49ed9193c83102387ccdb4a127d6dc64b27f56b939f3->enter($__internal_725587316ba958a6041f49ed9193c83102387ccdb4a127d6dc64b27f56b939f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_0aed065d69ac3e4bf919bfb1f663e60fe47ed9983496737a200ef080bbcae069 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aed065d69ac3e4bf919bfb1f663e60fe47ed9983496737a200ef080bbcae069->enter($__internal_0aed065d69ac3e4bf919bfb1f663e60fe47ed9983496737a200ef080bbcae069_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_725587316ba958a6041f49ed9193c83102387ccdb4a127d6dc64b27f56b939f3->leave($__internal_725587316ba958a6041f49ed9193c83102387ccdb4a127d6dc64b27f56b939f3_prof);

        
        $__internal_0aed065d69ac3e4bf919bfb1f663e60fe47ed9983496737a200ef080bbcae069->leave($__internal_0aed065d69ac3e4bf919bfb1f663e60fe47ed9983496737a200ef080bbcae069_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_42e525b6d883fb1e4d0514903ffcb61ed3737c57059548531dc78f785be5d93f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42e525b6d883fb1e4d0514903ffcb61ed3737c57059548531dc78f785be5d93f->enter($__internal_42e525b6d883fb1e4d0514903ffcb61ed3737c57059548531dc78f785be5d93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cd4f596f492a07289d0c8c3144bf82da122ffc27ad321bfb6745ba798e6653cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd4f596f492a07289d0c8c3144bf82da122ffc27ad321bfb6745ba798e6653cf->enter($__internal_cd4f596f492a07289d0c8c3144bf82da122ffc27ad321bfb6745ba798e6653cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cd4f596f492a07289d0c8c3144bf82da122ffc27ad321bfb6745ba798e6653cf->leave($__internal_cd4f596f492a07289d0c8c3144bf82da122ffc27ad321bfb6745ba798e6653cf_prof);

        
        $__internal_42e525b6d883fb1e4d0514903ffcb61ed3737c57059548531dc78f785be5d93f->leave($__internal_42e525b6d883fb1e4d0514903ffcb61ed3737c57059548531dc78f785be5d93f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
