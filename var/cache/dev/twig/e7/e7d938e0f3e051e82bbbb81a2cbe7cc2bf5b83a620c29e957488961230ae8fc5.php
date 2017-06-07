<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e177d44cf6c3213e424beb67cf74bb1904c3e7e36a229dc12df883a74aaf8f5f extends Twig_Template
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
        $__internal_35843d3de5b82efb1b866df26ad0079f9020151efda29885d7d3d94954aab4e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35843d3de5b82efb1b866df26ad0079f9020151efda29885d7d3d94954aab4e3->enter($__internal_35843d3de5b82efb1b866df26ad0079f9020151efda29885d7d3d94954aab4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_68342b3658723b09a7b33da58f9be5b2dc93b96f9be20b844c6d750615656551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68342b3658723b09a7b33da58f9be5b2dc93b96f9be20b844c6d750615656551->enter($__internal_68342b3658723b09a7b33da58f9be5b2dc93b96f9be20b844c6d750615656551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_35843d3de5b82efb1b866df26ad0079f9020151efda29885d7d3d94954aab4e3->leave($__internal_35843d3de5b82efb1b866df26ad0079f9020151efda29885d7d3d94954aab4e3_prof);

        
        $__internal_68342b3658723b09a7b33da58f9be5b2dc93b96f9be20b844c6d750615656551->leave($__internal_68342b3658723b09a7b33da58f9be5b2dc93b96f9be20b844c6d750615656551_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
