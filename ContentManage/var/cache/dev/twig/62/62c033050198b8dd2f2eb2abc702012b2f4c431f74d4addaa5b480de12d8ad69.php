<?php

/* catalog/edit_category.html.twig */
class __TwigTemplate_06c571b9db1695b8fd540583bd6512e3f6e8e96e3da463e13e1145cfd99445f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("accounts/base.html.twig", "catalog/edit_category.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalog/edit_category.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "catalog/edit_category.html.twig"));

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
  style=\"width: 50%; margin-left: auto; margin-right: auto; margin-top: 3%;\">

  <!-- messages -->
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "msg"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "  <div class=\"alert alert-warning alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      ";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
  </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  <!-- end messages -->

  <div class=\"container\">
    <h2>Editar Categoria</h2>
    <form action=\"/run_edit_category\" method=\"post\">
      <div class=\"form-group\">
        <label>Nome:</label>
        <input name='name' class=\"form-control\" name=\"namecategory\"
        placeholder=\"Digite o nome da nova categoria\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["name"] ?? $this->getContext($context, "name")), "html", null, true);
        echo "\">
        <input type=\"hidden\" name='id' value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\"/>
      </div>
      <button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
    </form>
  </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "catalog/edit_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 23,  82 => 22,  72 => 14,  63 => 11,  59 => 9,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
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
  style=\"width: 50%; margin-left: auto; margin-right: auto; margin-top: 3%;\">

  <!-- messages -->
  {% for message in app.flashes('msg') %}
  <div class=\"alert alert-warning alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      {{ message }}
  </div>
  {% endfor %}
  <!-- end messages -->

  <div class=\"container\">
    <h2>Editar Categoria</h2>
    <form action=\"/run_edit_category\" method=\"post\">
      <div class=\"form-group\">
        <label>Nome:</label>
        <input name='name' class=\"form-control\" name=\"namecategory\"
        placeholder=\"Digite o nome da nova categoria\" value=\"{{name}}\">
        <input type=\"hidden\" name='id' value=\"{{id}}\"/>
      </div>
      <button type=\"submit\" class=\"btn btn-primary\">Enviar</button>
    </form>
  </div>

</div>

{% endblock %}
", "catalog/edit_category.html.twig", "/home/adriano/PHP/projects/ContentManagerSymfony/ContentManage/app/Resources/views/catalog/edit_category.html.twig");
    }
}
