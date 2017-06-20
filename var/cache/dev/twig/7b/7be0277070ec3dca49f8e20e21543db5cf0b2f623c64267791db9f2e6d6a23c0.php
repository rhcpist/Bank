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
        $__internal_9b35b78a1d5c2b8d21560be3262a671b2b0347a275eb71558747942490753e81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b35b78a1d5c2b8d21560be3262a671b2b0347a275eb71558747942490753e81->enter($__internal_9b35b78a1d5c2b8d21560be3262a671b2b0347a275eb71558747942490753e81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_6cdc5e641459809ddce4cb3d376a8c6b9b65e577c3ecbb256cf8a5546ad53f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cdc5e641459809ddce4cb3d376a8c6b9b65e577c3ecbb256cf8a5546ad53f2f->enter($__internal_6cdc5e641459809ddce4cb3d376a8c6b9b65e577c3ecbb256cf8a5546ad53f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9b35b78a1d5c2b8d21560be3262a671b2b0347a275eb71558747942490753e81->leave($__internal_9b35b78a1d5c2b8d21560be3262a671b2b0347a275eb71558747942490753e81_prof);

        
        $__internal_6cdc5e641459809ddce4cb3d376a8c6b9b65e577c3ecbb256cf8a5546ad53f2f->leave($__internal_6cdc5e641459809ddce4cb3d376a8c6b9b65e577c3ecbb256cf8a5546ad53f2f_prof);

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
