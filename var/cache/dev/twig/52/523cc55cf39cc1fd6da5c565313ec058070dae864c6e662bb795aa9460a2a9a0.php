<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2f855983947ccb822a3f333bb4742a654c143f40ebc6a80deac257df1ca8c134 extends Twig_Template
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
        $__internal_aacb2f3391a2ce3257b4168bdb6093fd3d2b1e172c5292a80d26ba54f310cbba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aacb2f3391a2ce3257b4168bdb6093fd3d2b1e172c5292a80d26ba54f310cbba->enter($__internal_aacb2f3391a2ce3257b4168bdb6093fd3d2b1e172c5292a80d26ba54f310cbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_7a366e3f0dd574c734714fcf9ed7373f1451a161f3946b2303a8aeb68cf8b408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a366e3f0dd574c734714fcf9ed7373f1451a161f3946b2303a8aeb68cf8b408->enter($__internal_7a366e3f0dd574c734714fcf9ed7373f1451a161f3946b2303a8aeb68cf8b408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_aacb2f3391a2ce3257b4168bdb6093fd3d2b1e172c5292a80d26ba54f310cbba->leave($__internal_aacb2f3391a2ce3257b4168bdb6093fd3d2b1e172c5292a80d26ba54f310cbba_prof);

        
        $__internal_7a366e3f0dd574c734714fcf9ed7373f1451a161f3946b2303a8aeb68cf8b408->leave($__internal_7a366e3f0dd574c734714fcf9ed7373f1451a161f3946b2303a8aeb68cf8b408_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
