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
        $__internal_6403541965e8f88fef6f0239e302de9081236632079a2cc91b9640df519b8d21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6403541965e8f88fef6f0239e302de9081236632079a2cc91b9640df519b8d21->enter($__internal_6403541965e8f88fef6f0239e302de9081236632079a2cc91b9640df519b8d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_ec7b7e5d4d2f8b27230379bc5edad7fbfccae4605e0260ce77d55d47f6d66546 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7b7e5d4d2f8b27230379bc5edad7fbfccae4605e0260ce77d55d47f6d66546->enter($__internal_ec7b7e5d4d2f8b27230379bc5edad7fbfccae4605e0260ce77d55d47f6d66546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6403541965e8f88fef6f0239e302de9081236632079a2cc91b9640df519b8d21->leave($__internal_6403541965e8f88fef6f0239e302de9081236632079a2cc91b9640df519b8d21_prof);

        
        $__internal_ec7b7e5d4d2f8b27230379bc5edad7fbfccae4605e0260ce77d55d47f6d66546->leave($__internal_ec7b7e5d4d2f8b27230379bc5edad7fbfccae4605e0260ce77d55d47f6d66546_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f4584d84a6647a8982348658d7e9ddcf0be6e5e266fb1600962876e24e951294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4584d84a6647a8982348658d7e9ddcf0be6e5e266fb1600962876e24e951294->enter($__internal_f4584d84a6647a8982348658d7e9ddcf0be6e5e266fb1600962876e24e951294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_48b45290fb017e03ad94e5f93fc346f77b16843c9b57826c3341db8403ad2b63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48b45290fb017e03ad94e5f93fc346f77b16843c9b57826c3341db8403ad2b63->enter($__internal_48b45290fb017e03ad94e5f93fc346f77b16843c9b57826c3341db8403ad2b63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_48b45290fb017e03ad94e5f93fc346f77b16843c9b57826c3341db8403ad2b63->leave($__internal_48b45290fb017e03ad94e5f93fc346f77b16843c9b57826c3341db8403ad2b63_prof);

        
        $__internal_f4584d84a6647a8982348658d7e9ddcf0be6e5e266fb1600962876e24e951294->leave($__internal_f4584d84a6647a8982348658d7e9ddcf0be6e5e266fb1600962876e24e951294_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8af3c9d38c3294a37d9e6b21a6899590d8c4853cb74c66aa53190f903498e251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af3c9d38c3294a37d9e6b21a6899590d8c4853cb74c66aa53190f903498e251->enter($__internal_8af3c9d38c3294a37d9e6b21a6899590d8c4853cb74c66aa53190f903498e251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4c8ac9f2013ebd871a14bdf8e3608457dad71cbd276344f39c9e5af5078b2993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8ac9f2013ebd871a14bdf8e3608457dad71cbd276344f39c9e5af5078b2993->enter($__internal_4c8ac9f2013ebd871a14bdf8e3608457dad71cbd276344f39c9e5af5078b2993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_4c8ac9f2013ebd871a14bdf8e3608457dad71cbd276344f39c9e5af5078b2993->leave($__internal_4c8ac9f2013ebd871a14bdf8e3608457dad71cbd276344f39c9e5af5078b2993_prof);

        
        $__internal_8af3c9d38c3294a37d9e6b21a6899590d8c4853cb74c66aa53190f903498e251->leave($__internal_8af3c9d38c3294a37d9e6b21a6899590d8c4853cb74c66aa53190f903498e251_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8b62be925fbd3e8f76e159584634acb5fee4d443c82484a9795ddd631a55e5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8b62be925fbd3e8f76e159584634acb5fee4d443c82484a9795ddd631a55e5a->enter($__internal_c8b62be925fbd3e8f76e159584634acb5fee4d443c82484a9795ddd631a55e5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e634f965d3883c91bf4430890db54043dd15384c5aaa1a8fcc6ace97e5d80689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e634f965d3883c91bf4430890db54043dd15384c5aaa1a8fcc6ace97e5d80689->enter($__internal_e634f965d3883c91bf4430890db54043dd15384c5aaa1a8fcc6ace97e5d80689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_e634f965d3883c91bf4430890db54043dd15384c5aaa1a8fcc6ace97e5d80689->leave($__internal_e634f965d3883c91bf4430890db54043dd15384c5aaa1a8fcc6ace97e5d80689_prof);

        
        $__internal_c8b62be925fbd3e8f76e159584634acb5fee4d443c82484a9795ddd631a55e5a->leave($__internal_c8b62be925fbd3e8f76e159584634acb5fee4d443c82484a9795ddd631a55e5a_prof);

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
