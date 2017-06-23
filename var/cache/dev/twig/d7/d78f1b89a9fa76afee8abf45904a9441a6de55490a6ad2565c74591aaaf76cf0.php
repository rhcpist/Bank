<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_c1c41f5729bf1bbab0e561e4d4d1733b3bd4ff4e260e20ecb6da9cfde79c0b66 extends Twig_Template
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
        $__internal_05dd27c2a559cf785a876902fc0d5f91719f2678886ffce3a0b717a229a79065 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05dd27c2a559cf785a876902fc0d5f91719f2678886ffce3a0b717a229a79065->enter($__internal_05dd27c2a559cf785a876902fc0d5f91719f2678886ffce3a0b717a229a79065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_b2a60f37a2117b880cf81928f68a7873d917da8a8cbfb55dfe86394c3b2b31a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2a60f37a2117b880cf81928f68a7873d917da8a8cbfb55dfe86394c3b2b31a2->enter($__internal_b2a60f37a2117b880cf81928f68a7873d917da8a8cbfb55dfe86394c3b2b31a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_05dd27c2a559cf785a876902fc0d5f91719f2678886ffce3a0b717a229a79065->leave($__internal_05dd27c2a559cf785a876902fc0d5f91719f2678886ffce3a0b717a229a79065_prof);

        
        $__internal_b2a60f37a2117b880cf81928f68a7873d917da8a8cbfb55dfe86394c3b2b31a2->leave($__internal_b2a60f37a2117b880cf81928f68a7873d917da8a8cbfb55dfe86394c3b2b31a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
