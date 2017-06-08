<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_53e3ec17deaf3e807ff6788d98b0f6a510c11af9f5c061221bf78e87e06bffc5 extends Twig_Template
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
        $__internal_7ab898c8316b62341936a7e7581e7f3283c04fb6953ec9d59f5e787574e45d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ab898c8316b62341936a7e7581e7f3283c04fb6953ec9d59f5e787574e45d1f->enter($__internal_7ab898c8316b62341936a7e7581e7f3283c04fb6953ec9d59f5e787574e45d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_2797461f367b5ee70946d65248228b379554ef94d34187d139e411eafde9f7d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2797461f367b5ee70946d65248228b379554ef94d34187d139e411eafde9f7d0->enter($__internal_2797461f367b5ee70946d65248228b379554ef94d34187d139e411eafde9f7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_7ab898c8316b62341936a7e7581e7f3283c04fb6953ec9d59f5e787574e45d1f->leave($__internal_7ab898c8316b62341936a7e7581e7f3283c04fb6953ec9d59f5e787574e45d1f_prof);

        
        $__internal_2797461f367b5ee70946d65248228b379554ef94d34187d139e411eafde9f7d0->leave($__internal_2797461f367b5ee70946d65248228b379554ef94d34187d139e411eafde9f7d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
