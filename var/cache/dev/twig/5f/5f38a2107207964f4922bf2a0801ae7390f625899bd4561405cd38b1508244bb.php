<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_572b1bedf0974a20d31671ff8bae63474b25258954d943e3b54e939f673c8d5f extends Twig_Template
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
        $__internal_de05bc8c72d208705a9199c13f19755f5119b8e964de0e39683842767394a7ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de05bc8c72d208705a9199c13f19755f5119b8e964de0e39683842767394a7ce->enter($__internal_de05bc8c72d208705a9199c13f19755f5119b8e964de0e39683842767394a7ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_078ec06465d4fc9dc6a2ed7174fb3707f97ae5a2f1ee8fd96dc3f4d1a183c7c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_078ec06465d4fc9dc6a2ed7174fb3707f97ae5a2f1ee8fd96dc3f4d1a183c7c5->enter($__internal_078ec06465d4fc9dc6a2ed7174fb3707f97ae5a2f1ee8fd96dc3f4d1a183c7c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_de05bc8c72d208705a9199c13f19755f5119b8e964de0e39683842767394a7ce->leave($__internal_de05bc8c72d208705a9199c13f19755f5119b8e964de0e39683842767394a7ce_prof);

        
        $__internal_078ec06465d4fc9dc6a2ed7174fb3707f97ae5a2f1ee8fd96dc3f4d1a183c7c5->leave($__internal_078ec06465d4fc9dc6a2ed7174fb3707f97ae5a2f1ee8fd96dc3f4d1a183c7c5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c78c5fba4a404fbca22bb4e6125d2e388c11fc3a95a1f02799e3e03ede34a033 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c78c5fba4a404fbca22bb4e6125d2e388c11fc3a95a1f02799e3e03ede34a033->enter($__internal_c78c5fba4a404fbca22bb4e6125d2e388c11fc3a95a1f02799e3e03ede34a033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c431f9bc8cc9971aefe18ed2f07f87cdca67374b0d7373a45b9766b69bc81ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c431f9bc8cc9971aefe18ed2f07f87cdca67374b0d7373a45b9766b69bc81ae8->enter($__internal_c431f9bc8cc9971aefe18ed2f07f87cdca67374b0d7373a45b9766b69bc81ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c431f9bc8cc9971aefe18ed2f07f87cdca67374b0d7373a45b9766b69bc81ae8->leave($__internal_c431f9bc8cc9971aefe18ed2f07f87cdca67374b0d7373a45b9766b69bc81ae8_prof);

        
        $__internal_c78c5fba4a404fbca22bb4e6125d2e388c11fc3a95a1f02799e3e03ede34a033->leave($__internal_c78c5fba4a404fbca22bb4e6125d2e388c11fc3a95a1f02799e3e03ede34a033_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
