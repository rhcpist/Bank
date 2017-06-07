<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_bfab68724d304902277fab2c0ea152c4ade4bbe70f86c070b8a635a3ebbf207f extends Twig_Template
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
        $__internal_961b25926bed67f558a977e40a18df11a2b83fd0671a37d7b26d737449601e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961b25926bed67f558a977e40a18df11a2b83fd0671a37d7b26d737449601e14->enter($__internal_961b25926bed67f558a977e40a18df11a2b83fd0671a37d7b26d737449601e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_4ec43f0f584ba7505c8e18f3db7b16e417885829548854826f55ecd948075f6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ec43f0f584ba7505c8e18f3db7b16e417885829548854826f55ecd948075f6c->enter($__internal_4ec43f0f584ba7505c8e18f3db7b16e417885829548854826f55ecd948075f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_961b25926bed67f558a977e40a18df11a2b83fd0671a37d7b26d737449601e14->leave($__internal_961b25926bed67f558a977e40a18df11a2b83fd0671a37d7b26d737449601e14_prof);

        
        $__internal_4ec43f0f584ba7505c8e18f3db7b16e417885829548854826f55ecd948075f6c->leave($__internal_4ec43f0f584ba7505c8e18f3db7b16e417885829548854826f55ecd948075f6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
