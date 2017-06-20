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
        $__internal_bc12bd90082ab0a322c0b6fbb4ca4231f374b25dc77b752b756aae2134bb61b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc12bd90082ab0a322c0b6fbb4ca4231f374b25dc77b752b756aae2134bb61b1->enter($__internal_bc12bd90082ab0a322c0b6fbb4ca4231f374b25dc77b752b756aae2134bb61b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3adb3dfc69419e6dc35181c94947d2c7ed38f8e1f372a42fd9cc1d998d529c27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3adb3dfc69419e6dc35181c94947d2c7ed38f8e1f372a42fd9cc1d998d529c27->enter($__internal_3adb3dfc69419e6dc35181c94947d2c7ed38f8e1f372a42fd9cc1d998d529c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_bc12bd90082ab0a322c0b6fbb4ca4231f374b25dc77b752b756aae2134bb61b1->leave($__internal_bc12bd90082ab0a322c0b6fbb4ca4231f374b25dc77b752b756aae2134bb61b1_prof);

        
        $__internal_3adb3dfc69419e6dc35181c94947d2c7ed38f8e1f372a42fd9cc1d998d529c27->leave($__internal_3adb3dfc69419e6dc35181c94947d2c7ed38f8e1f372a42fd9cc1d998d529c27_prof);

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
