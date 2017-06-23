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
        $__internal_d64f5691f9f240f04f4b7e6e56fcb024c8716d6c957f11943a8a306d8aad3226 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d64f5691f9f240f04f4b7e6e56fcb024c8716d6c957f11943a8a306d8aad3226->enter($__internal_d64f5691f9f240f04f4b7e6e56fcb024c8716d6c957f11943a8a306d8aad3226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_8867b3b8bdb128c8d756cdf40a0fe6615b78535d7534c96c231398cef28ee6e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8867b3b8bdb128c8d756cdf40a0fe6615b78535d7534c96c231398cef28ee6e1->enter($__internal_8867b3b8bdb128c8d756cdf40a0fe6615b78535d7534c96c231398cef28ee6e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_d64f5691f9f240f04f4b7e6e56fcb024c8716d6c957f11943a8a306d8aad3226->leave($__internal_d64f5691f9f240f04f4b7e6e56fcb024c8716d6c957f11943a8a306d8aad3226_prof);

        
        $__internal_8867b3b8bdb128c8d756cdf40a0fe6615b78535d7534c96c231398cef28ee6e1->leave($__internal_8867b3b8bdb128c8d756cdf40a0fe6615b78535d7534c96c231398cef28ee6e1_prof);

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
