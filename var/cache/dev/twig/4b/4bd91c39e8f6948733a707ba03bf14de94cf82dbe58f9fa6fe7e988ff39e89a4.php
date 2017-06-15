<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_d23fc62807a495928976c096986eee54c009a98864308dc736d870b96192c27c extends Twig_Template
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
        $__internal_e4202110b252e22cc5caa256e4e0d7fd50d5796a821792bc474883187b5d0923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4202110b252e22cc5caa256e4e0d7fd50d5796a821792bc474883187b5d0923->enter($__internal_e4202110b252e22cc5caa256e4e0d7fd50d5796a821792bc474883187b5d0923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b0cd5cca6294d88d56ab8ec0802d6fa3ee1956db8b4c1b1de19c3e43f5cbed10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cd5cca6294d88d56ab8ec0802d6fa3ee1956db8b4c1b1de19c3e43f5cbed10->enter($__internal_b0cd5cca6294d88d56ab8ec0802d6fa3ee1956db8b4c1b1de19c3e43f5cbed10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e4202110b252e22cc5caa256e4e0d7fd50d5796a821792bc474883187b5d0923->leave($__internal_e4202110b252e22cc5caa256e4e0d7fd50d5796a821792bc474883187b5d0923_prof);

        
        $__internal_b0cd5cca6294d88d56ab8ec0802d6fa3ee1956db8b4c1b1de19c3e43f5cbed10->leave($__internal_b0cd5cca6294d88d56ab8ec0802d6fa3ee1956db8b4c1b1de19c3e43f5cbed10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
