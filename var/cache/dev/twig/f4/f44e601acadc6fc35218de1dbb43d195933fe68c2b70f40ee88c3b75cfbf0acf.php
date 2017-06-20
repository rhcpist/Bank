<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f3aa9f0c4ccab0bfdb315e9cf39001dbcf6845488f36a76d8b59060639ba0087 extends Twig_Template
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
        $__internal_806ea655c823908bf7009405c4f80f804e66f4381f35c082391971349c70f562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806ea655c823908bf7009405c4f80f804e66f4381f35c082391971349c70f562->enter($__internal_806ea655c823908bf7009405c4f80f804e66f4381f35c082391971349c70f562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_4a86aa90da7c1d39945ed07aaceefe9437eb7e67e12f030bb732e90087529799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a86aa90da7c1d39945ed07aaceefe9437eb7e67e12f030bb732e90087529799->enter($__internal_4a86aa90da7c1d39945ed07aaceefe9437eb7e67e12f030bb732e90087529799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_806ea655c823908bf7009405c4f80f804e66f4381f35c082391971349c70f562->leave($__internal_806ea655c823908bf7009405c4f80f804e66f4381f35c082391971349c70f562_prof);

        
        $__internal_4a86aa90da7c1d39945ed07aaceefe9437eb7e67e12f030bb732e90087529799->leave($__internal_4a86aa90da7c1d39945ed07aaceefe9437eb7e67e12f030bb732e90087529799_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
