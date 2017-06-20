<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_f3698afe01afe5cb5252ec6ee9e4fa058bd1b2301dcb95d6e90df3fd4a9f00ab extends Twig_Template
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
        $__internal_69e8bf49cf4a175bad9db9f12aa91de199b8025a652880f3a203acd29b7009a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69e8bf49cf4a175bad9db9f12aa91de199b8025a652880f3a203acd29b7009a3->enter($__internal_69e8bf49cf4a175bad9db9f12aa91de199b8025a652880f3a203acd29b7009a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_993e880f14b5a1240923e47befec87b6d4eb7ad0dd7d4e196878bdb3d0d3abc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993e880f14b5a1240923e47befec87b6d4eb7ad0dd7d4e196878bdb3d0d3abc1->enter($__internal_993e880f14b5a1240923e47befec87b6d4eb7ad0dd7d4e196878bdb3d0d3abc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_69e8bf49cf4a175bad9db9f12aa91de199b8025a652880f3a203acd29b7009a3->leave($__internal_69e8bf49cf4a175bad9db9f12aa91de199b8025a652880f3a203acd29b7009a3_prof);

        
        $__internal_993e880f14b5a1240923e47befec87b6d4eb7ad0dd7d4e196878bdb3d0d3abc1->leave($__internal_993e880f14b5a1240923e47befec87b6d4eb7ad0dd7d4e196878bdb3d0d3abc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
