<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_6f4dca15e836d968b7ff3a8d6ca6293a118be23ad41f06d376031dd8ff527601 extends Twig_Template
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
        $__internal_f3d0f2bd49abe4c705def8521ad49368e0b5c7562d6599fa398b0647bd82ac55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3d0f2bd49abe4c705def8521ad49368e0b5c7562d6599fa398b0647bd82ac55->enter($__internal_f3d0f2bd49abe4c705def8521ad49368e0b5c7562d6599fa398b0647bd82ac55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_ea26cc29d4f39a3ec0c4888cf385e45795662547ab70dc9e99abf476ee07ca39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea26cc29d4f39a3ec0c4888cf385e45795662547ab70dc9e99abf476ee07ca39->enter($__internal_ea26cc29d4f39a3ec0c4888cf385e45795662547ab70dc9e99abf476ee07ca39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f3d0f2bd49abe4c705def8521ad49368e0b5c7562d6599fa398b0647bd82ac55->leave($__internal_f3d0f2bd49abe4c705def8521ad49368e0b5c7562d6599fa398b0647bd82ac55_prof);

        
        $__internal_ea26cc29d4f39a3ec0c4888cf385e45795662547ab70dc9e99abf476ee07ca39->leave($__internal_ea26cc29d4f39a3ec0c4888cf385e45795662547ab70dc9e99abf476ee07ca39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/mnt/storage/private/public_html/bank/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
