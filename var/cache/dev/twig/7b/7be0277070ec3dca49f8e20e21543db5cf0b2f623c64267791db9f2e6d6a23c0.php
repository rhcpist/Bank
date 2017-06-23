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
        $__internal_ee020c6ab711b366b4e8d81bec03c2fee923ccc1264bebd396063f47cbcd9481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee020c6ab711b366b4e8d81bec03c2fee923ccc1264bebd396063f47cbcd9481->enter($__internal_ee020c6ab711b366b4e8d81bec03c2fee923ccc1264bebd396063f47cbcd9481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_b4f42f8ace82e29bf8f98cad2a2b7f73b1abe94f9bb98a1af7702614836e987b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f42f8ace82e29bf8f98cad2a2b7f73b1abe94f9bb98a1af7702614836e987b->enter($__internal_b4f42f8ace82e29bf8f98cad2a2b7f73b1abe94f9bb98a1af7702614836e987b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ee020c6ab711b366b4e8d81bec03c2fee923ccc1264bebd396063f47cbcd9481->leave($__internal_ee020c6ab711b366b4e8d81bec03c2fee923ccc1264bebd396063f47cbcd9481_prof);

        
        $__internal_b4f42f8ace82e29bf8f98cad2a2b7f73b1abe94f9bb98a1af7702614836e987b->leave($__internal_b4f42f8ace82e29bf8f98cad2a2b7f73b1abe94f9bb98a1af7702614836e987b_prof);

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
