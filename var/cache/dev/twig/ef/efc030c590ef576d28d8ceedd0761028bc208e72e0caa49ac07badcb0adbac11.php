<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a28eba55955847ef49e3a72632ab5597b95aea55dda30c2f5bc6d1c1074f9285 extends Twig_Template
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
        $__internal_84839e8a7df1959eeed6e6208c6d23b7ebcc7899b34c55af284fbafad2ed8624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84839e8a7df1959eeed6e6208c6d23b7ebcc7899b34c55af284fbafad2ed8624->enter($__internal_84839e8a7df1959eeed6e6208c6d23b7ebcc7899b34c55af284fbafad2ed8624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_2ecbab896479f7db222573a6ec7a17c5f2d57bfb65fc0d95401829697c6fd92c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ecbab896479f7db222573a6ec7a17c5f2d57bfb65fc0d95401829697c6fd92c->enter($__internal_2ecbab896479f7db222573a6ec7a17c5f2d57bfb65fc0d95401829697c6fd92c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_84839e8a7df1959eeed6e6208c6d23b7ebcc7899b34c55af284fbafad2ed8624->leave($__internal_84839e8a7df1959eeed6e6208c6d23b7ebcc7899b34c55af284fbafad2ed8624_prof);

        
        $__internal_2ecbab896479f7db222573a6ec7a17c5f2d57bfb65fc0d95401829697c6fd92c->leave($__internal_2ecbab896479f7db222573a6ec7a17c5f2d57bfb65fc0d95401829697c6fd92c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
