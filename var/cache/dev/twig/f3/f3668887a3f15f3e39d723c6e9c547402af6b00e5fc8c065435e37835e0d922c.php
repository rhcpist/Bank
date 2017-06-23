<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_24ef5875ab9380cf100cf3f7ea460ae4018b737be65a024e46a2fd248bd134a9 extends Twig_Template
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
        $__internal_293be00071e941abf77d0b6531c1ffefd174206d36df303c4c8c05f821fbb2a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293be00071e941abf77d0b6531c1ffefd174206d36df303c4c8c05f821fbb2a2->enter($__internal_293be00071e941abf77d0b6531c1ffefd174206d36df303c4c8c05f821fbb2a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_34261790e100cba4ab2cca958b35e4bb2978f64e5bc52e873d6da7b574bdbc5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34261790e100cba4ab2cca958b35e4bb2978f64e5bc52e873d6da7b574bdbc5d->enter($__internal_34261790e100cba4ab2cca958b35e4bb2978f64e5bc52e873d6da7b574bdbc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_293be00071e941abf77d0b6531c1ffefd174206d36df303c4c8c05f821fbb2a2->leave($__internal_293be00071e941abf77d0b6531c1ffefd174206d36df303c4c8c05f821fbb2a2_prof);

        
        $__internal_34261790e100cba4ab2cca958b35e4bb2978f64e5bc52e873d6da7b574bdbc5d->leave($__internal_34261790e100cba4ab2cca958b35e4bb2978f64e5bc52e873d6da7b574bdbc5d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ca14028bdf948cbe86e221c02541667bae0287fab3d043c66d56750114f7923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ca14028bdf948cbe86e221c02541667bae0287fab3d043c66d56750114f7923->enter($__internal_8ca14028bdf948cbe86e221c02541667bae0287fab3d043c66d56750114f7923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8fb9a524220c9fc2ace3de908ea202a111e9fd8417506821cc374919e38442da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fb9a524220c9fc2ace3de908ea202a111e9fd8417506821cc374919e38442da->enter($__internal_8fb9a524220c9fc2ace3de908ea202a111e9fd8417506821cc374919e38442da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_8fb9a524220c9fc2ace3de908ea202a111e9fd8417506821cc374919e38442da->leave($__internal_8fb9a524220c9fc2ace3de908ea202a111e9fd8417506821cc374919e38442da_prof);

        
        $__internal_8ca14028bdf948cbe86e221c02541667bae0287fab3d043c66d56750114f7923->leave($__internal_8ca14028bdf948cbe86e221c02541667bae0287fab3d043c66d56750114f7923_prof);

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
", "FOSUserBundle:Group:list.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
