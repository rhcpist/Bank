<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c11d49803ab542dd1dd269eeb233880a5418b985434d195136e7e320b30faf3f extends Twig_Template
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
        $__internal_4f58dda1346d36ddcdf670e40b6eb46fde0be9b82030ff390e81d306afceb6b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f58dda1346d36ddcdf670e40b6eb46fde0be9b82030ff390e81d306afceb6b1->enter($__internal_4f58dda1346d36ddcdf670e40b6eb46fde0be9b82030ff390e81d306afceb6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_3a15e98afe11df6e4cbe94f3c7b3d00e31d944ce52393afed33071a17b24281c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a15e98afe11df6e4cbe94f3c7b3d00e31d944ce52393afed33071a17b24281c->enter($__internal_3a15e98afe11df6e4cbe94f3c7b3d00e31d944ce52393afed33071a17b24281c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_4f58dda1346d36ddcdf670e40b6eb46fde0be9b82030ff390e81d306afceb6b1->leave($__internal_4f58dda1346d36ddcdf670e40b6eb46fde0be9b82030ff390e81d306afceb6b1_prof);

        
        $__internal_3a15e98afe11df6e4cbe94f3c7b3d00e31d944ce52393afed33071a17b24281c->leave($__internal_3a15e98afe11df6e4cbe94f3c7b3d00e31d944ce52393afed33071a17b24281c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
