<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7d303d92b7b5eae4219cb4b1fb10e2a9aa8dc2255e003a72a371f80d63c24899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_c8c9c968acaa0ae368f52306c8044181db2c1395fb9fdb79f6ff98706c36cf9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8c9c968acaa0ae368f52306c8044181db2c1395fb9fdb79f6ff98706c36cf9f->enter($__internal_c8c9c968acaa0ae368f52306c8044181db2c1395fb9fdb79f6ff98706c36cf9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_caf6868cd623d20336237d845bf3ce05358b46fd38ddb6843588d539fb4f8c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caf6868cd623d20336237d845bf3ce05358b46fd38ddb6843588d539fb4f8c47->enter($__internal_caf6868cd623d20336237d845bf3ce05358b46fd38ddb6843588d539fb4f8c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8c9c968acaa0ae368f52306c8044181db2c1395fb9fdb79f6ff98706c36cf9f->leave($__internal_c8c9c968acaa0ae368f52306c8044181db2c1395fb9fdb79f6ff98706c36cf9f_prof);

        
        $__internal_caf6868cd623d20336237d845bf3ce05358b46fd38ddb6843588d539fb4f8c47->leave($__internal_caf6868cd623d20336237d845bf3ce05358b46fd38ddb6843588d539fb4f8c47_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ba127223893739cf120984290a7cdb59982ff1e82c6c887638a8a850a6271676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba127223893739cf120984290a7cdb59982ff1e82c6c887638a8a850a6271676->enter($__internal_ba127223893739cf120984290a7cdb59982ff1e82c6c887638a8a850a6271676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7df1da9c6a64a2cf0bff140564481358bf85a757e6011be0120d21b511c501e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df1da9c6a64a2cf0bff140564481358bf85a757e6011be0120d21b511c501e5->enter($__internal_7df1da9c6a64a2cf0bff140564481358bf85a757e6011be0120d21b511c501e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_7df1da9c6a64a2cf0bff140564481358bf85a757e6011be0120d21b511c501e5->leave($__internal_7df1da9c6a64a2cf0bff140564481358bf85a757e6011be0120d21b511c501e5_prof);

        
        $__internal_ba127223893739cf120984290a7cdb59982ff1e82c6c887638a8a850a6271676->leave($__internal_ba127223893739cf120984290a7cdb59982ff1e82c6c887638a8a850a6271676_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/mnt/storage/private/public_html/bank/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
