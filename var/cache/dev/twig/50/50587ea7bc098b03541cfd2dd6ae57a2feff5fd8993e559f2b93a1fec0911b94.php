<?php

/* base.html.twig */
class __TwigTemplate_edbe3be9d4dc3618bede9aef6240e30e2e40cf8d3078397ea0f7b10a9a5a9da4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_04e3adb6c7b52c95a0cb6d4712610ad95d25e2b2a0895ae6c362854554a55d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04e3adb6c7b52c95a0cb6d4712610ad95d25e2b2a0895ae6c362854554a55d3f->enter($__internal_04e3adb6c7b52c95a0cb6d4712610ad95d25e2b2a0895ae6c362854554a55d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4829627f905a27105d9c9fd7b5703ea68891f0d3feb0f14b067f9c7afbbfb893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4829627f905a27105d9c9fd7b5703ea68891f0d3feb0f14b067f9c7afbbfb893->enter($__internal_4829627f905a27105d9c9fd7b5703ea68891f0d3feb0f14b067f9c7afbbfb893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_04e3adb6c7b52c95a0cb6d4712610ad95d25e2b2a0895ae6c362854554a55d3f->leave($__internal_04e3adb6c7b52c95a0cb6d4712610ad95d25e2b2a0895ae6c362854554a55d3f_prof);

        
        $__internal_4829627f905a27105d9c9fd7b5703ea68891f0d3feb0f14b067f9c7afbbfb893->leave($__internal_4829627f905a27105d9c9fd7b5703ea68891f0d3feb0f14b067f9c7afbbfb893_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ecd09619203f8b33a697887433b7dfb8357f4295d173e42601eb047589e1c44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ecd09619203f8b33a697887433b7dfb8357f4295d173e42601eb047589e1c44->enter($__internal_0ecd09619203f8b33a697887433b7dfb8357f4295d173e42601eb047589e1c44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a1e7d9377957d20076ec10d58120a554ee87c9a5496f07fee51d84293d786bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e7d9377957d20076ec10d58120a554ee87c9a5496f07fee51d84293d786bf4->enter($__internal_a1e7d9377957d20076ec10d58120a554ee87c9a5496f07fee51d84293d786bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1e7d9377957d20076ec10d58120a554ee87c9a5496f07fee51d84293d786bf4->leave($__internal_a1e7d9377957d20076ec10d58120a554ee87c9a5496f07fee51d84293d786bf4_prof);

        
        $__internal_0ecd09619203f8b33a697887433b7dfb8357f4295d173e42601eb047589e1c44->leave($__internal_0ecd09619203f8b33a697887433b7dfb8357f4295d173e42601eb047589e1c44_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_625a82b7de4aed380567b7f9bb4536b00199d3f0182c9a739ae5abb4ea31af27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_625a82b7de4aed380567b7f9bb4536b00199d3f0182c9a739ae5abb4ea31af27->enter($__internal_625a82b7de4aed380567b7f9bb4536b00199d3f0182c9a739ae5abb4ea31af27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_189874364109b92ec49b1ea35584edb64faa5fe2f92875dd51ba683531de4c3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189874364109b92ec49b1ea35584edb64faa5fe2f92875dd51ba683531de4c3e->enter($__internal_189874364109b92ec49b1ea35584edb64faa5fe2f92875dd51ba683531de4c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_189874364109b92ec49b1ea35584edb64faa5fe2f92875dd51ba683531de4c3e->leave($__internal_189874364109b92ec49b1ea35584edb64faa5fe2f92875dd51ba683531de4c3e_prof);

        
        $__internal_625a82b7de4aed380567b7f9bb4536b00199d3f0182c9a739ae5abb4ea31af27->leave($__internal_625a82b7de4aed380567b7f9bb4536b00199d3f0182c9a739ae5abb4ea31af27_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_915913e3b792e1e73cf5352a91fa1bf934b7f5b1bceb805fa8cc3575546f48d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915913e3b792e1e73cf5352a91fa1bf934b7f5b1bceb805fa8cc3575546f48d0->enter($__internal_915913e3b792e1e73cf5352a91fa1bf934b7f5b1bceb805fa8cc3575546f48d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac9d380e7a2ecee0c1d0363a29b94bcc0097daa3c00b5d30dc7e25cd4ebfa985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac9d380e7a2ecee0c1d0363a29b94bcc0097daa3c00b5d30dc7e25cd4ebfa985->enter($__internal_ac9d380e7a2ecee0c1d0363a29b94bcc0097daa3c00b5d30dc7e25cd4ebfa985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ac9d380e7a2ecee0c1d0363a29b94bcc0097daa3c00b5d30dc7e25cd4ebfa985->leave($__internal_ac9d380e7a2ecee0c1d0363a29b94bcc0097daa3c00b5d30dc7e25cd4ebfa985_prof);

        
        $__internal_915913e3b792e1e73cf5352a91fa1bf934b7f5b1bceb805fa8cc3575546f48d0->leave($__internal_915913e3b792e1e73cf5352a91fa1bf934b7f5b1bceb805fa8cc3575546f48d0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0263bbbf4f6e7414413e84854c404839def11a588be3436949f4666fd0683a43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0263bbbf4f6e7414413e84854c404839def11a588be3436949f4666fd0683a43->enter($__internal_0263bbbf4f6e7414413e84854c404839def11a588be3436949f4666fd0683a43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c79dbe68020306324ffd3826b39fa0b8aee9bdc64fb5dcb9128f13fe9544f772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c79dbe68020306324ffd3826b39fa0b8aee9bdc64fb5dcb9128f13fe9544f772->enter($__internal_c79dbe68020306324ffd3826b39fa0b8aee9bdc64fb5dcb9128f13fe9544f772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c79dbe68020306324ffd3826b39fa0b8aee9bdc64fb5dcb9128f13fe9544f772->leave($__internal_c79dbe68020306324ffd3826b39fa0b8aee9bdc64fb5dcb9128f13fe9544f772_prof);

        
        $__internal_0263bbbf4f6e7414413e84854c404839def11a588be3436949f4666fd0683a43->leave($__internal_0263bbbf4f6e7414413e84854c404839def11a588be3436949f4666fd0683a43_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/views/base.html.twig");
    }
}
