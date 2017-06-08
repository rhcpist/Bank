<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_d13ca8cd92fb1c8a534367901c0d0fdce971968df25c926b3f986ef91a01d93e extends Twig_Template
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
        $__internal_10f6bee2c5716fda82d5069df2bdc5e31c77fe558984575af39fb42a7c7df9aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10f6bee2c5716fda82d5069df2bdc5e31c77fe558984575af39fb42a7c7df9aa->enter($__internal_10f6bee2c5716fda82d5069df2bdc5e31c77fe558984575af39fb42a7c7df9aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_c42eb080d21cb78694493cb80288d9d4bd8fc541bbb64ac9435a3716703003be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c42eb080d21cb78694493cb80288d9d4bd8fc541bbb64ac9435a3716703003be->enter($__internal_c42eb080d21cb78694493cb80288d9d4bd8fc541bbb64ac9435a3716703003be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_10f6bee2c5716fda82d5069df2bdc5e31c77fe558984575af39fb42a7c7df9aa->leave($__internal_10f6bee2c5716fda82d5069df2bdc5e31c77fe558984575af39fb42a7c7df9aa_prof);

        
        $__internal_c42eb080d21cb78694493cb80288d9d4bd8fc541bbb64ac9435a3716703003be->leave($__internal_c42eb080d21cb78694493cb80288d9d4bd8fc541bbb64ac9435a3716703003be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
