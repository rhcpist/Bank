<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_d147f2412b292057079e67460174e9a72eeadc96f4167401473c2bff2a7ceaa0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_e969bd518672f578a66b196d156fad84150831e6b78ccb534fbf1abe29b7304a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e969bd518672f578a66b196d156fad84150831e6b78ccb534fbf1abe29b7304a->enter($__internal_e969bd518672f578a66b196d156fad84150831e6b78ccb534fbf1abe29b7304a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_8e433932b6301dc84bb5a4ac244064a35b8dd27f128e625e3f44171c75df16ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e433932b6301dc84bb5a4ac244064a35b8dd27f128e625e3f44171c75df16ac->enter($__internal_8e433932b6301dc84bb5a4ac244064a35b8dd27f128e625e3f44171c75df16ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e969bd518672f578a66b196d156fad84150831e6b78ccb534fbf1abe29b7304a->leave($__internal_e969bd518672f578a66b196d156fad84150831e6b78ccb534fbf1abe29b7304a_prof);

        
        $__internal_8e433932b6301dc84bb5a4ac244064a35b8dd27f128e625e3f44171c75df16ac->leave($__internal_8e433932b6301dc84bb5a4ac244064a35b8dd27f128e625e3f44171c75df16ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a436cc763d700835dd57477f933c6dd7b511e6da0669c1b6bf1a94c68f2bd9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a436cc763d700835dd57477f933c6dd7b511e6da0669c1b6bf1a94c68f2bd9b->enter($__internal_3a436cc763d700835dd57477f933c6dd7b511e6da0669c1b6bf1a94c68f2bd9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_11a959d00315b08ceaf1b2dcd7262e893c891d31fa0137f5e270d8b76cefe7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11a959d00315b08ceaf1b2dcd7262e893c891d31fa0137f5e270d8b76cefe7f5->enter($__internal_11a959d00315b08ceaf1b2dcd7262e893c891d31fa0137f5e270d8b76cefe7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_11a959d00315b08ceaf1b2dcd7262e893c891d31fa0137f5e270d8b76cefe7f5->leave($__internal_11a959d00315b08ceaf1b2dcd7262e893c891d31fa0137f5e270d8b76cefe7f5_prof);

        
        $__internal_3a436cc763d700835dd57477f933c6dd7b511e6da0669c1b6bf1a94c68f2bd9b->leave($__internal_3a436cc763d700835dd57477f933c6dd7b511e6da0669c1b6bf1a94c68f2bd9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
