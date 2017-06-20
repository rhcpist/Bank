<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_a6e51224e61870718d6512b4b0fe3ece1c61774027e5a2aad7d8b1ca13d11712 extends Twig_Template
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
        $__internal_526b0d565ffd3e2fd3efccecd1d6ac51677e0257b773d01ec2ef4f2579f95d8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526b0d565ffd3e2fd3efccecd1d6ac51677e0257b773d01ec2ef4f2579f95d8c->enter($__internal_526b0d565ffd3e2fd3efccecd1d6ac51677e0257b773d01ec2ef4f2579f95d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9f1635d9f006577ad1d2d755ef1113f2af284b71d8117877a2b4ea5954ded209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1635d9f006577ad1d2d755ef1113f2af284b71d8117877a2b4ea5954ded209->enter($__internal_9f1635d9f006577ad1d2d755ef1113f2af284b71d8117877a2b4ea5954ded209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_526b0d565ffd3e2fd3efccecd1d6ac51677e0257b773d01ec2ef4f2579f95d8c->leave($__internal_526b0d565ffd3e2fd3efccecd1d6ac51677e0257b773d01ec2ef4f2579f95d8c_prof);

        
        $__internal_9f1635d9f006577ad1d2d755ef1113f2af284b71d8117877a2b4ea5954ded209->leave($__internal_9f1635d9f006577ad1d2d755ef1113f2af284b71d8117877a2b4ea5954ded209_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
