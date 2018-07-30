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
    
\t  <link rel=\"stylesheet\" type=\"text/css\"
      href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\">

\t  <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/jquery.min.js"), "html", null, true);
        echo "\"></script>

\t  <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- extra -->
    <!-- DataTable -->
  \t<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("datatable/jquery.dataTables.css"), "html", null, true);
        echo "\" 
    rel=\"stylesheet\" type=\"text/css\" />

  \t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("datatable/jquery.js"), "html", null, true);
        echo "\"></script>

  \t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("datatable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    

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
        // line 46
        $this->displayBlock('generalcontent', $context, $blocks);
        // line 167
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

    // line 46
    public function block_generalcontent($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "generalcontent"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "generalcontent"));

        // line 47
        echo "    <div class=\"container-fluid\">
      <!-- menu -->
      ";
        // line 49
        $this->displayBlock('menu', $context, $blocks);
        // line 151
        echo "      <!-- end menu -->

      ";
        // line 153
        $this->displayBlock('contentpage', $context, $blocks);
        // line 156
        echo "
      ";
        // line 157
        $this->displayBlock('footer', $context, $blocks);
        // line 162
        echo "


  </div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_menu($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 50
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
             <a class=\"nav-link\" href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a>
          </li>

          <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_data");
        echo "\">Minha Conta</a>
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
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_product");
        echo "\" >
       \t        \tNovo Produto
       \t        </a>
       \t        <a class=\"dropdown-item\" 
                  href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_products");
        echo "\">
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
        \t        <a class=\"dropdown-item\" 
                  href=\"";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_promotion");
        echo "\" >
        \t        \tNova Promoção
        \t        </a>
        \t        <a class=\"dropdown-item\" 
                  href=\"";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_promotions");
        echo "\">
        \t        \tExibir Promoções
        \t        </a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\"
                id=\"navbardrop\" data-toggle=\"dropdown\">
                  Tabela
                </a>
                <div class=\"dropdown-menu\">
                  <a class=\"dropdown-item\" 
                  href=\"";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("new_table");
        echo "\" >
                    Nova Tabela
                  </a>
                  <a class=\"dropdown-item\" 
                  href=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("show_tables");
        echo "\">
                    Exibir Tabelas
                  </a>
                </div>
              </li>

          <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"/\">Ir para o site</a>
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

    // line 153
    public function block_contentpage($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentpage"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contentpage"));

        // line 154
        echo "
      ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_footer($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 158
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
        return array (  345 => 158,  336 => 157,  325 => 154,  316 => 153,  289 => 134,  282 => 130,  266 => 117,  259 => 113,  242 => 99,  235 => 95,  205 => 68,  198 => 64,  182 => 50,  173 => 49,  159 => 162,  157 => 157,  154 => 156,  152 => 153,  148 => 151,  146 => 49,  142 => 47,  133 => 46,  115 => 6,  103 => 167,  101 => 46,  77 => 25,  72 => 23,  66 => 20,  59 => 16,  55 => 15,  50 => 13,  45 => 11,  37 => 6,  30 => 1,);
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
    
\t  <link rel=\"stylesheet\" type=\"text/css\"
      href=\"{{ asset('bootstrap/bootstrap.min.css') }}\">

\t  <script src=\"{{ asset('bootstrap/jquery.min.js') }}\"></script>

\t  <script src=\"{{ asset('bootstrap/popper.min.js') }}\"></script>
    <script src=\"{{ asset('bootstrap/bootstrap.min.js') }}\"></script>

    <!-- extra -->
    <!-- DataTable -->
  \t<link href=\"{{ asset('datatable/jquery.dataTables.css') }}\" 
    rel=\"stylesheet\" type=\"text/css\" />

  \t<script src=\"{{ asset('datatable/jquery.js') }}\"></script>

  \t<script src=\"{{ asset('datatable/jquery.dataTables.js') }}\"></script>
    

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
             <a class=\"nav-link\" href=\"{{ path('home') }}\">Home</a>
          </li>

          <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"{{ path('my_data') }}\">Minha Conta</a>
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
       \t        <a class=\"dropdown-item\" 
                  href=\"{{ path('show_products') }}\">
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
        \t        <a class=\"dropdown-item\" 
                  href=\"{{ path('new_promotion') }}\" >
        \t        \tNova Promoção
        \t        </a>
        \t        <a class=\"dropdown-item\" 
                  href=\"{{ path('show_promotions') }}\">
        \t        \tExibir Promoções
        \t        </a>
                </div>
              </li>

              <li class=\"nav-item dropdown\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\"
                id=\"navbardrop\" data-toggle=\"dropdown\">
                  Tabela
                </a>
                <div class=\"dropdown-menu\">
                  <a class=\"dropdown-item\" 
                  href=\"{{ path('new_table') }}\" >
                    Nova Tabela
                  </a>
                  <a class=\"dropdown-item\" 
                  href=\"{{ path('show_tables') }}\">
                    Exibir Tabelas
                  </a>
                </div>
              </li>

          <li class=\"nav-item\">
             <a class=\"nav-link\" href=\"/\">Ir para o site</a>
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
