<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_f6b7cfcc0ca6e7784f402d5351a8963a0457e5d7907df3854702098a4c617091 extends Twig_Template
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
        $__internal_5fd2d4f97f1c7c89c2e34046278710f190c92ad62bd2f765c805b337c943de7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd2d4f97f1c7c89c2e34046278710f190c92ad62bd2f765c805b337c943de7c->enter($__internal_5fd2d4f97f1c7c89c2e34046278710f190c92ad62bd2f765c805b337c943de7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c7a21ff68ca6640e1284e9db272c10b8a81a8eaf8b6c83683e9276db84aae0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a21ff68ca6640e1284e9db272c10b8a81a8eaf8b6c83683e9276db84aae0b7->enter($__internal_c7a21ff68ca6640e1284e9db272c10b8a81a8eaf8b6c83683e9276db84aae0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_5fd2d4f97f1c7c89c2e34046278710f190c92ad62bd2f765c805b337c943de7c->leave($__internal_5fd2d4f97f1c7c89c2e34046278710f190c92ad62bd2f765c805b337c943de7c_prof);

        
        $__internal_c7a21ff68ca6640e1284e9db272c10b8a81a8eaf8b6c83683e9276db84aae0b7->leave($__internal_c7a21ff68ca6640e1284e9db272c10b8a81a8eaf8b6c83683e9276db84aae0b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
