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
        $__internal_adf4c1b68a68fcba1a3737705d599ba986b2bb6ec9248a6a9a7d7b529b60572a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adf4c1b68a68fcba1a3737705d599ba986b2bb6ec9248a6a9a7d7b529b60572a->enter($__internal_adf4c1b68a68fcba1a3737705d599ba986b2bb6ec9248a6a9a7d7b529b60572a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_e7cbbb63f93d7745757e8801ec09b8cb8705ab40341995e7cb86e35eac9da192 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7cbbb63f93d7745757e8801ec09b8cb8705ab40341995e7cb86e35eac9da192->enter($__internal_e7cbbb63f93d7745757e8801ec09b8cb8705ab40341995e7cb86e35eac9da192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_adf4c1b68a68fcba1a3737705d599ba986b2bb6ec9248a6a9a7d7b529b60572a->leave($__internal_adf4c1b68a68fcba1a3737705d599ba986b2bb6ec9248a6a9a7d7b529b60572a_prof);

        
        $__internal_e7cbbb63f93d7745757e8801ec09b8cb8705ab40341995e7cb86e35eac9da192->leave($__internal_e7cbbb63f93d7745757e8801ec09b8cb8705ab40341995e7cb86e35eac9da192_prof);

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
