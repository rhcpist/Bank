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
        $__internal_94e732bd2623ec5d34b7c19df4c0dbecd1780db1898fe64c784f6ea81d422ce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94e732bd2623ec5d34b7c19df4c0dbecd1780db1898fe64c784f6ea81d422ce7->enter($__internal_94e732bd2623ec5d34b7c19df4c0dbecd1780db1898fe64c784f6ea81d422ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_50f0391d2625b7fb437c57de2795ddf45821422ca9632d533014ca4f3f83ffcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f0391d2625b7fb437c57de2795ddf45821422ca9632d533014ca4f3f83ffcb->enter($__internal_50f0391d2625b7fb437c57de2795ddf45821422ca9632d533014ca4f3f83ffcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_94e732bd2623ec5d34b7c19df4c0dbecd1780db1898fe64c784f6ea81d422ce7->leave($__internal_94e732bd2623ec5d34b7c19df4c0dbecd1780db1898fe64c784f6ea81d422ce7_prof);

        
        $__internal_50f0391d2625b7fb437c57de2795ddf45821422ca9632d533014ca4f3f83ffcb->leave($__internal_50f0391d2625b7fb437c57de2795ddf45821422ca9632d533014ca4f3f83ffcb_prof);

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
