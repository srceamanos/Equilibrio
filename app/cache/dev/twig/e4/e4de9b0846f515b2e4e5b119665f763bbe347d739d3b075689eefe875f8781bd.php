<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c386f4cd3a394255ab8b67f75b78625f460a292b06bdecf002d0acf67fd42c7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e13400e846445b1fdb97864865f14c60bb863c9c3ccf0fdf23964ea35b77c1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13400e846445b1fdb97864865f14c60bb863c9c3ccf0fdf23964ea35b77c1b0->enter($__internal_e13400e846445b1fdb97864865f14c60bb863c9c3ccf0fdf23964ea35b77c1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e13400e846445b1fdb97864865f14c60bb863c9c3ccf0fdf23964ea35b77c1b0->leave($__internal_e13400e846445b1fdb97864865f14c60bb863c9c3ccf0fdf23964ea35b77c1b0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5fe6b8ee67e9071354817ca6ae4d3ef1abeb334dbb0ccc19a6fa437e64ece327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe6b8ee67e9071354817ca6ae4d3ef1abeb334dbb0ccc19a6fa437e64ece327->enter($__internal_5fe6b8ee67e9071354817ca6ae4d3ef1abeb334dbb0ccc19a6fa437e64ece327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5fe6b8ee67e9071354817ca6ae4d3ef1abeb334dbb0ccc19a6fa437e64ece327->leave($__internal_5fe6b8ee67e9071354817ca6ae4d3ef1abeb334dbb0ccc19a6fa437e64ece327_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f4816a54354b78eb5a8b427aece22b755096fd78ed6fa496640897aeaa3f51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f4816a54354b78eb5a8b427aece22b755096fd78ed6fa496640897aeaa3f51a->enter($__internal_8f4816a54354b78eb5a8b427aece22b755096fd78ed6fa496640897aeaa3f51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8f4816a54354b78eb5a8b427aece22b755096fd78ed6fa496640897aeaa3f51a->leave($__internal_8f4816a54354b78eb5a8b427aece22b755096fd78ed6fa496640897aeaa3f51a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6d99a15161b3e6f663200b0f07e08940b5ed4e4e5d5260816ebdaa6a630abdc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d99a15161b3e6f663200b0f07e08940b5ed4e4e5d5260816ebdaa6a630abdc6->enter($__internal_6d99a15161b3e6f663200b0f07e08940b5ed4e4e5d5260816ebdaa6a630abdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6d99a15161b3e6f663200b0f07e08940b5ed4e4e5d5260816ebdaa6a630abdc6->leave($__internal_6d99a15161b3e6f663200b0f07e08940b5ed4e4e5d5260816ebdaa6a630abdc6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/antartida/proyectos/TFC/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
