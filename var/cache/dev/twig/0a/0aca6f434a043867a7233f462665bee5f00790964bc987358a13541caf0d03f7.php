<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3310f6802108e62a2d50c713b67dde27cbc137de197c921a077a560207b3404b extends Twig_Template
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
        $__internal_08bccdc4b775e09a91be795091466a8759fb384ccc7d4adae6175c3576902486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08bccdc4b775e09a91be795091466a8759fb384ccc7d4adae6175c3576902486->enter($__internal_08bccdc4b775e09a91be795091466a8759fb384ccc7d4adae6175c3576902486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_018d56e0438f8b00d2f734bc77f196a4c6d2e58004696fae2f8ef4981ba966ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018d56e0438f8b00d2f734bc77f196a4c6d2e58004696fae2f8ef4981ba966ba->enter($__internal_018d56e0438f8b00d2f734bc77f196a4c6d2e58004696fae2f8ef4981ba966ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_08bccdc4b775e09a91be795091466a8759fb384ccc7d4adae6175c3576902486->leave($__internal_08bccdc4b775e09a91be795091466a8759fb384ccc7d4adae6175c3576902486_prof);

        
        $__internal_018d56e0438f8b00d2f734bc77f196a4c6d2e58004696fae2f8ef4981ba966ba->leave($__internal_018d56e0438f8b00d2f734bc77f196a4c6d2e58004696fae2f8ef4981ba966ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
