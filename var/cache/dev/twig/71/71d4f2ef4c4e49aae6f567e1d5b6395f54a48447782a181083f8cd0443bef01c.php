<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_194de0f2183519fe6803dfdaba666aec5f864c1d196126dc4b59ab3e761ce5b4 extends Twig_Template
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
        $__internal_e6b7b0b24c56e8de7bc6e9dd170189100fa80aa0098ee0a817b551c270b82c64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6b7b0b24c56e8de7bc6e9dd170189100fa80aa0098ee0a817b551c270b82c64->enter($__internal_e6b7b0b24c56e8de7bc6e9dd170189100fa80aa0098ee0a817b551c270b82c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_0c5132f8217e8fe77ec45e470c02319fc2f7f83990c5b3674d65936e0f3ee775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c5132f8217e8fe77ec45e470c02319fc2f7f83990c5b3674d65936e0f3ee775->enter($__internal_0c5132f8217e8fe77ec45e470c02319fc2f7f83990c5b3674d65936e0f3ee775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e6b7b0b24c56e8de7bc6e9dd170189100fa80aa0098ee0a817b551c270b82c64->leave($__internal_e6b7b0b24c56e8de7bc6e9dd170189100fa80aa0098ee0a817b551c270b82c64_prof);

        
        $__internal_0c5132f8217e8fe77ec45e470c02319fc2f7f83990c5b3674d65936e0f3ee775->leave($__internal_0c5132f8217e8fe77ec45e470c02319fc2f7f83990c5b3674d65936e0f3ee775_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
