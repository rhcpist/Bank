<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_39c4ed002f24b91741e1aa4a1fdf6dfd72eeba610ba3c29c5534056fa7214d59 extends Twig_Template
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
        $__internal_e80477d32002f37eb8131c99b4e98a33654c67100272b18a3d75016f5e01d279 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80477d32002f37eb8131c99b4e98a33654c67100272b18a3d75016f5e01d279->enter($__internal_e80477d32002f37eb8131c99b4e98a33654c67100272b18a3d75016f5e01d279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_55316273da7dbbaf152810949b2be8d5178950dd0ec6f72958615844203adb18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55316273da7dbbaf152810949b2be8d5178950dd0ec6f72958615844203adb18->enter($__internal_55316273da7dbbaf152810949b2be8d5178950dd0ec6f72958615844203adb18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e80477d32002f37eb8131c99b4e98a33654c67100272b18a3d75016f5e01d279->leave($__internal_e80477d32002f37eb8131c99b4e98a33654c67100272b18a3d75016f5e01d279_prof);

        
        $__internal_55316273da7dbbaf152810949b2be8d5178950dd0ec6f72958615844203adb18->leave($__internal_55316273da7dbbaf152810949b2be8d5178950dd0ec6f72958615844203adb18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
