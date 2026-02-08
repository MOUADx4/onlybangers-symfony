<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* home/index.html.twig */
class __TwigTemplate_004d0f7732a8c6addb8729a598f04436 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Accueil - OnlyBangers";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<section class=\"onlybangers-hero rounded shadow-sm mb-5\">
    <br><br><br><br><br><br><br>
    <div class=\"hero-content d-flex flex-column justify-content-center align-items-center text-center\">

        <p class=\"lead mt-3 text-dark\">
            Les classiques du rap US, les nouveautés, et les analyses qui font vibrer la culture.
        </p>

        <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_view");
        yield "\" class=\"btn btn-secondary btn-lg mt-3\">
            Explorer les articles
        </a>
    </div>

</section>

<style>
.onlybangers-hero {
    height: 600px;
    border-radius: 12px;
    background: url('";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/OB.png"), "html", null, true);
        yield "') center/cover no-repeat;
    position: relative;
    overflow: hidden;
    border: 3px solid #000;
}

.hero-content {
    height: 100%;
    width: 100%;
    padding: 40px 20px;
}

.onlybangers-hero h1,
.onlybangers-hero p {
    color: #000 !important;
    text-shadow: 0 0 6px rgba(255,255,255,0.8);
}

.onlybangers-hero .btn {
    font-weight: bold;
    box-shadow: 0 0 8px rgba(0,0,0,0.3);
}

/* Bordure noire pour sections */
.section-bordered {
    border: 3px solid #000;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
}
</style>



";
        // line 61
        yield "<section class=\"mb-5 section-bordered\">
    <h2 class=\"fw-bold text-center mb-4\">🎧 Univers du Rap</h2>

    <div class=\"row text-center\">

        <div class=\"row text-center\">

   <div class=\"row text-center\">

    <div class=\"col-md-3 mb-3\">
        <div class=\"p-3 bg-dark text-white rounded shadow-sm h-100\">
            <img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/categories/oldschool.jpg"), "html", null, true);
        yield "\"
                 alt=\"Old School\"
                 class=\"img-fluid mb-3\"
                 style=\"height:150px; object-fit:contain; width:100%; background:#000; border:none;\">
            <h4 class=\"fw-bold\">Old School</h4>
            <p class=\"text-muted small\">Les racines du rap US : 2Pac, Biggie, Nas...</p>
        </div>
    </div>

    <div class=\"col-md-3 mb-3\">
        <div class=\"p-3 bg-dark text-white rounded shadow-sm h-100\">
            <img src=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/categories/newwave.jpg"), "html", null, true);
        yield "\"
                 alt=\"New Wave\"
                 class=\"img-fluid mb-3\"
                 style=\"height:150px; object-fit:contain; width:100%; background:#000; border:none;\">
            <h4 class=\"fw-bold\">New Wave</h4>
            <p class=\"text-muted small\">La nouvelle génération : Travis, Uzi, Carti...</p>
        </div>
    </div>

    <div class=\"col-md-3 mb-3\">
        <div class=\"p-3 bg-dark text-white rounded shadow-sm h-100\">
            <img src=\"";
        // line 94
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/categories/trap.jpg"), "html", null, true);
        yield "\"
                 alt=\"Trap\"
                 class=\"img-fluid mb-3\"
                 style=\"height:150px; object-fit:contain; width:100%; background:#000; border:none;\">
            <h4 class=\"fw-bold\">Trap</h4>
            <p class=\"text-muted small\">Le son lourd d’Atlanta et Memphis.</p>
        </div>
    </div>

    <div class=\"col-md-3 mb-3\">
        <div class=\"p-3 bg-dark text-white rounded shadow-sm h-100\">
            <img src=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/categories/conscious.jpg"), "html", null, true);
        yield "\"
                 alt=\"Conscious\"
                 class=\"img-fluid mb-3\"
                 style=\"height:150px; object-fit:contain; width:100%; background:#000; border:none;\">
            <h4 class=\"fw-bold\">Conscious</h4>
            <p class=\"text-muted small\">Le rap engagé : Kendrick, Cole, Joey Bada\$\$...</p>
        </div>
    </div>

</div>


</div>


    </div>
</section>


";
        // line 125
        yield "<section class=\"mb-5 section-bordered\">
    <h2 class=\"fw-bold text-center mb-4\">🏆 Top Articles</h2>

    <div class=\"row\">
        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topArticles"]) || array_key_exists("topArticles", $context) ? $context["topArticles"] : (function () { throw new RuntimeError('Variable "topArticles" does not exist.', 129, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 130
            yield "            <div class=\"col-md-4 mb-4\">
                <div class=\"card bg-dark text-white shadow-sm border-0 h-100\">

                    <img 
                        src=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("uploads/articles/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 134))) : ("images/article-default.jpg"))), "html", null, true);
            yield "\"
                        class=\"card-img-top rounded-top\"
                        style=\"height: 200px; object-fit: cover;\"
                    >

                    <div class=\"card-body text-center\">
                        <h5 class=\"fw-bold text-white\">
                            ";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 141), "html", null, true);
            yield "
                        </h5>

                        <a href=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 144)]), "html", null, true);
            yield "\"
                           class=\"btn btn-outline-light btn-sm mt-2\">
                            Lire l'article
                        </a>
                    </div>

                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 152
        if (!$context['_iterated']) {
            // line 153
            yield "            <p class=\"text-center text-muted\">Aucun article pour le moment.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "    </div>
</section>


";
        // line 160
        yield "<section class=\"mb-5 section-bordered\">
    <h2 class=\"mb-4 text-center fw-bold\">📰 Derniers articles</h2>

    <div class=\"row\">
        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 164, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 165
            yield "            <div class=\"col-md-3 mb-4\">
                <div class=\"card h-100 shadow-sm bg-dark text-white border-0\">

                    <img
                        src=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 169)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("uploads/articles/" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "image", [], "any", false, false, false, 169))) : ("images/article-default.jpg"))), "html", null, true);
            yield "\"
                        class=\"card-img-top rounded-top\"
                        alt=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 171), "html", null, true);
            yield "\"
                        style=\"height: 180px; object-fit: cover;\"
                    >

                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title fw-bold text-white\">
                            ";
            // line 177
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 177), "html", null, true);
            yield "
                        </h5>

                        <a href=\"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 180)]), "html", null, true);
            yield "\"
                           class=\"btn btn-outline-light btn-sm mt-2\">
                            Lire l'article
                        </a>
                    </div>

                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 188
        if (!$context['_iterated']) {
            // line 189
            yield "            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucun article pour le moment.</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        yield "    </div>

    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_view");
        yield "\" class=\"btn btn-secondary btn-lg\">
            Voir tous les articles →
        </a>
    </div>
</section>
<style>
.section-bordered {
    border: 3px solid #000;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
}
</style>

";
        // line 211
        yield "<section class=\"mb-5\">
    <h2 class=\"fw-bold text-center mb-4\">👑 Artistes en tendance</h2>

    <div class=\"row text-center\">

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>Drake</strong>
            </div>
        </div>

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>Kanye West</strong>
            </div>
        </div>

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>J.Cole</strong>
            </div>
        </div>

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>Playboi Carti</strong>
            </div>
        </div>

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>Travis Scott</strong>
            </div>
        </div>

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>Don Toliver</strong>
            </div>
        </div>

    </div>
</section>


";
        // line 257
        yield "<section class=\"py-5 bg-dark text-white rounded shadow-sm mb-5\">
    <h2 class=\"fw-bold text-center mb-4\">⭐ Pourquoi OnlyBangers ?</h2>

    <div class=\"row text-center\">

        <div class=\"col-md-4 mb-3\">
            <h4 class=\"fw-bold\">🎤 Passion Rap</h4>
            <p class=\"text-muted small\">Un site créé par un passionné, pour les passionnés.</p>
        </div>

        <div class=\"col-md-4 mb-3\">
            <h4 class=\"fw-bold\">📰 Contenu Qualitatif</h4>
            <p class=\"text-muted small\">Analyses, actualités, découvertes et classiques.</p>
        </div>

        <div class=\"col-md-4 mb-3\">
            <h4 class=\"fw-bold\">🔥 Toujours à jour</h4>
            <p class=\"text-muted small\">Les dernières sorties et tendances du rap US.</p>
        </div>

    </div>
</section>


";
        // line 282
        yield "<section class=\"text-center mb-5\">
    <h3 class=\"fw-bold mb-3\">📩 Reste connecté</h3>
    <p class=\"text-muted\">Reçois les meilleurs articles directement dans ta boîte mail.</p>

    <a href=\"";
        // line 286
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("articles_view");
        yield "\" class=\"btn btn-secondary btn-lg\">
        Découvrir plus →
    </a>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  462 => 286,  456 => 282,  430 => 257,  383 => 211,  366 => 196,  361 => 193,  352 => 189,  350 => 188,  337 => 180,  331 => 177,  322 => 171,  317 => 169,  311 => 165,  306 => 164,  300 => 160,  294 => 155,  287 => 153,  285 => 152,  272 => 144,  266 => 141,  256 => 134,  250 => 130,  245 => 129,  239 => 125,  217 => 105,  203 => 94,  189 => 83,  175 => 72,  162 => 61,  125 => 26,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - OnlyBangers{% endblock %}

{% block body %}

<section class=\"onlybangers-hero rounded shadow-sm mb-5\">
    <br><br><br><br><br><br><br>
    <div class=\"hero-content d-flex flex-column justify-content-center align-items-center text-center\">

        <p class=\"lead mt-3 text-dark\">
            Les classiques du rap US, les nouveautés, et les analyses qui font vibrer la culture.
        </p>

        <a href=\"{{ path('articles_view') }}\" class=\"btn btn-secondary btn-lg mt-3\">
            Explorer les articles
        </a>
    </div>

</section>

<style>
.onlybangers-hero {
    height: 600px;
    border-radius: 12px;
    background: url('{{ asset(\"images/OB.png\") }}') center/cover no-repeat;
    position: relative;
    overflow: hidden;
    border: 3px solid #000;
}

.hero-content {
    height: 100%;
    width: 100%;
    padding: 40px 20px;
}

.onlybangers-hero h1,
.onlybangers-hero p {
    color: #000 !important;
    text-shadow: 0 0 6px rgba(255,255,255,0.8);
}

.onlybangers-hero .btn {
    font-weight: bold;
    box-shadow: 0 0 8px rgba(0,0,0,0.3);
}

/* Bordure noire pour sections */
.section-bordered {
    border: 3px solid #000;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
}
</style>



{# 🎧 GENRES / UNIVERS #}
<section class=\"mb-5 section-bordered\">
    <h2 class=\"fw-bold text-center mb-4\">🎧 Univers du Rap</h2>

    <div class=\"row text-center\">

        <div class=\"row text-center\">

   <div class=\"row text-center\">

    <div class=\"col-md-3 mb-3\">
        <div class=\"p-3 bg-dark text-white rounded shadow-sm h-100\">
            <img src=\"{{ asset('images/categories/oldschool.jpg') }}\"
                 alt=\"Old School\"
                 class=\"img-fluid mb-3\"
                 style=\"height:150px; object-fit:contain; width:100%; background:#000; border:none;\">
            <h4 class=\"fw-bold\">Old School</h4>
            <p class=\"text-muted small\">Les racines du rap US : 2Pac, Biggie, Nas...</p>
        </div>
    </div>

    <div class=\"col-md-3 mb-3\">
        <div class=\"p-3 bg-dark text-white rounded shadow-sm h-100\">
            <img src=\"{{ asset('images/categories/newwave.jpg') }}\"
                 alt=\"New Wave\"
                 class=\"img-fluid mb-3\"
                 style=\"height:150px; object-fit:contain; width:100%; background:#000; border:none;\">
            <h4 class=\"fw-bold\">New Wave</h4>
            <p class=\"text-muted small\">La nouvelle génération : Travis, Uzi, Carti...</p>
        </div>
    </div>

    <div class=\"col-md-3 mb-3\">
        <div class=\"p-3 bg-dark text-white rounded shadow-sm h-100\">
            <img src=\"{{ asset('images/categories/trap.jpg') }}\"
                 alt=\"Trap\"
                 class=\"img-fluid mb-3\"
                 style=\"height:150px; object-fit:contain; width:100%; background:#000; border:none;\">
            <h4 class=\"fw-bold\">Trap</h4>
            <p class=\"text-muted small\">Le son lourd d’Atlanta et Memphis.</p>
        </div>
    </div>

    <div class=\"col-md-3 mb-3\">
        <div class=\"p-3 bg-dark text-white rounded shadow-sm h-100\">
            <img src=\"{{ asset('images/categories/conscious.jpg') }}\"
                 alt=\"Conscious\"
                 class=\"img-fluid mb-3\"
                 style=\"height:150px; object-fit:contain; width:100%; background:#000; border:none;\">
            <h4 class=\"fw-bold\">Conscious</h4>
            <p class=\"text-muted small\">Le rap engagé : Kendrick, Cole, Joey Bada\$\$...</p>
        </div>
    </div>

</div>


</div>


    </div>
</section>


{# 🏆 TOP ARTICLES #}
<section class=\"mb-5 section-bordered\">
    <h2 class=\"fw-bold text-center mb-4\">🏆 Top Articles</h2>

    <div class=\"row\">
        {% for article in topArticles %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card bg-dark text-white shadow-sm border-0 h-100\">

                    <img 
                        src=\"{{ asset(article.image ? 'uploads/articles/' ~ article.image : 'images/article-default.jpg') }}\"
                        class=\"card-img-top rounded-top\"
                        style=\"height: 200px; object-fit: cover;\"
                    >

                    <div class=\"card-body text-center\">
                        <h5 class=\"fw-bold text-white\">
                            {{ article.title }}
                        </h5>

                        <a href=\"{{ path('article_show', {id: article.id}) }}\"
                           class=\"btn btn-outline-light btn-sm mt-2\">
                            Lire l'article
                        </a>
                    </div>

                </div>
            </div>
        {% else %}
            <p class=\"text-center text-muted\">Aucun article pour le moment.</p>
        {% endfor %}
    </div>
</section>


{# 📰 DERNIERS ARTICLES #}
<section class=\"mb-5 section-bordered\">
    <h2 class=\"mb-4 text-center fw-bold\">📰 Derniers articles</h2>

    <div class=\"row\">
        {% for article in articles %}
            <div class=\"col-md-3 mb-4\">
                <div class=\"card h-100 shadow-sm bg-dark text-white border-0\">

                    <img
                        src=\"{{ asset(article.image ? 'uploads/articles/' ~ article.image : 'images/article-default.jpg') }}\"
                        class=\"card-img-top rounded-top\"
                        alt=\"{{ article.title }}\"
                        style=\"height: 180px; object-fit: cover;\"
                    >

                    <div class=\"card-body text-center\">
                        <h5 class=\"card-title fw-bold text-white\">
                            {{ article.title }}
                        </h5>

                        <a href=\"{{ path('article_show', {'id': article.id}) }}\"
                           class=\"btn btn-outline-light btn-sm mt-2\">
                            Lire l'article
                        </a>
                    </div>

                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center\">
                <p class=\"text-muted\">Aucun article pour le moment.</p>
            </div>
        {% endfor %}
    </div>

    <div class=\"text-center mt-4\">
        <a href=\"{{ path('articles_view') }}\" class=\"btn btn-secondary btn-lg\">
            Voir tous les articles →
        </a>
    </div>
</section>
<style>
.section-bordered {
    border: 3px solid #000;
    border-radius: 12px;
    padding: 25px;
    box-shadow: 0 0 10px rgba(0,0,0,0.3);
}
</style>

{# 👑 ARTISTES EN TENDANCE #}
<section class=\"mb-5\">
    <h2 class=\"fw-bold text-center mb-4\">👑 Artistes en tendance</h2>

    <div class=\"row text-center\">

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>Drake</strong>
            </div>
        </div>

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>Kanye West</strong>
            </div>
        </div>

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>J.Cole</strong>
            </div>
        </div>

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>Playboi Carti</strong>
            </div>
        </div>

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>Travis Scott</strong>
            </div>
        </div>

        <div class=\"col-md-2 mb-3\">
            <div class=\"p-3 bg-dark text-white rounded shadow-sm\">
                <strong>Don Toliver</strong>
            </div>
        </div>

    </div>
</section>


{# ⭐ POURQUOI ONLYBANGERS ? #}
<section class=\"py-5 bg-dark text-white rounded shadow-sm mb-5\">
    <h2 class=\"fw-bold text-center mb-4\">⭐ Pourquoi OnlyBangers ?</h2>

    <div class=\"row text-center\">

        <div class=\"col-md-4 mb-3\">
            <h4 class=\"fw-bold\">🎤 Passion Rap</h4>
            <p class=\"text-muted small\">Un site créé par un passionné, pour les passionnés.</p>
        </div>

        <div class=\"col-md-4 mb-3\">
            <h4 class=\"fw-bold\">📰 Contenu Qualitatif</h4>
            <p class=\"text-muted small\">Analyses, actualités, découvertes et classiques.</p>
        </div>

        <div class=\"col-md-4 mb-3\">
            <h4 class=\"fw-bold\">🔥 Toujours à jour</h4>
            <p class=\"text-muted small\">Les dernières sorties et tendances du rap US.</p>
        </div>

    </div>
</section>


{# 📩 NEWSLETTER / CTA #}
<section class=\"text-center mb-5\">
    <h3 class=\"fw-bold mb-3\">📩 Reste connecté</h3>
    <p class=\"text-muted\">Reçois les meilleurs articles directement dans ta boîte mail.</p>

    <a href=\"{{ path('articles_view') }}\" class=\"btn btn-secondary btn-lg\">
        Découvrir plus →
    </a>
</section>

{% endblock %}
", "home/index.html.twig", "/Users/mouad/Documents/OnlyBangers/onlybangers-symfony/templates/home/index.html.twig");
    }
}
