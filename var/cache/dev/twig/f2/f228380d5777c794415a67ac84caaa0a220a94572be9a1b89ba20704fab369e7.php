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
        $__internal_a0f0b4289c47b9b1e856601f68853be0518fe34c474077573de5a1e236a59a6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0f0b4289c47b9b1e856601f68853be0518fe34c474077573de5a1e236a59a6e->enter($__internal_a0f0b4289c47b9b1e856601f68853be0518fe34c474077573de5a1e236a59a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b7aab476db2cd1453defd64558d217700844c8c87a05dc5143e065ac091ac5d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7aab476db2cd1453defd64558d217700844c8c87a05dc5143e065ac091ac5d3->enter($__internal_b7aab476db2cd1453defd64558d217700844c8c87a05dc5143e065ac091ac5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0f0b4289c47b9b1e856601f68853be0518fe34c474077573de5a1e236a59a6e->leave($__internal_a0f0b4289c47b9b1e856601f68853be0518fe34c474077573de5a1e236a59a6e_prof);

        
        $__internal_b7aab476db2cd1453defd64558d217700844c8c87a05dc5143e065ac091ac5d3->leave($__internal_b7aab476db2cd1453defd64558d217700844c8c87a05dc5143e065ac091ac5d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0aa03edb09739966997e8640bced6ffc40b4b866ce3f0485fc886e56a80d8d55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa03edb09739966997e8640bced6ffc40b4b866ce3f0485fc886e56a80d8d55->enter($__internal_0aa03edb09739966997e8640bced6ffc40b4b866ce3f0485fc886e56a80d8d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b4a4791e250a7d374597907c3ba22f305da60453cc486ba9d1dacb123864c2d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a4791e250a7d374597907c3ba22f305da60453cc486ba9d1dacb123864c2d9->enter($__internal_b4a4791e250a7d374597907c3ba22f305da60453cc486ba9d1dacb123864c2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b4a4791e250a7d374597907c3ba22f305da60453cc486ba9d1dacb123864c2d9->leave($__internal_b4a4791e250a7d374597907c3ba22f305da60453cc486ba9d1dacb123864c2d9_prof);

        
        $__internal_0aa03edb09739966997e8640bced6ffc40b4b866ce3f0485fc886e56a80d8d55->leave($__internal_0aa03edb09739966997e8640bced6ffc40b4b866ce3f0485fc886e56a80d8d55_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1fdb960c306a0cb29897d4f3fd41cac818850576c9519b9ef8dad24033f5ea2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fdb960c306a0cb29897d4f3fd41cac818850576c9519b9ef8dad24033f5ea2b->enter($__internal_1fdb960c306a0cb29897d4f3fd41cac818850576c9519b9ef8dad24033f5ea2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f9530790952ab953f6533a3e3c5a6486d8ba8ece5f65cb0e6dfb8de0d3419815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9530790952ab953f6533a3e3c5a6486d8ba8ece5f65cb0e6dfb8de0d3419815->enter($__internal_f9530790952ab953f6533a3e3c5a6486d8ba8ece5f65cb0e6dfb8de0d3419815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9530790952ab953f6533a3e3c5a6486d8ba8ece5f65cb0e6dfb8de0d3419815->leave($__internal_f9530790952ab953f6533a3e3c5a6486d8ba8ece5f65cb0e6dfb8de0d3419815_prof);

        
        $__internal_1fdb960c306a0cb29897d4f3fd41cac818850576c9519b9ef8dad24033f5ea2b->leave($__internal_1fdb960c306a0cb29897d4f3fd41cac818850576c9519b9ef8dad24033f5ea2b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6a2934ea5f2e08d8a6d53a2cdfb445b5bcd0e3e58e56d162a2b089ade3ecd0aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2934ea5f2e08d8a6d53a2cdfb445b5bcd0e3e58e56d162a2b089ade3ecd0aa->enter($__internal_6a2934ea5f2e08d8a6d53a2cdfb445b5bcd0e3e58e56d162a2b089ade3ecd0aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7703fa10359573a588c907171719dcf0b6283277b0bd60464867f18fd8f045ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7703fa10359573a588c907171719dcf0b6283277b0bd60464867f18fd8f045ae->enter($__internal_7703fa10359573a588c907171719dcf0b6283277b0bd60464867f18fd8f045ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7703fa10359573a588c907171719dcf0b6283277b0bd60464867f18fd8f045ae->leave($__internal_7703fa10359573a588c907171719dcf0b6283277b0bd60464867f18fd8f045ae_prof);

        
        $__internal_6a2934ea5f2e08d8a6d53a2cdfb445b5bcd0e3e58e56d162a2b089ade3ecd0aa->leave($__internal_6a2934ea5f2e08d8a6d53a2cdfb445b5bcd0e3e58e56d162a2b089ade3ecd0aa_prof);

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
