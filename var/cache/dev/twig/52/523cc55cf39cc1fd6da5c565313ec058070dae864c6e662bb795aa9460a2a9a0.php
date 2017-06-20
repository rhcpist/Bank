<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2f855983947ccb822a3f333bb4742a654c143f40ebc6a80deac257df1ca8c134 extends Twig_Template
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
        $__internal_5899ace14331203e346b20ac706f0d739f8c52f04dc7176d169de10df07d5ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5899ace14331203e346b20ac706f0d739f8c52f04dc7176d169de10df07d5ddf->enter($__internal_5899ace14331203e346b20ac706f0d739f8c52f04dc7176d169de10df07d5ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_a4008e1e0a8670af486fe43710fc8d31effc85e80ea088524dd2094dbd664487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4008e1e0a8670af486fe43710fc8d31effc85e80ea088524dd2094dbd664487->enter($__internal_a4008e1e0a8670af486fe43710fc8d31effc85e80ea088524dd2094dbd664487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5899ace14331203e346b20ac706f0d739f8c52f04dc7176d169de10df07d5ddf->leave($__internal_5899ace14331203e346b20ac706f0d739f8c52f04dc7176d169de10df07d5ddf_prof);

        
        $__internal_a4008e1e0a8670af486fe43710fc8d31effc85e80ea088524dd2094dbd664487->leave($__internal_a4008e1e0a8670af486fe43710fc8d31effc85e80ea088524dd2094dbd664487_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
