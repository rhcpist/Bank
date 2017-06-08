<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d4b145e55febb24d99779d44b4cb6f458c6a27548fd08d03f5b876c3e3765d25 extends Twig_Template
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
        $__internal_b6a154b174fa7df8815d98f6864fd0afc06a337652a980b554b4dd3436cbc244 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a154b174fa7df8815d98f6864fd0afc06a337652a980b554b4dd3436cbc244->enter($__internal_b6a154b174fa7df8815d98f6864fd0afc06a337652a980b554b4dd3436cbc244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_1dc6c712bbadbd061eda246c6b052376a486d01d10bb71fff6e87716f2627b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dc6c712bbadbd061eda246c6b052376a486d01d10bb71fff6e87716f2627b86->enter($__internal_1dc6c712bbadbd061eda246c6b052376a486d01d10bb71fff6e87716f2627b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b6a154b174fa7df8815d98f6864fd0afc06a337652a980b554b4dd3436cbc244->leave($__internal_b6a154b174fa7df8815d98f6864fd0afc06a337652a980b554b4dd3436cbc244_prof);

        
        $__internal_1dc6c712bbadbd061eda246c6b052376a486d01d10bb71fff6e87716f2627b86->leave($__internal_1dc6c712bbadbd061eda246c6b052376a486d01d10bb71fff6e87716f2627b86_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
