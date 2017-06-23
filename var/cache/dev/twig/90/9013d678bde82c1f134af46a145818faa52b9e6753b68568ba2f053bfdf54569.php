<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c132ea54f17d2bf879c3c890c3fb911b41a54d17b6387d5be74c790315186c6a extends Twig_Template
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
        $__internal_0462f8cd3d142f652ec756d68473e12edcc016247c02e27fe585a2786aa47824 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0462f8cd3d142f652ec756d68473e12edcc016247c02e27fe585a2786aa47824->enter($__internal_0462f8cd3d142f652ec756d68473e12edcc016247c02e27fe585a2786aa47824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ab426aa00682b34e49cf89e7a8fe4b635c5970455856f2afb90b0e4e8ece628a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab426aa00682b34e49cf89e7a8fe4b635c5970455856f2afb90b0e4e8ece628a->enter($__internal_ab426aa00682b34e49cf89e7a8fe4b635c5970455856f2afb90b0e4e8ece628a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_0462f8cd3d142f652ec756d68473e12edcc016247c02e27fe585a2786aa47824->leave($__internal_0462f8cd3d142f652ec756d68473e12edcc016247c02e27fe585a2786aa47824_prof);

        
        $__internal_ab426aa00682b34e49cf89e7a8fe4b635c5970455856f2afb90b0e4e8ece628a->leave($__internal_ab426aa00682b34e49cf89e7a8fe4b635c5970455856f2afb90b0e4e8ece628a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
