<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9c4c487d4f4a92a8a6e589283a66b34b1f67200ef5d660e02030aa42157bb4cd extends Twig_Template
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
        $__internal_6bfa445f9273765c6ee87ab1242a91268a156b835b4c9759810da6551bf194f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bfa445f9273765c6ee87ab1242a91268a156b835b4c9759810da6551bf194f4->enter($__internal_6bfa445f9273765c6ee87ab1242a91268a156b835b4c9759810da6551bf194f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e05ad9c04eb9983994d44fa4e308bdf54b278f1ea60e213648ee22a75d656abb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05ad9c04eb9983994d44fa4e308bdf54b278f1ea60e213648ee22a75d656abb->enter($__internal_e05ad9c04eb9983994d44fa4e308bdf54b278f1ea60e213648ee22a75d656abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6bfa445f9273765c6ee87ab1242a91268a156b835b4c9759810da6551bf194f4->leave($__internal_6bfa445f9273765c6ee87ab1242a91268a156b835b4c9759810da6551bf194f4_prof);

        
        $__internal_e05ad9c04eb9983994d44fa4e308bdf54b278f1ea60e213648ee22a75d656abb->leave($__internal_e05ad9c04eb9983994d44fa4e308bdf54b278f1ea60e213648ee22a75d656abb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
