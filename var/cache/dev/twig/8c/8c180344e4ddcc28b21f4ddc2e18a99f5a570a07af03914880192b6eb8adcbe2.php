<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_c66c4ebbe234033a461810cf83d257c2c86c0f20eaa564a27008665c3de8c928 extends Twig_Template
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
        $__internal_06eee50346622a7862858a8b6183a65f7cff22a4f212e2fd46ac5ca320ae4b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06eee50346622a7862858a8b6183a65f7cff22a4f212e2fd46ac5ca320ae4b34->enter($__internal_06eee50346622a7862858a8b6183a65f7cff22a4f212e2fd46ac5ca320ae4b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_58b0e026b63ccdee3e48aaab54fcd2370cac527c2e05a3495fe69c197f252c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b0e026b63ccdee3e48aaab54fcd2370cac527c2e05a3495fe69c197f252c8e->enter($__internal_58b0e026b63ccdee3e48aaab54fcd2370cac527c2e05a3495fe69c197f252c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_06eee50346622a7862858a8b6183a65f7cff22a4f212e2fd46ac5ca320ae4b34->leave($__internal_06eee50346622a7862858a8b6183a65f7cff22a4f212e2fd46ac5ca320ae4b34_prof);

        
        $__internal_58b0e026b63ccdee3e48aaab54fcd2370cac527c2e05a3495fe69c197f252c8e->leave($__internal_58b0e026b63ccdee3e48aaab54fcd2370cac527c2e05a3495fe69c197f252c8e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
