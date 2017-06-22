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
        $__internal_041c8f0fa4e2c9d9ecde77af0cc9d555cad8ed080cd7842a41af1d0de4061ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041c8f0fa4e2c9d9ecde77af0cc9d555cad8ed080cd7842a41af1d0de4061ae5->enter($__internal_041c8f0fa4e2c9d9ecde77af0cc9d555cad8ed080cd7842a41af1d0de4061ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5872bb04b01ef334d13f6bfb480384c5edad8158d326c23108408f612c6784ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5872bb04b01ef334d13f6bfb480384c5edad8158d326c23108408f612c6784ea->enter($__internal_5872bb04b01ef334d13f6bfb480384c5edad8158d326c23108408f612c6784ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_041c8f0fa4e2c9d9ecde77af0cc9d555cad8ed080cd7842a41af1d0de4061ae5->leave($__internal_041c8f0fa4e2c9d9ecde77af0cc9d555cad8ed080cd7842a41af1d0de4061ae5_prof);

        
        $__internal_5872bb04b01ef334d13f6bfb480384c5edad8158d326c23108408f612c6784ea->leave($__internal_5872bb04b01ef334d13f6bfb480384c5edad8158d326c23108408f612c6784ea_prof);

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
