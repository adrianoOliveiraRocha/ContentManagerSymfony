<?php

/* accounts/admin.html.twig */
class __TwigTemplate_bfe065c9ddb630c8d04c9abc6b2e1dc2011812a005bc1aa005243056d434110c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("accounts/base.html.twig", "accounts/admin.html.twig", 1);
        $this->blocks = array(
            'contentpage' => array($this, 'block_contentpage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "accounts/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accounts/admin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accounts/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_contentpage($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentpage"));

        // line 4
        echo "<div class=\"panel panel-default form-central\"
\tstyle=\"width: 70%; margin-left: auto; margin-right: auto; margin-top: 3%;\">
\t<h3>Área Administrativa -> Home</h3>
\t<p></p>
\t<table id=\"table\" class=\"display\">

\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Nome</th>
\t\t\t\t<th>Imagem</th>
\t\t\t\t
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 20
            echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit_product", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"
\t\t\t\t\t title=\"Detalhes\">
\t\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/images/thumb/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "image", array()), "html", null, true);
            echo "\"></td>
\t\t\t
\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

\t\t</tbody>
\t</table>
\t


</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accounts/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 32,  89 => 28,  85 => 27,  79 => 24,  74 => 22,  70 => 20,  66 => 19,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'accounts/base.html.twig' %}

{% block contentpage %}
<div class=\"panel panel-default form-central\"
\tstyle=\"width: 70%; margin-left: auto; margin-right: auto; margin-top: 3%;\">
\t<h3>Área Administrativa -> Home</h3>
\t<p></p>
\t<table id=\"table\" class=\"display\">

\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>ID</th>
\t\t\t\t<th>Nome</th>
\t\t\t\t<th>Imagem</th>
\t\t\t\t
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t\t{% for product in products %}
\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t<a href=\"{{ path('edit_product', {'id': product.id}) }}\"
\t\t\t\t\t title=\"Detalhes\">
\t\t\t\t\t{{ product.id }}
\t\t\t\t\t</a>
\t\t\t\t</td>
\t\t\t\t<td>{{ product.name }}</td>
\t\t\t\t<td><img src=\"{{ asset('uploads/images/thumb/') }}{{ product.image }}\"></td>
\t\t\t
\t\t\t</tr>
\t\t\t{% endfor %}


\t\t</tbody>
\t</table>
\t


</div>
{% endblock %}
", "accounts/admin.html.twig", "/home/adriano/PHP/projects/ContentManagerSymfony/ContentManage/app/Resources/views/accounts/admin.html.twig");
    }
}
