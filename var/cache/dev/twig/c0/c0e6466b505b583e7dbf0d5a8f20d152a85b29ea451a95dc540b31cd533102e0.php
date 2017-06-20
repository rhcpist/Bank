<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cf8c52c5a7d443fb120a8abdbc715580e644f4ce54c935927f7822c641796a83 extends Twig_Template
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
        $__internal_40548598bf01e1a40ebbd1dcd3373c0ef2de787a25e611ac24bc8c55e3c5d6e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40548598bf01e1a40ebbd1dcd3373c0ef2de787a25e611ac24bc8c55e3c5d6e3->enter($__internal_40548598bf01e1a40ebbd1dcd3373c0ef2de787a25e611ac24bc8c55e3c5d6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d597559cc08590e8ab9f8f827c916f8e6785069432f67ddf7136b98362015ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d597559cc08590e8ab9f8f827c916f8e6785069432f67ddf7136b98362015ea8->enter($__internal_d597559cc08590e8ab9f8f827c916f8e6785069432f67ddf7136b98362015ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_40548598bf01e1a40ebbd1dcd3373c0ef2de787a25e611ac24bc8c55e3c5d6e3->leave($__internal_40548598bf01e1a40ebbd1dcd3373c0ef2de787a25e611ac24bc8c55e3c5d6e3_prof);

        
        $__internal_d597559cc08590e8ab9f8f827c916f8e6785069432f67ddf7136b98362015ea8->leave($__internal_d597559cc08590e8ab9f8f827c916f8e6785069432f67ddf7136b98362015ea8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
