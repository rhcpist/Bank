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
        $__internal_1b030a4478b0fc64cf0b4b7deb7ca1549502105aba4862ee978c0195a18e44b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b030a4478b0fc64cf0b4b7deb7ca1549502105aba4862ee978c0195a18e44b4->enter($__internal_1b030a4478b0fc64cf0b4b7deb7ca1549502105aba4862ee978c0195a18e44b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_08e93d71ae4a6fb731316c555147852bf01be2aa9e4981849f24df98804e3dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08e93d71ae4a6fb731316c555147852bf01be2aa9e4981849f24df98804e3dca->enter($__internal_08e93d71ae4a6fb731316c555147852bf01be2aa9e4981849f24df98804e3dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_1b030a4478b0fc64cf0b4b7deb7ca1549502105aba4862ee978c0195a18e44b4->leave($__internal_1b030a4478b0fc64cf0b4b7deb7ca1549502105aba4862ee978c0195a18e44b4_prof);

        
        $__internal_08e93d71ae4a6fb731316c555147852bf01be2aa9e4981849f24df98804e3dca->leave($__internal_08e93d71ae4a6fb731316c555147852bf01be2aa9e4981849f24df98804e3dca_prof);

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
