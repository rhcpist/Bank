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
        $__internal_edccc0010c2cf8c5d5cd86590f43aa0d9e7ac691472ad6cb1c8aedd31025e252 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edccc0010c2cf8c5d5cd86590f43aa0d9e7ac691472ad6cb1c8aedd31025e252->enter($__internal_edccc0010c2cf8c5d5cd86590f43aa0d9e7ac691472ad6cb1c8aedd31025e252_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_ec348a70e95dd15b606dce56f211bb27d56851981bab30817af87dac77b06c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec348a70e95dd15b606dce56f211bb27d56851981bab30817af87dac77b06c4f->enter($__internal_ec348a70e95dd15b606dce56f211bb27d56851981bab30817af87dac77b06c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_edccc0010c2cf8c5d5cd86590f43aa0d9e7ac691472ad6cb1c8aedd31025e252->leave($__internal_edccc0010c2cf8c5d5cd86590f43aa0d9e7ac691472ad6cb1c8aedd31025e252_prof);

        
        $__internal_ec348a70e95dd15b606dce56f211bb27d56851981bab30817af87dac77b06c4f->leave($__internal_ec348a70e95dd15b606dce56f211bb27d56851981bab30817af87dac77b06c4f_prof);

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
