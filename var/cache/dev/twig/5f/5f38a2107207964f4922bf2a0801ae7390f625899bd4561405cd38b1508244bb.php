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
        $__internal_1a90fe307117cf1b37df58c251d8cc3bb76e44e26d140dac6ba2a9cb5a29960b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a90fe307117cf1b37df58c251d8cc3bb76e44e26d140dac6ba2a9cb5a29960b->enter($__internal_1a90fe307117cf1b37df58c251d8cc3bb76e44e26d140dac6ba2a9cb5a29960b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_e9e78e8178499ce62b1e0bbd9a9d85b1efb81249bb391928d94e1e3da679758a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9e78e8178499ce62b1e0bbd9a9d85b1efb81249bb391928d94e1e3da679758a->enter($__internal_e9e78e8178499ce62b1e0bbd9a9d85b1efb81249bb391928d94e1e3da679758a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1a90fe307117cf1b37df58c251d8cc3bb76e44e26d140dac6ba2a9cb5a29960b->leave($__internal_1a90fe307117cf1b37df58c251d8cc3bb76e44e26d140dac6ba2a9cb5a29960b_prof);

        
        $__internal_e9e78e8178499ce62b1e0bbd9a9d85b1efb81249bb391928d94e1e3da679758a->leave($__internal_e9e78e8178499ce62b1e0bbd9a9d85b1efb81249bb391928d94e1e3da679758a_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6b646e58edeb3d0d0663cdbb3d9cf4baca2e64f6e28328ac216ad9ec15bf0277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b646e58edeb3d0d0663cdbb3d9cf4baca2e64f6e28328ac216ad9ec15bf0277->enter($__internal_6b646e58edeb3d0d0663cdbb3d9cf4baca2e64f6e28328ac216ad9ec15bf0277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_436f57bb47d2ff72306fdb5186c59f8955585e63e942c1d4c12ee3d6a0001730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_436f57bb47d2ff72306fdb5186c59f8955585e63e942c1d4c12ee3d6a0001730->enter($__internal_436f57bb47d2ff72306fdb5186c59f8955585e63e942c1d4c12ee3d6a0001730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_436f57bb47d2ff72306fdb5186c59f8955585e63e942c1d4c12ee3d6a0001730->leave($__internal_436f57bb47d2ff72306fdb5186c59f8955585e63e942c1d4c12ee3d6a0001730_prof);

        
        $__internal_6b646e58edeb3d0d0663cdbb3d9cf4baca2e64f6e28328ac216ad9ec15bf0277->leave($__internal_6b646e58edeb3d0d0663cdbb3d9cf4baca2e64f6e28328ac216ad9ec15bf0277_prof);

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
