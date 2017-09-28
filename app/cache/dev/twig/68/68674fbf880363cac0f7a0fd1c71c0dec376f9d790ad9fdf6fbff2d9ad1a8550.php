<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_d818d1d04693b28c11d89c98bc1f80881281cf844a201ab728aa1f6478d2a27a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_ed5509ca2b234f6f5c9f456a8dfbdc9275e1a1cc4390415b9313ee709dfdb8ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed5509ca2b234f6f5c9f456a8dfbdc9275e1a1cc4390415b9313ee709dfdb8ca->enter($__internal_ed5509ca2b234f6f5c9f456a8dfbdc9275e1a1cc4390415b9313ee709dfdb8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed5509ca2b234f6f5c9f456a8dfbdc9275e1a1cc4390415b9313ee709dfdb8ca->leave($__internal_ed5509ca2b234f6f5c9f456a8dfbdc9275e1a1cc4390415b9313ee709dfdb8ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a0283834ccab0822d047a0047576d86adf2c5a5960e9236f317aaef21087541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0283834ccab0822d047a0047576d86adf2c5a5960e9236f317aaef21087541->enter($__internal_8a0283834ccab0822d047a0047576d86adf2c5a5960e9236f317aaef21087541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_8a0283834ccab0822d047a0047576d86adf2c5a5960e9236f317aaef21087541->leave($__internal_8a0283834ccab0822d047a0047576d86adf2c5a5960e9236f317aaef21087541_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/antartida/proyectos/TFC/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
