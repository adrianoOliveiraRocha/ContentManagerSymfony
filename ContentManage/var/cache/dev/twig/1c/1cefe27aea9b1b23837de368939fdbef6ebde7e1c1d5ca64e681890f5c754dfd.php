<?php

/* accounts/base.html.twig */
class __TwigTemplate_c35665848a7bd62ab324478793f7d7eda9559b8b72fa05c7668d72ffe8e07a6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'generalcontent' => array($this, 'block_generalcontent'),
            'menu' => array($this, 'block_menu'),
            'contentpage' => array($this, 'block_contentpage'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accounts/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "accounts/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\"/>

    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
\t  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>

    <!-- extra -->
    <link href=\"https://rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/images/favicon.ico\" rel=\"icon\" type=\"image/png\"/>
    <link href=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/54efd87f/lojagrafica/css/fontello.css\" rel=\"stylesheet\" style=\"text.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lemonada\" rel=\"stylesheet\">
\t  <link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">
    <script src=\"https://rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/js/extra.js\" type=\"text/javascript\">
\t  </script>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


    <!-- DataTable -->
  \t<link rel=\"stylesheet\"
  \thref=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/css/jquery.dataTables.css\">

  \t<script src=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/js/jquery.js\"></script>

  \t<script src=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/js/jquery.dataTables.js\"></script>


  \t</script>

    <!-- DataTable -->
\t  <link rel=\"stylesheet\"
\t  href=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/css/jquery.dataTables.css\">
    <script src=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/js/jquery.js\"></script>
    <script src=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/js/jquery.dataTables.js\"></script>
    <!-- End DataTable -->

  \t<script type=\"text/javascript\" language=\"javascript\" class=\"init\">
  \t  \$(document).ready(function() {
  \t    \$('#table').DataTable({
  \t      \"language\": {
  \t            \"lengthMenu\": \"Exibindo _MENU_ registros por página\",
  \t            \"zeroRecords\": \"Nenhum registro encontrado - desculpe\",
  \t            \"info\": \"Exibindo a página _PAGE_ de _PAGES_\",
  \t            \"infoEmpty\": \"Sem registros disponíveis\",
  \t            \"infoFiltered\": \"(filtered from _MAX_ total records)\"
  \t        },
  \t        \"scrollX\": true
  \t    });
  \t  } );
  \t</script>
    <!-- End DataTable -->

  </head>
  <body>
    ";
        // line 61
        $this->displayBlock('generalcontent', $context, $blocks);
        // line 155
        echo "  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sistema Gráfica";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_generalcontent($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "generalcontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "generalcontent"));

        // line 62
        echo "    <div class=\"container-fluid\">
      <!-- menu -->
      ";
        // line 64
        $this->displayBlock('menu', $context, $blocks);
        // line 139
        echo "      <!-- end menu -->

      ";
        // line 141
        $this->displayBlock('contentpage', $context, $blocks);
        // line 144
        echo "
      ";
        // line 145
        $this->displayBlock('footer', $context, $blocks);
        // line 150
        echo "


  </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 64
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 65
        echo "      <nav class=\"navbar navbar-expand-md bg-dark navbar-dark\">
       <!-- Brand -->
       <a class=\"navbar-brand\" href=\"#\">Navbar</a>

       <!-- Toggler/collapsibe Button -->
       <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavbar\">
         <span class=\"navbar-toggler-icon\"></span>
       </button>

       <!-- Navbar links -->
       <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
         <ul class=\"navbar-nav\">
           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"/\">Ir para o site</a>
           </li>


           <li class=\"nav-item dropdown\">
      \t      <a class=\"nav-link dropdown-toggle\" href=\"#\"
      \t      id=\"navbardrop\" data-toggle=\"dropdown\">
      \t        Categorias
      \t      </a>
      \t      <div class=\"dropdown-menu\">
      \t        <a class=\"dropdown-item\"
                href=\"/new_category\" >
      \t        \tNova Categoria
      \t        </a>
        \t        <a class=\"dropdown-item\" href=\"/show_categories\">
      \t        \tExibir Categorias
      \t        </a>
              </div>
            </li>


            <li class=\"nav-item dropdown\">
       \t      <a class=\"nav-link dropdown-toggle\" href=\"#\"
       \t      id=\"navbardrop\" data-toggle=\"dropdown\">
       \t        Produtos
       \t      </a>
       \t      <div class=\"dropdown-menu\">
       \t        <a class=\"dropdown-item\" 
                  href=\"";
        // line 106
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_product");
        echo "\" >
       \t        \tNovo Produto
       \t        </a>
       \t        <a class=\"dropdown-item\" href=\"#\">
       \t        \tExibir Produtos
       \t        </a>
               </div>
             </li>


             <li class=\"nav-item dropdown\">
        \t      <a class=\"nav-link dropdown-toggle\" href=\"#\"
        \t      id=\"navbardrop\" data-toggle=\"dropdown\">
        \t        Promoções
        \t      </a>
        \t      <div class=\"dropdown-menu\">
        \t        <a class=\"dropdown-item\" href=\"#\" >
        \t        \tNova Promoção
        \t        </a>
        \t        <a class=\"dropdown-item\" href=\"#\">
        \t        \tExibir Promoções
        \t        </a>
                </div>
              </li>


           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"/logout\">Sair</a>
           </li>
         </ul>
       </div>
      </nav>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_contentpage($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentpage"));

        // line 142
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 146
        echo "      <footer class=\"fixed-bottom\">
      \tRodapé aqui
      </footer>
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "accounts/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 146,  285 => 145,  274 => 142,  265 => 141,  222 => 106,  179 => 65,  170 => 64,  156 => 150,  154 => 145,  151 => 144,  149 => 141,  145 => 139,  143 => 64,  139 => 62,  130 => 61,  112 => 6,  100 => 155,  98 => 61,  56 => 22,  37 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\"/>

    <title>{% block title %}Sistema Gráfica{% endblock %}</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\">
\t  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\"></script>

    <!-- extra -->
    <link href=\"https://rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/images/favicon.ico\" rel=\"icon\" type=\"image/png\"/>
    <link href=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/54efd87f/lojagrafica/css/fontello.css\" rel=\"stylesheet\" style=\"text.css\">
    <link href=\"https://fonts.googleapis.com/css?family=Lemonada\" rel=\"stylesheet\">
\t  <link href=\"https://fonts.googleapis.com/css?family=Indie+Flower\" rel=\"stylesheet\">
    <script src=\"https://rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/js/extra.js\" type=\"text/javascript\">
\t  </script>

    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />


    <!-- DataTable -->
  \t<link rel=\"stylesheet\"
  \thref=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/css/jquery.dataTables.css\">

  \t<script src=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/js/jquery.js\"></script>

  \t<script src=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/js/jquery.dataTables.js\"></script>


  \t</script>

    <!-- DataTable -->
\t  <link rel=\"stylesheet\"
\t  href=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/css/jquery.dataTables.css\">
    <script src=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/js/jquery.js\"></script>
    <script src=\"https://cdn.rawgit.com/adrianoOliveiraRocha/cdn/master/lojagrafica/media/js/jquery.dataTables.js\"></script>
    <!-- End DataTable -->

  \t<script type=\"text/javascript\" language=\"javascript\" class=\"init\">
  \t  \$(document).ready(function() {
  \t    \$('#table').DataTable({
  \t      \"language\": {
  \t            \"lengthMenu\": \"Exibindo _MENU_ registros por página\",
  \t            \"zeroRecords\": \"Nenhum registro encontrado - desculpe\",
  \t            \"info\": \"Exibindo a página _PAGE_ de _PAGES_\",
  \t            \"infoEmpty\": \"Sem registros disponíveis\",
  \t            \"infoFiltered\": \"(filtered from _MAX_ total records)\"
  \t        },
  \t        \"scrollX\": true
  \t    });
  \t  } );
  \t</script>
    <!-- End DataTable -->

  </head>
  <body>
    {% block generalcontent %}
    <div class=\"container-fluid\">
      <!-- menu -->
      {% block menu %}
      <nav class=\"navbar navbar-expand-md bg-dark navbar-dark\">
       <!-- Brand -->
       <a class=\"navbar-brand\" href=\"#\">Navbar</a>

       <!-- Toggler/collapsibe Button -->
       <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#collapsibleNavbar\">
         <span class=\"navbar-toggler-icon\"></span>
       </button>

       <!-- Navbar links -->
       <div class=\"collapse navbar-collapse\" id=\"collapsibleNavbar\">
         <ul class=\"navbar-nav\">
           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"/\">Ir para o site</a>
           </li>


           <li class=\"nav-item dropdown\">
      \t      <a class=\"nav-link dropdown-toggle\" href=\"#\"
      \t      id=\"navbardrop\" data-toggle=\"dropdown\">
      \t        Categorias
      \t      </a>
      \t      <div class=\"dropdown-menu\">
      \t        <a class=\"dropdown-item\"
                href=\"/new_category\" >
      \t        \tNova Categoria
      \t        </a>
        \t        <a class=\"dropdown-item\" href=\"/show_categories\">
      \t        \tExibir Categorias
      \t        </a>
              </div>
            </li>


            <li class=\"nav-item dropdown\">
       \t      <a class=\"nav-link dropdown-toggle\" href=\"#\"
       \t      id=\"navbardrop\" data-toggle=\"dropdown\">
       \t        Produtos
       \t      </a>
       \t      <div class=\"dropdown-menu\">
       \t        <a class=\"dropdown-item\" 
                  href=\"{{ path('new_product') }}\" >
       \t        \tNovo Produto
       \t        </a>
       \t        <a class=\"dropdown-item\" href=\"#\">
       \t        \tExibir Produtos
       \t        </a>
               </div>
             </li>


             <li class=\"nav-item dropdown\">
        \t      <a class=\"nav-link dropdown-toggle\" href=\"#\"
        \t      id=\"navbardrop\" data-toggle=\"dropdown\">
        \t        Promoções
        \t      </a>
        \t      <div class=\"dropdown-menu\">
        \t        <a class=\"dropdown-item\" href=\"#\" >
        \t        \tNova Promoção
        \t        </a>
        \t        <a class=\"dropdown-item\" href=\"#\">
        \t        \tExibir Promoções
        \t        </a>
                </div>
              </li>


           <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"/logout\">Sair</a>
           </li>
         </ul>
       </div>
      </nav>
      {% endblock %}
      <!-- end menu -->

      {% block contentpage %}

      {% endblock %}

      {% block footer %}
      <footer class=\"fixed-bottom\">
      \tRodapé aqui
      </footer>
      {% endblock %}



  </div>
  {% endblock %}
  </body>
</html>
", "accounts/base.html.twig", "/home/adriano/PHP/projects/ContentManagerSymfony/ContentManage/app/Resources/views/accounts/base.html.twig");
    }
}
