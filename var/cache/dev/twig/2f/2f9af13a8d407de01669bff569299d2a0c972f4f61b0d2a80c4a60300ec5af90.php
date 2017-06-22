<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_418b4333062fa9476784ca8167f14f2edbb795fdb302be9389853e6d98be0b9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4f07bb306656f666da472ed51407d2c3e2b7f4fab43aefd7aa1f5336410266e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4f07bb306656f666da472ed51407d2c3e2b7f4fab43aefd7aa1f5336410266e->enter($__internal_f4f07bb306656f666da472ed51407d2c3e2b7f4fab43aefd7aa1f5336410266e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_0ed7496492dc6456e8d6132dc888c788d3efd788a456a08f61455b873e2144f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed7496492dc6456e8d6132dc888c788d3efd788a456a08f61455b873e2144f5->enter($__internal_0ed7496492dc6456e8d6132dc888c788d3efd788a456a08f61455b873e2144f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f07bb306656f666da472ed51407d2c3e2b7f4fab43aefd7aa1f5336410266e->leave($__internal_f4f07bb306656f666da472ed51407d2c3e2b7f4fab43aefd7aa1f5336410266e_prof);

        
        $__internal_0ed7496492dc6456e8d6132dc888c788d3efd788a456a08f61455b873e2144f5->leave($__internal_0ed7496492dc6456e8d6132dc888c788d3efd788a456a08f61455b873e2144f5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b1015e3677442bb980697a77d3eed0cfd7eac38f170674d27924cfc021cb41ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1015e3677442bb980697a77d3eed0cfd7eac38f170674d27924cfc021cb41ea->enter($__internal_b1015e3677442bb980697a77d3eed0cfd7eac38f170674d27924cfc021cb41ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8cdaa86721b5d3b5bbdbb6fcee5c3c2c1b65d325c39fbd7e7b9cb61f8d2c7788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdaa86721b5d3b5bbdbb6fcee5c3c2c1b65d325c39fbd7e7b9cb61f8d2c7788->enter($__internal_8cdaa86721b5d3b5bbdbb6fcee5c3c2c1b65d325c39fbd7e7b9cb61f8d2c7788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div>
        ";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
            <a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
            </a>
        ";
        } else {
            // line 12
            echo "            <!--<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>-->
        ";
        }
        // line 14
        echo "    </div>

    ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 18
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 19
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 20
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        // line 25
        echo "
    <div>
        ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "    </div>

";
        
        $__internal_8cdaa86721b5d3b5bbdbb6fcee5c3c2c1b65d325c39fbd7e7b9cb61f8d2c7788->leave($__internal_8cdaa86721b5d3b5bbdbb6fcee5c3c2c1b65d325c39fbd7e7b9cb61f8d2c7788_prof);

        
        $__internal_b1015e3677442bb980697a77d3eed0cfd7eac38f170674d27924cfc021cb41ea->leave($__internal_b1015e3677442bb980697a77d3eed0cfd7eac38f170674d27924cfc021cb41ea_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59fc5e69cc2bd7e691072485cf5c5df121fd877293bc0781ffe3f75509284c0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59fc5e69cc2bd7e691072485cf5c5df121fd877293bc0781ffe3f75509284c0d->enter($__internal_59fc5e69cc2bd7e691072485cf5c5df121fd877293bc0781ffe3f75509284c0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e961ee14a8ef869a3d3f7ec3d07f301005129dbe8e8dd5398b4922c95578d1e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e961ee14a8ef869a3d3f7ec3d07f301005129dbe8e8dd5398b4922c95578d1e1->enter($__internal_e961ee14a8ef869a3d3f7ec3d07f301005129dbe8e8dd5398b4922c95578d1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "        ";
        
        $__internal_e961ee14a8ef869a3d3f7ec3d07f301005129dbe8e8dd5398b4922c95578d1e1->leave($__internal_e961ee14a8ef869a3d3f7ec3d07f301005129dbe8e8dd5398b4922c95578d1e1_prof);

        
        $__internal_59fc5e69cc2bd7e691072485cf5c5df121fd877293bc0781ffe3f75509284c0d->leave($__internal_59fc5e69cc2bd7e691072485cf5c5df121fd877293bc0781ffe3f75509284c0d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 28,  136 => 27,  124 => 29,  122 => 27,  118 => 25,  115 => 24,  109 => 23,  100 => 20,  95 => 19,  90 => 18,  85 => 17,  83 => 16,  79 => 14,  71 => 12,  65 => 9,  61 => 8,  56 => 7,  54 => 6,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}

{% block content %}

    <div>
        {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
            {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
            <a href=\"{{ path('fos_user_security_logout') }}\">
                {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
            </a>
        {% else %}
            <!--<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>-->
        {% endif %}
    </div>

    {% if app.request.hasPreviousSession %}
        {% for type, messages in app.session.flashbag.all() %}
            {% for message in messages %}
                <div class=\"flash-{{ type }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
    {% endif %}

    <div>
        {% block fos_user_content %}
        {% endblock fos_user_content %}
    </div>

{% endblock %}", "@FOSUser/layout.html.twig", "/mnt/storage/private/public_html/bank/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
