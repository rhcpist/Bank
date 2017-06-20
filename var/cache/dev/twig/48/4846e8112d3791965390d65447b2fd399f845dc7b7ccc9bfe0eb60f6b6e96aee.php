<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b04551a39dae58e67eafa561918bff12c05a9b290a89b5c1f4c9d0a03dccd80f extends Twig_Template
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
        $__internal_1605038e49590122b305e5ab9c6ddf4120725a93b6dfbf924cdcd5ecf46d8070 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1605038e49590122b305e5ab9c6ddf4120725a93b6dfbf924cdcd5ecf46d8070->enter($__internal_1605038e49590122b305e5ab9c6ddf4120725a93b6dfbf924cdcd5ecf46d8070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_4477a48d54f7df551c6f8248e6c89baedaf096965e3917be7c9a650edffcf461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4477a48d54f7df551c6f8248e6c89baedaf096965e3917be7c9a650edffcf461->enter($__internal_4477a48d54f7df551c6f8248e6c89baedaf096965e3917be7c9a650edffcf461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1605038e49590122b305e5ab9c6ddf4120725a93b6dfbf924cdcd5ecf46d8070->leave($__internal_1605038e49590122b305e5ab9c6ddf4120725a93b6dfbf924cdcd5ecf46d8070_prof);

        
        $__internal_4477a48d54f7df551c6f8248e6c89baedaf096965e3917be7c9a650edffcf461->leave($__internal_4477a48d54f7df551c6f8248e6c89baedaf096965e3917be7c9a650edffcf461_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
