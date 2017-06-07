<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_888e25cb49b1857006539e555de99753a5e8a69df331b0f67430970e98f7858d extends Twig_Template
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
        $__internal_8742aeea5dbcead9746cb0bbdf90d377205651c3b087d92b6f3f2d6a2eba25a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8742aeea5dbcead9746cb0bbdf90d377205651c3b087d92b6f3f2d6a2eba25a0->enter($__internal_8742aeea5dbcead9746cb0bbdf90d377205651c3b087d92b6f3f2d6a2eba25a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_d5e1a92f81d6d2c2a9cac7c787a6eb9fc367a263b99413381a2a0785fa19b3d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e1a92f81d6d2c2a9cac7c787a6eb9fc367a263b99413381a2a0785fa19b3d3->enter($__internal_d5e1a92f81d6d2c2a9cac7c787a6eb9fc367a263b99413381a2a0785fa19b3d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_8742aeea5dbcead9746cb0bbdf90d377205651c3b087d92b6f3f2d6a2eba25a0->leave($__internal_8742aeea5dbcead9746cb0bbdf90d377205651c3b087d92b6f3f2d6a2eba25a0_prof);

        
        $__internal_d5e1a92f81d6d2c2a9cac7c787a6eb9fc367a263b99413381a2a0785fa19b3d3->leave($__internal_d5e1a92f81d6d2c2a9cac7c787a6eb9fc367a263b99413381a2a0785fa19b3d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
