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
        $__internal_b5dc68aff2b95197e39ea9493d13fb63e4042a4bd799137d858b49a6c783d586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5dc68aff2b95197e39ea9493d13fb63e4042a4bd799137d858b49a6c783d586->enter($__internal_b5dc68aff2b95197e39ea9493d13fb63e4042a4bd799137d858b49a6c783d586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_7fa58b92cf3f58f27d1468dff13891ed6b2ef56c8eac9a111d664368a144d6f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa58b92cf3f58f27d1468dff13891ed6b2ef56c8eac9a111d664368a144d6f7->enter($__internal_7fa58b92cf3f58f27d1468dff13891ed6b2ef56c8eac9a111d664368a144d6f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b5dc68aff2b95197e39ea9493d13fb63e4042a4bd799137d858b49a6c783d586->leave($__internal_b5dc68aff2b95197e39ea9493d13fb63e4042a4bd799137d858b49a6c783d586_prof);

        
        $__internal_7fa58b92cf3f58f27d1468dff13891ed6b2ef56c8eac9a111d664368a144d6f7->leave($__internal_7fa58b92cf3f58f27d1468dff13891ed6b2ef56c8eac9a111d664368a144d6f7_prof);

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
