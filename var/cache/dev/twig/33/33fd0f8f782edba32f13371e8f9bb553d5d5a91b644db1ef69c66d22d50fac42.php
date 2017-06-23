<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f6b7cfcc0ca6e7784f402d5351a8963a0457e5d7907df3854702098a4c617091 extends Twig_Template
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
        $__internal_0a5d58e6f92b2f8ca9fcfd8f99d05742a8984bc9b780c32d33cc5c5ae2a9c383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a5d58e6f92b2f8ca9fcfd8f99d05742a8984bc9b780c32d33cc5c5ae2a9c383->enter($__internal_0a5d58e6f92b2f8ca9fcfd8f99d05742a8984bc9b780c32d33cc5c5ae2a9c383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_52e74fecfe9a5d0bc0b1145aacb1105fb7862b3e8a94aa8547f68c7ba8af5cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e74fecfe9a5d0bc0b1145aacb1105fb7862b3e8a94aa8547f68c7ba8af5cfd->enter($__internal_52e74fecfe9a5d0bc0b1145aacb1105fb7862b3e8a94aa8547f68c7ba8af5cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_0a5d58e6f92b2f8ca9fcfd8f99d05742a8984bc9b780c32d33cc5c5ae2a9c383->leave($__internal_0a5d58e6f92b2f8ca9fcfd8f99d05742a8984bc9b780c32d33cc5c5ae2a9c383_prof);

        
        $__internal_52e74fecfe9a5d0bc0b1145aacb1105fb7862b3e8a94aa8547f68c7ba8af5cfd->leave($__internal_52e74fecfe9a5d0bc0b1145aacb1105fb7862b3e8a94aa8547f68c7ba8af5cfd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
