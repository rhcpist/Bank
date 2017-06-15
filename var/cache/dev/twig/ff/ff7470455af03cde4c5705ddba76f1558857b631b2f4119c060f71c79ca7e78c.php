<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c21263e74344919c60ce7ccc3202f2423e214b3140c4370c129177288e263f2f extends Twig_Template
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
        $__internal_882302e426e8ca3b29fb43bee30a3c539424d465a757394a38fc4d33adeb00b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_882302e426e8ca3b29fb43bee30a3c539424d465a757394a38fc4d33adeb00b8->enter($__internal_882302e426e8ca3b29fb43bee30a3c539424d465a757394a38fc4d33adeb00b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_246f28e6e9a29ab4929232b3ebb6fbe181962147f114a818f57224d09e8655a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246f28e6e9a29ab4929232b3ebb6fbe181962147f114a818f57224d09e8655a7->enter($__internal_246f28e6e9a29ab4929232b3ebb6fbe181962147f114a818f57224d09e8655a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_882302e426e8ca3b29fb43bee30a3c539424d465a757394a38fc4d33adeb00b8->leave($__internal_882302e426e8ca3b29fb43bee30a3c539424d465a757394a38fc4d33adeb00b8_prof);

        
        $__internal_246f28e6e9a29ab4929232b3ebb6fbe181962147f114a818f57224d09e8655a7->leave($__internal_246f28e6e9a29ab4929232b3ebb6fbe181962147f114a818f57224d09e8655a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
