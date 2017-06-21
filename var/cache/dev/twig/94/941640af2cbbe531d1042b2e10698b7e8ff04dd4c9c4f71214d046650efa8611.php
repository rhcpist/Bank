<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_625d3bdd8897e5cf9bfa792514256f71d21a1f91b52510046dc5a1a2143fb8a0 extends Twig_Template
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
        $__internal_e794f8ca311d48e6793a64bbbd31e8877aeccd152f2f96f0cd94280dac195f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e794f8ca311d48e6793a64bbbd31e8877aeccd152f2f96f0cd94280dac195f8c->enter($__internal_e794f8ca311d48e6793a64bbbd31e8877aeccd152f2f96f0cd94280dac195f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_73e6f18fc44ccd7a172e484193079850e09c81001c60b4c6b02452fc48fc3845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e6f18fc44ccd7a172e484193079850e09c81001c60b4c6b02452fc48fc3845->enter($__internal_73e6f18fc44ccd7a172e484193079850e09c81001c60b4c6b02452fc48fc3845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e794f8ca311d48e6793a64bbbd31e8877aeccd152f2f96f0cd94280dac195f8c->leave($__internal_e794f8ca311d48e6793a64bbbd31e8877aeccd152f2f96f0cd94280dac195f8c_prof);

        
        $__internal_73e6f18fc44ccd7a172e484193079850e09c81001c60b4c6b02452fc48fc3845->leave($__internal_73e6f18fc44ccd7a172e484193079850e09c81001c60b4c6b02452fc48fc3845_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
