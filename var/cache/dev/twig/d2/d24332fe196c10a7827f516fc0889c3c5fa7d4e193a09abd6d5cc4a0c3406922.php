<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_5918dc8c36ae954b73c9a1cdc7bf2b3f7a0bb3152aee65a7ccf40638e06beed1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_34a90ece09789d224cba2803b89a633b504273091c395809d5590fa185f2832f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34a90ece09789d224cba2803b89a633b504273091c395809d5590fa185f2832f->enter($__internal_34a90ece09789d224cba2803b89a633b504273091c395809d5590fa185f2832f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_24035cce8b905d6fcb85150054fb955c50f49e84d4ef74542af70ed70e394264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24035cce8b905d6fcb85150054fb955c50f49e84d4ef74542af70ed70e394264->enter($__internal_24035cce8b905d6fcb85150054fb955c50f49e84d4ef74542af70ed70e394264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34a90ece09789d224cba2803b89a633b504273091c395809d5590fa185f2832f->leave($__internal_34a90ece09789d224cba2803b89a633b504273091c395809d5590fa185f2832f_prof);

        
        $__internal_24035cce8b905d6fcb85150054fb955c50f49e84d4ef74542af70ed70e394264->leave($__internal_24035cce8b905d6fcb85150054fb955c50f49e84d4ef74542af70ed70e394264_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c26c6a2a75e619136d918f2d35820de20604db53a2b07e27987be398239841d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26c6a2a75e619136d918f2d35820de20604db53a2b07e27987be398239841d8->enter($__internal_c26c6a2a75e619136d918f2d35820de20604db53a2b07e27987be398239841d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8e6b1851c04368f081e145c815098a6001863093bd9b502adeeec28fd0ff72a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6b1851c04368f081e145c815098a6001863093bd9b502adeeec28fd0ff72a4->enter($__internal_8e6b1851c04368f081e145c815098a6001863093bd9b502adeeec28fd0ff72a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8e6b1851c04368f081e145c815098a6001863093bd9b502adeeec28fd0ff72a4->leave($__internal_8e6b1851c04368f081e145c815098a6001863093bd9b502adeeec28fd0ff72a4_prof);

        
        $__internal_c26c6a2a75e619136d918f2d35820de20604db53a2b07e27987be398239841d8->leave($__internal_c26c6a2a75e619136d918f2d35820de20604db53a2b07e27987be398239841d8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
