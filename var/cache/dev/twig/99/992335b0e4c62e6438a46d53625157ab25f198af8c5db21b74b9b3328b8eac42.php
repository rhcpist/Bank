<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4c571d9b591916a9b958416d79427e2e049dcbcb0860e5f2de65c0b8ef7e9d35 extends Twig_Template
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
        $__internal_80590b7b0f65c9170e45bff70ed7c958176f3728a6986165a1c1eef026b5dfed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80590b7b0f65c9170e45bff70ed7c958176f3728a6986165a1c1eef026b5dfed->enter($__internal_80590b7b0f65c9170e45bff70ed7c958176f3728a6986165a1c1eef026b5dfed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_9a71508e13a4798bb4047ac29573c9b21974f769c2f6fb12b6156ff116e38688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a71508e13a4798bb4047ac29573c9b21974f769c2f6fb12b6156ff116e38688->enter($__internal_9a71508e13a4798bb4047ac29573c9b21974f769c2f6fb12b6156ff116e38688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_80590b7b0f65c9170e45bff70ed7c958176f3728a6986165a1c1eef026b5dfed->leave($__internal_80590b7b0f65c9170e45bff70ed7c958176f3728a6986165a1c1eef026b5dfed_prof);

        
        $__internal_9a71508e13a4798bb4047ac29573c9b21974f769c2f6fb12b6156ff116e38688->leave($__internal_9a71508e13a4798bb4047ac29573c9b21974f769c2f6fb12b6156ff116e38688_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
