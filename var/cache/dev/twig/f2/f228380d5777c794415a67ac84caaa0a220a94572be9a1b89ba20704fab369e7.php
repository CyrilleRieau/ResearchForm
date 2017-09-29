<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4474101226d255a74a7722c10385d40bcfba8957126e175f8449abe3558173aa extends Twig_Template
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
        $__internal_428f4ba45be6f86c969e95628be2f4c0e070366636e1e88cbc68e5345593a048 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428f4ba45be6f86c969e95628be2f4c0e070366636e1e88cbc68e5345593a048->enter($__internal_428f4ba45be6f86c969e95628be2f4c0e070366636e1e88cbc68e5345593a048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_f925d2df92ae06e9664cd4804144cfed87efe4f5bca4e229f616d57247c2c05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f925d2df92ae06e9664cd4804144cfed87efe4f5bca4e229f616d57247c2c05e->enter($__internal_f925d2df92ae06e9664cd4804144cfed87efe4f5bca4e229f616d57247c2c05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_428f4ba45be6f86c969e95628be2f4c0e070366636e1e88cbc68e5345593a048->leave($__internal_428f4ba45be6f86c969e95628be2f4c0e070366636e1e88cbc68e5345593a048_prof);

        
        $__internal_f925d2df92ae06e9664cd4804144cfed87efe4f5bca4e229f616d57247c2c05e->leave($__internal_f925d2df92ae06e9664cd4804144cfed87efe4f5bca4e229f616d57247c2c05e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d3f9e2fbc3ee1833577b9e31fe17f11d126b3af819d763ce783b5e98a100e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3f9e2fbc3ee1833577b9e31fe17f11d126b3af819d763ce783b5e98a100e79->enter($__internal_6d3f9e2fbc3ee1833577b9e31fe17f11d126b3af819d763ce783b5e98a100e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2a549be9a4f467a34fa7d7050d8cccc3fbdc4cfec99c1fb02338f098158bbecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a549be9a4f467a34fa7d7050d8cccc3fbdc4cfec99c1fb02338f098158bbecf->enter($__internal_2a549be9a4f467a34fa7d7050d8cccc3fbdc4cfec99c1fb02338f098158bbecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a549be9a4f467a34fa7d7050d8cccc3fbdc4cfec99c1fb02338f098158bbecf->leave($__internal_2a549be9a4f467a34fa7d7050d8cccc3fbdc4cfec99c1fb02338f098158bbecf_prof);

        
        $__internal_6d3f9e2fbc3ee1833577b9e31fe17f11d126b3af819d763ce783b5e98a100e79->leave($__internal_6d3f9e2fbc3ee1833577b9e31fe17f11d126b3af819d763ce783b5e98a100e79_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_084ccea1889a0b9f91661e9fd8cf11c19d2adda5192f943cc7764181a5ec4067 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_084ccea1889a0b9f91661e9fd8cf11c19d2adda5192f943cc7764181a5ec4067->enter($__internal_084ccea1889a0b9f91661e9fd8cf11c19d2adda5192f943cc7764181a5ec4067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_df1312171696c5ca5f92cecd6e3a65ff5434bff816aa2c3e7c0a5ffc7003341c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1312171696c5ca5f92cecd6e3a65ff5434bff816aa2c3e7c0a5ffc7003341c->enter($__internal_df1312171696c5ca5f92cecd6e3a65ff5434bff816aa2c3e7c0a5ffc7003341c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df1312171696c5ca5f92cecd6e3a65ff5434bff816aa2c3e7c0a5ffc7003341c->leave($__internal_df1312171696c5ca5f92cecd6e3a65ff5434bff816aa2c3e7c0a5ffc7003341c_prof);

        
        $__internal_084ccea1889a0b9f91661e9fd8cf11c19d2adda5192f943cc7764181a5ec4067->leave($__internal_084ccea1889a0b9f91661e9fd8cf11c19d2adda5192f943cc7764181a5ec4067_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea4f714473847ce0a0a8529b6268a21a575a95c243f355838c95ef852835c3e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea4f714473847ce0a0a8529b6268a21a575a95c243f355838c95ef852835c3e8->enter($__internal_ea4f714473847ce0a0a8529b6268a21a575a95c243f355838c95ef852835c3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fb37678ec00e510d889ace39398a9287cef3efbdadca574300796525f99309a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb37678ec00e510d889ace39398a9287cef3efbdadca574300796525f99309a8->enter($__internal_fb37678ec00e510d889ace39398a9287cef3efbdadca574300796525f99309a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fb37678ec00e510d889ace39398a9287cef3efbdadca574300796525f99309a8->leave($__internal_fb37678ec00e510d889ace39398a9287cef3efbdadca574300796525f99309a8_prof);

        
        $__internal_ea4f714473847ce0a0a8529b6268a21a575a95c243f355838c95ef852835c3e8->leave($__internal_ea4f714473847ce0a0a8529b6268a21a575a95c243f355838c95ef852835c3e8_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/home/rieau/dev/ResearchForm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
