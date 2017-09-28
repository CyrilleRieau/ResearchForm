<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a611f92a27af130951d9078fddf1bbafe1cc49e2bd58b9706ba15334252c5e8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_5ef607df54924839795c19975e2ee3167039b6e12aae72260da151277600d113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef607df54924839795c19975e2ee3167039b6e12aae72260da151277600d113->enter($__internal_5ef607df54924839795c19975e2ee3167039b6e12aae72260da151277600d113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_9b4689c28f4c4e827c92b65230c58d30f34fcc00a6884a5d82cc6df1b6a435fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4689c28f4c4e827c92b65230c58d30f34fcc00a6884a5d82cc6df1b6a435fa->enter($__internal_9b4689c28f4c4e827c92b65230c58d30f34fcc00a6884a5d82cc6df1b6a435fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ef607df54924839795c19975e2ee3167039b6e12aae72260da151277600d113->leave($__internal_5ef607df54924839795c19975e2ee3167039b6e12aae72260da151277600d113_prof);

        
        $__internal_9b4689c28f4c4e827c92b65230c58d30f34fcc00a6884a5d82cc6df1b6a435fa->leave($__internal_9b4689c28f4c4e827c92b65230c58d30f34fcc00a6884a5d82cc6df1b6a435fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9db9e44226db05dcfb7c757428ba23b33fe71da6dcce601e8645181e9d76afba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9db9e44226db05dcfb7c757428ba23b33fe71da6dcce601e8645181e9d76afba->enter($__internal_9db9e44226db05dcfb7c757428ba23b33fe71da6dcce601e8645181e9d76afba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e38f4df15875b73ba97fc28e73d319d8ed8baa4d60fe2c409d96643ce9ad67da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38f4df15875b73ba97fc28e73d319d8ed8baa4d60fe2c409d96643ce9ad67da->enter($__internal_e38f4df15875b73ba97fc28e73d319d8ed8baa4d60fe2c409d96643ce9ad67da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e38f4df15875b73ba97fc28e73d319d8ed8baa4d60fe2c409d96643ce9ad67da->leave($__internal_e38f4df15875b73ba97fc28e73d319d8ed8baa4d60fe2c409d96643ce9ad67da_prof);

        
        $__internal_9db9e44226db05dcfb7c757428ba23b33fe71da6dcce601e8645181e9d76afba->leave($__internal_9db9e44226db05dcfb7c757428ba23b33fe71da6dcce601e8645181e9d76afba_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b592a7289377ee3fa84599a9f698095f22a1bc4c26539f836fd5b5bf5c7621fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b592a7289377ee3fa84599a9f698095f22a1bc4c26539f836fd5b5bf5c7621fd->enter($__internal_b592a7289377ee3fa84599a9f698095f22a1bc4c26539f836fd5b5bf5c7621fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e718ba0cc6847182571ab5971a7ca0c7dcfb5df560ed85e95d1c3afce691ccf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e718ba0cc6847182571ab5971a7ca0c7dcfb5df560ed85e95d1c3afce691ccf9->enter($__internal_e718ba0cc6847182571ab5971a7ca0c7dcfb5df560ed85e95d1c3afce691ccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e718ba0cc6847182571ab5971a7ca0c7dcfb5df560ed85e95d1c3afce691ccf9->leave($__internal_e718ba0cc6847182571ab5971a7ca0c7dcfb5df560ed85e95d1c3afce691ccf9_prof);

        
        $__internal_b592a7289377ee3fa84599a9f698095f22a1bc4c26539f836fd5b5bf5c7621fd->leave($__internal_b592a7289377ee3fa84599a9f698095f22a1bc4c26539f836fd5b5bf5c7621fd_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_95654bacad37c71f1a189c8295a3e08721329844750906c8b03f19f4af7c0ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95654bacad37c71f1a189c8295a3e08721329844750906c8b03f19f4af7c0ee9->enter($__internal_95654bacad37c71f1a189c8295a3e08721329844750906c8b03f19f4af7c0ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d9792e05ed6f6393891ef80598bf9ccfdcc427553f763a5cbc98dc2b4f0663f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9792e05ed6f6393891ef80598bf9ccfdcc427553f763a5cbc98dc2b4f0663f7->enter($__internal_d9792e05ed6f6393891ef80598bf9ccfdcc427553f763a5cbc98dc2b4f0663f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_d9792e05ed6f6393891ef80598bf9ccfdcc427553f763a5cbc98dc2b4f0663f7->leave($__internal_d9792e05ed6f6393891ef80598bf9ccfdcc427553f763a5cbc98dc2b4f0663f7_prof);

        
        $__internal_95654bacad37c71f1a189c8295a3e08721329844750906c8b03f19f4af7c0ee9->leave($__internal_95654bacad37c71f1a189c8295a3e08721329844750906c8b03f19f4af7c0ee9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/rieau/dev/ResearchForm/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
