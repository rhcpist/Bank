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
        $__internal_272da467ce871f211fa5e3d192fe01a2d625577b839eac88eca0ab331212e04e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_272da467ce871f211fa5e3d192fe01a2d625577b839eac88eca0ab331212e04e->enter($__internal_272da467ce871f211fa5e3d192fe01a2d625577b839eac88eca0ab331212e04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b13ce5403bc94e10f42e103537232c421e83ed4c3bda9ee27a0f5959d146ccee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13ce5403bc94e10f42e103537232c421e83ed4c3bda9ee27a0f5959d146ccee->enter($__internal_b13ce5403bc94e10f42e103537232c421e83ed4c3bda9ee27a0f5959d146ccee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_272da467ce871f211fa5e3d192fe01a2d625577b839eac88eca0ab331212e04e->leave($__internal_272da467ce871f211fa5e3d192fe01a2d625577b839eac88eca0ab331212e04e_prof);

        
        $__internal_b13ce5403bc94e10f42e103537232c421e83ed4c3bda9ee27a0f5959d146ccee->leave($__internal_b13ce5403bc94e10f42e103537232c421e83ed4c3bda9ee27a0f5959d146ccee_prof);

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
