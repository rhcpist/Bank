<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cf8c52c5a7d443fb120a8abdbc715580e644f4ce54c935927f7822c641796a83 extends Twig_Template
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
        $__internal_ed1b5e012393b3cf24a680692509000636d01501dafee77b99cad5b20fea8032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1b5e012393b3cf24a680692509000636d01501dafee77b99cad5b20fea8032->enter($__internal_ed1b5e012393b3cf24a680692509000636d01501dafee77b99cad5b20fea8032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_4a7ef7c616400ac863a42f126c975bbb7826d26a43a2bea3c7e2dba4696d4c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7ef7c616400ac863a42f126c975bbb7826d26a43a2bea3c7e2dba4696d4c25->enter($__internal_4a7ef7c616400ac863a42f126c975bbb7826d26a43a2bea3c7e2dba4696d4c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ed1b5e012393b3cf24a680692509000636d01501dafee77b99cad5b20fea8032->leave($__internal_ed1b5e012393b3cf24a680692509000636d01501dafee77b99cad5b20fea8032_prof);

        
        $__internal_4a7ef7c616400ac863a42f126c975bbb7826d26a43a2bea3c7e2dba4696d4c25->leave($__internal_4a7ef7c616400ac863a42f126c975bbb7826d26a43a2bea3c7e2dba4696d4c25_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
