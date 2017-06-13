<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_9e6fcbfa20dd3ba6a360ca8b1ff3cf1d24faeaaf344c9424ca245b8c62ce0924 extends Twig_Template
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
        $__internal_c00871114473af39f79e0e44ef6052767faf902be16b5eeb98ecbaf0b4ea925c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00871114473af39f79e0e44ef6052767faf902be16b5eeb98ecbaf0b4ea925c->enter($__internal_c00871114473af39f79e0e44ef6052767faf902be16b5eeb98ecbaf0b4ea925c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_739eba3aca84d8779a5a6b774d98d9953b640003d056002e395cbc9a4582aee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739eba3aca84d8779a5a6b774d98d9953b640003d056002e395cbc9a4582aee2->enter($__internal_739eba3aca84d8779a5a6b774d98d9953b640003d056002e395cbc9a4582aee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c00871114473af39f79e0e44ef6052767faf902be16b5eeb98ecbaf0b4ea925c->leave($__internal_c00871114473af39f79e0e44ef6052767faf902be16b5eeb98ecbaf0b4ea925c_prof);

        
        $__internal_739eba3aca84d8779a5a6b774d98d9953b640003d056002e395cbc9a4582aee2->leave($__internal_739eba3aca84d8779a5a6b774d98d9953b640003d056002e395cbc9a4582aee2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
