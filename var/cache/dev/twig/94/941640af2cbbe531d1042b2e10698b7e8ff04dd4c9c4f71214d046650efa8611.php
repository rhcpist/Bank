<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_625d3bdd8897e5cf9bfa792514256f71d21a1f91b52510046dc5a1a2143fb8a0 extends Twig_Template
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
        $__internal_90acc00de7138d7efd07e01d1cff9e7d4520af59b1022af035ea25b4951e294f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90acc00de7138d7efd07e01d1cff9e7d4520af59b1022af035ea25b4951e294f->enter($__internal_90acc00de7138d7efd07e01d1cff9e7d4520af59b1022af035ea25b4951e294f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1bbe247868b351e657bbbd0a976968760c4c9dc004f51287da4791fc5989eda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbe247868b351e657bbbd0a976968760c4c9dc004f51287da4791fc5989eda0->enter($__internal_1bbe247868b351e657bbbd0a976968760c4c9dc004f51287da4791fc5989eda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_90acc00de7138d7efd07e01d1cff9e7d4520af59b1022af035ea25b4951e294f->leave($__internal_90acc00de7138d7efd07e01d1cff9e7d4520af59b1022af035ea25b4951e294f_prof);

        
        $__internal_1bbe247868b351e657bbbd0a976968760c4c9dc004f51287da4791fc5989eda0->leave($__internal_1bbe247868b351e657bbbd0a976968760c4c9dc004f51287da4791fc5989eda0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
