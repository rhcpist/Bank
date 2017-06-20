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
        $__internal_60e75e4f3c3bceeb809838e832c8b2dcfb9d79f17150c09b6796263fb38b8856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e75e4f3c3bceeb809838e832c8b2dcfb9d79f17150c09b6796263fb38b8856->enter($__internal_60e75e4f3c3bceeb809838e832c8b2dcfb9d79f17150c09b6796263fb38b8856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_1ef878bd3e6594a7a400d9f7549a5ab4e93005e0bf6d724a0c8de71a0d3d8e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef878bd3e6594a7a400d9f7549a5ab4e93005e0bf6d724a0c8de71a0d3d8e1d->enter($__internal_1ef878bd3e6594a7a400d9f7549a5ab4e93005e0bf6d724a0c8de71a0d3d8e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_60e75e4f3c3bceeb809838e832c8b2dcfb9d79f17150c09b6796263fb38b8856->leave($__internal_60e75e4f3c3bceeb809838e832c8b2dcfb9d79f17150c09b6796263fb38b8856_prof);

        
        $__internal_1ef878bd3e6594a7a400d9f7549a5ab4e93005e0bf6d724a0c8de71a0d3d8e1d->leave($__internal_1ef878bd3e6594a7a400d9f7549a5ab4e93005e0bf6d724a0c8de71a0d3d8e1d_prof);

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
