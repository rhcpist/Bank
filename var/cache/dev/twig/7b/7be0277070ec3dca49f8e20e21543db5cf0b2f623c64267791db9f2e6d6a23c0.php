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
        $__internal_14ebdc1f16c5d17ca7a05849366f9f64b1bc81c63eac444ce89d71175c2ca84c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14ebdc1f16c5d17ca7a05849366f9f64b1bc81c63eac444ce89d71175c2ca84c->enter($__internal_14ebdc1f16c5d17ca7a05849366f9f64b1bc81c63eac444ce89d71175c2ca84c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_bf7be48b88dc2fd88797d7f9da025bdbdd8bef7efa22deb90670d07033ad711f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf7be48b88dc2fd88797d7f9da025bdbdd8bef7efa22deb90670d07033ad711f->enter($__internal_bf7be48b88dc2fd88797d7f9da025bdbdd8bef7efa22deb90670d07033ad711f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_14ebdc1f16c5d17ca7a05849366f9f64b1bc81c63eac444ce89d71175c2ca84c->leave($__internal_14ebdc1f16c5d17ca7a05849366f9f64b1bc81c63eac444ce89d71175c2ca84c_prof);

        
        $__internal_bf7be48b88dc2fd88797d7f9da025bdbdd8bef7efa22deb90670d07033ad711f->leave($__internal_bf7be48b88dc2fd88797d7f9da025bdbdd8bef7efa22deb90670d07033ad711f_prof);

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
