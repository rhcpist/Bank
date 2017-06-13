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
        $__internal_8b4e17c8f56c3525c444383e91c8a0faf098255c57b81f666569ac63a72ef977 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b4e17c8f56c3525c444383e91c8a0faf098255c57b81f666569ac63a72ef977->enter($__internal_8b4e17c8f56c3525c444383e91c8a0faf098255c57b81f666569ac63a72ef977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_e2288e16f647880bbed087abffc08cf83a56bd0eebfd0d3ade8cec843448015b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2288e16f647880bbed087abffc08cf83a56bd0eebfd0d3ade8cec843448015b->enter($__internal_e2288e16f647880bbed087abffc08cf83a56bd0eebfd0d3ade8cec843448015b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_8b4e17c8f56c3525c444383e91c8a0faf098255c57b81f666569ac63a72ef977->leave($__internal_8b4e17c8f56c3525c444383e91c8a0faf098255c57b81f666569ac63a72ef977_prof);

        
        $__internal_e2288e16f647880bbed087abffc08cf83a56bd0eebfd0d3ade8cec843448015b->leave($__internal_e2288e16f647880bbed087abffc08cf83a56bd0eebfd0d3ade8cec843448015b_prof);

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
