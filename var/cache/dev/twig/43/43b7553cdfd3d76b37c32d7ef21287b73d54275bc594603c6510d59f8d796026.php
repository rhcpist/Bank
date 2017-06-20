<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_943dc79dd81e130a554c2fbbb8a5cbac4a9df18b40451def37d8256df30f133c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_8e8a64bc09f1418f1523ad745e42fe4ec4d71f3c8cf3bcc509f2422886db444c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8a64bc09f1418f1523ad745e42fe4ec4d71f3c8cf3bcc509f2422886db444c->enter($__internal_8e8a64bc09f1418f1523ad745e42fe4ec4d71f3c8cf3bcc509f2422886db444c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_22c364db775ed67a6fa00c91b3c059ad1288a70d1fe71b739912f2d9f6a377bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c364db775ed67a6fa00c91b3c059ad1288a70d1fe71b739912f2d9f6a377bb->enter($__internal_22c364db775ed67a6fa00c91b3c059ad1288a70d1fe71b739912f2d9f6a377bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e8a64bc09f1418f1523ad745e42fe4ec4d71f3c8cf3bcc509f2422886db444c->leave($__internal_8e8a64bc09f1418f1523ad745e42fe4ec4d71f3c8cf3bcc509f2422886db444c_prof);

        
        $__internal_22c364db775ed67a6fa00c91b3c059ad1288a70d1fe71b739912f2d9f6a377bb->leave($__internal_22c364db775ed67a6fa00c91b3c059ad1288a70d1fe71b739912f2d9f6a377bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc26905dcff7bdfd8b736a97231e307e09de45e4f22c5f0b1e608dda5c1a114c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc26905dcff7bdfd8b736a97231e307e09de45e4f22c5f0b1e608dda5c1a114c->enter($__internal_bc26905dcff7bdfd8b736a97231e307e09de45e4f22c5f0b1e608dda5c1a114c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a867b5017c36128ee74617c5b6865f007eebd7d925e5804869ecc9bf73848946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a867b5017c36128ee74617c5b6865f007eebd7d925e5804869ecc9bf73848946->enter($__internal_a867b5017c36128ee74617c5b6865f007eebd7d925e5804869ecc9bf73848946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_a867b5017c36128ee74617c5b6865f007eebd7d925e5804869ecc9bf73848946->leave($__internal_a867b5017c36128ee74617c5b6865f007eebd7d925e5804869ecc9bf73848946_prof);

        
        $__internal_bc26905dcff7bdfd8b736a97231e307e09de45e4f22c5f0b1e608dda5c1a114c->leave($__internal_bc26905dcff7bdfd8b736a97231e307e09de45e4f22c5f0b1e608dda5c1a114c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
