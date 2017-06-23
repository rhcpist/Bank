<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_149795d19e330fcabb47db6a5411a8a0f8f81ba8ac8682b3a035537bf371c311 extends Twig_Template
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
        $__internal_dd1f3bbda2c788ff664cf54d533c7c32ee6889bed4f16749e0e8189c72276571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1f3bbda2c788ff664cf54d533c7c32ee6889bed4f16749e0e8189c72276571->enter($__internal_dd1f3bbda2c788ff664cf54d533c7c32ee6889bed4f16749e0e8189c72276571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_d5f66c2323f6cd553a8054ef0299c01d7a84c4569e864053cd1c9b5d6bb204f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f66c2323f6cd553a8054ef0299c01d7a84c4569e864053cd1c9b5d6bb204f8->enter($__internal_d5f66c2323f6cd553a8054ef0299c01d7a84c4569e864053cd1c9b5d6bb204f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_dd1f3bbda2c788ff664cf54d533c7c32ee6889bed4f16749e0e8189c72276571->leave($__internal_dd1f3bbda2c788ff664cf54d533c7c32ee6889bed4f16749e0e8189c72276571_prof);

        
        $__internal_d5f66c2323f6cd553a8054ef0299c01d7a84c4569e864053cd1c9b5d6bb204f8->leave($__internal_d5f66c2323f6cd553a8054ef0299c01d7a84c4569e864053cd1c9b5d6bb204f8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
