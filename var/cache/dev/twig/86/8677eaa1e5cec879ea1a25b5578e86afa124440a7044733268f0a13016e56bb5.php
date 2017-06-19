<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d0e63e796491ecd63f4c9f679e4b891c27968ca95b083e168d9b930563c72e9c extends Twig_Template
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
        $__internal_9130eb90a41c9daded4cec08a28b517e9a43a49f907a02f5da3a3e763b800ab1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9130eb90a41c9daded4cec08a28b517e9a43a49f907a02f5da3a3e763b800ab1->enter($__internal_9130eb90a41c9daded4cec08a28b517e9a43a49f907a02f5da3a3e763b800ab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_785364da8d2b799a6827220a99768c1add6ba895c3bfad07f921024c30c3fe62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785364da8d2b799a6827220a99768c1add6ba895c3bfad07f921024c30c3fe62->enter($__internal_785364da8d2b799a6827220a99768c1add6ba895c3bfad07f921024c30c3fe62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9130eb90a41c9daded4cec08a28b517e9a43a49f907a02f5da3a3e763b800ab1->leave($__internal_9130eb90a41c9daded4cec08a28b517e9a43a49f907a02f5da3a3e763b800ab1_prof);

        
        $__internal_785364da8d2b799a6827220a99768c1add6ba895c3bfad07f921024c30c3fe62->leave($__internal_785364da8d2b799a6827220a99768c1add6ba895c3bfad07f921024c30c3fe62_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
