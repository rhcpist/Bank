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
        $__internal_3113c00d7c14a31983ec8ec1b45c5226d4dc5a500220a8be9447de8eff381ef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3113c00d7c14a31983ec8ec1b45c5226d4dc5a500220a8be9447de8eff381ef8->enter($__internal_3113c00d7c14a31983ec8ec1b45c5226d4dc5a500220a8be9447de8eff381ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_eb9f7d11b67f3b2baefc1ae7040e310d7eeebfd8b6709c44f034a7b3472188fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb9f7d11b67f3b2baefc1ae7040e310d7eeebfd8b6709c44f034a7b3472188fd->enter($__internal_eb9f7d11b67f3b2baefc1ae7040e310d7eeebfd8b6709c44f034a7b3472188fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_3113c00d7c14a31983ec8ec1b45c5226d4dc5a500220a8be9447de8eff381ef8->leave($__internal_3113c00d7c14a31983ec8ec1b45c5226d4dc5a500220a8be9447de8eff381ef8_prof);

        
        $__internal_eb9f7d11b67f3b2baefc1ae7040e310d7eeebfd8b6709c44f034a7b3472188fd->leave($__internal_eb9f7d11b67f3b2baefc1ae7040e310d7eeebfd8b6709c44f034a7b3472188fd_prof);

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
