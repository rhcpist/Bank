<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_dcbc2d197252c053a36b9e401d2c7e3ba1c37dfd6c5c37db2bd7eb5cfa8d8b53 extends Twig_Template
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
        $__internal_68a370b45b4470e2c28d8f48694f20c579704683375fb71d686de84008afb97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68a370b45b4470e2c28d8f48694f20c579704683375fb71d686de84008afb97c->enter($__internal_68a370b45b4470e2c28d8f48694f20c579704683375fb71d686de84008afb97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_729cfb974306dd57ef247767eed86c8ab9383d8ac057a6edd7414494540024ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729cfb974306dd57ef247767eed86c8ab9383d8ac057a6edd7414494540024ab->enter($__internal_729cfb974306dd57ef247767eed86c8ab9383d8ac057a6edd7414494540024ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_68a370b45b4470e2c28d8f48694f20c579704683375fb71d686de84008afb97c->leave($__internal_68a370b45b4470e2c28d8f48694f20c579704683375fb71d686de84008afb97c_prof);

        
        $__internal_729cfb974306dd57ef247767eed86c8ab9383d8ac057a6edd7414494540024ab->leave($__internal_729cfb974306dd57ef247767eed86c8ab9383d8ac057a6edd7414494540024ab_prof);

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
