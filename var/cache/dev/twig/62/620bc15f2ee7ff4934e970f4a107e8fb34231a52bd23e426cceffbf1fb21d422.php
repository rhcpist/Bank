<?php

/* NelmioApiDocBundle::resources.html.twig */
class __TwigTemplate_57c7392224647b115c0fe50c701051811be17f9d5b358343c6851bbed1d7c36f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NelmioApiDocBundle::layout.html.twig", "NelmioApiDocBundle::resources.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NelmioApiDocBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6d668d8d28cda83e5e4ead85b299dfbec1809b7f3e4dccc67454fc9c92aa76e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d668d8d28cda83e5e4ead85b299dfbec1809b7f3e4dccc67454fc9c92aa76e2->enter($__internal_6d668d8d28cda83e5e4ead85b299dfbec1809b7f3e4dccc67454fc9c92aa76e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resources.html.twig"));

        $__internal_3f76b9b8a7734f81a4955874565c1da430856ae2e69b662df3ae96e817a153c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f76b9b8a7734f81a4955874565c1da430856ae2e69b662df3ae96e817a153c7->enter($__internal_3f76b9b8a7734f81a4955874565c1da430856ae2e69b662df3ae96e817a153c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NelmioApiDocBundle::resources.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d668d8d28cda83e5e4ead85b299dfbec1809b7f3e4dccc67454fc9c92aa76e2->leave($__internal_6d668d8d28cda83e5e4ead85b299dfbec1809b7f3e4dccc67454fc9c92aa76e2_prof);

        
        $__internal_3f76b9b8a7734f81a4955874565c1da430856ae2e69b662df3ae96e817a153c7->leave($__internal_3f76b9b8a7734f81a4955874565c1da430856ae2e69b662df3ae96e817a153c7_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cfaef867eff3fff95f9d4c1d8c00ad96a46b8d0d0f0d0b5a5fec73dffc9ef579 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfaef867eff3fff95f9d4c1d8c00ad96a46b8d0d0f0d0b5a5fec73dffc9ef579->enter($__internal_cfaef867eff3fff95f9d4c1d8c00ad96a46b8d0d0f0d0b5a5fec73dffc9ef579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_08a7d614fe6a57f599a1d3ff66e849a9120ab9f68c1518249ee6a117738b6cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a7d614fe6a57f599a1d3ff66e849a9120ab9f68c1518249ee6a117738b6cd8->enter($__internal_08a7d614fe6a57f599a1d3ff66e849a9120ab9f68c1518249ee6a117738b6cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div id=\"summary\">
        <ul>
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 6, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["section"] => $context["sections"]) {
            // line 7
            echo "                <li><a href=\"#section-";
            echo twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["section"], "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['sections'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </ul>
    </div>
    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 11, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["section"] => $context["sections"]) {
            // line 12
            echo "        ";
            if (($context["section"] != "_others")) {
                // line 13
                echo "            <li class=\"section";
                echo (((isset($context["defaultSectionsOpened"]) || array_key_exists("defaultSectionsOpened", $context) ? $context["defaultSectionsOpened"] : (function () { throw new Twig_Error_Runtime('Variable "defaultSectionsOpened" does not exist.', 13, $this->getSourceContext()); })())) ? (" active") : (""));
                echo "\">
                <div class=\"actions\">
                    <a class=\"action-show-hide\">Show/hide</a>
                    <a class=\"action-list\">List Operations</a>
                    <a class=\"action-expand\">Expand Operations</a>
                </div>
                <h1>";
                // line 19
                echo twig_escape_filter($this->env, $context["section"], "html", null, true);
                echo "</h1>
                <ul class=\"section-list\" ";
                // line 20
                if ( !(isset($context["defaultSectionsOpened"]) || array_key_exists("defaultSectionsOpened", $context) ? $context["defaultSectionsOpened"] : (function () { throw new Twig_Error_Runtime('Variable "defaultSectionsOpened" does not exist.', 20, $this->getSourceContext()); })())) {
                    echo "style=\"display: none\"";
                }
                echo ">
        ";
            }
            // line 22
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sections"]);
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["resource"] => $context["methods"]) {
                // line 23
                echo "            <a id=\"section-";
                echo twig_escape_filter($this->env, $context["section"], "html", null, true);
                echo "\"></a>
            <li class=\"resource\">
                <div class=\"heading\">
                    ";
                // line 26
                if ((($context["section"] == "_others") && ($context["resource"] != "others"))) {
                    // line 27
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, $context["resource"], "html", null, true);
                    echo "</h2>
                    ";
                } elseif ((                // line 28
$context["resource"] != "others")) {
                    // line 29
                    echo "                        <h2>";
                    echo twig_escape_filter($this->env, $context["resource"], "html", null, true);
                    echo "</h2>
                    ";
                }
                // line 31
                echo "                </div>
                <ul class=\"endpoints\">
                    <li class=\"endpoint\">
                        <ul class=\"operations\">
                            ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["methods"]);
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 36
                    echo "                                ";
                    $this->loadTemplate("NelmioApiDocBundle::method.html.twig", "NelmioApiDocBundle::resources.html.twig", 36)->display($context);
                    // line 37
                    echo "                            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                        </ul>
                    </li>
                </ul>
            </li>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['resource'], $context['methods'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        ";
            if (($context["section"] != "_others")) {
                // line 44
                echo "                </ul>
            </li>
        ";
            }
            // line 47
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['section'], $context['sections'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_08a7d614fe6a57f599a1d3ff66e849a9120ab9f68c1518249ee6a117738b6cd8->leave($__internal_08a7d614fe6a57f599a1d3ff66e849a9120ab9f68c1518249ee6a117738b6cd8_prof);

        
        $__internal_cfaef867eff3fff95f9d4c1d8c00ad96a46b8d0d0f0d0b5a5fec73dffc9ef579->leave($__internal_cfaef867eff3fff95f9d4c1d8c00ad96a46b8d0d0f0d0b5a5fec73dffc9ef579_prof);

    }

    public function getTemplateName()
    {
        return "NelmioApiDocBundle::resources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 47,  214 => 44,  211 => 43,  193 => 38,  179 => 37,  176 => 36,  159 => 35,  153 => 31,  147 => 29,  145 => 28,  140 => 27,  138 => 26,  131 => 23,  113 => 22,  106 => 20,  102 => 19,  92 => 13,  89 => 12,  72 => 11,  68 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"NelmioApiDocBundle::layout.html.twig\" %}

{% block content %}
    <div id=\"summary\">
        <ul>
            {% for section, sections in resources  %}
                <li><a href=\"#section-{{ section }}\">{{ section }}</a></li>
            {% endfor %}
        </ul>
    </div>
    {% for section, sections in resources  %}
        {% if section != '_others' %}
            <li class=\"section{{ defaultSectionsOpened? ' active':'' }}\">
                <div class=\"actions\">
                    <a class=\"action-show-hide\">Show/hide</a>
                    <a class=\"action-list\">List Operations</a>
                    <a class=\"action-expand\">Expand Operations</a>
                </div>
                <h1>{{ section }}</h1>
                <ul class=\"section-list\" {% if not defaultSectionsOpened %}style=\"display: none\"{% endif %}>
        {% endif %}
        {% for resource, methods in sections %}
            <a id=\"section-{{ section }}\"></a>
            <li class=\"resource\">
                <div class=\"heading\">
                    {% if section == '_others' and resource != 'others' %}
                        <h2>{{ resource }}</h2>
                    {% elseif resource != 'others' %}
                        <h2>{{ resource }}</h2>
                    {% endif %}
                </div>
                <ul class=\"endpoints\">
                    <li class=\"endpoint\">
                        <ul class=\"operations\">
                            {% for data in methods %}
                                {% include 'NelmioApiDocBundle::method.html.twig' %}
                            {% endfor %}
                        </ul>
                    </li>
                </ul>
            </li>
        {% endfor %}
        {% if section != '_others' %}
                </ul>
            </li>
        {% endif %}
    {% endfor %}
{% endblock content %}
", "NelmioApiDocBundle::resources.html.twig", "/mnt/storage/private/public_html/bank/vendor/nelmio/api-doc-bundle/Nelmio/ApiDocBundle/Resources/views/resources.html.twig");
    }
}
