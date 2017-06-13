<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_394bc6669649c668d9d9cb2165d9a5968dffc7cb05116ed68fe42c9437b2a39b extends Twig_Template
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
        $__internal_b4cae643ddb63249b8ca6d06d264d21d0570fd7b7ca4929012f6bed535bbec2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4cae643ddb63249b8ca6d06d264d21d0570fd7b7ca4929012f6bed535bbec2e->enter($__internal_b4cae643ddb63249b8ca6d06d264d21d0570fd7b7ca4929012f6bed535bbec2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_bce8c93d0b2fb864f4f0ef132def97165dc52e288cbce358280754151cf22e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce8c93d0b2fb864f4f0ef132def97165dc52e288cbce358280754151cf22e9f->enter($__internal_bce8c93d0b2fb864f4f0ef132def97165dc52e288cbce358280754151cf22e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_b4cae643ddb63249b8ca6d06d264d21d0570fd7b7ca4929012f6bed535bbec2e->leave($__internal_b4cae643ddb63249b8ca6d06d264d21d0570fd7b7ca4929012f6bed535bbec2e_prof);

        
        $__internal_bce8c93d0b2fb864f4f0ef132def97165dc52e288cbce358280754151cf22e9f->leave($__internal_bce8c93d0b2fb864f4f0ef132def97165dc52e288cbce358280754151cf22e9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
