<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b125537520881b25f4e88375af82196f40b0ca54c123dea3caa6be44fbf2e804 extends Twig_Template
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
        $__internal_417e050875166872f258210cf9e6a7ee46385fbe907677315a416bb330e34c09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417e050875166872f258210cf9e6a7ee46385fbe907677315a416bb330e34c09->enter($__internal_417e050875166872f258210cf9e6a7ee46385fbe907677315a416bb330e34c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_d3e35b3bd6d4d25261211c5d7fe43d085dddaa7cb555060c9434988bbaffbc42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e35b3bd6d4d25261211c5d7fe43d085dddaa7cb555060c9434988bbaffbc42->enter($__internal_d3e35b3bd6d4d25261211c5d7fe43d085dddaa7cb555060c9434988bbaffbc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_417e050875166872f258210cf9e6a7ee46385fbe907677315a416bb330e34c09->leave($__internal_417e050875166872f258210cf9e6a7ee46385fbe907677315a416bb330e34c09_prof);

        
        $__internal_d3e35b3bd6d4d25261211c5d7fe43d085dddaa7cb555060c9434988bbaffbc42->leave($__internal_d3e35b3bd6d4d25261211c5d7fe43d085dddaa7cb555060c9434988bbaffbc42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
