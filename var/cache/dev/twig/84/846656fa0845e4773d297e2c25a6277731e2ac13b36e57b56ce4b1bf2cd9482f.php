<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9095855f4ea758094856cbf1b6de3835137d82d990bde149d159362e0f616e45 extends Twig_Template
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
        $__internal_30459fc6e92f26588e5b110c7ffc1647886d6fa194064b345f1dd57ed6f5c479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30459fc6e92f26588e5b110c7ffc1647886d6fa194064b345f1dd57ed6f5c479->enter($__internal_30459fc6e92f26588e5b110c7ffc1647886d6fa194064b345f1dd57ed6f5c479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_3ec30410577239675a7ae1359d370c2b8427369d696fcd8112ee1cb3384e10ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ec30410577239675a7ae1359d370c2b8427369d696fcd8112ee1cb3384e10ed->enter($__internal_3ec30410577239675a7ae1359d370c2b8427369d696fcd8112ee1cb3384e10ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_30459fc6e92f26588e5b110c7ffc1647886d6fa194064b345f1dd57ed6f5c479->leave($__internal_30459fc6e92f26588e5b110c7ffc1647886d6fa194064b345f1dd57ed6f5c479_prof);

        
        $__internal_3ec30410577239675a7ae1359d370c2b8427369d696fcd8112ee1cb3384e10ed->leave($__internal_3ec30410577239675a7ae1359d370c2b8427369d696fcd8112ee1cb3384e10ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
