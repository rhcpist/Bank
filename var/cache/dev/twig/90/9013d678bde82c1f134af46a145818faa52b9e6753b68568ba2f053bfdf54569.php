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
        $__internal_4faee5808c52e04eb9cc4ef9a1b620645a8a867e14180644c28d5778afee4abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4faee5808c52e04eb9cc4ef9a1b620645a8a867e14180644c28d5778afee4abe->enter($__internal_4faee5808c52e04eb9cc4ef9a1b620645a8a867e14180644c28d5778afee4abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_b591681227070069a4296f2b6a05a35ccb080e66eec7a8be59fa4d4097d58081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b591681227070069a4296f2b6a05a35ccb080e66eec7a8be59fa4d4097d58081->enter($__internal_b591681227070069a4296f2b6a05a35ccb080e66eec7a8be59fa4d4097d58081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_4faee5808c52e04eb9cc4ef9a1b620645a8a867e14180644c28d5778afee4abe->leave($__internal_4faee5808c52e04eb9cc4ef9a1b620645a8a867e14180644c28d5778afee4abe_prof);

        
        $__internal_b591681227070069a4296f2b6a05a35ccb080e66eec7a8be59fa4d4097d58081->leave($__internal_b591681227070069a4296f2b6a05a35ccb080e66eec7a8be59fa4d4097d58081_prof);

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
