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
        $__internal_a7fca5c61e96625f79b93a6b5bab42e9d97bd3cb793a624a2ef21eed378df591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7fca5c61e96625f79b93a6b5bab42e9d97bd3cb793a624a2ef21eed378df591->enter($__internal_a7fca5c61e96625f79b93a6b5bab42e9d97bd3cb793a624a2ef21eed378df591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_f17981c5564da43cac1bd044c63906facf0f2b32526c8b0998a854f8c642c50f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f17981c5564da43cac1bd044c63906facf0f2b32526c8b0998a854f8c642c50f->enter($__internal_f17981c5564da43cac1bd044c63906facf0f2b32526c8b0998a854f8c642c50f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a7fca5c61e96625f79b93a6b5bab42e9d97bd3cb793a624a2ef21eed378df591->leave($__internal_a7fca5c61e96625f79b93a6b5bab42e9d97bd3cb793a624a2ef21eed378df591_prof);

        
        $__internal_f17981c5564da43cac1bd044c63906facf0f2b32526c8b0998a854f8c642c50f->leave($__internal_f17981c5564da43cac1bd044c63906facf0f2b32526c8b0998a854f8c642c50f_prof);

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
