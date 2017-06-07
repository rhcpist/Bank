<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_0702143907578c46708ad04f98e6b8c323db6083af8bbc9797a6f262ee6180d2 extends Twig_Template
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
        $__internal_0789350926ba511d31fd202c469546f4e9085b7acd422818eec74f1aaba2d079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0789350926ba511d31fd202c469546f4e9085b7acd422818eec74f1aaba2d079->enter($__internal_0789350926ba511d31fd202c469546f4e9085b7acd422818eec74f1aaba2d079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_77348d68daf99cf01c1db0579428427c49abe381f97ad3d756e0be155eacfc40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77348d68daf99cf01c1db0579428427c49abe381f97ad3d756e0be155eacfc40->enter($__internal_77348d68daf99cf01c1db0579428427c49abe381f97ad3d756e0be155eacfc40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0789350926ba511d31fd202c469546f4e9085b7acd422818eec74f1aaba2d079->leave($__internal_0789350926ba511d31fd202c469546f4e9085b7acd422818eec74f1aaba2d079_prof);

        
        $__internal_77348d68daf99cf01c1db0579428427c49abe381f97ad3d756e0be155eacfc40->leave($__internal_77348d68daf99cf01c1db0579428427c49abe381f97ad3d756e0be155eacfc40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
