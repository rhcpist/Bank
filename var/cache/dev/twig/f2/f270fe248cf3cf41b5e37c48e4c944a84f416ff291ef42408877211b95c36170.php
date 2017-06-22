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
        $__internal_46de7e40fa9484818f66744be0a4ac6fe95901894909a9734450ad0c985a58d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46de7e40fa9484818f66744be0a4ac6fe95901894909a9734450ad0c985a58d0->enter($__internal_46de7e40fa9484818f66744be0a4ac6fe95901894909a9734450ad0c985a58d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_f625e6f7f48eeddebaaa3ba67f32390e4675501bd32e1f428896cce85557d6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f625e6f7f48eeddebaaa3ba67f32390e4675501bd32e1f428896cce85557d6b2->enter($__internal_f625e6f7f48eeddebaaa3ba67f32390e4675501bd32e1f428896cce85557d6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_46de7e40fa9484818f66744be0a4ac6fe95901894909a9734450ad0c985a58d0->leave($__internal_46de7e40fa9484818f66744be0a4ac6fe95901894909a9734450ad0c985a58d0_prof);

        
        $__internal_f625e6f7f48eeddebaaa3ba67f32390e4675501bd32e1f428896cce85557d6b2->leave($__internal_f625e6f7f48eeddebaaa3ba67f32390e4675501bd32e1f428896cce85557d6b2_prof);

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
