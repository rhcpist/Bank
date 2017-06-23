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
        $__internal_21a178d0f89e381b8abbf3bc831f9bd88708731e03251b504b8ed7595a47c639 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21a178d0f89e381b8abbf3bc831f9bd88708731e03251b504b8ed7595a47c639->enter($__internal_21a178d0f89e381b8abbf3bc831f9bd88708731e03251b504b8ed7595a47c639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_96db02be9edb1d148f8df0a7cb80f212a5e9585d8be29a285d94be86da558dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96db02be9edb1d148f8df0a7cb80f212a5e9585d8be29a285d94be86da558dd1->enter($__internal_96db02be9edb1d148f8df0a7cb80f212a5e9585d8be29a285d94be86da558dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_21a178d0f89e381b8abbf3bc831f9bd88708731e03251b504b8ed7595a47c639->leave($__internal_21a178d0f89e381b8abbf3bc831f9bd88708731e03251b504b8ed7595a47c639_prof);

        
        $__internal_96db02be9edb1d148f8df0a7cb80f212a5e9585d8be29a285d94be86da558dd1->leave($__internal_96db02be9edb1d148f8df0a7cb80f212a5e9585d8be29a285d94be86da558dd1_prof);

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
