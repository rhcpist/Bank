<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f3aa9f0c4ccab0bfdb315e9cf39001dbcf6845488f36a76d8b59060639ba0087 extends Twig_Template
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
        $__internal_f94dd2038bfc9e4323df536cfb53f61ce0e5d433f35c19f9aa9d3590fde17ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f94dd2038bfc9e4323df536cfb53f61ce0e5d433f35c19f9aa9d3590fde17ffa->enter($__internal_f94dd2038bfc9e4323df536cfb53f61ce0e5d433f35c19f9aa9d3590fde17ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_f1f7bae09c771ffc1e9aafb80b051726a851c318889ce0a380562a64a70a7966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f7bae09c771ffc1e9aafb80b051726a851c318889ce0a380562a64a70a7966->enter($__internal_f1f7bae09c771ffc1e9aafb80b051726a851c318889ce0a380562a64a70a7966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f94dd2038bfc9e4323df536cfb53f61ce0e5d433f35c19f9aa9d3590fde17ffa->leave($__internal_f94dd2038bfc9e4323df536cfb53f61ce0e5d433f35c19f9aa9d3590fde17ffa_prof);

        
        $__internal_f1f7bae09c771ffc1e9aafb80b051726a851c318889ce0a380562a64a70a7966->leave($__internal_f1f7bae09c771ffc1e9aafb80b051726a851c318889ce0a380562a64a70a7966_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
