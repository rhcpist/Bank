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
        $__internal_4c61deecaf611c45fa3f9c49fe8028a26f0ce65195167430d3c909b62ebec09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c61deecaf611c45fa3f9c49fe8028a26f0ce65195167430d3c909b62ebec09a->enter($__internal_4c61deecaf611c45fa3f9c49fe8028a26f0ce65195167430d3c909b62ebec09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_13b46d6f2393f6a3895c322f74fa63b85d317996c492b7874c8ea2fd97227df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13b46d6f2393f6a3895c322f74fa63b85d317996c492b7874c8ea2fd97227df5->enter($__internal_13b46d6f2393f6a3895c322f74fa63b85d317996c492b7874c8ea2fd97227df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4c61deecaf611c45fa3f9c49fe8028a26f0ce65195167430d3c909b62ebec09a->leave($__internal_4c61deecaf611c45fa3f9c49fe8028a26f0ce65195167430d3c909b62ebec09a_prof);

        
        $__internal_13b46d6f2393f6a3895c322f74fa63b85d317996c492b7874c8ea2fd97227df5->leave($__internal_13b46d6f2393f6a3895c322f74fa63b85d317996c492b7874c8ea2fd97227df5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_056c0de044e18048dbcd6d21db86490d14289cf9734dc6bd3bf82ae6f6e6cb63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_056c0de044e18048dbcd6d21db86490d14289cf9734dc6bd3bf82ae6f6e6cb63->enter($__internal_056c0de044e18048dbcd6d21db86490d14289cf9734dc6bd3bf82ae6f6e6cb63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_edfa954c1ddb9a6ed93d109e51de3351bc72cffd8f1c408e612e4c615175e5f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edfa954c1ddb9a6ed93d109e51de3351bc72cffd8f1c408e612e4c615175e5f9->enter($__internal_edfa954c1ddb9a6ed93d109e51de3351bc72cffd8f1c408e612e4c615175e5f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_edfa954c1ddb9a6ed93d109e51de3351bc72cffd8f1c408e612e4c615175e5f9->leave($__internal_edfa954c1ddb9a6ed93d109e51de3351bc72cffd8f1c408e612e4c615175e5f9_prof);

        
        $__internal_056c0de044e18048dbcd6d21db86490d14289cf9734dc6bd3bf82ae6f6e6cb63->leave($__internal_056c0de044e18048dbcd6d21db86490d14289cf9734dc6bd3bf82ae6f6e6cb63_prof);

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
