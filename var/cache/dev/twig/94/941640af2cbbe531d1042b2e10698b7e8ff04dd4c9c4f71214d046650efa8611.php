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
        $__internal_340771a6f7283fc1a53696632c97e6706acebded418afe827713a468e1435e5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340771a6f7283fc1a53696632c97e6706acebded418afe827713a468e1435e5e->enter($__internal_340771a6f7283fc1a53696632c97e6706acebded418afe827713a468e1435e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8a50fb94893b9e79086b35b3388f8eef1383581a32b203b2629bfd42486391fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a50fb94893b9e79086b35b3388f8eef1383581a32b203b2629bfd42486391fd->enter($__internal_8a50fb94893b9e79086b35b3388f8eef1383581a32b203b2629bfd42486391fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_340771a6f7283fc1a53696632c97e6706acebded418afe827713a468e1435e5e->leave($__internal_340771a6f7283fc1a53696632c97e6706acebded418afe827713a468e1435e5e_prof);

        
        $__internal_8a50fb94893b9e79086b35b3388f8eef1383581a32b203b2629bfd42486391fd->leave($__internal_8a50fb94893b9e79086b35b3388f8eef1383581a32b203b2629bfd42486391fd_prof);

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
