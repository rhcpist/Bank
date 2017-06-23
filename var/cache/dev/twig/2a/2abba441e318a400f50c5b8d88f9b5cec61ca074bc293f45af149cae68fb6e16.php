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
        $__internal_c884a984ae641a215695adec6d34328542199ba48df50d38779861a476253d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c884a984ae641a215695adec6d34328542199ba48df50d38779861a476253d94->enter($__internal_c884a984ae641a215695adec6d34328542199ba48df50d38779861a476253d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9055a10a71807d695b7657b93497e415f1c5751fdbb589a305b3ecf0e0d93680 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9055a10a71807d695b7657b93497e415f1c5751fdbb589a305b3ecf0e0d93680->enter($__internal_9055a10a71807d695b7657b93497e415f1c5751fdbb589a305b3ecf0e0d93680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c884a984ae641a215695adec6d34328542199ba48df50d38779861a476253d94->leave($__internal_c884a984ae641a215695adec6d34328542199ba48df50d38779861a476253d94_prof);

        
        $__internal_9055a10a71807d695b7657b93497e415f1c5751fdbb589a305b3ecf0e0d93680->leave($__internal_9055a10a71807d695b7657b93497e415f1c5751fdbb589a305b3ecf0e0d93680_prof);

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
