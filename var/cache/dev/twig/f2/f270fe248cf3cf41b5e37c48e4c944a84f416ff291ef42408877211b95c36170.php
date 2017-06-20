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
        $__internal_48ee1c59ff0991ad3f9fae3ca1aaf8f57ef7108e526f4d756014ce6d5d234578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48ee1c59ff0991ad3f9fae3ca1aaf8f57ef7108e526f4d756014ce6d5d234578->enter($__internal_48ee1c59ff0991ad3f9fae3ca1aaf8f57ef7108e526f4d756014ce6d5d234578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_e20620d3435159cd94ebccaa86cbd7facd3373b6d32b27999b5ed2e26214301a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e20620d3435159cd94ebccaa86cbd7facd3373b6d32b27999b5ed2e26214301a->enter($__internal_e20620d3435159cd94ebccaa86cbd7facd3373b6d32b27999b5ed2e26214301a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_48ee1c59ff0991ad3f9fae3ca1aaf8f57ef7108e526f4d756014ce6d5d234578->leave($__internal_48ee1c59ff0991ad3f9fae3ca1aaf8f57ef7108e526f4d756014ce6d5d234578_prof);

        
        $__internal_e20620d3435159cd94ebccaa86cbd7facd3373b6d32b27999b5ed2e26214301a->leave($__internal_e20620d3435159cd94ebccaa86cbd7facd3373b6d32b27999b5ed2e26214301a_prof);

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
