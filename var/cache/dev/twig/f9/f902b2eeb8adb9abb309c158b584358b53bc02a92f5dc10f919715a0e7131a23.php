<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_25041fdfb88ae87d47823f15f49dd96ec62a3d8e18ca5736e209f63c244ec4ad extends Twig_Template
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
        $__internal_7972a3773f0cf9e2a19469a8b46508e15885dd1c24a677b9aa595eca9c26c9e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7972a3773f0cf9e2a19469a8b46508e15885dd1c24a677b9aa595eca9c26c9e8->enter($__internal_7972a3773f0cf9e2a19469a8b46508e15885dd1c24a677b9aa595eca9c26c9e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_ce1885485ee1c30863c51b2d5cc00ba0b80929f493eed316d4ed2e776d20bd79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1885485ee1c30863c51b2d5cc00ba0b80929f493eed316d4ed2e776d20bd79->enter($__internal_ce1885485ee1c30863c51b2d5cc00ba0b80929f493eed316d4ed2e776d20bd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_7972a3773f0cf9e2a19469a8b46508e15885dd1c24a677b9aa595eca9c26c9e8->leave($__internal_7972a3773f0cf9e2a19469a8b46508e15885dd1c24a677b9aa595eca9c26c9e8_prof);

        
        $__internal_ce1885485ee1c30863c51b2d5cc00ba0b80929f493eed316d4ed2e776d20bd79->leave($__internal_ce1885485ee1c30863c51b2d5cc00ba0b80929f493eed316d4ed2e776d20bd79_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
