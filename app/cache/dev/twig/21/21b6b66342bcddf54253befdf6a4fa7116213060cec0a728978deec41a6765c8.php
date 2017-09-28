<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7ff10e27e24f904a8d7781bd6a545404d3c638bb07ad7c197419abf4d82ac840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3b597fa3ec069acbaeeea398c8f54e5180dc25450ec73946ae2775ad1ac0db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3b597fa3ec069acbaeeea398c8f54e5180dc25450ec73946ae2775ad1ac0db5->enter($__internal_c3b597fa3ec069acbaeeea398c8f54e5180dc25450ec73946ae2775ad1ac0db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3b597fa3ec069acbaeeea398c8f54e5180dc25450ec73946ae2775ad1ac0db5->leave($__internal_c3b597fa3ec069acbaeeea398c8f54e5180dc25450ec73946ae2775ad1ac0db5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8965a637976c2f18c442159bf2762819f2c6bdc33643b37024055f8637d574c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8965a637976c2f18c442159bf2762819f2c6bdc33643b37024055f8637d574c4->enter($__internal_8965a637976c2f18c442159bf2762819f2c6bdc33643b37024055f8637d574c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8965a637976c2f18c442159bf2762819f2c6bdc33643b37024055f8637d574c4->leave($__internal_8965a637976c2f18c442159bf2762819f2c6bdc33643b37024055f8637d574c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f0894db8ebe209b5f50b8fa114257994aa22a9083d7ff84897008b4e1d481d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f0894db8ebe209b5f50b8fa114257994aa22a9083d7ff84897008b4e1d481d9->enter($__internal_7f0894db8ebe209b5f50b8fa114257994aa22a9083d7ff84897008b4e1d481d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7f0894db8ebe209b5f50b8fa114257994aa22a9083d7ff84897008b4e1d481d9->leave($__internal_7f0894db8ebe209b5f50b8fa114257994aa22a9083d7ff84897008b4e1d481d9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ca28fd314285da98447c75de270052f0333cb1c532bf1e6ca5c60c173e43f671 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca28fd314285da98447c75de270052f0333cb1c532bf1e6ca5c60c173e43f671->enter($__internal_ca28fd314285da98447c75de270052f0333cb1c532bf1e6ca5c60c173e43f671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ca28fd314285da98447c75de270052f0333cb1c532bf1e6ca5c60c173e43f671->leave($__internal_ca28fd314285da98447c75de270052f0333cb1c532bf1e6ca5c60c173e43f671_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/antartida/proyectos/TFC/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
