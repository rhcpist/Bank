<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_32590586bb3021f3ddc723b7a5822a0098d87795d822f49b3872b0150b1ece6f extends Twig_Template
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
        $__internal_a422151c59b4f908ae64e2fc23d68cc96642aa3f957d1a322f4664479ac12ad8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a422151c59b4f908ae64e2fc23d68cc96642aa3f957d1a322f4664479ac12ad8->enter($__internal_a422151c59b4f908ae64e2fc23d68cc96642aa3f957d1a322f4664479ac12ad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c8cde864ab380176bb3a7fb6e518351317dd1e6f8a573d816565695a6d493ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8cde864ab380176bb3a7fb6e518351317dd1e6f8a573d816565695a6d493ae3->enter($__internal_c8cde864ab380176bb3a7fb6e518351317dd1e6f8a573d816565695a6d493ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a422151c59b4f908ae64e2fc23d68cc96642aa3f957d1a322f4664479ac12ad8->leave($__internal_a422151c59b4f908ae64e2fc23d68cc96642aa3f957d1a322f4664479ac12ad8_prof);

        
        $__internal_c8cde864ab380176bb3a7fb6e518351317dd1e6f8a573d816565695a6d493ae3->leave($__internal_c8cde864ab380176bb3a7fb6e518351317dd1e6f8a573d816565695a6d493ae3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
