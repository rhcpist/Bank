<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d93d8fd393a4f0c2bc03935b6ce68e4ccab0ceed64b4f40658e6cf9343c9523d extends Twig_Template
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
        $__internal_e7eee8398cf66685fa98484acd3626dd30371638fdf5ab98f50d84e144352018 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7eee8398cf66685fa98484acd3626dd30371638fdf5ab98f50d84e144352018->enter($__internal_e7eee8398cf66685fa98484acd3626dd30371638fdf5ab98f50d84e144352018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_d005181267688697e1edc6eb6f8e3e66529ef18a3ef9bc79fa373cf4e100cc45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d005181267688697e1edc6eb6f8e3e66529ef18a3ef9bc79fa373cf4e100cc45->enter($__internal_d005181267688697e1edc6eb6f8e3e66529ef18a3ef9bc79fa373cf4e100cc45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e7eee8398cf66685fa98484acd3626dd30371638fdf5ab98f50d84e144352018->leave($__internal_e7eee8398cf66685fa98484acd3626dd30371638fdf5ab98f50d84e144352018_prof);

        
        $__internal_d005181267688697e1edc6eb6f8e3e66529ef18a3ef9bc79fa373cf4e100cc45->leave($__internal_d005181267688697e1edc6eb6f8e3e66529ef18a3ef9bc79fa373cf4e100cc45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
