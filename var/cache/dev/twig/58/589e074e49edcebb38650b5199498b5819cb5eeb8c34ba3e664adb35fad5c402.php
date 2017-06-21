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
        $__internal_3e8017143a8533b4ac3d26a31257c64e35341e3d17cda747bec1f612a1dfa34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e8017143a8533b4ac3d26a31257c64e35341e3d17cda747bec1f612a1dfa34b->enter($__internal_3e8017143a8533b4ac3d26a31257c64e35341e3d17cda747bec1f612a1dfa34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e6b210c69d09b846e8cd8712b689aeee04f246b8f00c4eea3b7cd3417f640530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b210c69d09b846e8cd8712b689aeee04f246b8f00c4eea3b7cd3417f640530->enter($__internal_e6b210c69d09b846e8cd8712b689aeee04f246b8f00c4eea3b7cd3417f640530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_3e8017143a8533b4ac3d26a31257c64e35341e3d17cda747bec1f612a1dfa34b->leave($__internal_3e8017143a8533b4ac3d26a31257c64e35341e3d17cda747bec1f612a1dfa34b_prof);

        
        $__internal_e6b210c69d09b846e8cd8712b689aeee04f246b8f00c4eea3b7cd3417f640530->leave($__internal_e6b210c69d09b846e8cd8712b689aeee04f246b8f00c4eea3b7cd3417f640530_prof);

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
