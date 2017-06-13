<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_3349b48b0a177373cef751f7e357f31fe985e25cf1f51ca296a7f7f3cdc38c25 extends Twig_Template
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
        $__internal_8a19696623c97925bd472f816a4f2becf8c242ca2d69bfac4f620db98bdefbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a19696623c97925bd472f816a4f2becf8c242ca2d69bfac4f620db98bdefbd5->enter($__internal_8a19696623c97925bd472f816a4f2becf8c242ca2d69bfac4f620db98bdefbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_fbda927ef7dcf5f23e0ae2d96ef32752dbd99f33061466fbc26e647044ce4eeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbda927ef7dcf5f23e0ae2d96ef32752dbd99f33061466fbc26e647044ce4eeb->enter($__internal_fbda927ef7dcf5f23e0ae2d96ef32752dbd99f33061466fbc26e647044ce4eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8a19696623c97925bd472f816a4f2becf8c242ca2d69bfac4f620db98bdefbd5->leave($__internal_8a19696623c97925bd472f816a4f2becf8c242ca2d69bfac4f620db98bdefbd5_prof);

        
        $__internal_fbda927ef7dcf5f23e0ae2d96ef32752dbd99f33061466fbc26e647044ce4eeb->leave($__internal_fbda927ef7dcf5f23e0ae2d96ef32752dbd99f33061466fbc26e647044ce4eeb_prof);

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
