<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7a40c4d176e85ef0512a9755b5b57ff19dee90f470901ad21f1d1a7aae431709 extends Twig_Template
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
        $__internal_43452336b5136451691afd6d1b232217cac5cded948431dda7a52c6c219db042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43452336b5136451691afd6d1b232217cac5cded948431dda7a52c6c219db042->enter($__internal_43452336b5136451691afd6d1b232217cac5cded948431dda7a52c6c219db042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_74403f8872b06d029a5101b04d9a7d0783ad56a3604d952b397568701c6fbce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74403f8872b06d029a5101b04d9a7d0783ad56a3604d952b397568701c6fbce8->enter($__internal_74403f8872b06d029a5101b04d9a7d0783ad56a3604d952b397568701c6fbce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_43452336b5136451691afd6d1b232217cac5cded948431dda7a52c6c219db042->leave($__internal_43452336b5136451691afd6d1b232217cac5cded948431dda7a52c6c219db042_prof);

        
        $__internal_74403f8872b06d029a5101b04d9a7d0783ad56a3604d952b397568701c6fbce8->leave($__internal_74403f8872b06d029a5101b04d9a7d0783ad56a3604d952b397568701c6fbce8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
