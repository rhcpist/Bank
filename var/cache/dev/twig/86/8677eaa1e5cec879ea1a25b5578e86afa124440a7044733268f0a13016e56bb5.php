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
        $__internal_93f4da712613700363b61dcf383b853327f941af2d4aba033414da4e95a0e42a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93f4da712613700363b61dcf383b853327f941af2d4aba033414da4e95a0e42a->enter($__internal_93f4da712613700363b61dcf383b853327f941af2d4aba033414da4e95a0e42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_efa27ddf150445b69035b4fbfba8cc5cbef7d6ebc78941d9edda48d3ae6ca8c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efa27ddf150445b69035b4fbfba8cc5cbef7d6ebc78941d9edda48d3ae6ca8c0->enter($__internal_efa27ddf150445b69035b4fbfba8cc5cbef7d6ebc78941d9edda48d3ae6ca8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_93f4da712613700363b61dcf383b853327f941af2d4aba033414da4e95a0e42a->leave($__internal_93f4da712613700363b61dcf383b853327f941af2d4aba033414da4e95a0e42a_prof);

        
        $__internal_efa27ddf150445b69035b4fbfba8cc5cbef7d6ebc78941d9edda48d3ae6ca8c0->leave($__internal_efa27ddf150445b69035b4fbfba8cc5cbef7d6ebc78941d9edda48d3ae6ca8c0_prof);

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
