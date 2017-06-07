<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9244c62dd95d5fe651049539f7b68ae9b7567277e59a7e07e84e952bc04f8026 extends Twig_Template
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
        $__internal_3f471f5594cb24c98add22ea6234fea7941770302e8bacae274cf9360717a1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f471f5594cb24c98add22ea6234fea7941770302e8bacae274cf9360717a1b5->enter($__internal_3f471f5594cb24c98add22ea6234fea7941770302e8bacae274cf9360717a1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_6e4706453d4427da68b5d4d60d5e9707a2929059748f45d1fbf76924e2f309d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4706453d4427da68b5d4d60d5e9707a2929059748f45d1fbf76924e2f309d2->enter($__internal_6e4706453d4427da68b5d4d60d5e9707a2929059748f45d1fbf76924e2f309d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_3f471f5594cb24c98add22ea6234fea7941770302e8bacae274cf9360717a1b5->leave($__internal_3f471f5594cb24c98add22ea6234fea7941770302e8bacae274cf9360717a1b5_prof);

        
        $__internal_6e4706453d4427da68b5d4d60d5e9707a2929059748f45d1fbf76924e2f309d2->leave($__internal_6e4706453d4427da68b5d4d60d5e9707a2929059748f45d1fbf76924e2f309d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
