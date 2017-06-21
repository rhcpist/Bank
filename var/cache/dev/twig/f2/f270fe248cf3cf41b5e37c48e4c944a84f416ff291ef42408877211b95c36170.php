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
        $__internal_e6df6c104fe05db35b2c12bcc27f6622c721c039683c4b7cdd57b05d8f375667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6df6c104fe05db35b2c12bcc27f6622c721c039683c4b7cdd57b05d8f375667->enter($__internal_e6df6c104fe05db35b2c12bcc27f6622c721c039683c4b7cdd57b05d8f375667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c1d7e8413c8bf8f023ab1a8a189c33151407685581886f94f07111f7cc2572fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1d7e8413c8bf8f023ab1a8a189c33151407685581886f94f07111f7cc2572fc->enter($__internal_c1d7e8413c8bf8f023ab1a8a189c33151407685581886f94f07111f7cc2572fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e6df6c104fe05db35b2c12bcc27f6622c721c039683c4b7cdd57b05d8f375667->leave($__internal_e6df6c104fe05db35b2c12bcc27f6622c721c039683c4b7cdd57b05d8f375667_prof);

        
        $__internal_c1d7e8413c8bf8f023ab1a8a189c33151407685581886f94f07111f7cc2572fc->leave($__internal_c1d7e8413c8bf8f023ab1a8a189c33151407685581886f94f07111f7cc2572fc_prof);

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
