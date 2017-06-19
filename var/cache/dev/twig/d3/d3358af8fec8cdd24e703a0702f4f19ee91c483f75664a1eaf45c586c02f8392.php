<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_baf9636fa2070d1c1066968c7e7c42060988712dac978a86927756e110c3f700 extends Twig_Template
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
        $__internal_82f5d474cca0873dd684a00a98917018ee9d84ccef623aae492057cf513b013a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f5d474cca0873dd684a00a98917018ee9d84ccef623aae492057cf513b013a->enter($__internal_82f5d474cca0873dd684a00a98917018ee9d84ccef623aae492057cf513b013a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_fc4e70eb69b7093a3b92b419420fd9232690567972ebd1575f7ada1d84bf5d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4e70eb69b7093a3b92b419420fd9232690567972ebd1575f7ada1d84bf5d9f->enter($__internal_fc4e70eb69b7093a3b92b419420fd9232690567972ebd1575f7ada1d84bf5d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_82f5d474cca0873dd684a00a98917018ee9d84ccef623aae492057cf513b013a->leave($__internal_82f5d474cca0873dd684a00a98917018ee9d84ccef623aae492057cf513b013a_prof);

        
        $__internal_fc4e70eb69b7093a3b92b419420fd9232690567972ebd1575f7ada1d84bf5d9f->leave($__internal_fc4e70eb69b7093a3b92b419420fd9232690567972ebd1575f7ada1d84bf5d9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
