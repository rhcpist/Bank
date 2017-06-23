<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_f32ecc07eb36f45805b31a3ba3e61633bec948245d048a930dab607ec26b56fd extends Twig_Template
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
        $__internal_a727c9a13afb6c80541111f0f18e046a98d924476a58a53fee44a64c561ab366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a727c9a13afb6c80541111f0f18e046a98d924476a58a53fee44a64c561ab366->enter($__internal_a727c9a13afb6c80541111f0f18e046a98d924476a58a53fee44a64c561ab366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_975f118abf2ef4151336824572ccedf1ce179e233f1b25241b8bf1626a10e864 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_975f118abf2ef4151336824572ccedf1ce179e233f1b25241b8bf1626a10e864->enter($__internal_975f118abf2ef4151336824572ccedf1ce179e233f1b25241b8bf1626a10e864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a727c9a13afb6c80541111f0f18e046a98d924476a58a53fee44a64c561ab366->leave($__internal_a727c9a13afb6c80541111f0f18e046a98d924476a58a53fee44a64c561ab366_prof);

        
        $__internal_975f118abf2ef4151336824572ccedf1ce179e233f1b25241b8bf1626a10e864->leave($__internal_975f118abf2ef4151336824572ccedf1ce179e233f1b25241b8bf1626a10e864_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
