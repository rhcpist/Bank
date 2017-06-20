<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_84c5d99fdb629028720ce57469c6700438539cf0a228363855c33908e2047aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_c14063c70afd1edb0003aead7c9ac909abd2480a91cbcdcc00041e203aea7f40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c14063c70afd1edb0003aead7c9ac909abd2480a91cbcdcc00041e203aea7f40->enter($__internal_c14063c70afd1edb0003aead7c9ac909abd2480a91cbcdcc00041e203aea7f40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_ddbc9fc2410c9358297ef810806c8d1648082f4130c712c71bc7cf41626e8124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbc9fc2410c9358297ef810806c8d1648082f4130c712c71bc7cf41626e8124->enter($__internal_ddbc9fc2410c9358297ef810806c8d1648082f4130c712c71bc7cf41626e8124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c14063c70afd1edb0003aead7c9ac909abd2480a91cbcdcc00041e203aea7f40->leave($__internal_c14063c70afd1edb0003aead7c9ac909abd2480a91cbcdcc00041e203aea7f40_prof);

        
        $__internal_ddbc9fc2410c9358297ef810806c8d1648082f4130c712c71bc7cf41626e8124->leave($__internal_ddbc9fc2410c9358297ef810806c8d1648082f4130c712c71bc7cf41626e8124_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ee1f7d7f06f03d342c404fa095bffc03dd5943dc1c260d51a2b745d1b6462f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee1f7d7f06f03d342c404fa095bffc03dd5943dc1c260d51a2b745d1b6462f6c->enter($__internal_ee1f7d7f06f03d342c404fa095bffc03dd5943dc1c260d51a2b745d1b6462f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2b90e9c910d6fa4e189225bdf80c56a1a97234fa9bbfe37b4e82ec12e5520868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b90e9c910d6fa4e189225bdf80c56a1a97234fa9bbfe37b4e82ec12e5520868->enter($__internal_2b90e9c910d6fa4e189225bdf80c56a1a97234fa9bbfe37b4e82ec12e5520868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_2b90e9c910d6fa4e189225bdf80c56a1a97234fa9bbfe37b4e82ec12e5520868->leave($__internal_2b90e9c910d6fa4e189225bdf80c56a1a97234fa9bbfe37b4e82ec12e5520868_prof);

        
        $__internal_ee1f7d7f06f03d342c404fa095bffc03dd5943dc1c260d51a2b745d1b6462f6c->leave($__internal_ee1f7d7f06f03d342c404fa095bffc03dd5943dc1c260d51a2b745d1b6462f6c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
